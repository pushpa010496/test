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
                <a href="{{ url('/magazine') }}">Magazine</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page">{{ ucwords( str_replace('-',' ', Request::segment(count(Request::segments()))) )}}</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">Forthcoming Issue</h1> 
                </div>
<!-- <div class="col-md-12 text-center img-fluid"><img src="https://industry.pharmafocusasia.com/images/virusoutbreak.jpg"></div> -->
               {!! $cmspage->description !!}  
              </div>


            </div>
            <!-- // RIGHT SECTION // --> 

            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
              <div class="bg-gray border-secondary">
                <div class="text-center">
                  {{-- <h3 class="adv-title">Advertisements</h3> --}}
                </div>
               @include('layouts.partials._square_banner')
              </div>
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>

      </div>

@endsection

@section('scripts')

@endsection