@foreach($data as $val)
<div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list mb-3">
 <h2 class="mb-1 PF-TXTBlk000">
   <a href="{{ route('articles.url',[$val->url])}}" title="{{$val->title_tag}}" class="PF-TXTBlk000">{{ $val->title}}</a>
 </h2>
 <h5 class="PF-Caps text-muted">{{ $val->sub_title }}</h5>
<!--   {!!$val->short_description!!} -->
   {{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
</div> 
@endforeach