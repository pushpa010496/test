 @foreach($data as $val)
 <div class="col-lg-12 mb-4">			    
 	<div class="shadow border border-light p-3">
 		<div class="row">
 			<div class="col-lg-9">
 				<h3><a href="{{route('reports.url',[$val->report_url])}}">{{$val->title}}</a></h3>
 			</div>
 			<div class="col-lg-3 text-right text-muted">{{ date('l, M j, Y', strtotime($val->publication_date)) }}</div>
 		</div>

 		<div class="BorBotDash mb-1"></div>

 		<p class="mb-0"> 
 			{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val->short_description )))),$limit = 300, $end = '...') }}
 			<a href="{{route('reports.url',[$val->report_url])}}" class="float-right">
 				<strong><i class="fa fa-size fa-angle-double-right"></i><i class="fa fa-size fa-angle-double-right"></i></strong>
 			</a>
 		</p>
 	</div>	            
 </div>  
 @endforeach

