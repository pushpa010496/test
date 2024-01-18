 	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="language" content="english" /> 
  {!! app('seotools')->generate() !!}
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-91608244-2', 'auto');
    ga('send', 'pageview');
  </script>
  
  <link rel="icon" type="image/png" href="{{url('images/favicon.ico')}}" />

  <!-- Bootstrap CSS -->
  <link href="{{ config('app.url') }}css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ config('app.url') }}css/custom-styles.css" rel="stylesheet">
  <link href="{{ config('app.url') }}css/single-style.css" rel="stylesheet">
  <link href="{{ config('app.url') }}css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,600" rel="stylesheet">  -->


  <style type="text/css">
  .hero-header {
    /*background: #016cc7;
    min-height: 600px;
    padding: 1em 3em;*/
    background-image: url('{{ config('app.url') }}images/bg-cover.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    color: #333;
    width: 100%;
  }
  .bg-img{
    background-image: url('{{ config('app.url') }}images/issues.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
  }
  .TXT-yellow{color: #fcd93b;}
  td li{
    margin-left: 20px;
  }
  th, td {
    padding: 8px 20px;
  }
  .hoverTable > tbody tr:hover{
    background-color: #B8DBE8;
    cursor: pointer;
  }

  .zoomWindowContainer{
    top:0;
    z-index:9999;
    height: auto;
    left:auto;
    right: -30px;
  }
  .zoomWindowContainer div{
    left: 0;
  }
  .zoomWindow{
    overflow: hidden; 
    width: 100%; 
    height:auto; 
    right:20px; 
    z-index: 100; 
    position: absolute;
    top: 0px;
    display: none;
  }
  .d-block{
    display: block;
  }
  @media (min-width: 992px) {
    .zoomWindowContainer {
      width: 52%;
    }
    .zoomWindow{
      width: 75%; 
    }
  }
  @media (max-width: 991px) {
    .zoomWindowContainer {
      width: 100%;
      top:40px !important;
      right: 0 !important;
    }
  }
  footer{
    margin-top:0 !important;
  }
  @media (max-width: 768px){
    th, td {
    padding: 8px 5px;
    text-align: left;
  }
  }
</style>


<!--AS per Basco& sudhakar Canonical -->
<link rel="canonical" href="{{url()->current()}}" />

<script type="application/ld+json">
  {
  "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "Pharmafocusasia",
  "url" : "https://www.pharmafocusasia.com/",
  "sameAs" : [
  " https://www.facebook.com/PharmaFocusAsia ",
  " https://twitter.com/pharmafocusasia ",
  " https://plus.google.com/+Pharmafocusasia/about ",
  " https://www.linkedin.com/groups?home=&gid=6750706&trk=anet_ug_hm ",
  " https://www.tumblr.com/blog/pharmafocusasia "
  ]
  }
</script>

<!--AS per Basco& sudhakar Schema code -->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window,document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1603651466522663'); 
  fbq('track', 'PageView');
</script>

<noscript>
  <img height="1" width="1" src="https://www.facebook.com/tr?id=1603651466522663&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

</head>


<body>
  <!-- Akilesh requirement Starts Here  -->
  <!-- Google Code for Pharma Print ads(form button) Conversion Page -->
  <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 878187201;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "-e5GCLXB4GoQwaXgogM";
    var google_remarketing_only = false;
    /* ]]> */
  </script>

  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="googleadservices" src="//www.googleadservices.com/pagead/conversion/878187201/?label=-e5GCLXB4GoQwaXgogM&amp;guid=ON&amp;script=0"/>
    </div>
  </noscript>
  <!-- End of Akilesh requirement  -->

  <!-- // Phase-1 -->
  <div class="container-fluid hero-header">
    <div class="row">
      <header class="large">
        <nav>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center">
            <img src="{{ config('app.url') }}images/logo.png" class="img-fluid logo" alt="Asian Hospital & Healthcare Management" title="Asian Hospital & Healthcare Management">
          </div> 
          <div class="col-lg-9 col-md-9 hidden-sm hidden-xs"> </div>
        </nav>
      </header>
    </div>

    <div class="row MRGN-TOP-80">
      <div class="container pb-2">
          <h1 class="text-uppercase TXT-blu text-center pb-2 pt-3">Banner Advertising - options</h1>
          <p class="PF-TXTBlk000">Pharma banner advertisements stimulate the presence of your company and help to take your business to the next level. Pharma Banner Ads expand your business across the globe and help to empower business relationships.</p> 
          <h2><em>PFA banner advertisements attract your targeted audience with eye-catching texts, messages that speak to the audience appropriately. A lot is more possible with <b>Pharmaceutical banner ads!</b></em></h2>

          <h2 class="TXT-blu text-center pt-3 pb-2">PFA Banner Ads – Highly Effective Advertising Medium for your Business!</h2>     
      </div>  
      
      <div class="container-fluid">
        <!-- Start: Header -->
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                
              <table border="1" cellpadding="1" cellspacing="1" style="width:100%" align="center" class="hoverTable mt-10">
                <thead>
                  <tr>
                    <th style="text-align: center;color:#444;"><strong>Banner Type</strong></th>
                    <th style="text-align: center;color:#444;"><strong>Dimensions (px)</strong></th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="rowcheck" data-id="{{ config('app.url') }}images/leader-board-banner-shot.jpg">
                    <td><img src="{{ config('app.url') }}images/popup-icon.png" alt="Hover me" width="14" class="mr-2" /> Lead Board Banner</td>
                    <td style="text-align: center;">728 x 90</td>
                  </tr>
                  <tr class="rowcheck" data-id="{{ config('app.url') }}images/prime-banner-shot.jpg">
                    <td><img src="{{ config('app.url') }}images/popup-icon.png" alt="Hover me" width="14" class="mr-2" /> Prime Banner</td>
                    <td style="text-align: center;">800 x 220</td>
                  </tr>
                  <tr class="rowcheck" data-id="{{ config('app.url') }}images/slider-banner-shot.jpg">
                    <td><img src="{{ config('app.url') }}images/popup-icon.png" alt="Hover me" width="14" class="mr-2" /> Slider</td>
                    <td style="text-align: center;">878 x 345</td>
                  </tr>
                  <tr class="rowcheck" data-id="{{ config('app.url') }}images/top-full-banner-shot.jpg">
                    <td><img src="{{ config('app.url') }}images/popup-icon.png" alt="Hover me" width="14" class="mr-2" /> Top/Full Banner</td>
                    <td style="text-align: center;">468 x 60</td>
                  </tr>
                  <tr class="rowcheck" data-id="{{ config('app.url') }}images/square-banner-shot.jpg">
                    <td><img src="{{ config('app.url') }}images/popup-icon.png" alt="Hover me" width="14" class="mr-2" /> Square Banner</td>
                    <td style="text-align: center;">300 x 250</td>
                  </tr>
                  <tr class="rowcheck" data-id="{{ config('app.url') }}images/sky-tower-banner-shot.jpg">
                    <td><img src="{{ config('app.url') }}images/popup-icon.png" alt="Hover me" width="14" class="mr-2" /> Sky Tower Banner</td>
                    <td style="text-align: center;">300 x 600</td>
                  </tr>
                  <tr class="rowcheck" data-id="{{ config('app.url') }}images/base-banner-shot.jpg">
                    <td><img src="{{ config('app.url') }}images/popup-icon.png" alt="Hover me" width="14" class="mr-2" /> Base Banner</td>
                    <td style="text-align: center;">468 x 60</td>
                  </tr>
                </tbody>
              </table> 
            </div>

            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>

            <div class="col-lg-5 col-xs-12 form-bg mt-1">
              <div class="p-3">
                <h2 class="text-white pb-2 m-0 mb-2 text-center font-20 font-weight-bold">Interested? Get in Touch</h2>
                <form role='form' action="{{route('banner.advertisement.post')}}" method="post" accept-charset="utf-8" class="email" id="writemessage">  
                  {{ csrf_field() }}
                  <div class="row"> 
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 {{ $errors->first('fullname', 'has-error')}}">
                      <input class="form-control" id="fullname" name="fullname" placeholder="Full Name *" required="" type="text">
                      <input value="banner-advertising" name="type" id="type" type="hidden">
                      <input type="hidden" name="lead" value="Lead Genrated from banner advertising..." />
                      <input type="hidden" name="formname" value="ec" />
                      <span class="help-block">{{ $errors->first('fullname', ':message') }}</span>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 {{ $errors->first('email', 'has-error')}}">
                      <input class="form-control" id="email" name="email" placeholder="Email *" required="" type="email">
                      <span class="help-block">{{ $errors->first('email', ':message') }}</span>                        
                    </div>
                  </div>                    

                  <div class="row"> 
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 {{ $errors->first('telephone', 'has-error')}}">
                      <input class="form-control" id="telephone" name="telephone" placeholder="Telephone *" required="" type="tel">
                      <span class="help-block">{{ $errors->first('telephone', ':message') }}</span>                        
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 {{ $errors->first('company', 'has-error')}}">
                      <input class="form-control" id="company" name="company" placeholder="Company *" required="" type="text">
                      <input type="hidden" name="lead" value="Lead Generated from Landing Page..." />
                      <span class="help-block">{{ $errors->first('company', ':message') }}</span>
                    </div>
                  </div>

                  <div class="row"> 
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $errors->first('description', 'has-error')}}">
                      <textarea class="form-control" type="textarea" id="message" name="description" placeholder="Message" maxlength="140" rows="1"></textarea>
                      <span class="help-block">{{ $errors->first('description', ':message') }}</span>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-1">
                      <button onclick="goog_report_conversion ({{route('printads')}})" href="{{route('printads')}}" type="submit" id="sbtbtn" class="btn btn-sm btn-success">SUBMIT </button> 
                      <div class="clearfix"></div>
                    </div>

                    <div class="form-group mb-0 col-lg-12 text-left">
                      <p class="small text-white mb-0">**We will under no circumstances would sell or share your contact details with any organisation Gov. or Private</p>
                    </div>                  
                  </div>
                  <div class="clearfix"></div>
                </form>
                   <div class="zoomWindowContainer" style="position: fixed;">
                      <div class="zoomWindow">
                        <img class="img-responsive" src="" style="width:100%">
                      </div>
                    </div>

              </div>

            </div>

          </div>
        </div>
        <!-- End: Header -->

        <div class="pb-4"></div>
      </div>

    </div>
    <div class="pt-4"></div>
  </div>
  <!-- Phase-1 // -->



  <!-- // Start: Circulation -->
  <div class="container-fluid bg-img">
    <div class="pt-3">
        <div class="col-lg-12">          
          <h3 class="text-white text-uppercase text-center font-26"><span>Visitors</span></h3>
        </div>
        
      <div class="visitors row">
        <div class="col-md-4 pt-4 pb-4">
          <div class="content-ct rate text-center">
            <h2><span class="ti-world font-48"></span></h2>         
            <p class="mb-2 font-20">Average Impressions</p>
            <p class="m-0"><em>per month</em></p>
            <p class="mt-2 TXT-yellow font-30">620,000+</p>
          </div>
        </div>

        <div class="col-md-4 pt-4 pb-4">
          <div class="content-ct rate text-center">
            <h2><span class="ti-user font-48"></span></h2>          
            <p class="mb-2 font-20">Unique visitors</p>
            <p class="m-0"><em>per month</em></p>
            <p class="mt-2 TXT-yellow font-30">155,000+</p>
          </div>
        </div>	

        <div class="col-md-4 pt-4 pb-4">
          <div class="content-ct rate text-center">
            <h2><span class="ti-mouse-alt font-48"></span></h2>           
            <p class="mb-2 font-20">Served</p>
            <p class="m-0 TXT-yellow font-30">500+</p>
            <p class="mb-0"><em>companies and counting...</em></p>
          </div>
        </div>

      </div>
    </div> 
  </div>    
  <!-- End: Circulation -->

  <!-- Start: Avg click distribution -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-2 pt-3">          
        <table border="0" cellpadding="1" cellspacing="1" style="width:100%" align="center" class="mt-1">
          <thead>
            <tr>
              <th colspan="2" style="text-align: center;color:#444; font-size: 18px;"><strong>Average Click Distribution (%) by Banner Position</strong></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Lead Board Banner</td>
              <td align="center"><strong class="PF-TXTRED">25%</strong> of the clicks</td>
            </tr>
            <tr>
              <td>Prime Banner</td>
              <td align="center"><strong class="PF-TXTRED">25%</strong> of the clicks</td>
            </tr>
            <tr>
              <td>Slider</td>
              <td align="center"><strong class="PF-TXTRED">20%</strong> of the clicks</td>
            </tr>
            <tr>
              <td>Top/Full Banner</td>
              <td align="center"><strong class="PF-TXTRED">10%</strong> of the clicks</td>
            </tr>
            <tr>
              <td>Square Banner</td>
              <td align="center"><strong class="PF-TXTRED">10%</strong> of the clicks</td>
            </tr>
            <tr>
              <td>Sky Tower Banner</td>
              <td align="center"><strong class="PF-TXTRED">5%</strong> of the clicks</td>
            </tr>
            <tr>
              <td>Base Banner</td>
              <td align="center"><strong class="PF-TXTRED">5%</strong> of the clicks</td>
            </tr>
          </tbody>
        </table> 
      </div>             

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-3" align="center">  
        <table border="0" cellpadding="1" cellspacing="1" style="width:100%" align="center" class="mt-1">
          <thead>
            <tr>
              <th colspan="2" style="text-align: center;color:#444; font-size: 18px;"><strong>Traffic Segmentation</strong></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="2">
                <img width="100%" src="{{config('app.url')}}images/pfa-geographical-breakdown.jpg" class="img-responsive" alt="Geographical"/>
              </td>
            </tr>             
          </tbody>
        </table>
      </div>

    </div>
  </div>
  <!-- End: Avg click distribution -->

  <!-- Start: Clients -->
  <div class="container-fluid tickets gray-bg text-center" id="clients">
    <div class="col-md-12 content-ct text-center">
      <h3 class="TXT-blu pt-3 text-uppercase text-center font-weight-bold font-20"><span>Our Clients</span></h3>
    </div>
    <div class="row content-ct">
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="50%" src="{{config('app.url')}}images/ups-logo.png" alt="UPS" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="50%" src="{{config('app.url')}}images/tsi-logo.png" alt="TSI" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="50%" src="{{config('app.url')}}images/pall-corporation-logo.png" alt="PALL" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="50%" src="{{config('app.url')}}images/emirates-skycargo-logo.png" alt="emirates-skycargo" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="50%" src="{{config('app.url')}}images/abbott-logo.png" alt="abbott" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="50%" src="{{config('app.url')}}images/etihad-airways-logo.png" alt="etihad-airways" class="img-fluid" />
        <div align="center">
          <a href="{{url('clients')}}" target="_blank" class="TXT-blu">
            View More &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End: Clients -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="footer-widget">
            <p class="mb-3 text-light">&copy; Ochre Media Pvt Ltd., <?php echo date("Y"); ?>. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- main container --> 

  <!-- <a href="#0" class="cd-top">TOP</a> --> 

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
  <!-- <script src="{{ config('app.url') }}js/jquery-2.1.3.min.js"></script>  -->

  <script src="{{ config('app.url') }}js/jquery-3.3.1.js"></script>
  <script src="{{ config('app.url') }}js/popper.min.js"></script>
  <script src="{{ config('app.url') }}js/bootstrap.min.js"></script>


  <script type="text/javascript">
    $(document).on("scroll",function(){
      if($(document).scrollTop()>150){ 
        $("header").removeClass("large").addClass("small");
      }
      else{
        $("header").removeClass("small").addClass("large");
      }
    });
  </script>

  <script>
   $(document).ready(function() {

    $(function() {
      $('#sbtbtn').attr('disabled', 'disabled');
    });

    $('input[type=text],input[type=tel],input[type=email]').on("change", function() {

      if ($('#telephone').val() !=''&&
        $('#company').val() != '' &&
        $('#email').val() != ''&&
        $('#fullname').val() != '') {

        $('#sbtbtn').removeAttr('disabled');
    } else {
      $('#sbtbtn').attr('disabled', 'disabled');
    }
  });
  });
</script>

<script>
 $(document).ready(function() {

  $(function() {
    $('#sbtbtn1').attr('disabled', 'disabled');
  });

  $('input[type=text],input[type=tel],input[type=email]').on("change", function() {

    if ($('#telephone1').val() !=''&&
      $('#company1').val() != '' &&
      $('#email1').val() != ''&&
      $('#fullname1').val() != '') {

      $('#sbtbtn1').removeAttr('disabled');
  } else {
    $('#sbtbtn1').attr('disabled', 'disabled');
  }
});
});
</script>



  <script type="text/javascript">
    if ($(window).width() < 768) {
      $('html').click(function(e) { 
        if( !$(e.target).is('.rowcheck td') )
        {
           $('.zoomWindow').removeClass('d-block');
        }
      });    
      $('.hoverTable tr').click(function(){
        var url = $(this).attr('data-id');
        $('.zoomWindow').addClass('d-block');
        $('.zoomWindowContainer img').prop('src', url );
      });
    }else{
       $('.hoverTable tr').mouseenter(function(){
        var url = $(this).attr('data-id');
        $('.zoomWindow').css('display','block');
        // $('.zoomWindow').fadeIn(500);
        $('.zoomWindowContainer img').prop('src', url );
       }).mouseleave(function(){
        $('.zoomWindow').css('display','none');
        // $('.zoomWindow').fadeOut(100);
        $('.zoomWindowContainer img').removeAttr('src');
       });
    }         
  </script>
</body>

</html>

