 @foreach($data as $val)
 <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
  <h2 class="mb-1 PF-TXTBlk000">
    <a href="{{ route('newswires.url',[$val->news_url])}}" title="{{$val->title_tag}}" class="PF-TXTBlk000">{{ $val->news_head }}</a>
  </h2>
  <small class="PF-Caps text-muted">{{ date('l, F d, Y ', strtotime($val->pr_dt)) }}</small>
  <h5 class="PF-Caps text-muted">
   {{$val->issuer }}
  </h5>
  {{-- <p class="PF-TXTBlk pt-1">{{$val->home_description}}</p>             --}}
   <p class="mb-0">{{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 250, $end = '...') }} </p>
</div> 
@endforeach