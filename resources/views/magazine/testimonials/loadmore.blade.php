 @foreach($data as $val)
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 PF-BrdrBEEE mt-4">
 	<div class="row">
 		<p class="col-lg-8 col-md-8 col-sm-9 col-xs-12 pt-3">
 			<span>
 				<img src="{{config('app.url')}}images/Left_quote_14.png" class="mr-2 PF-MTN10" alt="quotes">
 			</span>
 			<!-- {{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))),$limit = 400, $end = '...') }} -->
 			{{ preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))) }}
 			<span>
 				<img src="{{config('app.url')}}images/right_quote_14.png" class="ml-2 PF-MTN10" alt="quotes">
 			</span>
 		</p>
 		<h2 class="col-lg-4 col-md-4 col-sm-3 col-xs-12 PF-BGf7f7f7 mb-0 p-3"><span class="PF-TXTRED">{{$val->name}}</span><br>
 			<p class="small mb-0">{{$val->designation}}, {{$val->company}}</p>
 		</h2>
 	</div>
 </div>
 @endforeach