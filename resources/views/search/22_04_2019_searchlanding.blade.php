@extends('../layouts/app')
@section('style')
<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/jquery-ui.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/jquery.ui.autocomplete.css"> -->

<style type="text/css">

  .TXT-BLUE{color: #1a0dab;font-size: 18px;}
  .TXT-GREEN{color: #006621;font-size: 14px;}
  .TXT-BLK{color: #6a6a6a;font-size: 14px;line-height: 1.4;}

  .tab-content {font-family: arial,sans-serif !important;word-break: break-all;}
  .nav-tabs > li{background-color: #fafafa;margin-right: 3px;}
  .nav-tabs a {border-radius: 0px;font-weight: bold;color: #858383;}
  .nav-tabs .nav-item.show .nav-link{
    border: none;
    position: relative;
  }
  .nav-tabs .nav-item {
    margin-bottom: 0px;
  }
  .nav-tabs .nav-link:hover{border: 1px solid transparent;background-color: #f3f3f3   }
  .nav-tabs .nav-link.active{
    position: relative;
    background-color: #fff;
    border: 0px 0px 0 0px;
    border-bottom: 3px solid #ED1A3B;
  }
  
</style>

@endsection
@section('content')

    <div class="container PF-BrdrDDD mt-4">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2 pb-2">
          <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
            <h1 class="PF-Bshelf pt-2">SEARCH RESULT</h1>            
          </div>
        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">  
          <div class="tab-content">  
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#tab_all" data-toggle="tab">All</a>
              </li>
              @foreach($searchResults->groupByType() as $type => $modelSearchResults)
              <li class="nav-item">
                <a class="nav-link" href="#tab-{{ $type }}" data-toggle="tab">{{ ucfirst($type) }}</a>
              </li>
              @endforeach
            </ul>
            
            <div class="tab-content mt-3" id="myTabContent">
              <div class="tab-pane fade show active" id="tab_all" role="tabpanel" aria-labelledby="home-tab">
                @foreach($searchResults->groupByType() as $type => $modelSearchResults)        
                @foreach($modelSearchResults as  $searchResult)
                <h2 class="TXT-BLUE mb-1">
                  <a href="{{ $searchResult->url }}" class="TXT-BLUE">{{ $searchResult->title }}</a>
                </h2>
                <p class="TXT-GREEN mb-1"><a href="{{ $searchResult->url }}" class="TXT-GREEN">{{ $searchResult->url }}</a></p>
                <p class="TXT-BLK">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($searchResult->description)))),$limit = 400, $end = '...') }}
                </p>
                @endforeach
                @endforeach
              </div>

              @foreach($searchResults->groupByType() as $type => $modelSearchResults)
              <div class="tab-pane fade" id="tab-{{ $type }}" role="tabpanel" aria-labelledby="profile-tab">
                @foreach($modelSearchResults as  $searchResult)
                <h2 class="TXT-BLUE mb-1">
                  <a href="{{ $searchResult->url }}" class="TXT-BLUE">{{ $searchResult->title }}</a>
                </h2>
                <p class="TXT-GREEN mb-1"><a href="{{ $searchResult->url }}" class="TXT-GREEN">{{ $searchResult->url }}</a></p>
                <p class="TXT-BLK">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($searchResult->description)))),$limit = 400, $end = '...') }}
                </p>
                @endforeach
              </div>
               @endforeach
            </div> 
          </div>
        </div> 
       </div> 
       <!--  <div class="tab-content">
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#tab_all" data-toggle="tab">
              All </a>
            </li>
            @foreach($searchResults->groupByType() as $type => $modelSearchResults)

            <li class="active">
              <a href="#tab-{{ $type }}" data-toggle="tab">
              {{ ucfirst($type) }} </a>
            </li>

            @endforeach
          </ul>

          <div id="tab_all" class="tab-pane active">
            <div class="panel-body">
              @foreach($searchResults->groupByType() as $type => $modelSearchResults)        
              @foreach($modelSearchResults as  $searchResult)

              <h2 class="mb-1 PF-TXTBlk000">
                <a href="{{ $searchResult->url }}" title="Patient Experience" class="PF-TXTBlk000">{{ $searchResult->title }}</a>
              </h2>
              <p class="PF-TXTBlk pt-1"><a href="{{ $searchResult->url }}">{{ $searchResult->url }}</a></p>
              <p class="PF-TXTBlk pt-1">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($searchResult->description)))),$limit = 400, $end = '...') }}
              </p>

              @endforeach
              @endforeach
            </div>
          </div>
          @foreach($searchResults->groupByType() as $type => $modelSearchResults)

          <div id="tab-{{ $type }}" class="tab-pane">
            <div class="panel-body">

              @foreach($modelSearchResults as  $searchResult)

              <h2 class="mb-1 PF-TXTBlk000">
                <a href="{{ $searchResult->url }}" title="Patient Experience" class="PF-TXTBlk000">{{ $searchResult->title }}</a>
              </h2>
              <p class="PF-TXTBlk pt-1"><a href="{{ $searchResult->url }}">{{ $searchResult->url }}</a></p>
              <p class="PF-TXTBlk pt-1">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($searchResult->description)))),$limit = 400, $end = '...') }}
              </p>

              @endforeach

            </div>
          </div>
          @endforeach
        </div> -->

    </div>
    @endsection