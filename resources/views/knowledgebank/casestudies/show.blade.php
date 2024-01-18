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
          <a href="{{url('editorialsection')}}">Knowledge Bank</a>
        </li>
        <li class="breadcrumb-item active PF-TXTRED" aria-current="page">Case Studies</li>
      </ol>
    </nav>
  </div>

  <div class="row PF-WytBG">
    <!-- // LEFT SECTION --> 
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-list">
        <h2 class="mb-3 mt-2 PF-TXTRED">{{ $casestudies->title}}</h2>

        {!!$casestudies->description!!}
        @if(@$casestudies->pdf)
        <h2 class="mb-1 mt-2 PF-TXTRED ">Download '.pdf' Format of the Case Study.</h2>
        <a href="{{ route('casestudiesform.download',[$casestudies->url])}}" title="Download Casestudies ">
          <span class="download">
            <img src="{{config('app.url')}}images/pdf-big.gif" alt="Download Casestudies">
          </span>
        </a>  
        @endif
      </div> 
    </div>
    <!-- // LEFT SECTION // --> 

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