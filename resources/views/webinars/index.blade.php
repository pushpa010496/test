@extends('../layouts/app')
@section('style')

@endsection

@section('content')

<div class="clearfix"></div>

<div class="container">
         <!-- <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('/webinars') }}">Webinars</a>
              </li>
              <li class="breadcrumb-item active text-capitalize" aria-current="page">Webinars</li>
            </ol>
          </nav>
        </div> -->


        <div class="row">

          <div class="col-lg-9">
          <h1 class="PF-TXTRED pt-2 mb-2">Healthcare Webinars by European Hospitals &amp; Healthcare Management</h1>
          <h1 class="mb-1 " style='color: rgba(0,0,0,.8);font-size:16px;'
    >Enhance your marketability with our efficient webinar service</h1>
          <ul>
            <li>Share your story with style</li>
            <li>Hassle-free set-up</li>
            <li>All-in-one webinar programs (inception, hosting, promotions, on-demand, reporting)</li>
            <li>Session Recording, Interactive Attendee Engagements capability</li>
            <li>1 Year hosting of the webinar’s recorded session on our platform</li>
          </ul>

            <!-- <h1 class="PF-TXTRED pt-2">Targeted and Impactful- Healthcare Webinars</h1>
            <p class="mb-1">
            Top companies across all industries are utilizing webinars to attract new clientele, share knowledge, and hone internal processes.</p>
            <p class="mb-1">But, why webinars? How does this technique of communication efficiently deliver in these areas and have you ever wondered why the usage of webinars is significant in particular industries like healthcare?</p>
            <p class="mb-1">Organizing a webinar authorizes you as a healthcare professional to share your knowledge and expertise from your experience in the healthcare field to a large audience.</p>
            <p class="mb-1">And did you know one such industry that's using webinars for healthcare professionals is "Asian Hospital and Healthcare Management"?</p>
            <p class="mb-1">Asian Hospital and Healthcare Management offer free healthcare webinars 2020 led by industry experts from the healthcare space. Check into our website in the webinars section, where you can find the upcoming healthcare webinars and the completed webinars for healthcare professionals.</p>
            <p class="mb-1">You’ll also get the opportunity to participate in a Q&A session when you tune in to the live webinars.</p>
            <p class="mb-1">If you can't attend live but are interested in a particular topic, then please register and we'll send you a link to the recorded event.</p> -->
            @php
            $upcoming_flag = false;
            $completed_flag = false;

            @endphp

            @foreach($upcome as $val)
          

            @if($upcoming_flag == false)
            <div class="pb-2 pt-2">
              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                <h1 class="PF-Bshelf pt-2">Upcoming Webinars</h1>            
              </div>               
            </div> 
            @endif
            @php 
            $upcoming_flag = true;
            @endphp
            <div class="mb-3">
              <div class="p-2 bg-light border">
                <div class="row">
                  <div class="col-lg-3 col-12 text-center align-self-center">
                    <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="img-fluid" /> 
                  </div>
                  <div class="col-lg-9 col-12">
                    <h2 class="mt-1 font-18">
                      <a href="{{url($val->url)}}" title="{{$val->title_tag}}" class="PF-TXTRED" target="_blank">{{$val->title}}</a>
                    </h2>
                    <p class="font-16 mb-2"> {!!$val->date!!}</p>                      
                    <p class="font-16 font-weight-bold mb-1">{{$val->speaker}}</p>
                    <p class="text-muted mb-1">{!!$val->speaker_designation!!}</p>
                    <p class="font-16 font-weight-bold mb-1">{{@$val->speaker2}}</p>
                    <p class="text-muted mb-1">{!!@$val->speaker2_designation!!}</p>
                  </div>
                </div>
              </div>
            </div>


            @endforeach

            @foreach($complete as $val)
            @if($val->webinar_date <=  Carbon\Carbon::today())
            @if($completed_flag == false)
            <div class="pb-2">
              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                <h1 class="PF-Bshelf pt-2">Completed Webinars</h1>            
              </div>               
            </div> 
            @endif

            @php $completed_flag = true @endphp

            <div class="mb-3">
              <div class="p-2 bg-light border">
                <div class="row">
                  <div class="col-lg-3 col-12 text-center align-self-center">
                    <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="img-fluid pt-2 pb-2" /> 
                  </div>
                  <div class="col-lg-9 col-12">
                    <h2 class="mt-1 font-18">
                      <a href="{{url($val->url)}}" title="{{$val->title_tag}}" class="PF-TXTRED" target="_blank">{{$val->title}}</a>
                    </h2>
                    <p class="font-16 mb-2"> {!!$val->date!!}</p>                      
                    <p class="font-16 font-weight-bold mb-1">{{$val->speaker}}</p>
                    <p class="text-muted mb-1">{!!$val->speaker_designation!!}</p>
                    <p class="font-16 font-weight-bold mb-1">{{@$val->speaker2}}</p>
                    <p class="text-muted mb-1">{!!@$val->speaker2_designation!!}</p>
                  </div>
                </div>
              </div>
            </div>
            @endif  


            @endforeach




          </div>


          <!--// Square Banners -->
          <div class="col-lg-3 mt-4 d-none d-sm-block text-center"> 
           @include('layouts.partials._square_banner')
           <!--@foreach($banners as $k=>$banner)   -->
           <!--@foreach($banner->pagesCount as $j=>$pcount)-->
           <!--@if($banner->positions[0]->id == 6 and $pcount->id == 51)-->

           <!--<a href="{{$banner->url}}" target="_blank" class="mb-3" title="{{$banner->title}}"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}banners/{{$banner->image}}" alt="{{$banner->alt_tag}}" /></a>-->
           <!--@else-->
           <!--@endif  -->
           <!--@endforeach-->

           <!--@endforeach-->
         </div>
         <!-- Square Banners // --> 
       </div>

     </div>


     @endsection

     @section('scripts')

     @endsection