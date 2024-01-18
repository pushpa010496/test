<?php

namespace App\Http\Controllers\knowledgebank;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\BookShelf;
use App\Models\SeoPage;
use App\Models\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;


class BookshelfController extends HomeController
{
     public function index()
	{	
	 	$data = BookShelf::where('active_flag',1)->orderBy('id','desc')->select('bookshelf_image','url','title_tag','alt_tag','title')->get();		
		$banners = $this->banners;
		$this->seoTools(request()->segment(1)); 
		return view('knowledgebank.bookshelf.index',compact('data','banners'));	
	}

	public function show($url)
	{	
		 $data = BookShelf::where('url',$url)->where('active_flag',1)->orderBy('id','desc')->select('bookshelf_image','url','title_tag','alt_tag','title','id','no_pages','publisher','publisher_date','authors','description')->first();
		 if(empty($data)){
            return view('errors.404');
        }
		$banners = $this->banners;
        $this->seoToolsView($data->id); 
		return view('knowledgebank.bookshelf.show',compact('data','banners'));	
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
    
        $data = BookShelf::find($id);        
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
