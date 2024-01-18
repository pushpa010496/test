@extends('../layouts/app')
@section('style')
<style>
/*chat*/
.b-agent-demo .b-agent-demo_result{
  top:82px !important;
}
.b-agent-demo .b-agent-demo_powered_by{
  display: none !important;
}

/*chat loader*/
.m-t-10 {
    margin-top: 10px !important;
}



</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/jquery.ui.autocomplete.css">
@endsection
@section('content')


<div role="main" class="bg-white">

  <div class="container-fluid">
    <!-- // Slider --> 
    <div class="row div-shadow">
      <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <li data-target="#slider" data-slide-to="1"></li>
          <li data-target="#slider" data-slide-to="2"></li>
          <li data-target="#slider" data-slide-to="3"></li>
          <!-- <li data-target="#slider" data-slide-to="4"></li>
          <li data-target="#slider" data-slide-to="5"></li>
          <li data-target="#slider" data-slide-to="6"></li> -->
        </ol>
              <div class="carousel-inner border-top">  
                <?php $i=1; ?>
                @foreach($sliders as $homesliders)

                @if($i==1)
                
                <div class="carousel-item active">
                  <a href="{{$homesliders->url}}" target="_blank" title="{{$homesliders->title}}">
                    <img class="img-fluid" src="{{ config('app.url') }}slider/{{$homesliders->image}}" alt="{{$homesliders->title}}" />
                  </a>
                </div>
                @else
                <div class="carousel-item">
                  <a href="{{$homesliders->url}}" target="_blank" title="{{$homesliders->title}}">
                    <img class="img-fluid" src="{{ config('app.url') }}slider/{{ $homesliders->image }}" alt="{{$homesliders->title}}" />
                  </a>
                </div>
                @endif
                <?php $i++; ?>
                @endforeach
              </div>
            </div>
          </div>
          <!-- Slider // --> 
        </div>
 <!-- Prime Banner -->

<div class="container">
        <div class="row">
          @php
          $count =0;
          foreach($banner1314 as $banner){            
          if ($banner->positions[0]->id == 13 and $banner->pagesCount[0]->id == 1) {
          $count++; 
        }
      }   
      @endphp


      @if($count == 1)

      <?php $column=12 ?>             
      @else
      <?php $column=6 ?>
      @endif
      @foreach($banner1314 as $k=>$homebanner12)           


      @if($homebanner12->positions[0]->id == 13 and $homebanner12->pagesCount[0]->id == 1)

      <div class="col-lg-<?php echo $column ?> text-center mt-4 mb-2">


        @if($homebanner12->type == 'swf')


        <!-- <a href="{{$homebanner12->url}}" target="_blank" title="{{$homebanner12->title}}">
          <param name="movie" value="https://industry.defence-industries.com/slider/1530957776-marshall-banner.swf"></param>
          <param name="flashvars" value="src=http%3A%2F%2Fwww.domain.com%2Fvideo%2Ftest%2Fhttps://industry.defence-industries.com/slider/1530957776-marshall-banner.swf"></param>
          <param name="allowFullScreen" value="true"></param>
          <param name="allowscriptaccess" value="always"></param>
          <param name="autoPlay" value="true"></param>

          <embed class="div-shadow" src="https://industry.defence-industries.com/slider/1530957776-marshall-banner.swf"
          type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" autoPlay="true"
          width="728" height="90" flashvars="src=http%3A%2F%2Fwww.domain.com%2Fvideo%2Ftest%2Fhttps://industry.defence-industries.com/slider/1530957776-marshall-banner.swf">
          </embed>
          </object>
          <i style="display:block; height: 410px;left:195px; width: 720px;  position: relative; z-index: 9; margin-top: -410px;"></i>
      </a> -->

 

      @else
      <a href="{{$homebanner12->url}}" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="" />
      </a>
      @endif


  </div>            
  @else

  @endif  

  @endforeach
</div>
</div>
  <!-- prime banner-->


