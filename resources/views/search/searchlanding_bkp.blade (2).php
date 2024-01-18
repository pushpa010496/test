@extends('../layouts/app')
@section('style')
<link rel="stylesheet" href="{{ config('app.url') }}css/jquery-ui.css"">
<link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/jquery.ui.autocomplete.css">
 <style type="text/css">
    #accordion2 .panel{
      width:100% !important;
    }
    #accordion2 .panel-default > .panel-heading{
      color: #635e5e;
      background-color: #c6eafa;
    }
    .ellipsis {
    white-space: nowrap;
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    padding: 2px 3px;
  }
  .ellipsis2{
    white-space: nowrap;
    width: 50%;
    overflow: hidden;
    text-overflow: ellipsis;
    padding: 2px 3px;
  }
hr {
    border: 0;
    height: 1px;
    width: 75%;
    margin-top: 5px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(255, 102, 102, .6), rgba(0, 0, 0, 0));
}
.whitepaper-inner-box{
 min-height:250px;
 max-height:250px;
 overflow: hidden; 

 }
 .whitepaper-inner-box p{
  color: #6f6f6c;
  }
 .whitepaper-box{
 height:310px;
  
 }
.media img{
  width: 75px;
  width:75px;
  border:3px solid #88dff3
}

 </style>

@endsection
@section('content')



  <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h1 class="classic-title"><span class="CAPS">Search Results</span> </h1>
      <div class="tabbable-panel">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#tab_default_1" data-toggle="tab">
              All </a>
            </li>
            <li>
              <a href="#tab_default_2" data-toggle="tab">
              Press Releases </a>
            </li>
            <li>
              <a href="#tab_default_3" data-toggle="tab">
                News
              </a>
            </li>
            <li>
              <a href="#tab_default_4" data-toggle="tab">
              Articles</a>
            </li>
            <!--<li>
              <a href="#tab_default_4" data-toggle="tab">
              Products</a>
            </li>-->
          </ul>
           <div class="tab-content">
            <div class="tab-pane active" id="tab_default_1">
              @if($pressreleases)
                 @foreach($pressreleases as $val)
                  <h2 class="mb-1 PF-TXTBlk000">
                      <a href="{{ route('pressreleases.url',[$val->url])}}" title="Patient Experience" class="PF-TXTBlk000">{{ $val->title}}</a>
                    </h2>
                    <small class="PF-Caps text-muted">{{ date('l, F d, Y ', strtotime($val->date)) }}</small>
                    <p class="PF-TXTBlk pt-1">{{$val->home_description}}</p> 
                  @endforeach
             @endif
            @if($news)
               @foreach($news as $val)
                  <h2 class="mb-1 PF-TXTBlk000">
                    <a href="{{ route('news.url',[$val->url])}}" title="Patient Experience" class="PF-TXTBlk000">{{ $val->title}}</a>
                  </h2>
                  <small class="PF-Caps text-muted">{{ date('l, F d, Y ', strtotime($val->date)) }}</small>
                  <p class="PF-TXTBlk pt-1">{{$val->home_description}}</p> 
                @endforeach
            @endif
            @if($article) 
               @foreach($article as $val)
               <h2 class="mb-2 PF-TXTBlk000">
                  <a href="{{ route('articles.url',[$val->url])}}" title="Patient Experience" class="PF-TXTBlk000">{{ $val->title}}</a>
                </h2>
                <h5 class="PF-Caps text-muted">{{ $val->sub_title }}</h5>
                {{-- <h6 class="PF-Caps text-muted">{{ $val->designation }}</h6> --}}
                {!!$val->abstract!!}
         
          @endforeach
            @endif
          
            </div>
            <div class="tab-pane active" id="tab_default_2">
              @foreach($pressreleases as $val)
              <h2 class="mb-1 PF-TXTBlk000">
                  <a href="{{ route('pressreleases.url',[$val->url])}}" title="Patient Experience" class="PF-TXTBlk000">{{ $val->title}}</a>
                </h2>
                <small class="PF-Caps text-muted">{{ date('l, F d, Y ', strtotime($val->date)) }}</small>
                <p class="PF-TXTBlk pt-1">{{$val->home_description}}</p> 
           
          @endforeach
            </div>
            <div class="tab-pane" id="tab_default_3">
              @foreach($news as $val)
               <h2 class="mb-1 PF-TXTBlk000">
                  <a href="{{ route('news.url',[$val->url])}}" title="Patient Experience" class="PF-TXTBlk000">{{ $val->title}}</a>
                </h2>
                <small class="PF-Caps text-muted">{{ date('l, F d, Y ', strtotime($val->date)) }}</small>
                <p class="PF-TXTBlk pt-1">{{$val->home_description}}</p>  
         
          @endforeach
            </div>
            <div class="tab-pane" id="tab_default_4">
              @foreach($article as $val)
               <h2 class="mb-2 PF-TXTBlk000">
                  <a href="{{ route('articles.url',[$val->url])}}" title="Patient Experience" class="PF-TXTBlk000">{{ $val->title}}</a>
                </h2>
                <h5 class="PF-Caps text-muted">{{ $val->sub_title }}</h5>
                {{-- <h6 class="PF-Caps text-muted">{{ $val->designation }}</h6> --}}
                {!!$val->abstract!!}
         
          @endforeach
            </div>
          
       
@endsection
@section('scripts')

      <script src="{{ config('app.url') }}js/jqueryui/1.12.1/jquery-ui.min.js" ></script>
    
 

@endsection
