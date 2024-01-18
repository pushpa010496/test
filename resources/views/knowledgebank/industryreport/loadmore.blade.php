 @foreach($data as $val)
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-list">
 	<h2 class="mb-1 PF-TXTBlk000">
 		<a href="{{ route('healthcare-reports.url',[$val->url])}}" title="{{ $val->titlel_tag}}" class="PF-TXTBlk000">{{ $val->title1}}</a>
 	</h2>
 	
 	<p class="PF-TXTBlk">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 350, $end = '...') }}</p>            
 </div> 
 @endforeach