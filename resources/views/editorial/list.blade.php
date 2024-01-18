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
                <a href="{{ url('/editorialsection') }}">Editorial Section</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page"> {{ str_replace('-', ' ', ucwords(Request::segment(count(Request::segments())))) }}</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2  text-capitalize"> {{ str_replace('-', ' ', ucwords(Request::segment(count(Request::segments())))) }}</h1>  


                </div>
               
                @if($healthcarectg->count() == 0)
                <p> Description for Category</p>
                 
                @else
                {!! $healthcarectg[0]->category->description !!}
                @endif 
              </div>   

          
              @foreach($healthcarectg as $healthcareinfo)
            
             
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
               <h2 class="mt-3 mb-0 PF-TXTBlk000">
                
                   <a href="{{url(Request::segment(count(Request::segments())) .'/'. $healthcareinfo->url)}}" title="{{$healthcareinfo->title}}" class="PF-TXTBlk000">{{$healthcareinfo->title}}</a>
                              
               </h2>
                <h3 class="PF-Caps text-muted small mb-0 pt-1">{{$healthcareinfo->sub_title}}</h3>
              {{--   <p class="PF-TXTBlk pt-1">{{$healthcareinfo->short_description}}...</p>  --}}

                 <p class="m-0 text-justify text-dark">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($healthcareinfo->short_description)))),$limit = 350, $end = '...') }}</p>           
              </div> 
              @endforeach

              <div  id="main_content"></div>
              <div class="clearfix"></div>
              <h3 class="text-center PF-ArrowAnimation" >
                <span id="loader" style="cursor:pointer;">
                  <img src=" {{ config('app.url').'/images/ajax-loader.gif' }}">
                </span>
              </h3>
            </div>
            <!-- // RIGHT SECTION // --> 

            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">                            
                @include('layouts.partials._square_banner')
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>

      </div>


@endsection

@section('scripts')
<script type="text/javascript">
  
  var loadurl = "http://www.europeanhhm.com/editorialloadmore";
  var slug = "{{ Request::segment(1) }}";
  $(document).ready(function(){
    var is_loading = false; 
    var num_messages = {{ $data_count }};
    var loaded_messages = 0;
    var intervals = 0;
    setInterval(function(){    
     if(loaded_messages <= num_messages){
      loadmore();    
    }
    console.log(intervals);
    intervals += 1;
  },3000);
    function loadmore(){
    if (is_loading == false) { 
            is_loading = true;
            $('#loader').show();
             loaded_messages += 10;
            $.ajax({
              url: loadurl + '/' + slug +'/'+ loaded_messages,
              type: 'get',              
              success:function(data){
               $('#main_content').append(data);
               is_loading = false;              
             }
           });
              if(loaded_messages >= num_messages - 1)
              {
                  is_loading = true;
                $('#loader').hide();                           
              }
           }
         }
  });

//   $(document).ready(function(){
//   var is_loading = false; 
//   var num_messages = {{ $data_count }};
//   var loaded_messages = 50;
//     setInterval(function(){    
//      if(loaded_messages <= num_messages){
//       loadmore();    
//     }
//     if(loaded_messages >= num_messages - 1)
//       {
//         $('#loader').hide();                           
//       }

//   },3000);

// function loadmore(){
//    if (is_loading == false) {
//       is_loading = true;
//       $('#loader').show();
//       loaded_messages += 10;
//       $.ajax({
//         url: url + '/' + slug +'/'+ loaded_messages,
//         type: 'get',
//         success:function(data){
//          $('#main_content').append(data);
//          is_loading = false;
//        }
//      });
//       if(loaded_messages >= num_messages - 1)
//       {
//         $('#loader').hide();                           
//       }
//   }
// }

  
// });
</script>
@endsection