<!-- Prime Banner end -->

        <div class="p-4"></div>

        <!-- // MAIN SEARCH -->
        <div class="col-md-6 offset-md-3" id="main-search">
          <!-- <div class="text-center mb-3">
            <h2 class="main-heading text-capitalize">search products, suppliers, manufacturers</h2>
          </div> -->
          {{Form::open(['url' => 'search'])}}
          <div class="input-group input-group-lg">
            <input type="text" name="q" class="form-control" id="autoComplete" required placeholder="Search Products & Manufacturers...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i></button>
              </span>
            </div>
            {{Form::close()}}
          </div>
          <!-- MAIN SEARCH // -->

          <div class="pt-5"></div>


          <!-- // Categories -->
          <div class="container">
            <div class="panel-group row" id="accordion">

              <div class="col-lg-6">


                {{-- new --}}
              <!--  <div class="row">
                  @php $j = 1; @endphp
                  @foreach($categories[0]['child'] as $category)
                    <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">                
                        <h2 class="panel-title">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#TEST_{{$j}}" aria-expanded="false" contenteditable="false">{{$category['name']}}</a>
                        </h2>
                      </div>
                      <div id="TEST_{{$j}}" class="panel-collapse collapse" aria-expanded="false">
                     
                       @if($category['child'])
                       <div class="panel-body" style="">
                         @foreach($category['child'] as $child)                       
                         <?php 
                         $count = DB::table('products')->where('category_id',$child['id'])->count();
                         ?>
                         <a href="{{url('categories')}}{{'/'.$child['slug']}}"> 
                          <p>{{ucwords(strtolower($child['name']))}} </p></a>
                          @endforeach
                        </div>
                        @endif
                      </div>
                  </div>
                    </div>
                    @php $j = $j+1; @endphp
                    @endforeach
                
                </div> -->
                
                {{-- new --}}

                <?php $cat = ordercatfirst(22);?>
                <?php $i=1; ?>
                @foreach($cat as $val)
                <div class="panel panel-default">
                  <div class="panel-heading">                
                    <h2 class="panel-title">
                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#TEST_{{$i}}" aria-expanded="false" contenteditable="false">{{$val['name']}}</a>
                    </h2>

                  </div>
                  <div id="TEST_{{$i}}" class="panel-collapse collapse" aria-expanded="false">
                   <?php $childs = getcat($val['id']);?>
                   @if(@$childs)
                   <div class="panel-body">
                     @foreach($childs as $child)                       
                     <?php 
                     $count = DB::table('products')->where('category_id',$child['id'])->count();
                     ?>
                     <a href="{{url('categories')}}{{'/'.$child->slug}}"> 
                      <p>{{ucwords(strtolower($child['name']))}} </p>
                    </a>
                    @endforeach
                  </div>
                  @endif
                </div>
              </div>
              <?php $i=$i+1; ?>
              @endforeach
            </div>

            <div class="col-lg-6">  
              <?php $cat = ordercatsecond(22);?>
              <?php $i=11; ?>
              @foreach($cat as $val)
              <div class="panel panel-default">
                <div class="panel-heading">                
                  <h2 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#TEST_{{$i}}" aria-expanded="false" contenteditable="false">{{$val['name']}}</a>
                  </h2>

                </div>
                <div id="TEST_{{$i}}" class="panel-collapse collapse" aria-expanded="false">
                 <?php $childs = getcat($val['id']);?>
                 @if(@$childs)
                 <div class="panel-body" style="">
                   @foreach($childs as $child)                       
                   <?php 
                   $count = DB::table('products')->where('category_id',$child['id'])->count();
                   ?>
                   <a href="{{url('categories')}}{{'/'.$child->slug}}"> 
                    <p>{{ucwords(strtolower($child['name']))}} </p></a>
                    @endforeach
                  </div>
                  @endif
                </div>
              </div>
              <?php $i=$i+1; ?>
              @endforeach
              <!-- <a class="btn btn-primary btn-radius text-white btn-block" href="{{url('/get-listed')}}" role="button">Get Started</a> -->
            </div>
          </div>
        </div>
        <!-- Categories // -->   

      </div> 


      <div class="pb-1"></div>

      <div class="container">
        <div class="row">  
          <div class="col-lg-9">
            <!-- // Products -->                     
            <div class="home-title">
              <h2><span>Products</span></h2>
            </div>

            <div class="col-lg-12 bg-gray nav-cust border border-secondary pt-3 pb-3">    
              <div class="owl_products owl-carousel owl-theme">
                <?php // print_r($products); ?>
                @foreach($products as $cp)
                @php $company_logo = App\Company::where('id',$cp->company_id)->select('id','comp_logo')->get(); 
                @endphp
                @foreach($company_logo as $com_logo)
                <div class="item bg-white shadow">
                  <div class="product">
                    <div id="prodimage{{$cp->id}}">
                      <a href="{{url('products/'.@$cp->compprofile->url.'/'.$cp->url)}}">
                        <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cp->small_image}}" alt="{{$cp->alt_tag}}"/>
                      </a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pt-2" style="min-height: 46px;max-height: 46px;overflow: hidden;">
                      <h2 class="small text-center">
                        <a href="{{url('products/'.@$cp->compprofile->url.'/'.@ $cp->url)}}" class="text-secondary font-weight-bold">{{$cp->title}}</a>
                      </h2>
                    </div>

                    <div class="pb-2 pt-2">                        
                      <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/'.$com_logo->comp_logo}}" alt="{{$cp->alt_tag}}" width="100" />
                    </div>
                  </div>
                </div>
                @endforeach
                @endforeach
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- Products // -->

            <div class="pt-2"></div>

            <!-- // Latest Partnered Companies -->
            <div class="home-title">
              <h2><span>Latest Partnered Companies</span></h2>
            </div>

            <div class="col-lg-12 bg-gray nav-cust border border-secondary pt-3 pb-3"> 

              @php 
              $i;
              $partner_count = count($clientele);
              @endphp

              <div class="owl-carousel owl_carousel_latest owl-theme">
                @for($i=0; $i<$partner_count; $i++)
                @php
                $j= $i+1;
                @endphp
                <div class="item">
                <a href="{{url('suppliers/'.@$clientele[$i]->companyprofile[0]->url)}}">
                  <img src="{{ config('app.url')}}suppliers/{{ str_slug($clientele[$i]->comp_name) }}/{{ $clientele[$i]->comp_logo }}" class="img-fluid mt-2 div-shadow">
              
                 <img class="countryflag" src="{{ config('app.url')}}img/flags/{{ str_replace(' ', '_', $clientele[$i]->country) }}.png" alt="{{ $clientele[$i]->country }}">
                </a>

                  <a href="{{url('suppliers/'.@$clientele[$j]->companyprofile[0]->url)}}">
                  <img src="{{ config('app.url')}}suppliers/{{ str_slug($clientele[$j]->comp_name) }}/{{ $clientele[$j]->comp_logo }}" class="img-fluid mt-4 div-shadow">
                 <img class="countryflag" src="{{ config('app.url')}}img/flags/{{ str_replace(' ', '_', $clientele[$j]->country) }}.png" alt="{{ $clientele[$j]->country }}">
               </a>
                </div>
                @php  $i=$j; @endphp

                @endfor

              </div>
            </div>
            <!-- // Latest Partnered Companies -->


            <div class="pt-2"></div>

            <div class="row">
              <!-- // Projects -->
              <div class="col-lg-6">
                <div class="home-title">
                  <h2><span>Projects</span></h2>
                </div>
                <div class="bg-gray nav-cust p-3 border border-secondary DivH-270">
                  <div class="owl_projects owl-carousel owl-theme">                        
                    @foreach($projects as $homeprojects)
                    <div class="item">
                      <div class="media">
                        <div class="float-left text-center">
                          <img src="<?php echo config('app.url'); ?>project/<?php echo $homeprojects->image;?>" class="img-fluid mr-3 mb-2 div-shadow" alt="" width="150" /> 
                          <p class="pt-2 mb-1"><span style="font-size: 12px">Estimated Cost : </span><br>
                            {{$homeprojects->cost}}
                          </p>
                        </div>                            
                        <div class="media-body">
                          <h3 class="mt-0">{{$homeprojects->title}}</h3>
                          <p class="mb-0">{!! str_limit( $homeprojects->home_description, 150, '...') !!}</p>
                        </div>
                      </div>            
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="text-right">
                  <small class="bg-gray font-italic small more-position"><a href="{{ url('projects') }}" class="text-dark">Other Projects</a></small>
                </div>
              </div>
              <!-- Projects // -->

              <!-- // Tenders -->
              <div class="col-lg-6">
                <div class="home-title">
                  <h2><span>Tenders</span></h2>
                </div>                      
                <div class="bg-gray nav-cust p-3 border border-secondary DivH-270">
                  <div class="owl_tenders owl-carousel owl-theme">                        
                    @foreach($tenders as $tender)
                    <div class="item">                  
                      <p class="mb-2"><strong>Title:</strong> {{$tender->title}}</p>
                      <p class="mb-2" style="display:table"><strong>Country:</strong> {{$tender->country->country_name}} <img style="margin:7px 0 0 7px;" src="{{ config('app.url')}}img/flags/{{ str_replace(' ', '_', $tender->country->country_name) }}.png" align="right" alt="{{ $tender->country->country_name }}"></p>
                      <p class="mb-2"><strong>Tender Reference:</strong> {{$tender->tender_reference}}</p>
                      <p class="mb-2"><strong>Published Date:</strong> {{date('d M Y',strtotime($tender->issue_date))}}</p>
                      <p class="mb-2"><strong>Action Deadline:</strong> {{ date('j F Y', strtotime($tender->action_deadline)) }}</p>
                      <p class="mb-2"><strong>Short Description:</strong> {{$tender->home_description}} </p>
                      <p class="mb-2 text-right small"><a href="{{url('/tenders')}}">Read More...</a></p>   
                    </div>
                    @endforeach
                  </div>
                </div>

                <div class="text-right">
                  <small class="bg-gray font-italic small more-position"><a href="{{ url('tenders') }}" class="text-dark">Other Tenders</a></small>
                </div>
              </div>
              <!-- Tenders // -->
            </div>


            <div class="row">
              <!-- // Events -->
              <div class="col-lg-6">
                <div class="home-title">
                  <h2><span>Events</span></h2>
                </div>
                <div id="event-lists DivH-400">
                  @foreach($events as $cp)
                  <div class="bg-gray border border-secondary p-2 mb-2">
                    <div class="row">
                      <div class="col-lg-8 pr-0">
                        <h2 class="display-7">
                          @if($cp->event_url)
                          <a href="{{url('events/'.$cp->event_url)}}" target="_blank"><strong>{{$cp->name}}</strong></a>
                          @else
                          <a href="{{url($cp->web_link)}}" target="_blank"><strong>{{$cp->name}}</strong></a>
                          @endif
                        </h2>

                        <div>
                          <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                          <span class="small">{!! date('j F Y', strtotime($cp->start_date)) !!} &nbsp; - &nbsp; {!! date('j F Y', strtotime($cp->end_date))!!}</span>
                        </div>
                        <div>
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                          <span class="small">{{$cp->venue}}, {{$cp->country}}</span>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <img class="img-fluid mt-1" src="{{ config('app.url') }}event/{{$cp->big_image}}" alt="{{$cp->img_alt}}"/>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>

                <div class="text-right" style="position: relative;top: -8px;">                      
                  <small class="bg-gray font-italic pt-1 pr-2 pb-1 pl-2"><a href="{{ url('events') }}" class="text-dark">Other Events</a></small>
                </div>
              </div>
              <!-- Events // -->

              <!-- // News/PR -->
              <div class="col-lg-6">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">News</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pr-tab" data-toggle="tab" href="#pr" role="tab" aria-controls="pr" aria-selected="false">Press Release</a>
                  </li>
                </ul>                      
                <div class="bg-gray p-3 border border-secondary DivH-400">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
                      <ul>
                        @foreach($news as $title => $news_url)
                        <li class="display-6"><a href="{{ url('news/'.$news_url) }}" class="text-dark">{{$title}}</a></li>
                        @endforeach
                      </ul>
                      <div class="text-right">
                        <a href="{{url('news')}}" class="small">Know More...</a>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pr" role="tabpanel" aria-labelledby="pr-tab">
                      <?php $i=1; ?>
                      @foreach($pressreleases as $homepressrelease)
                      @if($i==1)
                      <div class="carousel-item active">
                        <h4 class="display-6 text-blue mt-2"><a href="{{url('pressreleases/'.$homepressrelease->pressreleases_url)}}"> {{$homepressrelease->title}}</a>
                        </h4>
                        <p class="disc pb-2 pt-2 d-flex align-items-center">{{str_limit( $homepressrelease->home_description, 500, '...')}}</p>
                        <p class="font-italic small text-right">
                          <a href="{{url('pressreleases/'.$homepressrelease->pressreleases_url)}}" class="text-blue">Know more...</a></p>
                        </div>
                        @else
                        <div class="carousel-item">
                          <h4 class="display-6 text-blue"><a href="{{url('pressreleases/'.$homepressrelease->pressreleases_url)}}"> {{$homepressrelease->title}}</a></h4>
                          <p class="disc pb-2 pt-2 d-flex align-items-center">{{str_limit( $homepressrelease->home_description, 500, ' ...')}}</p>
                          <p class="font-italic small text-right"><a href="{{url('/pressreleases/'.$homepressrelease->pressreleases_url)}}" class="text-blue">Know more...</a></p>
                        </div>
                        @endif
                        <?php $i++; ?>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div class="text-right" style="position: relative;top: 0px;">                      
                    <small class="bg-gray font-italic pt-1 pr-2 pb-1 pl-2"><a href="{{'news'}}" class="text-dark newsMore">View More</a></small>
                  </div>
                </div>

                <!-- News/PR // -->
              </div>  

              <!-- // Latest Articles & Expert Talks -->

              <div class="p-2"></div> 

               <div class="row">
                 <div class="col-lg-6">
                  <div class="home-title">
                    <h2><span>Articles</span></h2>
                  </div>
                  <div class="bg-gray nav-cust p-3 border border-secondary DivH-270">
                    <div class="owl_articles owl-carousel owl-theme">                        
                      @foreach($articles as $homearticles)
                      <div class="item">
                        <img src="<?php echo config('app.url'); ?>articles/<?php echo $homearticles->small_image;?>" class="img-fluid mr-3 mb-1 div-shadow float-left" alt="" width="150" />                    
                        <h3 class="display-6"><a href="{{url('articles/'.$homearticles->article_url)}}">{{$homearticles->home_title}}</a></h3>
                        <p class="mb-0  font-13">{{str_limit( $homearticles->short_description, 220, '...')}}</p> 
                        <div class="text-right">
                          <small><a href="{{url('articles/'.$homearticles->article_url)}}">Read More...</a></small>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="text-right">
                    <small class="bg-gray font-italic small more-position"><a href="{{url('articles')}}" class="text-dark">More Articles</a></small>
                  </div>
                </div>


                <div class="col-lg-6">
                  <div class="home-title">
                    <h2><span>Expert Talk</span></h2>
                  </div>                      
                  <div class="nav-cust p-3 text-center DivH-270" id="expert-talk">
                    <div class="owl_expert owl-carousel owl-theme text-center"> 
                       <?php $i=1; ?> 
                      @foreach($interviews as $homeinterviews)   
                      @if($i==1)                                  
                        <div class="item active text-center">
                          <img src="<?php echo config('app.url'); ?>interview/<?php echo $homeinterviews->small_image;?>" class="img-fluid rounded-circle mx-auto d-block mt-3" alt="" />
                          <p class="name mb-2 mt-3">{{$homeinterviews->name}}</p>
                          <p class="mb-2">{{$homeinterviews->designation}}</p>
                          <p class="discription mb-2">{{$homeinterviews->company}}</p>
                          <!-- <p class="discription mb-2">{{$homeinterviews->title}}</p> -->
                        </div>
                        @else
                        <div class="item text-center">
                         <img src="<?php echo config('app.url'); ?>interview/<?php echo $homeinterviews->small_image;?>" class="img-fluid rounded-circle mx-auto d-block mt-3" alt="" />
                          <p class="name mb-2 mt-3">{{$homeinterviews->name}}</p>
                          <p class="mb-2">{{$homeinterviews->designation}}</p>
                          <p class="discription mb-2">{{$homeinterviews->company}}</p>
                          <!-- <p class="discription mb-2">{{$homeinterviews->title}}</p> -->
                        </div>                     
                      @endif
                      <?php $i++; ?>
                      @endforeach 
                    </div>
                  </div>
                </div>
              </div> 

              <!-- //Testimonials -->
              <div class="row">
                <div class="col-lg-12 text-center">
                  <div class="home-title">
                    <h2><span>Testimonials</span></h2>
                  </div>                      
                  <div class="nav-cust p-2 testimonial">
                    <div class="owl_testimonials owl-carousel owl-theme text-center"> 
                       <?php $i=1; ?>
                        @foreach($testimonials as $testimonial)
                        @if($i==1)
                        <div class="item active text-center">
                          <img src="<?php echo config('app.url'); ?>testimonial/<?php echo $testimonial->image;?>" class="img-fluid rounded-circle mx-auto d-block mb-2 mt-2" alt="{{$testimonial->img_alt}}" title="{{$testimonial->img_title}}" />
                          <p class="discription">{{$testimonial->description}}</p>
                          <p class="name"><strong>{{$testimonial->client_name}}</strong> - {{$testimonial->company_name}}</p>
                          <p>{{$testimonial->designation}}</p>  
                        </div>
                        @else
                        <div class="item text-center">
                          <img src="<?php echo config('app.url'); ?>testimonial/<?php echo $testimonial->image;?>" class="img-fluid rounded-circle mx-auto d-block mb-2 mt-2" alt="{{$testimonial->img_alt}}" title="{{$testimonial->img_title}}" />
                          <p class="discription">{{$testimonial->description}}</p>
                          <p class="name"><strong>{{$testimonial->client_name}}</strong> - {{$testimonial->company_name}}</p>
                          <p>{{$testimonial->designation}}</p>
                        </div>
                        @endif
                        <?php $i++; ?>
                        @endforeach 
                    </div>
                  </div>
                </div>
              </div>
              <!-- Testimonials // -->
          </div>   


          <div class="col-lg-3">
            <div class="text-right pb-3">
              <h3 class="font-13 font-italic">Advertisements</h3>
            </div>
           


          
            @foreach($banner1314 as $k=>$homebanner12)   
               @foreach($homebanner12->pagesCount as $j=>$pcount)

          
            @if($homebanner12->positions[0]->id == 16 and $pcount->id == 1)

              <a href="{{$homebanner12->url}}" target="_blank" class="mb-3" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-3" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="" /></a>
             
            @else

            @endif  
              @endforeach
            @endforeach
          </div>

        </div>   

      </div> 


      <!-- // Partners -->
      <div class="container">
        <div class="partners">
          <div class="text-center">
            <h2 class="main-title"><span><a href="{{url('partners')}}">Media Partners / Event Partners</a></span></h2>
          </div>
          <div class="partners-logos slider row">

            @foreach($partners as $home_logo)           
            <div class="mb-2 col-6 col-sm-4 col-lg-2 text-center slide"><img src="<?php echo config('app.url'); ?>partner/<?php echo $home_logo;?>" class="img-fluid"></div>
            @endforeach
          </div>
        </div>
      </div>  
      <!-- Partners // -->  

      <!-- <div class="quick-btn">          
          <a href="{{url('contactus')}}">Contact Us <i class="fa fa-envelope ml-2" aria-hidden="true"></i></a>
          <a href="{{url('registration')}}" class="mr-1">Subscribe <i class="fa fa-mouse-pointer ml-2" aria-hidden="true"></i></a>
      </div> -->

      <div class="quick-btn">          
          <a href="{{url('contactus')}}">
            <img src="<?php echo config('app.url'); ?>img/btn-contact.png" alt="Contact Us" class="img-fluid mb-1" />
          </a>
          <br/>
          <a href="{{url('registration')}}">
            <img src="<?php echo config('app.url'); ?>img/btn-subscribe.png" alt="Subscribe" class="img-fluid" />
          </a>
      </div>


  </div>

    

 <!--</div>-->

      {{-- Chatbot --}}


      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TPK8NKZ');</script>
    @endsection

    @section('scripts')
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPK8NKZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
      $('.carousel').carousel({
        pause:"hover"
      })
    </script>
    <script type="text/javascript">
      $('.panel-title a').on('click',function(){
        $('.accordion-toggle').not($(this)).addClass('collapsed');     
        $('.panel-collapse').not($(this).closest('.panel').find('.panel-collapse')).removeClass('show');

      });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
     $(document).ready(function() {
      src = "{{ route('searchajax') }}";
      $("#autoComplete").autocomplete({
        source: function(request, response) {
          $.ajax({
            url: src,
            dataType: "json",
            data: {
              term : request.term
            },
            success: function(data) {
              response(data);
            }
          });
        },
        minLength: 3,
        autoFill: true,
        select: function (event, ui) {
          $('#autoComplete').val(ui.item.value);
          $('form').submit();
          // var label = ui.item.label;
          // var value = ui.item.value;

           //store in session
           // document.valueSelectedForAutocomplete = value 
         }
        });
      });    
    </script>

    <script>
     $('.owl_carousel_latest').owlCarousel({
      loop:true,
      margin:20,    
      responsiveClass:true,

      dots:false,
      responsive:{
        0:{
          items:2,
          nav:true
        },
        600:{
          items:3,
          nav:false
        },
        1000:{
          items:4,
          nav:true,
          loop:false
        }
      }
    });

     $('.owl_projects, .owl_tenders').owlCarousel({
      loop:true,
      margin:20,    
      responsiveClass:true,

      dots:false,
      responsive:{
        0:{
          items:1,
          nav:true
        },
        600:{
          items:1,
          nav:false
        },
        1000:{
          items:1,
          nav:true,
          loop:false
        }
      }
    });
     $('.owl_articles, .owl_expert, .owl_testimonials').owlCarousel({
      loop:true,
      margin:20,    
      responsiveClass:true,

      dots:false,
      responsive:{
        0:{
          items:1,
          nav:true
        },
        600:{
          items:1,
          nav:false
        },
        1000:{
          items:1,
          nav:true,
          loop:false
        }
      }
    });


     // $('.owl-nav').after($('.owl-nav'));
     // var ele = $('.owl-nav').closest('.bg-gray');
           // $('.owl_products').closest('.nav-cust').after($('.owl_products .owl-nav'));
           // $('.owl_carousel_latest').closest('.nav-cust').after($('.owl_carousel_latest .owl-nav'));
           // $('.owl_projects').closest('.nav-cust').after($('.owl_projects .owl-nav'));
           // $('.owl_tenders').closest('.nav-cust').after($('.owl_tenders .owl-nav'));
           // $('.owl_articles').closest('.nav-cust').after($('.owl_articles .owl-nav'));
           // $('.owl_expert').closest('.nav-cust').after($('.owl_expert .owl-nav'));
           // $('.owl_testimonials').closest('.nav-cust').after($('.owl_testimonials .owl-nav'));
     // console.log(ele);
     // ele.after($('.owl-nav'));
      // Form Sticky
      $(window).scroll(function() {
        var y = $(window).scrollTop();
        if (y > 0) {
          $("#form-sticky").addClass('sticky-top').addClass('pt-180');
        } else {
          $("#form-sticky").removeClass('sticky-top').removeClass('pt-180');
        }
      });



      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href") // activated tab
        var news_url = '{{ url('news')}}';
        var press_url = '{{ url('pressreleases')}}';
        if(target == '#news'){

            $('.newsMore').attr('href',news_url);
        }else{
          $('.newsMore').attr('href',press_url);
        }
      });
    </script>

