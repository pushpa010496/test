<?php
namespace App\Http\Controllers;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\Product;
use App\Company;
use App\Form;
use Auth;
use Illuminate\Http\Request;
use \Session;
use \DB;
use \Mail;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\SeoPage;
use App\Category;
use App\Whitepaper;
use App\Interview;
use App\News;
use App\Article;

class AutoCompleteController  extends Controller
{
     protected $model;
     public function __construct(Form $model)
     {
      $this->model = $model;
            //$this->middleware('auth');
    }
    public function autoComplete(Request $request)
    {
        $query = $request->get('term','');

        $products=Product::where('title','LIKE','%'.$query.'%')->get();

        $companies = Company::where('comp_name','LIKE','%'.$query.'%')->get();

        $categories = Category::where('name','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($products as $product) {
          $data[]=['value'=>$product->title];
        }
        foreach ($companies as $company) {
          $data[]=['value'=>$company->comp_name];
        }
        foreach ($categories as $category) {
          $data[]=['value'=>$category->name];
        }
        if(count($data))
         return $data;
       else
        return ['value'=>'No Result Found','id'=>''];
    }

    public function Alphabets($data){
      $query = $data;
     

        $products=Product::where('title','LIKE',$query.'%')->paginate(null, null, null, 1);
        // $data=array();
        // foreach ($products as $product) {
        //   $data[]=['value'=>$product->title];
        // }

        return view('alpha.alpha',compact('products'))->render();

    } 

     public function Alpha(){
            info('yhjuk');
     return view('alpha.index');

    }  


}