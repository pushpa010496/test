<?php

namespace App\Http\Controllers\industryupdates;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Report;

class ReportsController extends HomeController
{
    //
    public function index()
	{	
      
		
		 $time = \Carbon\Carbon::now()->format('Y-m-d');   

		 $data = Report::where('active_flag',1)->orderBy('id','desc')->limit(10)->select('title','publication_date','short_description','report_url')->get();
		$banners = $this->banners;
        $data_count = Report::where('active_flag',1)->count(); 

        // $this->seoTools(request()->segment(1)); 
		return view('reports.index',compact('data','banners','data_count'));	
	}
	public function show($url)
	{			
		
		$data = Report::where('report_url',$url)->where('active_flag',1)->orderBy('id','desc')->select('created_at','publication_date','summary','report_url')->first();
		 if(empty($data)){
            return view('errors.404');
        }
		$banners = $this->banners;
         // $this->seoToolsView($news->id); 
		return view('reports.show',compact('data','banners'));	
	}

	public function more($offset){

		$data = Report::where('active_flag',1)->orderBy('id','asc')->offset($offset)->limit(10)->select('title','publication_date','short_description','report_url')->get();
		return response(view('reports.loadmore', compact('data'))->render());

	}

}
