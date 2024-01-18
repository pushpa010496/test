<style>
  .alert-warning{
    padding: 0px;
    background-color: #f03e3e;
    text-align: center;
    color: #fff;
    border:0px;
    border-radius: 0px;
    font-size: 18px;
    font-family: Century Gothic;
  }
  .close{line-height: 14px;}
  .alert .btn-warning {
    font-size: 16px;
    color: #222;
    background-color: #fffe65;
    border-color: #fffe65;
    border-radius: 15px;
  }
  .dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0 !important;
}
.dropleft .dropdown-menu {
    top: 0;
    left: auto;
    right: 100%;
    margin-top: 0;
    margin-right: 0 !important;
}
</style>
 <!--
<div id="notifybar" class="alert alert-warning alert-dismissible fade show text-center mb-0" role="alert">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-12 pt-1 align-self-center">
        <p class="mb-1">Welcome to our newly launched magazine portal. Subscribe & stay tuned.</p>
      </div>

      <div class="col-md-4 col-sm-4 col-12 text-center p-1">
        <a href="{{url('magazine-subscription')}}" target="_blank" class="btn btn-sm btn-warning text-dark pl-3 pr-3 font-weight-bold">Subscribe for Free</a>
      </div>
    </div>
  </div>
  <button type="button" class="close" id="notifybarClose" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> </br>
-->
  <!-- <div class="" align="center">
                   <a href="https://ad.doubleclick.net/ddm/jump/N1229050.3016915PHARMAFOCUSASIA/B27597841.334033149;sz=728x90" target="_blank" title="">
                      <img class="img-fluid border mt-2" src="https://ad.doubleclick.net/ddm/ad/N1229050.3016915PHARMAFOCUSASIA/B27597841.334033149;sz=728x90" alt="" />
                    </a>
              </div>  -->
              <!-- <div class="" align="center">
              <ins class='dcmads' style='display:inline-block;width:728px;height:90px'
                 data-dcm-placement='N1229050.3016915PHARMAFOCUSASIA/B27597841.334033149'
                    data-dcm-rendering-mode='script'
                   data-dcm-https-only
                    data-dcm-gdpr-applies='gdpr=${GDPR}'
                       data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
                      data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
                    data-dcm-ltd='false'
                   data-dcm-resettable-device-id=''
                 data-dcm-app-id=''>
                         <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
                        </ins>
                        </div>   -->

    

   @if(@$banners) 
      <div class="container pt-2" align="center">
          @foreach($banners as $k=>$homebanner12)   
            @foreach($homebanner12->pagesCount as $j=>$pcount)
              @if($homebanner12->positions[0]->id == 1 and $pcount->id == $page_id)
                @if($homebanner12->type == 'script')
                     {!! $homebanner12->script !!}
                  @else
                    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->img_alt}}">
                      <img class="img-fluid border mt-2" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_alt}}" />
                    </a>
                  @endif
                @else
              @endif  
            @endforeach
          @endforeach 
          
       <!-- static banner-->
            
      </div>
   @endif
   
  
    <!-- End Prime Banner -->
   
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-5 col-12 pt-1 pb-1">
          <a href="{{url('/')}}">
            <img src="{{ config('app.url') }}images/logo1.png" class="PF-MT5 PF-MB5" title="{{trans('messages.sitename')}}" alt="{{trans('messages.sitename')}}">
          </a>
        </div>
        
        <div class="col-lg-4 offset-lg-5 col-md-5 offset-md-2 col-sm-5 col-9 pt-1 mb-2 align-self-center float-right">  
          <span class="pt-2 d-none d-sm-block"></span>
         {{Form::open(['url' => 'search'])}}
          <div class="input-group col-md-12" id="main-search">
            <input type="text" name="q" class="form-control input-md" id="autoComplete" required placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i></button>
              </span>
            </div>
            {{Form::close()}}
        </div>  
        <div class="col-lg-2 col-md-2 col-sm-2 col-3 pt-1 pb-1 align-self-center navbar-expand-lg">
          <button class="navbar-toggler border bg-light" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon pt-1"><i class="fa fa-bars" aria-hidden="true"></i></span>
          </button> 
        </div>

      </div>
    </div>
