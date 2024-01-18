@extends('../layouts/app')
@section('style')

@endsection

@section('content')



    <div class="clearfix"></div>


      <div class="container">
        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('/editorialsection') }}">{{trans('messages.editorialsection_title')}}</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page"></li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.editorialsection_title')}}</h1>            
                </div>

                <p>{{trans('messages.editorialsection_text')}}</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('/healthcare-management')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">healthcare management</span></h3>
                    </a>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('/medical-sciences')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">medical sciences</span></h3>
                    </a>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('/surgical-speciality')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">surgical speciality</span></h3>
                    </a>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('/diagnostics')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">diagnostics</span></h3>
                    </a>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('/facilities-operations')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">Facilities &amp; Operations Management</span></h3>
                    </a>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('/information-technology')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">information technology</span></h3>
                    </a>
                  </div>
                  
                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('/technology-equipment')}}">
                      <h3 class="mb-4 PF-Caps PF-TXTRED">Technology, Equipment &amp; Devices</h3>
                    </a>
                  </div>  
  <!--
                  <div class="col-md-6 col-sm-6">
                    <a >
                      <h3 class="mb-4 PF-Caps PF-TXTRED">Expert Talk</h3>
                    </a>
                  </div> 

                  <div class="col-md-6 col-sm-6">
                    <a href="{{url('/advertorials')}}">
                      <h3 class="mb-4 PF-Caps PF-TXTRED">Advertorials</h3>
                    </a>
                  </div>  -->
                  
                </div>               
              </div> 
            </div>


            <!--// Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
             @include('layouts.partials._square_banner')
           </div>
            <!-- Square Banners // --> 
        </div>

      </div>


@endsection

@section('scripts')

@endsection