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

          <div class="col-lg-9 pt-4">
            @php
            $upcoming_flag = false;
            $completed_flag = false;
            @endphp

            @foreach($data as $val)

            @if($val->webinar_date >=  Carbon\Carbon::today())

            @if($upcoming_flag == false)
            <div class="pb-2">
              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                <h1 class="PF-Bshelf pt-2">Upcoming Webinars</h1>            
              </div>               
            </div> 
            @endif
            @php $upcoming_flag = true @endphp

            <div class="mb-3">
              <div class="p-2 bg-light border">
                <div class="row">
                  <div class="col-lg-3 col-xs-12 text-center">
                    <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="img-fluid" /> 
                  </div>
                  <div class="col-lg-9 col-xs-12">
                    <h2 class="mt-1 font-18">
                      <a href="{{url($val->url)}}" title="{{$val->title_tag}}" class="PF-TXTRED">{{$val->title}}</a>
                    </h2>
                    <p class="font-16 mb-2"> {!!$val->date!!}</p>                      
                    <p class="font-16 font-weight-bold mb-1">{{$val->speaker}}</p>
                    <p class="text-muted mb-1">{!!$val->speaker_designation!!}</p>
                  </div>
                </div>
              </div>
            </div>

            @else

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
                  <div class="col-lg-3 col-xs-12 text-center">
                    <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="img-fluid" /> 
                  </div>
                  <div class="col-lg-9 col-xs-12">
                    <h2 class="mt-1 font-18">
                      <a href="{{url($val->url)}}" title="{{$val->title_tag}}" class="PF-TXTRED">{{$val->title}}</a>
                    </h2>
                    <p class="font-16 mb-2"> {!!$val->date!!}</p>                      
                    <p class="font-16 font-weight-bold mb-1">{{$val->speaker}}</p>
                    <p class="text-muted mb-1">{!!$val->speaker_designation!!}</p>
                  </div>
                </div>
              </div>
            </div>
            @endif  

            
            @endforeach


            {{-- <div class="col-lg-12 mb-3">
              <div class="p-2 bg-light border">
                <div class="row">
                  <div class="col-lg-3 col-xs-12 text-center">
                    <img src="https://www.asianhhm.com/ahhmadmin/upload/promotions/chris-sullivan.jpg" alt="Chris Sullivan" title="Chris Sullivan" class="img-fluid" /> 
                  </div>
                  <div class="col-lg-9 col-xs-12">
                    <h2 class="mt-1 font-18">
                      <a href="https://www.asianhhm.com/zebra-healthcare-webinar" title="Use of TOC Analysis in the Pharmaceutical Industry" class="PF-TXTRED">Clinical Mobility and Point of Care Technology Innovation</a>
                    </h2>
                    <p class="font-16">Thursday, 07<sup>th</sup> March  2019 <span class="pl-1 pr-1">|</span> 14:00 (Singapore) <span class="pl-1 pr-1">|</span> 11:30 (India) <span class="pl-1 pr-1">|</span> 16:00 (Australia)</p>
                    <p class="font-16 font-weight-bold mb-2">Chris Sullivan</p>
                    <p class="text-muted mb-1">Global Healthcare Practice Lead</p>
                  </div>
                </div>
              </div>
            </div> --}}

          </div>


          <!--// Square Banners -->
          <div class="col-lg-3 pt-4 d-none d-sm-block text-center"> 
           <!-- Square Banner -->
              @include('layouts.partials._square_banner')
          <!-- End Square Banner -->
         </div>
         <!-- Square Banners // --> 
       </div>

     </div>



     @endsection

     @section('scripts')

     @endsection