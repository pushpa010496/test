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
                <a href="">Industry Updates</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page"></li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">Industry Updates</h1>            
                </div>
                <p>Are you looking for updates from the global industry?</p>
                <p>Get the most recent news and information on this page, which is divided into three key sections: News, Press Releases, and Events. This page provides current information on the industry to enthusiasts and serves as a resource for them.</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-md-12">
                    <a href="{{url('news')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">NEWS</span></h3>
                    </a>
                  </div>

                  <div class="col-md-12">
                    <a href="{{url('pressreleases')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">PRESS RELEASES</span></h3>
                    </a>
                  </div>

                  <div class="col-md-12">
                    <a href="{{url('events')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">EVENTS</span></h3>
                    </a>
                  </div>
                 
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