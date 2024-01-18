<?php
echo '<?xml version="1.0"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">


   @foreach($cat_list as $page)
     @if(!empty($page->slug))
     <url>
        <loc>{{ url('/') }}/category/{{$page->slug}}/sitemap.xml</loc>      
    
    </url>
    @endif
    @endforeach
  
       
   
     <url>
        <loc>{{ url('/') }}/projects/sitemap.xml</loc>    
    </url>
      <url>
        <loc>{{ url('/') }}/tenders/sitemap.xml</loc>    
    </url>
   
    <url>
        <loc>{{ url('/') }}/articles/sitemap.xml</loc>
    </url>
     <url>
        <loc>{{ url('/') }}/whitepapers/sitemap.xml</loc>
    </url>

     <url>
        <loc>{{ url('/') }}/video/sitemap.xml</loc>
    </url>
    <url>
        <loc>{{ url('/') }}/interviews/sitemap.xml</loc>
    </url>
   
    <url>
        <loc>{{ url('/') }}/news/sitemap.xml</loc>
    </url>
     <url>
        <loc>{{ url('/') }}/pressreleases/sitemap.xml</loc>
    </url>
     <url>
        <loc>{{ url('/') }}/events/sitemap.xml</loc>
    </url>
    <url>
        <loc>{{ url('/') }}/suppliers/sitemap.xml</loc>
    </url>

    <url>
        <loc>{{ url('/') }}/registration</loc>
    </url>
    <url>
        <loc>{{ url('/') }}/get-listed</loc>
    </url>
    <url>
        <loc>{{ url('/') }}/contactus</loc>
    </url>  
    <url>
        <loc>{{ url('/') }}/post-requirement</loc>
    </url>
    <url>
        <loc>{{ url('/') }}/postevent</loc>
    </url> 
    <url>
        <loc>{{ url('/') }}/mediapack-download</loc>
    </url> 
    <url>
        <loc>{{ url('/') }}/clientele</loc>
    </url> 
    <url>
        <loc>{{ url('/') }}/partners</loc>
    </url> 
    <url>
        <loc>{{ url('/') }}/aboutus</loc>
    </url> 
    <url>
        <loc>{{ url('/') }}/terms-conditions</loc>
    </url>
    <url>
        <loc>{{ url('/') }}/sitemap</loc>
    </url>                     
</urlset>