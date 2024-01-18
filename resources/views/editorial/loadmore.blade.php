 @foreach($data as $val)
 <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
 	<h2 class="mt-3 mb-0 PF-TXTBlk000">
 		@if($current_issue->id === $val->issue->id)
 		<a href="{{url('latest-ebook')}}" title="{{$val->title}}" class="PF-TXTBlk000">{{$val->title}}</a>
 		@else
 		<a href="{{url($cat->url) .'/'. $val->url}}" title="{{$val->title}}" class="PF-TXTBlk000">{{$val->title}}</a>
 		@endif                 
 	</h2>
 	<h3 class="PF-Caps text-muted small mb-0 pt-1">{{$val->sub_title}}</h3>
 	{{-- <p class="PF-TXTBlk pt-1">{{$val->short_description}}...</p>             --}}
 	<p class="m-0 text-justify text-dark">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 350, $end = '...') }}</p> 
 </div> 
 @endforeach

