@extends('../layouts/app')
@section('style')
<style type="text/css">
  .media-body{word-break: break-all;}
</style>
@endsection

@section('content')



    <div class="clearfix"></div>


      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('/industryupdates')}}">Industry Updates</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">{{trans('messages.events_title')}}</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.events_title')}}</h1>            
                </div>
                <p>{{trans('messages.events_text')}}</p>
                <p>Please <a href="{{ url('post-event') }}">click here</a> to post Events and Exhibitions</p>
              </div>


              <div class="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                 <nav>
                  @php $months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'); @endphp

                  @if($currentyear>0)
                  <ul class="pagination m-0">
                    <li> <a href="" class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents">Archives - <span class="PF-IntigerStyle">{{ date('Y') }}</span></a> </li>
                    @foreach ($months as $key => $value) 
                    @if ($key >= date('n')) 
                    <li><a href="{{url('/')}}/events/month/{{$key}}/year/{{date('Y')}}" class="PF-BrdrRds0">{{ $value }}</a></li>
                    @else
                    <li><a href="#" class="PF-BrdrRds0 PF-Bgeee">{{$value}}</a></li>
                    @endif
                    @endforeach
                  </ul>
                  @endif

                  <!-- Callender Ends Here & New Calander Starts Here -->
                  <!-- Next Year Archives -->

                  @if($nextyear>0)
                  <ul class="pagination m-0 pt-2">
                    <li> <a href="" class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle">{{date('Y')+1 }}</span></a> </li>
                    @foreach ($months as $key => $value) 
                    <li><a href="{{url('/')}}/events/month/{{$key}}/year/{{date('Y')+1}}" class="PF-BrdrRds0">{{$value}}</a></li>
                    @endforeach
                  </ul>
                  @endif
                  <!-- End Of Next Year Archives -->
                </nav>
              </div>
            </div>

            <ul class="media-list col-lg-12 p-0" id="main_content">               
              @php $tempmonth=""; @endphp
              @foreach($data as $val)
                @php $dd=date('F Y', strtotime($val -> start_date));  @endphp
                @if($tempmonth!=$dd)
                  <h2 class="text-uppercase PF-BrdrBbbbdc2 PF-PB5 PF-TXTRED"><?php echo $dd; ?><span class="PF-IntigerStyle"></span></h2>
                  @php $tempmonth=$dd;  @endphp
                @endif

              <!-- EVENT -->
              <li class="media PF-Brdrnone mb-2"  data-date='{{ $dd }}'>
                <div class="media-left">
                  <div class="PF-BrdrDDD text-center p-1">
                   <h3>{{ date('d', strtotime($val->start_date)) .' - '.date('d', strtotime($val->end_date))  }} </h3>
                    <div class="clearfix"></div>
                     <div class="text-uppercase pt-2"> {{  date('M Y', strtotime($val->start_date)) }}</div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="media-body pl-2 PF-PT5">
                  <h3 class="media-heading font-weight-bold">{{ $val->title }}</h3>
                  <h5 class="mb-1">{{$val->venue}}</h5>
                  <h5 class="mb-1">{{$val->event_organiser}}</h5>
                  <h5 class="mb-1 text-lowercase"><a class="PF-HdngsClrHvr" href="mailto:{{$val->email}}">{{$val->email}}</a></h5>
                  <h5 class="mb-1 text-lowercase"><a class="PF-HdngsClrHvr" href="{{$val->web_link}}" target="_blank" rel="nofollow">{{$val->web_link}}</a></h5>
                </div>
              </li>
              <!-- END EVENT -->
              @endforeach
            </ul>



            
            


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
<script type="text/javascript">
  var url = "{{ url('events/filtermore') }}";
  $(document).ready(function(){
 
// var is_loading = false; 
// var num_messages = {{ $data_count }};
// var loaded_messages = 50;
// $(function() {
//     $(window).scroll(function() {
//         if($(window).scrollTop() + $(window).height() == $(document).height()) {
//             if (is_loading == false) { 
//                 is_loading = true;
//                 $('#loader').show();
              
//                    var date = $("li.media:last-child").attr('data-date');
//                 $.ajax({
//                     url: url + '/' + loaded_messages +'/'+ "{{ date('n', strtotime($tempmonth)) }}/{{ date('Y', strtotime($tempmonth)) }}/" + date,
//                     type: 'get',
                    
//                     success:function(data){
//                        $('#main_content').append(data);
//                         is_loading = false;
//                         loaded_messages += 50;
//                     }
//                 });
//                 if(loaded_messages >= num_messages - 1)
//                 {
//                   $('#loader').hide();                           
//                 }
//               }
//        }
//     });
// });





  var is_loading = false; 
  var num_messages = {{ $data_count }};
  var loaded_messages = 50;
  var intervals = 0;
  setInterval(function(){    
   if(loaded_messages <= num_messages){
    loadmore();    
  }
  
  intervals += 1;
},4000);

  function loadmore(){
        if (is_loading == false) { 
          is_loading = true;
          $('#loader').show();

          var date = $("li.media:last-child").attr('data-date');
          $.ajax({
            url: url + '/' + loaded_messages +'/'+ "{{ date('n', strtotime($tempmonth)) }}/{{ date('Y', strtotime($tempmonth)) }}/" + date,
            type: 'get',

            success:function(data){
             $('#main_content').append(data);
             is_loading = false;
             loaded_messages += 50;
           }
         });
          if(loaded_messages >= num_messages - 1)
          {
            $('#loader').hide();                           
          }
        }
      }

});
</script>
@endsection