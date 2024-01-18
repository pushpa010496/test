<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- <title>{{ config('app.name') }}</title> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('industry/img/favicon.ico')}}" type="image/x-icon">
  
      <!-- LUMEN -->
  {!! app('seotools')->generate() !!}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">
    <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 
    <style type="text/css">
     /*chat*/
.b-agent-demo .b-agent-demo_result{
  top:82px !important;
}
.b-agent-demo .b-agent-demo_powered_by{
  display: none !important;
}
    </style>

    <link rel="stylesheet" href="{{ config('app.url') }}css/owl.carousel.css">

    @yield('style')
<!--Schema code  -->
  <script type="application/ld+json"> 
  
 </script> 
  <!-- Global site tag (gtag.js) - Google Analytics(as  per bosco) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>
<script>
 // window.dataLayer = window.dataLayer || [];
 // function gtag(){dataLayer.push(arguments);}
//  gtag('js', new Date());

//  gtag('config', 'UA-91626815-1');
</script>
 

  </head>

  <body>  

    <header>
      <!-- <div class="container pl-5 d-none d-sm-block d-xs-block">
      @if(count($banner1314)==1)
                <?php $count=12 ?>             
              @else
                <?php $count=6 ?>
              @endif
              @foreach($banner1314 as $k=>$homebanner12)           
                       
                @if($homebanner12->positions[0]->id == 14)
                <div class="col-lg-<?php echo $count ?> pt-1 pb-1">
                  <a href="{{$homebanner12->url}}" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border border-secondary ml-5" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="" /></a>
                </div>
                @else
                
                @endif  
           
              @endforeach
        </div> -->
      <nav class="navbar navbar-bootbites navbar-expand-lg navbar-light bg-white" data-toggle="sticky-onscroll">
        <div class="ml-auto top-bar fixed-top col-sm-offset-9 col-lg-3">
          <div class="btn-group" style="width: 100%;">
          <a href="{{url('/get-listed')}}" class="btn">Get Listed</a>
          <a href="{{url('/events')}}" class="btn top-button2" style="width: 100%;
          ">Industrial Events</a>
        </div>
          <!-- <span><a href="{{url('/registration')}}">Subscribe</a></span>   -->
         {{--  <span><a href="{{url('/get-listed')}}">Get Listed</a></span> 
          <span><a href="{{url('/events')}}">Industrial Events</a></span> --}}
        </div>
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{ config('app.url') }}img/main-logo.png" height="75" class="d-inline-block align-middle" alt="Logo" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-4">  
                 <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                  </li> 
                   <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <div class="row">
                    <div class="col-md-12">                
                       <div id="accordion">
                        <?php $i=1; ?>
                        <?php $cat = getcat(22);?>
                     @foreach($cat as $val)

                      <div class="card col-lg-12">
                    
                        <div class="card-header" id="heading{{$i}}">
                          <h2>
                            <a class="collapsed" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="false" aria-controls="collapse{{$i}}">
                              {{$val['name']}}
                            </a>
                          </h2>
                        </div>

                           <?php $childs = getcat($val['id']);?>
                           @if(@$childs)
                        <div id="collapse{{$i}}" class="collapse" aria-labelledby="heading{{$i}}" data-parent="#accordion">
                           @foreach($childs as $child)                       
                              <?php 
                               $count = DB::table('products')->where('category_id',$child['id'])->count();
                               ?>
                          <div class="card-body">
                            <a href="{{url('categories')}}{{'/'.$child->slug}}"> 
                                <p>{{ucwords(strtolower($child['name']))}} <!--<span class="text-muted ml-1 pull-right">({{$count}})</span>--></p></a>                      
                          </div>
                          @endforeach
                        </div>
                        @endif
                   
                    <?php $i=$i+1; ?>
                    
                     </div> 
                     @endforeach
                 </div>

                    </div>

                    
                  </div>
               
                <!--  /.container  -->


              </div>
            </li>          
               {{--  <li class="nav-item {!! (Request::is('products*') ? 'active' : '') !!}">
                  <a class="nav-link" href="#">Products</a>
                </li> --}}
              {{--   <li class="nav-item {!! (Request::is('suppliers*') ? 'active' : '') !!}">
                  <a class="nav-link" href="{{url('/suppliers')}}">Suppliers</a>
                </li> --}}
                 <li class="nav-item">
                    <a class="nav-link" href="{{url('/events')}}">Events</a>
                  </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{url('/projects')}}">Projects</a>
                  </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{url('/tenders')}}">Tenders</a>
                  </li>
                 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Insights
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <div class="row">
                    <div class="col-md-12">                
                      <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="dropdown-item" href="{{url('/articles')}}">Articles</a>
                      </li>
                      <li class="nav-item">
                         <a class="dropdown-item" href="{{url('/interviews')}}">Interviews</a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="{{url('/news')}}">News</a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="{{url('/pressreleases')}}">Press Releases</a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="{{url('/whitepapers')}}">Whitepapers</a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="{{url('/reports')}}">Reports</a>
                      </li>
                    </ul>
                    </div>
                    
                  </div>
               
                <!--  /.container  -->
              </div>
            </li>        
              </ul>         
          </div>
      </nav>     
      
    </header>


     @yield('content')

     <div class="mt-3"></div>  


    <!-- // FOOTER -->
    <footer>
        <div class="container">
          <div class="row">
              <!-- // FOOTER-LOGO -->
              <div class="col-lg-2 pt-4 pb-1">
                <div class="footer-widget">
                  <h5>Powered By<span class="head-line"></span></h5>
                </div>
                <a href="https://www.ochre-media.com" target="_blank">
                  <img src="{{ config('app.url') }}/img/ochre-media-logo.png" width="70" alt="Ochre Media Group" title="Ochre Media Group" class="img-fluid mt-2" />
                </a> 
                <!-- <p class="mt-3 pb-3"><small>Ochre Media Pvt Ltd.</small></p> -->
              </div>
              <!-- FOOTER-LOGO // -->

              <!-- // FOOTER-LINKS -->
              <div class="col-lg-8 pt-4 pb-1">
                <div class="footer-widget">
                  <h5>Quick Links<span class="head-line"></span></h5>
                </div>
               <div class="row">
                  <div class="col-lg-3">
                    <ul>
                      <!-- <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/registration')}}" target="_blank">Register Your Company</a>
                      </li> -->
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/post-requirement')}}" target="_blank">Post your Requirement</a>
                      </li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/postevent')}}" target="_blank">Event Registration</a>
                      </li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/registration')}}" target="_blank"> Newsletter Signup</a>
                      </li>
                    </ul>
                  </div>

                  <div class="col-lg-3">
                    <ul>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/get-listed')}}" target="_blank">Get Listed</a>
                      </li>
                     
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('mediapack-download')}}" target="_blank">Mediapack</a>
                      </li>
                       <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/registration')}}" target="_blank">Subscribe</a>
                      </li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/clientele')}}" target="_blank">Clientele</a>
                      </li>
                    </ul>
                  </div>

                  <div class="col-lg-3">
                    <ul>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{config('app.blogurl')}}" target="_blank">Blog</a>
                      </li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/partners')}}" target="_blank">Our Partners</a>
                      </li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/aboutus')}}" target="_blank">About Us</a>
                      </li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('contactus')}}" target="_blank">Contact Us</a>
                      </li>
                    </ul>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul>
                      <!-- <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/suppliers')}}" target="_blank">Suppliers</a>
                      </li>   -->  
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/sitemap')}}" target="_blank">Sitemap</a>
                      </li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="{{url('/terms-conditions')}}" target="_blank">Terms &amp; Conditions</a>
                      </li>
                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="https://www.ochre-media.com/brands.html" target="_blank">Our Other Industries</a>
                      </li>      
                       
                    </ul>
                  </div>
                </div>
              </div>
              <!-- FOOTER-LINKS // -->

              <!-- // FOOTER-SOCIAL MEDIA -->
              <div class="col-lg-2 pt-4 pb-1">
                <div class="footer-widget">
                  <h5>Get in Touch<span class="head-line"></span></h5>
                </div>
                <div class="social-widget pt-2 text-center">
                  <ul class="social-icons">
                    <li>
                      <a target="_blank" title="Facebook" class="facebook" href="{{ config('app.furl') }}"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a target="_blank" title="Google Plus" class="google" href="{{ config('app.gurl') }}"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                  <ul class="social-icons">
                    <li><a target="_blank" title="Twitter" class="twitter" href="{{ config('app.turl') }}"><i class="fa fa-twitter"></i></a></li>
                   
                    <li><a target="_blank" title="LinkedIn" class="linkdin" href="{{ config('app.lurl') }}"><i class="fa fa-linkedin"></i></a></li>
                  </ul>   
                 <!--  <ul class="social-icons"></ul>  -->                      
                </div>
              </div>
              <!-- FOOTER-SOCIAL MEDIA // -->       

              <!-- // Copyright-Section -->
          <div class="col-lg-12">
            <div class="copyright-section">                
            <p class="pt-3 text-center">&copy; Ochre Media Pvt Ltd., {!! date('Y') !!}. All rights reserved.</p>
            </div>
          </div> 
          <!-- Copyright-Section // -->        
          </div>  
        </div>  
    </footer>
    <!-- FOOTER // -->



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="{{ config('app.url') }}js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
    <script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--<script src="{{ config('app.url') }}js/slick.min.js"></script> -->

    <script src="{{ config('app.url') }}js/owl.carousel.js"></script>
    <script>
      $('.owl_products').owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
    
        dots:false,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })
    </script>
    
    <script>        
        $(document).ready(function() {        
            $('#accordion').on('show.bs.collapse', function () { $('#accordion .in').collapse('hide');});        
        });        
    </script>

    <script>$(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
    // breakpoint and up  
    $(window).resize(function(){
      if ($(window).width() >= 980){  

          // when you hover a toggle show its dropdown menu
          $(".navbar .dropdown-toggle").hover(function () {
             $(this).parent().toggleClass("show");
             $(this).parent().find(".dropdown-menu").toggleClass("show"); 
           });

            // hide the menu when the mouse leaves the dropdown
          $( ".navbar .dropdown-menu" ).mouseleave(function() {
            $(this).removeClass("show");  
          });
      
        // do something here
      } 
    });  

    // document ready  
    });
    //# sourceURL=pen.js
    </script>

    <script>
      // Sticky navbar
      // =========================
      $(document).ready(function() {
        // Custom function which toggles between sticky class (is-sticky)
        var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
          var stickyHeight = sticky.outerHeight();
          var stickyTop = stickyWrapper.offset().top;
          if (scrollElement.scrollTop() >= stickyTop){
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
            sticky.addClass("div-shadow");
          }
          else{
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
             sticky.removeClass("div-shadow");
          }
        };
        
        // Find all data-toggle="sticky-onscroll" elements
        $('[data-toggle="sticky-onscroll"]').each(function() {
          var sticky = $(this);
          var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
          sticky.before(stickyWrapper);
          sticky.addClass('sticky');
          
          // Scroll & resize events
          $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
            stickyToggle(sticky, stickyWrapper, $(this));
          });
          
          // On page load
          stickyToggle(sticky, stickyWrapper, $(window));
        });
      });
    </script>
    
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116281985-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-91626815-1');
  </script>

    @yield('scripts')

  </body>
</html>    
