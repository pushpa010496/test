 @php $tempmonth=$date; @endphp
 @foreach($data as $val)
 @php $dd=date('F Y', strtotime($val ->start_date));  @endphp
 @if($tempmonth != $dd)

 <h2 class="text-uppercase PF-BrdrBbbbdc2 PF-PB5 PF-TXTRED"><?php echo $dd; ?><span class="PF-IntigerStyle"></span></h2>
 @php $tempmonth=$dd;  @endphp
 @endif

 <!-- EVENT -->
 <li class="media PF-Brdrnone mb-2" data-date='{{ $dd }}'>
 	<div class="media-left">
 		<div class="PF-BrdrDDD text-center PF-P5">
 			<h3>{{ date('d', strtotime($val->start_date)) .' - '.date('d', strtotime($val->end_date))  }} </h3>
 			<div class="clearfix"></div>
 			<div class="text-uppercase pt-2">{{  date('M Y', strtotime($val->start_date)) }}</div>
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