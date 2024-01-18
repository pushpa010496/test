<?php

namespace App\Http\Controllers\knowledgebank;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Interview;
use App\SeoPage;
use App\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class InterviewsController extends HomeController
{
	protected $banners;
    public function index()
	{	
		$interviews = Interview::where('active_flag',1)->orderBy('id','desc')->select('url','title_tag','title','designation','name','description')->get()->take(10);		
		$banners = $this->banners;
		$data_count = Interview::where('active_flag',1)->count();
		$this->seoTools(request()->segment(1));  
		return view('knowledgebank.interviews.index',compact('interviews','banners','data_count'));	
	}

	public function show($url)
	{	
		$interviews = Interview::where('url',$url)->where('active_flag',1)->orderBy('id','desc')->select('photo','title_tag','alt_tag','title','designation','name','description','quest_answer','id')->first();
         if(empty($interviews)){
            return view('errors.404');
        }
		$banners = $this->banners;
		$this->seoToolsView($interviews->id);  
		return view('knowledgebank.interviews.show',compact('interviews','banners'));	
	}

	public function more($offset){

		 $data = Interview::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('url','title_tag','title','designation','name','description')->get();
		 return response(view('knowledgebank.interviews.loadmore', compact('data'))->render());

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
    
    	$data = Interview::find($id);        
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