<header>
<!-- <div class="" align="center">
                   <a href="javascript:void(0)" onclick="trackOutboundLink('https://track.pharmafocusasia.com/20220401053504169902004/'); return false;" target="_blank" title="Booming antibodies 2001">
                      <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/pharma-focus-asia-800x220.jpg" alt="Booming antibodies 2001" />
                    </a>
              </div>
           <SCRIPT language='JavaScript1.1' SRC="https://ad.doubleclick.net/ddm/trackimpj/N1440248.3016915PHARMAFOCUSASIA/B27321744.331763911;dc_trk_aid=523493969;dc_trk_cid=167255106;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?"></SCRIPT> -->
     @if(@$banners) 
      <div class="container" align="center">
          @foreach($banners as $k=>$homebanner12)   
            @foreach($homebanner12->pagesCount as $j=>$pcount)
              @if($homebanner12->positions[0]->id == 12 and $pcount->id == $page_id)
                @if($homebanner12->type == 'script')
                     {!! $homebanner12->script !!}
                  @else
                    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->img_alt}}">
                      <img class="img-fluid border mt-2" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_alt}}" />
                    </a>
                  @endif
                @else
              @endif  
            @endforeach
          @endforeach 
      </div>
   @endif
   <div class="pb-2"></div>

 <?php 
   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

     $ip=$_SERVER['HTTP_CLIENT_IP'];
   }
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
     $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
   } else {
     $ip=$_SERVER['REMOTE_ADDR'];}
?>

                   
      <!-- Start Alexa Certify Javascript -->
      <script type="text/javascript">
        _atrk_opts = { atrk_acct:"tbBsn1QolK10bm", domain:"asianhhm.com",dynamic: true};
        (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
      </script>
      <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=tbBsn1QolK10bm" style="display:none" height="1" width="1" alt="" /></noscript>
    <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom">         

      <div class="collapse navbar-collapse justify-content-lg-center" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">HOME <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{url('/editorialsection')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EDITORIAL SECTION</a>
            <div role="menu" class=" dropdown-menu">                    
            <a class="dropdown-item" href="{{url('/healthcare-management')}}">Healthcare Management</a>
                <a class="dropdown-item" href="{{url('/medical-sciences')}}">Medical Sciences</a>
                <a class="dropdown-item" href="{{url('/surgical-speciality')}}">Surgical Speciality</a>
                <a class="dropdown-item" href="{{url('/diagnostics')}}">Diagnostics</a>
                <a class="dropdown-item" href="{{url('/technology-equipment')}}">Technology, Equipment &amp; Devices</a>
                <a class="dropdown-item" href="{{url('/facilities-operations')}}">Facilities &amp; Operations</a>
                <a class="dropdown-item" href="{{url('/information-technology')}}">Information Technology </a>
              <!--  <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Expert Talk </a> -->
              {{-- <a class="dropdown-item" href="{{url('/facilities-operations')}}">Facilities &amp; Operations</a> --}}
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/get-published')}}">GET PUBLISHED </a>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('/magazine')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MAGAZINE</a>
              <div role="menu" class=" dropdown-menu">
              <!-- <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Previous Issues</a> -->  
              <!--  <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Forthcoming Issue</a> -->
               <!-- <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">e-Book Archives</a>  -->
              <!--  <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Foreword</a>   -->
                <a class="dropdown-item" href="{{url('/author-guidelines')}}">Author Guidelines</a>
               <!-- <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Advisory Board</a>   -->
                <a class="dropdown-item" href="{{url('/editorial-calendar')}}">Editorial Calendar</a>
               <!-- <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Testimonials</a>   -->
              </div>
          </li>
          
           

          <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">E-NEWSLETTER</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="{{url('/e-newsletter-subscribe')}}">Subscribe</a>
              </div>
          </li> -->

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('/knowledgebank')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KNOWLEDGE BANK</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="{{url('/articles')}}">Articles</a>
              <!--  <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Interviews</a>  -->
                <a class="dropdown-item" href="{{url('/technotrends')}}">Techno Trends</a>
                <a class="dropdown-item" href="{{url('/projects')}}">Projects</a>
               <!-- <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Industry Reports</a> -->
                <a class="dropdown-item" href="{{url('/researchinsights')}}">Research Insights</a>
                <a class="dropdown-item" href="{{url('/bookshelf')}}">Book Shelf</a>
               <!-- <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Case Studies</a>  -->
              <!-- <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">White Papers</a> -->
              </div>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('/industryupdates')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INDUSTRY UPDATE</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="{{url('/news')}}">News</a>
                <a class="dropdown-item" href="{{url('/pressreleases')}}">Press Releases</a>
                <a class="dropdown-item" href="{{url('/events')}}">Events</a>
               <!--  <a class="dropdown-item" href="{{url('/reports')}}">Reports</a> -->
              </div>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('/advertise')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADVERTISE</a>
              <div role="menu" class=" dropdown-menu">
                <!-- <a class="dropdown-item" href="{{url('/advertorials')}}">Advertorials</a>  -->
                <a class="dropdown-item" href="{{url('/print')}}">Print</a>
                <a class="dropdown-item" href="{{url('/online')}}">Online</a>
                <a class="dropdown-item" href="{{url('/target-market')}}">Target Market</a>
                <a class="dropdown-item" href="{{url('/target-audience')}}">Target Audience</a>
                <a class="dropdown-item" href="{{url('/tech-specs')}}">Tech Specs</a>
                <a class="dropdown-item" href="{{url('/mediapacks')}}">Mediapack</a>
                <a class="dropdown-item" href="{{url('/terms')}}">Terms</a>
              <!--  <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Clientele</a>  -->
                 
              </div>
          </li>
         
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{url('subscribe')}}">SUBSCRIBE</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{url('webinars')}}" target="_blank">WEBINARS</a>
          </li>

          <li class="nav-item dropdown" style='color"#ffffff;'>
            <button class='btn btn-sm btn-danger' >
              <a class="nav-link dropdown-toggle" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color:#ffffff !important;'>SUBSCRIBE</a>
