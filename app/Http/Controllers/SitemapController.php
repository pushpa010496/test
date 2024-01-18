<?php

namespace App\Http\Controllers;

use Request;
use App\Company;
use App\CompanyProfile;
use App\Product;
use \DB;

use App\Page;
use App\Event;

use App\Category;


class SitemapController extends Controller
{
	
    public function index(){          
        /* $cat_list = Category::where('parent_id',22)->whereNotNull('slug')->get();
         $events = DB::table("events")->where('active_flag',1)->whereNotNull('event_url')->get();
         $projects = DB::table("projects")->where('active_flag',1)->whereNotNull('project_url')->get();
         $tenders = DB::table("tenders")->where('active_flag',1)->whereNotNull('tender_url')->get();
         $articles = DB::table("articles")->where('active_flag',1)->whereNotNull('article_url')->get();
         $interviews = DB::table("interviews")->where('active_flag',1)->whereNotNull('interviews_url')->get();
         $news = DB::table("news")->where('active_flag',1)->whereNotNull('news_url')->get();
         
         $pressreleases = DB::table("pressreleases")->whereNotNull('pressreleases_url')->get(); 
         $products =  Product::where('active_flag',1)->whereNotNull('company_id')->with('compprofile')->get();
          $suppliers = DB::table("company_profiles")->whereNotNull('url')->get();*/
         
         return response()->view('sitemaps.sitemap')->header('Content-Type', 'text/xml');
    }
    public function category(){
         $pages = Category::where('parent_id',22)->whereNotNull('slug')->get();
         return response()->view('sitemaps.category', compact('pages'))->header('Content-Type', 'text/xml');
    }
     public function categories($category){

         $cat = Category::where('slug',$category)->first();
        
         $pages = Category::where('parent_id',$cat->id)->whereNotNull('slug')->get();
         return response()->view('sitemaps.categories', compact('pages'))->header('Content-Type', 'text/xml');
    }

    public function events(){
      
        $pages =  Event::where('active_flag',1)->whereNotNull('event_url')->get();
       
        return response()->view('sitemaps.events', compact('pages'))->header('Content-Type', 'text/xml');
    }

    public function projects(){
        $pages = DB::table("projects")->whereNotNull('project_url')->get();
        return response()->view('sitemaps.projects', compact('pages'))->header('Content-Type', 'text/xml');
    }
    public function tenders(){
         $pages = DB::table("tenders")->whereNotNull('tender_url')->get();
         return response()->view('sitemaps.tenders', compact('pages'))->header('Content-Type', 'text/xml');
    }
    public function articles(){
          $pages = DB::table("articles")->whereNotNull('article_url')->get();
            return response()->view('sitemaps.articles', compact('pages'))->header('Content-Type', 'text/xml');
    }
    public function interviews(){
            $pages = DB::table("interviews")->whereNotNull('interviews_url')->get();
            return response()->view('sitemaps.interviews', compact('pages'))->header('Content-Type', 'text/xml');
    }
    public function news(){
           $pages = DB::table("news")->whereNotNull('news_url')->get();
           return response()->view('sitemaps.news', compact('pages'))->header('Content-Type', 'text/xml');
    }
    public function pressreleases(){
           $pages = DB::table("pressreleases")->whereNotNull('pressreleases_url')->get();
           return response()->view('sitemaps.pressreleases', compact('pages'))->header('Content-Type', 'text/xml');
    }
    public function whitepapers(){

          $cmp_id= DB::table('company_whitepapers')->where('active_flag',1)->whereNotNull('company_id')->pluck('company_id');
            $ids = collect($cmp_id->unique()->values()->all());
            
          $pages = CompanyProfile::whereIn('company_id',$ids)->get();
          
           return response()->view('sitemaps.whitepapers', compact('pages'))->header('Content-Type', 'text/xml');
    }
    
    public function catalogue(){
          $cmp_id= DB::table('company_catalogs')->where('active_flag',1)->whereNotNull('company_id')->pluck('company_id');
            $ids = collect($cmp_id->unique()->values()->all());
            
          $pages = CompanyProfile::whereIn('company_id',$ids)->get();
          
           return response()->view('sitemaps.catalogue', compact('pages'))->header('Content-Type', 'text/xml');
    }

     public function products(){

          $pages =  Product::where('active_flag',1)->whereNotNull('company_id')->with('compprofile')->get();

           return response()->view('sitemaps.products', compact('pages'))->header('Content-Type', 'text/xml');
    }
  
   public function suppliers(){
           $pages = DB::table("company_profiles")->whereNotNull('url')->get();
           return response()->view('sitemaps.suppliers', compact('pages'))->header('Content-Type', 'text/xml');
    }
      public function videos(){
          $cmp_id= DB::table('company_videos')->where('active_flag',1)->whereNotNull('company_id')->pluck('company_id');
            $ids = collect($cmp_id->unique()->values()->all());
            
          $pages = CompanyProfile::whereIn('company_id',$ids)->get();
          
           return response()->view('sitemaps.videos', compact('pages'))->header('Content-Type', 'text/xml');
    }

}
