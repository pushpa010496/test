<?php
echo '<?xml version="1.0"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($pages as $page)  
    @if(!empty($page->event_url))
    <url>
        <loc>{{ url('/') }}/events/{{$page->event_url}}</loc>
    </url>
    @endif
    @endforeach
</urlset>