</button>
              <div role="menu" class=" dropdown-menu">
                  <div class='nav-item dropdown dropleft'>
                <a class="nav-link dropdown-toggle" id="dropdown10" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">E-NEWSLETTER
                
</a>
 <div role="menu" class="dropdown-menu ">
                  <a class="dropdown-item" href="{{url('/e-newsletter-subscribe')}}">E-Newsletter Subscription</a>
              <!--    <a class="dropdown-item" style="background-color: #ffffff; color:#808080;">Archives</a> -->
              
             </div>
</div>
<div class='nav-item dropdown dropleft'>
               <a class="nav-link dropdown-toggle" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  > MAGAZINE   </a>
                  <div role="menu" class=" dropdown-menu">
                  <a class="dropdown-item" href="{{url('/subscribe')}}">Magazine Subscription</a>
                 <!-- <a class="dropdown-item" style="background-color: #ffffff; color:#808080;"> Previous Issues</a>  -->
              
             </div>
                
                </div>
              </div>
              
          </li>
        </ul>
      </div>
    </nav> 
</header>
<!-- leader board banner -->
             <!-- <div class="" align="center">
                   <a href="javascript:void(0)" onclick="trackOutboundLink('https://track.pharmafocusasia.com/20220401053504169902004/'); return false;" target="_blank" title="Booming antibodies 2001">
                      <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/pharma-focus-asia-800x220.jpg" alt="Booming antibodies 2001" />
                    </a>
              </div>
           <SCRIPT language='JavaScript1.1' SRC="https://ad.doubleclick.net/ddm/trackimpj/N1440248.3016915PHARMAFOCUSASIA/B27321744.331763911;dc_trk_aid=523493969;dc_trk_cid=167255106;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?"></SCRIPT> -->
  
  
  
 

@if(@$banners)
<!--
  <div align="center" class="mt-2 mb-2 hidden-xs">
       @foreach($banners as $k=>$homebanner12)   
         @foreach($homebanner12->pagesCount as $j=>$pcount)
           @if($homebanner12->positions[0]->id == 3 and $pcount->id == $page_id)
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
           @else
           @endif  
         @endforeach
       @endforeach
  </div>
