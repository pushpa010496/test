<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Xmlpharse;
use SEOMeta;
use OpenGraph;
use Twitter;
use SEO;
use App\SeoPage;
use \DB;

class NewswireController extends HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $banners;
    public function index()
    {


         $banners = $this->banners;
        $newswires=Xmlpharse::take(10)->orderBy('pr_dt','desc')->get();
       
        $data_count = Xmlpharse::where('active_flag',1)->count();
        return view('newswires.index',compact('newswires','data_count','banners'));
    }

   
    public function show($news_url)
    {
        //
        $banners = $this->banners;
        $newswires = Xmlpharse::where('active_flag',1)->where('news_url',$news_url)->first();
       
        return view('newswires.newswires_show',compact('newswires','banners'));
    }
    public function more($offset){
        
        $data = Xmlpharse::where('active_flag',1)->orderBy('pr_dt','desc') ->offset($offset)->limit(10)->get();
        
        return response(view('newswires.loadmore', compact('data'))->render());

    }


     public function filter($month,$year){

        $newswires = Xmlpharse::where('active_flag',1)->where('issuer','PR Newswire')->whereIn(DB::raw("Month(pr_dt)"), [$month])->whereIn(DB::raw("Year(pr_dt)"), [$year])->orderBy('pr_dt','desc')->get()->take(10);
        $data_count = $newswires->count(); 
        $banners = $this->banners;
        return view('newswires.filter',compact('newswires','banners','data_count','month','year'));   
    }

     public function vienewswiresFilter($month,$year,$offset){

         $data =Xmlpharse::where('active_flag',1)->whereIn(DB::raw("Month(pr_dt)"), [$month])->whereIn(DB::raw("Year(pr_dt)"), [$year])->orderBy('pr_dt','desc')->offset($offset)->limit(10)->get(); 
         return response(view('newswires.loadmore', compact('data'))->render());   

    }

    

}
