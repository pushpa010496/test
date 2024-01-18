@extends('../layouts/app')
@section('style')
<link rel="stylesheet" href="{{ config('app.url') }}css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/jquery.ui.autocomplete.css">

<style type="text/css">

  .TXT-BLUE{color: #1a0dab;font-size: 18px;}
  .TXT-GREEN{color: #006621;font-size: 14px;}
  .TXT-BLK{color: #6a6a6a;font-size: 14px;line-height: 1.4;}

  .tab-content {font-family: arial,sans-serif !important;}
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
      <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
        <h1 class="PF-Bshelf pt-2">SEARCH RESULT</h1>            
      </div>


     
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#tab_all" data-toggle="tab">All</a>
          </li>
          
          @if(sizeof($earticles) != 0)
            <li class="nav-item">
              <a class="nav-link" href="#tab-earticles" data-toggle="tab">Editorial Articles</a>
            </li>
          @endif

          @if(sizeof($authors) != 0)
            <li class="nav-item">
              <a class="nav-link" href="#tab-authors" data-toggle="tab">Authors</a>
            </li>
          @endif

           @if(sizeof($knowledgebank) != 0)
            <li class="nav-item">
              <a class="nav-link" href="#tab-knowledgebank" data-toggle="tab">Knowledge Bank</a>
            </li>
          @endif
          

           @if(sizeof($industryupdates) != 0)
            <li class="nav-item">
              <a class="nav-link" href="#tab-industryupdates" data-toggle="tab">Industry Updates</a>
            </li>
          @endif
        </ul>
        
        <div class="tab-content mt-3" id="myTabContent">

          <!-- Tab for all -->
          <div class="tab-pane fade show active" id="tab_all" role="tabpanel" aria-labelledby="home-tab">
            @if(sizeof($earticles) != 0)
              @foreach($earticles as $val)              
                <h2 class="TXT-BLUE mb-1">
                  <a href="{{ url($val['url']) }}" class="TXT-BLUE">{{ $val['title'] }}</a>
                </h2>
                <p class="TXT-GREEN mb-1"><a href="{{ url($val['url']) }}" class="TXT-GREEN">{{ url($val['url']) }}</a></p>
                <p class="TXT-BLK">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val['description'])))),$limit = 400, $end = '...') }}
                </p>
              @endforeach            
            @endif

            @if(sizeof($authors) != 0)
            @foreach($authors as $val)
              
                <h2 class="TXT-BLUE mb-1 author">
                  <a href="{{ $val['url'] }}" class="TXT-BLUE">{{ $val['title'] }}</a>
                </h2>
                <p class="TXT-GREEN mb-1"><a href="{{ url($val['url']) }}" class="TXT-GREEN">{{ url($val['url']) }}</a></p>
                <p class="TXT-BLK">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val['description'])))),$limit = 400, $end = '...') }}
                </p>
              
            @endforeach            
          @endif

          @if(sizeof($knowledgebank) != 0)            
              @foreach($knowledgebank as $val)
                <h2 class="TXT-BLUE mb-1">
                  <a href="{{ url($val->url) }}" class="TXT-BLUE">{{ $val->title }}</a>
                </h2>
                <p class="TXT-GREEN mb-1"><a href="{{ url($val->url) }}" class="TXT-GREEN">{{ url($val->url) }}</a></p>
                <p class="TXT-BLK">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val->description)))),$limit = 400, $end = '...') }}
                </p>
              @endforeach                         
          @endif

          </div>
          <!-- End For all  -->

          @if(sizeof($earticles) != 0)
              <div class="tab-pane fade show" id="tab-earticles" role="tabpanel" aria-labelledby="home-tab">
                @foreach($earticles as $val)
                  <h2 class="TXT-BLUE mb-1">
                    <a href="{{ url($val['url']) }}" class="TXT-BLUE">{{ $val['title'] }}</a>
                  </h2>
                  <p class="TXT-GREEN mb-1"><a href="{{ url($val['url']) }}" class="TXT-GREEN">{{ url($val['url']) }}</a></p>
                  <p class="TXT-BLK">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val['description'])))),$limit = 400, $end = '...') }}
                  </p>
                @endforeach            
              </div>
          @endif

          @if(sizeof($authors) != 0)
              <div class="tab-pane fade show" id="tab-authors" role="tabpanel" aria-labelledby="home-tab">
                @foreach($authors as $val)
                  <h2 class="TXT-BLUE mb-1">
                    <a href="{{ url($val['url']) }}" class="TXT-BLUE">{{ $val['title'] }}</a>
                  </h2>
                  <p class="TXT-GREEN mb-1"><a href="{{ url($val['url']) }}" class="TXT-GREEN">{{ url($val['url']) }}</a></p>
                  <p class="TXT-BLK">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val['description'])))),$limit = 400, $end = '...') }}
                  </p>
                @endforeach            
              </div>
          @endif
          <!-- knowledgebank -->

           @if(sizeof($knowledgebank) != 0)
              <div class="tab-pane fade show" id="tab-knowledgebank" role="tabpanel" aria-labelledby="home-tab">
                @foreach($knowledgebank as $val)
                  <h2 class="TXT-BLUE mb-1">
                    <a href="{{ url($val->url) }}" class="TXT-BLUE">{{ $val->title }}</a>
                  </h2>
                  <p class="TXT-GREEN mb-1"><a href="{{ url($val->url) }}" class="TXT-GREEN">{{ url($val->url) }}</a></p>
                  <p class="TXT-BLK">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val->description)))),$limit = 400, $end = '...') }}
                  </p>
                @endforeach            
              </div>
          @endif
           <!-- End knowledgebank -->

            <!-- knowledgebank -->

           @if(sizeof($industryupdates) != 0)
              <div class="tab-pane fade show" id="tab-industryupdates" role="tabpanel" aria-labelledby="home-tab">
                @foreach($industryupdates as $val)
                  <h2 class="TXT-BLUE mb-1">
                    <a href="{{ url($val->url) }}" class="TXT-BLUE">{{ $val->title }}</a>
                  </h2>
                  <p class="TXT-GREEN mb-1"><a href="{{ url($val->url) }}" class="TXT-GREEN">{{ url($val->url) }}</a></p>
                  <p class="TXT-BLK">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val->description)))),$limit = 400, $end = '...') }}
                  </p>
                @endforeach            
              </div>
          @endif
           <!-- End industryupdates -->
        </div> 
      </div> 
    </div>
    @endsection