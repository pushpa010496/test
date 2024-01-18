 @foreach($data as $val)
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-list mb-3">
 	<h2 class="mb-1 PF-TXTBlk000">
 		<a href="{{ route('interviews.url',[$val->url])}}" title="{{ $val->title_tag }}" class="PF-TXTBlk000">{{ $val->title}}</a> 		
 	</h2>
 	<h5 class="PF-Caps text-muted">{{ $val->name }}</h5>
 	<h6 class="PF-Caps text-muted">{{ $val->designation }}</h6>
 	{!!$val->description!!}
 </div> 
 @endforeach