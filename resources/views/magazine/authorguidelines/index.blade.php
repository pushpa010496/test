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
                <a href="{{url('magazine')}}">Magazine</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page">Author Guidelines</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-1">
                  <h1 class="PF-Bshelf pt-2">Author Guidelines</h1>            
                </div>
              </div>

              @foreach($guideline as $val)
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <h2 class="pt-2">{{ $val->title }}</h2>
                {!!$val->description!!}                
                  <a href="{{url('/authorguidelines-download')}}" title="Download Author Guidelines">
                    <span class="download">
                      <img src="{{config('app.url')}}images/pdf-big.gif" alt="Download Author Guidelines">
                    </span>
                  </a>
              </div>             
              @endforeach
              <div class="mb-3"></div>
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