<script>


    $("form#main_input_box").submit(function (event) {
      
        var conversation_list = $(".conversation-list");
        var timenow = moment().format("h:mm a");
        event.preventDefault();
        var scrollTo_int = conversation_list.prop('scrollHeight') + 'px';
        conversation_list.append('<li class="clearfix odd m-t-10 conversers1"><div class="conversation-text"><div class="ctext-wrap"><p class="text-left">' + $("#custom_textbox").val() + '<i class="text-right">' + timenow + '</i></p></div></div></li>');
        $("#custom_textbox").val('');

        var dynamic_value = ["Oh! Cool", "How do you Do", "Hope! you are having good time", "Really!", "That's, Awesome"];
        // reply
        var delay = 3500;
        setTimeout(function () {
            conversation_list.append('<li class="clearfix m-t-10 conversers2"><div class="conversation-text"><div class="ctext-wrap"><p class="pull-left reply">Wilton is typing<div class="spinner pull-right"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></p></div></div></li>');
            conversation_list.slimscroll({scrollTo: scrollTo_int});
        }, 1000);
        setTimeout(function () {
            $(".reply").html(dynamic_value[Math.floor(Math.random() * 5)] + '<i>' + timenow + '</i>').removeClass("reply");
            $(".spinner").remove();
            $(".conversation-list").slimscroll({scrollTo: scrollTo_int});
        }, 3500);

        conversation_list.slimscroll({scrollTo: scrollTo_int});
    });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.b-agent-demo .b-agent-demo_result').css('top','top:82px !important');
    $('..b-agent-demo .b-agent-demo_powered_by').css('display','none !important');
  })
</script>
@endsection