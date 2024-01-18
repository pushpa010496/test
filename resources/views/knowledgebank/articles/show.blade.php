@extends('../layouts/app')
@section('style')

@endsection

@section('content')
<script type="text/javascript">
   sessionStorage.setItem('advertOnce','true');
</script>
<div class="clearfix"></div>

  <div class="container">

    <div class="row PF-MobP030">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/knowledgebank') }}">Knowledge Bank</a>
          </li>
          <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><a href="{{url('articles')}}">Pharma Articles</a></li>
        </ol>
      </nav>
    </div>

    <div class="row PF-WytBG">
      <!-- // RIGHT SECTION --> 
      <div class="col-lg-9 col-xs-12 PF-BrdrDDD p-1">
       
        <div class="col-lg-12 col-xs-12">
          <h1 class="pt-2 PF-TXTRED">{{ $data->title}}</h1>
          <h2 class="PF-Quotes mt-0">{!! $data->sub_title !!}</h2>        
        </div> 

        <!-- Author Details -->
        @if($data->authors->count() != 0)
        
          <div class="col-lg-12 col-xs-12">
            @foreach($data->authors as $val)
             @if($val->title !="No Author")
            <h3 class="PF-TXTRED mt-2">{{ $val->title }},

            <span class="PF-TXTBlk" style="font-size:13px;">  {{ strip_tags(ucfirst($val->authorbio)) }}</span>
          </h3>
             @endif
            @endforeach
          </div>

          @endif
          <!-- End Author Details -->
          @if($data->abstract)
          <div class="col-lg-12 pt-2 pb-3"> 
            <div class="media bloq-bg">  
              <div class="col-lg-12">
                <blockquote>
                  <h4 class="PF-Quotes mb-0">{!! $data->abstract !!}</h4>
                </blockquote>
              </div>
            </div>
          </div>
          @endif

          <!-- MAIN BODY -->
          <div class="col-lg-12">
            {!!$data->main_body!!}
          </div> 
          <!-- END MAIN BODY -->

          <!-- AUTHOR BIO -->
            @if($data->authors->count() != 0)
           @foreach($data->authors as $val)
             @if($val->title !="No Author")
          <div class="col-lg-12"> 
            <div class="media PF-BGf7f7f7 PF-BrdrDDD mb-4 author-brdr">   
              <div class="row">  
              @if($val->image)       
                <div class="col-lg-2 pr-0" align="text-center">
                  <img class="img-fluid" src="{{ config('app.url').'/contributors/'.$val->image }}" alt="{{@$val->alt_tag}}" title="{{@$val->title_tag}}" style="min-width: 110px;"> 
                </div>  
                @else
                    <div class="col-lg-2 pr-0" align="text-center">
                <img class="img-fluid shadow-sm" src="{{ config('app.url').'contributors/' }}/1421757887-img-contributer.jpg" style="min-width: 110px;" />
                </div>
                @endif
                <div class="col-lg-10">
                  <div class="pt-1">
                    <p class="mb-0"> {!!$val->details!!}</p>
                  </div>
                </div>
              </div>                   
            </div>
          </div>
          @endif
          @endforeach
            @else
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="row PF-BGf7f7f7 PF-BrdrDDD author-brdr">            
                      <div class="col-lg-2 p-2 text-center"> 
                        <img class="img-fluid shadow-sm" src="{{ config('app.url').'contributors/' }}/1421757887-img-contributer.jpg" style="min-width: 110px;" />

                      </div>
                      <div class="col-lg-10 p-2">                        
                       
                      </div>
                    </div>
                  </div>
                @endif
          <!-- END AUTHOR BIO -->
        
        </div>
        <!-- // RIGHT SECTION // --> 

      <!--// RIGHT SECTION - Square Banners -->
      <div class="col-lg-3 col-xs-12 text-center"> 
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