<?php

namespace App\Http\Controllers\advertise;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\AdPrint;
use App\Models\Online;
use App\Models\TargetMarket;
use App\Models\TargetAudience;
use App\Models\TechSpace;
use App\Models\Term;
use App\Models\Advertiser;
use App\Models\Newsletter;
use App\Models\SeoPage;
use App\Models\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class AdvertiseController extends HomeController
{

	public function print()
	{ 		

		$data =  AdPrint::where('active_flag',1)->select('description')->first();	

		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.print' ,compact('data','banners'));

	} 

	public function online()
	{ 		

		$data =  Online::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.online' ,compact('data','banners'));

	} 

	public function targetMarket()
	{ 		
		$data =  TargetMarket::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.target_market' ,compact('data','banners'));

	} 

	public function targetAudience()
	{ 		
		$data =  TargetAudience::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.target_audience' ,compact('data','banners'));

	} 

	public function techSpecs()
	{ 		
		$data =  TechSpace::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.tech_specs' ,compact('data','banners'));

	} 

	public function terms()
	{ 		
		$data =  Term::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.terms' ,compact('data','banners'));

	} 
	public function clients()
	{ 		
		$data =  Advertiser::where('active_flag',1)->orderBy('id','desc')->select('image','alt_tag')->get();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.clients' ,compact('data','banners'));

	} 

	public function eNewsletter()
	{ 				
		$data =  Newsletter::where('active_flag',1)->where('type','e-newsletter')->orderBy('id','desc')->first();	
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('enewsletter.index' ,compact('data','banners'));

	} 

	public function eNewsletterArchives()
	{ 				
		 $data =  Newsletter::where('active_flag',1)->where('type','e-newsletter')->orderBy('id','desc')->get();	
	 
		$banners = $this->banners;  
		// $this->seoTools(request()->segment(1)); 
		return view('enewsletter.archives' ,compact('data','banners'));

	} 

	public function emailblast()
	{ 		
		 $this->time = \Carbon\Carbon::now()->format('Y'); 
		
		 $data =  Newsletter::where('active_flag',1)->where('type','clientemailblast')->orderBy('id','desc')->get();
		 //dd($data);	
	 	
		$banners = $this->banners;  
		// $this->seoTools(request()->segment(1)); 
		return view('enewsletter.emailblast' ,compact('data','banners'));

	} 

	public function emailblastArchives()
	{ 				
		 $data =  Newsletter::where('active_flag',1)->where('type','clientemailblast')->orderBy('id','desc')->get();	

		$banners = $this->banners;  
		// $this->seoTools(request()->segment(1)); 
		return view('enewsletter.emailblast-archives' ,compact('data','banners'));

	} 

	public function seoTools($page){
        $page = Page::where('title',$page)->first();
        $data = SeoPage::where('page_id',$page->id)->first();        
        SEOMeta::setTitle($data->meta_title);
        SEOMeta::setDescription($data->meta_description);
        SEOMeta::addMeta('Project:published_time', $data->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword($data->meta_keywords);
        OpenGraph::setDescription($data->og_description);
        OpenGraph::setTitle($data->og_title);
        OpenGraph::setUrl(url()->current());
        SEOMeta::setCanonical(url()->current());
        OpenGraph::addProperty('keyword', $data->og_keywords);
        OpenGraph::addProperty('type', 'Project');
        OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
        OpenGraph::addImage([$data->og_image, 'size' => 300]);

    }

}
