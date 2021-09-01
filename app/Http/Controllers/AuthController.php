<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use smasif\ShurjopayLaravelPackage\ShurjopayService;

class AuthController extends Controller
{
    public function verifyUsers(Request $request){
        try{
            if($request->login == "login"){
                $email = $request->email;
                $password = $request->password;
                $rows = DB::table('users')
                    ->where('email', $email)
                    ->get()->count();
                if ($rows > 0) {
                    $rows = DB::table('users')
                        ->where('email', $email)
                        ->first();
                    if (Hash::check($password, $rows->password)) {
                        $role = $rows->role;
                        Session::put('user_info', $rows);
                        Cookie::queue('user_id', $rows->id, time()+31556926 ,'/');
                        Cookie::queue('role', $rows->role, time()+31556926 ,'/');
                        Cookie::queue('user_name', $rows->name, time()+31556926 ,'/');

                        if($role == 1){
                            Cookie::queue('admin', $rows->id, time()+31556926 ,'/');
                            return redirect()->to('/home');
                        }
                        if($role == 2){
                            Cookie::queue('user', $rows->id, time()+31556926 ,'/');
                            Cookie::queue('user_email', $rows->email, time() + 31556926, '/');
                            return redirect()->to('/shop');
                        }
                        else{
                            return redirect()->to('login');
                        }
                    }
                    else{
                        return back()->with('errorMessage', 'Incorrect Password!!');
                    }
                } else {
                    return back()->with('errorMessage', 'User Not Exits!!');
                }
            }
            else{
                return back()->with('errorMessage', 'Please Fill Up The Form');
            }
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function logout(){
        Cookie::queue(Cookie::forget('user','/'));
        Cookie::queue(Cookie::forget('role','/'));
        Cookie::queue(Cookie::forget('user_name','/'));
        Cookie::queue(Cookie::forget('user_id','/'));
        Cookie::queue(Cookie::forget('user_email','/'));
        session()->forget('user_info');
        session()->flush();
        return redirect()->to('/');
    }
    public function payment(Request $request){
        try {
            if($request->iscook) {
                $rows = DB::table('users')
                    ->where('email', Cookie::get('user_email'))
                    ->first();
                Cookie::queue('user_email', $rows->email, time() + 31556926, '/');
            }
            else {
                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                ]);
                if ($validator->fails()) {
                    return back()->with('errorMessage', 'Please Fill Up The Form');
                }
                $rows = DB::table('users')
                    ->where('email', $request->email)
                    ->first();
                if ($rows) {
                    return back()->with('errorMessage', 'Email is exit. Please try another.');
                }
                else {
                    $result = DB::table('users')->insert([
                        'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'password' => Hash::make($request->password),
                        'role' => 2,
                    ]);
                    $rows = DB::table('users')
                        ->where('email', $request->email)
                        ->first();
                    Cookie::queue('user_id', $rows->id, time() + 31556926, '/');
                    Cookie::queue('user_email', $rows->email, time() + 31556926, '/');
                }
            }
            $shurjopay_service = new ShurjopayService();
            $tx_id = $shurjopay_service->generateTxId();
            $project = DB::table('projects')
                ->where('id', $request->id)
                ->first();
            if (@$project->discount && @$project->pos)
                $price = ceil($project->price + $project->domain + $project->hosting + $project->pos - (($project->price + $project->domain + $project->hosting + $project->pos) * ($project->discount / 100)));
            elseif (@$project->pos)
                $price = $project->price + $project->domain + $project->hosting + $project->pos;
            else
                $price = $project->price + $project->domain + $project->hosting;
            Session::put('product', $request->id);
            $success_route = 'confirmPaymentData';
            $shurjopay_service->sendPayment($price, $success_route);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function confirmPaymentData (Request $request) {
        try{
            $status = $request->status;
            $type = 'Software Sale';
            $msg = $request->msg;
            $tx_id = $request->tx_id;
            $bank_tx_id = $request->bank_tx_id;
            $amount = $request->amount;
            $bank_status = $request->bank_status;
            $sp_code = $request->sp_code;
            $sp_code_des = $request->sp_code_des;
            $sp_payment_option = $request->sp_payment_option;
            $date = date('Y-m-d');
            if($status == 'Failed'){
                return redirect('shop')->with('errorMessage', 'Please try Again');;
                return back()->with('errorMessage', 'Please try Again');
            }
            else {
                $result = DB::table('payment_info')->insert([
                    'user_id' => Cookie::get('user_id'),
                    'status' => $status,
                    'type' => $type,
                    'msg' => $msg,
                    'tx_id' => $tx_id,
                    'bank_tx_id' => $bank_tx_id,
                    'amount' => $amount,
                    'bank_status' => $bank_status,
                    'sp_code' => $sp_code,
                    'sp_code_des' => $sp_code_des,
                    'sp_payment_option' => $sp_payment_option,
                ]);
                if ($result) {
                    $rows = DB::table('users')
                        ->where('email',  Cookie::queue('user_email'))
                        ->first();
                    $project= DB::table('projects')
                        ->where('id',Session::get('product'))
                        ->first();
                    if(@$project->discount && @$project->pos)
                        $price = ceil($project->price + $project->domain + $project->hosting + $project->pos - (($project->price + $project->domain + $project->hosting + $project->pos)*($project->discount/100)));
                    elseif(@$project->pos)
                        $price = $project->price + $project->domain + $project->hosting+ $project->pos;
                    else
                        $price = $project->price + $project->domain + $project->hosting;
                    $result = DB::table('orders')->insert([
                        'order_id' => $tx_id,
                        'name' => $rows->name,
                        'email' => $rows->email,
                        'phone' => $rows->phone,
                        'product_id' =>Session::get('product'),
                        'date' => Date('Y-m-d'),
                        'price' => $price,
                    ]);
                    if ($result) {
                        return redirect()->to('myOrders')->with('successMessage', 'Orders Successfully Done.');
                    } else {
                        return back()->with('errorMessage', 'Please Try Again.');
                    }
                } else {
                    return back()->with('errorMessage', 'Please Try Again.');
                }
            }
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
}
