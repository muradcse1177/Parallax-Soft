<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Share;

class WebsiteController extends Controller
{
    public function index(){
        try{
            SEOMeta::setTitle('Home || Parallax Soft Inc');
            SEOMeta::setDescription('Parallax Soft Inc is the 0ne of the best Software Company . We are providing a best software solution for your business.We provide custom mobile, web and desktop software development services all over the world');
            SEOMeta::addKeyword(['cyber','bangladesh','web developer','web designer','it company','web builder','website builder','Domain & Hosting Company','It consulting Company','Cloud Computing Company BD','App developer Company Bd','wesite developer company in bd','Ecommerce site builder in bd' ]);
            $info= DB::table('company_info')->first();
            $services = DB::table('services')->orderBy('id','desc')->get();
            $projects = DB::table('projects')->orderBy('id','desc')->take(20)->get();
            $clients = DB::table('clients')->orderBy('id','desc')->take(20)->get();
            return view('website.index',
                ['info' => $info,'services' => $services,'projects' => $projects,'clients' => $clients,]
            );
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function about(){
        try{
            SEOMeta::setTitle('About || Parallax Soft Inc');
            SEOMeta::setDescription('Parallax Soft Inc is the 0ne of the best Software Company . We are providing a best software solution for your business.We provide custom mobile, web and desktop software development services all over the world');
            SEOMeta::addKeyword(['cyber','bangladesh','web developer','web designer','it company','web builder','website builder','Domain & Hosting Company','It consulting Company','Cloud Computing Company BD','App developer Company Bd','wesite developer company in bd','Ecommerce site builder in bd' ]);
            $info= DB::table('company_info')->first();
            $services = DB::table('services')->orderBy('id','desc')->get();
            $clients = DB::table('clients')->orderBy('id','desc')->take(20)->get();
            return view('website.about',
                [ 'info' => $info,'services' => $services,'clients' => $clients,]
            );
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function productdetails($slug){
        try{
            $rows= DB::table('projects')
                ->where('slug',$slug)
                ->first();
            //dd($rows);
            $key = ''.$rows->seo_keyword.'';
            SEOMeta::setTitle($rows->seo_title);
            SEOMeta::setDescription($rows->seo_description);
            SEOMeta::addKeyword([$key]);

            $projects = DB::table('projects')->orderBy('id','desc')->paginate(20);
            return view('website.product-details',
                ['project' => $rows,'projects' => $projects,]
            );
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function checkout($slug){
        try{
            SEOMeta::setTitle('Checkout || Parallax Soft Inc');
            SEOMeta::setDescription('Parallax Soft Inc is the 0ne of the best Software Company . We are providing a best software solution for your business.We provide custom mobile, web and desktop software development services all over the world');
            SEOMeta::addKeyword(['cyber','bangladesh','web developer','web designer','it company','web builder','website builder','Domain & Hosting Company','It consulting Company','Cloud Computing Company BD','App developer Company Bd','wesite developer company in bd','Ecommerce site builder in bd' ]);

            $rows= DB::table('projects')
                ->where('slug',$slug)
                ->first();
            return view('website.checkout',
                ['project' => $rows,]
            );
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function myOrders(){
        try{
            SEOMeta::setTitle('My Orders || Parallax Soft Inc');
            SEOMeta::setDescription('Parallax Soft Inc is the 0ne of the best Software Company . We are providing a best software solution for your business.We provide custom mobile, web and desktop software development services all over the world');
            SEOMeta::addKeyword(['cyber','bangladesh','web developer','web designer','it company','web builder','website builder','Domain & Hosting Company','It consulting Company','Cloud Computing Company BD','App developer Company Bd','wesite developer company in bd','Ecommerce site builder in bd' ]);
            $rows= DB::table('orders')
                ->select('*','orders.price as o_price')
                ->join('projects','projects.id','orders.product_id')
                ->where('orders.email',Cookie::get('user_email'))
                ->paginate(50);
            return view('website.myOrders', ['orders' => $rows]);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function allProjects(Request $request){
        try{
            SEOMeta::setTitle('Checkout || Parallax Soft Inc');
            SEOMeta::setDescription('Parallax Soft Inc is the 0ne of the best Software Company . We are providing a best software solution for your business.We provide custom mobile, web and desktop software development services all over the world');
            SEOMeta::addKeyword(['cyber','bangladesh','web developer','web designer','it company','web builder','website builder','Domain & Hosting Company','It consulting Company','Cloud Computing Company BD','App developer Company Bd','wesite developer company in bd','Ecommerce site builder in bd' ]);

            $type = DB::table('projects')->select('type')->groupBy('type')->get();
            $projects = DB::table('projects')->orderBy('id','desc')->paginate(36);
            return view('website.allProjects',
                ['projects' => $projects,'types' => $type ]
            );
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function contact(Request $request){
        try{
            SEOMeta::setTitle('Contact || Parallax Soft Inc');
            SEOMeta::setDescription('Parallax Soft Inc is the 0ne of the best Software Company . We are providing a best software solution for your business.We provide custom mobile, web and desktop software development services all over the world');
            SEOMeta::addKeyword(['cyber','bangladesh','web developer','web designer','it company','web builder','website builder','Domain & Hosting Company','It consulting Company','Cloud Computing Company BD','App developer Company Bd','wesite developer company in bd','Ecommerce site builder in bd' ]);

            $info= DB::table('company_info')->first();
            return view('website.contact',
                ['info' => $info]
            );
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }

    public function allServices(Request $request){
        try{
            SEOMeta::setTitle('Services || Parallax Soft Inc');
            SEOMeta::setDescription('Parallax Soft Inc is the 0ne of the best Software Company . We are providing a best software solution for your business.We provide custom mobile, web and desktop software development services all over the world');
            SEOMeta::addKeyword(['cyber','bangladesh','web developer','web designer','it company','web builder','website builder','Domain & Hosting Company','It consulting Company','Cloud Computing Company BD','App developer Company Bd','wesite developer company in bd','Ecommerce site builder in bd' ]);
            $info= DB::table('company_info')->first();
            $services = DB::table('services')->orderBy('id','desc')->get();
            $clients = DB::table('clients')->orderBy('id','desc')->take(20)->get();

            return view('website.allServices',
                [ 'info' => $info,'services' => $services,'clients' => $clients,]
            );
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function serviceDetails($slug){
        try{
            SEOMeta::setTitle('Service-Details || Parallax Soft Inc');
            SEOMeta::setDescription('Parallax Soft Inc is the 0ne of the best Software Company . We are providing a best software solution for your business.We provide custom mobile, web and desktop software development services all over the world');
            SEOMeta::addKeyword(['cyber','bangladesh','web developer','web designer','it company','web builder','website builder','Domain & Hosting Company','It consulting Company','Cloud Computing Company BD','App developer Company Bd','wesite developer company in bd','Ecommerce site builder in bd' ]);
            $services = DB::table('services')->orderBy('id','desc')->get();
            $service = DB::table('services')->where('slug',$slug)->first();
            return view('website.service-details',
                ['service' => $service, 'services' => $services]
            );
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function client(Request $request){
        try{
            SEOMeta::setTitle('Clients || Parallax Soft Inc');
            SEOMeta::setDescription('Parallax Soft Inc is the 0ne of the best Software Company . We are providing a best software solution for your business.We provide custom mobile, web and desktop software development services all over the world');
            SEOMeta::addKeyword(['cyber','bangladesh','web developer','web designer','it company','web builder','website builder','Domain & Hosting Company','It consulting Company','Cloud Computing Company BD','App developer Company Bd','wesite developer company in bd','Ecommerce site builder in bd' ]);

            $services = DB::table('services')->orderBy('id','desc')->get();
            $clients = DB::table('clients')->orderBy('id','desc')->paginate(60);

            return view('website.clients',
                ['services' => $services, 'clients' => $clients]
            );
        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
    public function sendMail(Request $request){
        try{

            $result = DB::table('received_email')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'msg' => $request->message,
            ]);
            if ($result) {
                return back()->with('successMessage', 'Contact With Parallax Soft Inc. Successfully Done.');
            } else {
                return back()->with('errorMessage', 'Please Try Again.');
            }

        }
        catch(\Illuminate\Database\QueryException $ex){
            return back()->with('errorMessage', $ex->getMessage());
        }
    }
}