-->
@endif
<!--
    <div class="mt-2 mb-2 Repligen-China" align="center" id="Repligen-China">
          <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20210803095645882225990'); return false;" target="_blank" title="C-Tech Analytical Solutions">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/repligen/repligen-china.jpg" alt="C-Tech Analytical Solutions" />
        </a>
    </div>

    <div class="mt-2 mb-2 Repligen-Japan" align="center" id="Repligen-Japan">
          <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202108030956451435289548'); return false;" target="_blank" title="C-Tech Analytical Solutions">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/repligen/repligen-japan.jpg" alt="C-Tech Analytical Solutions" />
        </a>
    </div>

    <div class="mt-2 mb-2 Repligen-Korea" align="center" id="Repligen-Korea">
          <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202108030956451738144329'); return false;" target="_blank" title="C-Tech Analytical Solutions">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/repligen/repligen-korea.jpg" alt="C-Tech Analytical Solutions" />
        </a>
    </div>

    

    <div class="mt-2 mb-2 Repligen-China-SoloVPE" align="center" id="Repligen-China-SoloVPE">
          <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202108030956451012528081'); return false;" target="_blank" title="C-Tech Analytical Solutions">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/repligen/repligen-china-solovpe.jpg" alt="C-Tech Analytical Solutions" />
        </a>
    </div>

    <div class="mt-2 mb-2 Repligen-Japan-SoloVPE" align="center" id="Repligen-Japan-SoloVPE">
          <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20210803095645716450038'); return false;" target="_blank" title="C-Tech Analytical Solutions">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/repligen/repligen-japan-solovpe.jpg" alt="C-Tech Analytical Solutions" />
        </a>
    </div>

    <div class="mt-2 mb-2 Repligen-Korea-SoloVPE" align="center" id="Repligen-Korea-SoloVPE">
          <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20210803095645681449711'); return false;" target="_blank" title="C-Tech Analytical Solutions">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/repligen/repligen-korea-solovpe.jpg" alt="C-Tech Analytical Solutions" />
        </a>
    </div>

    

    <div class="mt-2 mb-2 Repligen-China-Flowvpx" align="center" id="Repligen-China-Flowvpx">
          <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202108030956451662917803'); return false;" target="_blank" title="C-Tech Analytical Solutions">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/repligen/repligen-china-flowvpx.jpg" alt="C-Tech Analytical Solutions" />
        </a>
    </div>

    <div class="mt-2 mb-2 Repligen-Japan-Flowvpx" align="center" id="Repligen-Japan-Flowvpx">
          <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202108030956452145643073'); return false;" target="_blank" title="C-Tech Analytical Solutions">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/repligen/repligen-japan-flowvpx.jpg" alt="C-Tech Analytical Solutions" />
        </a>
    </div>

    <div class="mt-2 mb-2 Repligen-Korea-Flowvpx" align="center" id="Repligen-Korea-Flowvpx">
          <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20210803095645373395622'); return false;" target="_blank" title="C-Tech Analytical Solutions">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/repligen/repligen-korea-flowvpx.jpg" alt="C-Tech Analytical Solutions" />
        </a>
    </div>


     <div class="mt-2 mb-2" align="center" id="TAIWAN">
          <a href="javascript:void(0)"  title="Get a free Nalgene bottle when you send us an enquiry!">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/thermofisher/ad-vendor-pharma-focus-800x220.png" alt="Get a free Nalgene bottle when you send us an enquiry!" />
        </a>
    </div>

     <div class="mt-2 mb-2" align="center" id="PHILIPPINES">
          <a href="javascript:void(0)"  title="Get a free Nalgene bottle when you send us an enquiry!">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/thermofisher/ad-vendor-pharma-focus-800x220.png" alt="Get a free Nalgene bottle when you send us an enquiry!" />
        </a>
    </div>


     <div class="mt-2 mb-2" align="center" id="INDONESIA">
          <a href="javascript:void(0)"  title="Get a free Nalgene bottle when you send us an enquiry!">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/thermofisher/ad-vendor-pharma-focus-800x220.png" alt="Get a free Nalgene bottle when you send us an enquiry!" />
        </a>
    </div>

     <div class="mt-2 mb-2" align="center" id="THAILAND">
          <a href="javascript:void(0)"  title="Get a free Nalgene bottle when you send us an enquiry!">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/thermofisher/ad-vendor-pharma-focus-800x220.png" alt="Get a free Nalgene bottle when you send us an enquiry!" />
        </a>
    </div>

     <div class="mt-2 mb-2" align="center" id="VIETNAM">
          <a href="javascript:void(0)"  title="Get a free Nalgene bottle when you send us an enquiry!">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/thermofisher/ad-vendor-pharma-focus-800x220.png" alt="Get a free Nalgene bottle when you send us an enquiry!" />
        </a>
    </div>

     <div class="mt-2 mb-2" align="center" id="MALAYSIA">
          <a href="javascript:void(0)"  title="Get a free Nalgene bottle when you send us an enquiry!">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/thermofisher/ad-vendor-pharma-focus-800x220.png" alt="Get a free Nalgene bottle when you send us an enquiry!" />
        </a>
    </div>
    <div class="mt-2 mb-2" align="center" id="SINGAPORE">
          <a href="javascript:void(0)"  title="Get a free Nalgene bottle when you send us an enquiry!">
          <img class="img-fluid border mt-3" src="{{config('app.url')}}ensign/thermofisher/ad-vendor-pharma-focus-800x220.png" alt="Get a free Nalgene bottle when you send us an enquiry!" />
        </a>
    </div>
-->