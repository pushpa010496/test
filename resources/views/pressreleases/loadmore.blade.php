 @foreach($data as $val)
 <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
  <h2 class="mb-0 PF-TXTBlk000">
    <a href="{{ route('pressreleases.url',[$val->url])}}" title="{{$val->img_title}}" class="PF-TXTBlk000">{{ $val->title}}</a>
  </h2>
  <small class="PF-Caps text-muted">{{ date('l, F d, Y ', strtotime($val->date)) }}</small>
  
    <p>{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 250, $end = '...') }} </p> 
</div> 
@endforeach