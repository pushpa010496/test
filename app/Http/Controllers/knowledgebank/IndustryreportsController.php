<?php

namespace App\Http\Controllers\knowledgebank;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\IndustryReport;
use App\SeoPage;
use App\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class IndustryreportsController extends HomeController
{
	protected $banners;
	public function index()
	{	
        
		$industryreports = IndustryReport::where('active_flag',1)->orderBy('id','desc')->select('url','title1','title2','title_tag','short_description')->get()->take(10);
		$banners = $this->banners;
		$data_count = IndustryReport::where('active_flag',1)->count();
		$this->seoTools(request()->segment(1));  
		return view('knowledgebank.industryreport.index',compact('industryreports','banners','data_count'));	
	}

	public function show($url)
	{	
		$industryreports = IndustryReport::where('url',$url)->where('active_flag',1)->orderBy('id','desc')->select('title1','title2','full_report','id')->first();
         if(empty($industryreports)){
            return view('errors.404');
        }
		$banners = $this->banners;
		$this->seoToolsView($industryreports->id); 
		return view('knowledgebank.industryreport.show',compact('industryreports','banners'));	
	}

	public function more($offset){

		$data = IndustryReport::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('url','title1','title2','title_tag','short_description')->get();
		return response(view('knowledgebank.industryreport.loadmore', compact('data'))->render());

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
    
    	$data = IndustryReport::find($id);        
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
