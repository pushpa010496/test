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
            <a href="{{url('knowledgebank')}}">Knowledge Bank</a>
          </li>
          <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><a href="{{url('industryreports')}}">Industry Reports</a></li>
            <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><a href="{{url('healthcare-reports')}}">Healthcare Reports</a></li>
            <li class="breadcrumb-item active PF-TXTRED" aria-current="page">{!! $industryreports->title1 !!}</li>
            <!-- <li class="breadcrumb-item active PF-TXTRED" aria-current="page">{!! $industryreports->title2 !!}</li> -->
        </ol>
      </nav>
    </div>

    <div class="row PF-WytBG">
      <!-- // RIGHT SECTION --> 
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">       
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-list">
          <h2 class="mt-2 mb-3 PF-TXTRED">{{ $industryreports->title1}}</h2>  
          <!-- <h2 class="mt-2 mb-3 PF-TXTRED">{{ $industryreports->title2}}</h2>           -->
          {!!$industryreports->full_report!!}
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