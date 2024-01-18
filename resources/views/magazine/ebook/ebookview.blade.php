<!DOCTYPE html>
<html>
<head>
  <title>Ebook</title>
  @php
    header('X-XSS-Protection:0');
  @endphp
</head>
<body>

{{--   @if(!empty($ebook))
      <div data-configid="2216358/{{$ebook->ebook_script}}" style="width:1006px; height:826px;" class="issuuembed"></div><script type="text/javascript" src="https://e.issuu.com/embed.js" async="true"></script>

  @endif --}}
  <div class="media-left" style="margin: 10px"> 
                <img src="{{ config('app.url').'ebooks/Thankyou_page.jpg' }}" alt="Coming" title="Coming"> 
                </div>
                {{--   @if(!empty($ebook))

    {{--       @if($ebook->script_type == 0)
          <div data-configid="2216358/{{$ebook->ebook_script}}" style="width:1006px; height:826px;" class="issuuembed"></div><script type="text/javascript" src="https://e.issuu.com/embed.js" async="true"></script>
          @else
           {!!$ebook->ebook_script!!}
          <!--  <iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:326px;" src="//e.issuu.com/embed.html?d=pfa_36_-_2019&u=verticaltalk"></iframe>        --> 
          @endif
        
        
        @endif
        --}}
</body>
</html>

