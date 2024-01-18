 @foreach($data as $val)
 <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
 	<h2 class="mb-1 PF-TXTBlk000">
 		<a href="{{ route('news.url',[$val->url])}}" title="Patient Experience" class="PF-TXTBlk000">{{ $val->title}}</a>
 	</h2>
 	<small class="PF-Caps text-muted">{{ date('l, F d, Y ', strtotime($val->date)) }}</small>
 	{{-- <p class="PF-TXTBlk">{{$val->home_description}}</p> --}}
 	 <p>{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 250, $end = '...') }} </p>
 </div> 
 @endforeach

