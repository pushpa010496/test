<?php

namespace App\Http\Controllers\industryupdates;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Pressrelease;
use \DB;
use App\Models\SeoPage;
use App\Models\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class PressreleaseController extends HomeController
{
	protected $banners;
    public function index()
	{	
		 	
		 $pressreleases = Pressrelease::where('active_flag',1)->orderBy('date','desc')->select('url','title','date','img_title','short_description')->get()->take(30);		
		$banners = $this->banners;
		$data_count = Pressrelease::where('active_flag',1)->count();
		$this->seoTools(request()->segment(1)); 
		return view('pressreleases.index',compact('pressreleases','banners','data_count'));	
	}

	public function show($url)
	{
		$pressreleases = Pressrelease::where('url',$url)->where('active_flag',1)->orderBy('id','desc')->select('title','date','description','id')->first();
         if(empty($pressreleases)){
            return view('errors.404');
        }
		$banners = $this->banners;
		$this->seoToolsView($pressreleases->id); 
		return view('pressreleases.show',compact('pressreleases','banners'));	
	}

	public function more($offset){
		
		$data = Pressrelease::where('active_flag',1)->orderBy('id','desc')->offset($offset)->select('url','title','date','img_title','short_description')->limit(10)->get();
		return response(view('pressreleases.loadmore', compact('data'))->render());

	}

	 public function filter($month,$year){
	 	$pressreleases = Pressrelease::where('active_flag',1)->whereIn(DB::raw("Month(date)"), [$month])->whereIn(DB::raw("Year(date)"), [$year])->orderBy('id','desc')->select('url','title','date','img_title','short_description')->get()->take(10);
	 	$data_count = $pressreleases->count(); 
	 	$banners = $this->banners;
	 	return view('pressreleases.filter',compact('pressreleases','banners','data_count','month','year'));   
    }

     public function listpressreleasesFilter($month,$year,$offset){

         $data =Pressrelease::where('active_flag',1)->whereIn(DB::raw("Month(date)"), [$month])->whereIn(DB::raw("Year(date)"), [$year])->orderBy('id','desc')->offset($offset)->limit(10)->select('url','title','date','img_title','short_description')->get(); 
         return response(view('pressreleases.loadmore', compact('data'))->render());   

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

     //seo for view
    public function seoToolsView($id){
    	$data = Pressrelease::find($id);        
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
