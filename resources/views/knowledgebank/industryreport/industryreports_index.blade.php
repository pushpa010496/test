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
                <a href="{{url('/knowledgebank')}}">Knowledge Bank</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">Industry Reports</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">Industry Reports</h1>            
                </div>

                <p>Our industry reports are the go-to solution for many Pharma professionals. They add credibility to the businesses. They help to stay up to date on the latest trends and also give a holistic view. These insights assist to gain actionable ideas and better decision-making.</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-md-12">
                    <a href="{{url('/pharma-reports')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">PHARMA REPORTS</span></h3>
                    </a>
                  </div>

                  <div class="col-md-12">
                    <a href="{{url('/reports')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">GLOBAL REPORTS</span></h3>
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