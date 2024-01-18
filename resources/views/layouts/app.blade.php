<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- {{-- <title>{{ config('app.name') }}</title> --}} -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{config('app.url') }}images/favicon.ico" type="image/x-icon">
    <meta name="robots" content="index, follow" />
    <!-- LUMEN -->
    {!! app('seotools')->generate() !!}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ config('app.url') }}mix/app.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5fb4f57d1535bf152a5731a0/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script> -->
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-57M5M7ZB27"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-57M5M7ZB27');
</script>
    
    <!-- Event snippet for Subscribe conversion page -->
    <script>
      gtag('event', 'conversion', {'send_to': 'AW-465133344/-WWvCJuC8KEDEKC-5d0B'});
    </script>


    @yield('style')
    <!-- End Page Level Css -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Europeanhhm",
        "url": "https://www.europeanhhm.com/",
        "sameAs": [
            " https://www.facebook.com/PharmaFocusAsia ",
            " https://twitter.com/europeanhhm ",
            " https://plus.google.com/+Pharmafocusasia/about ",
            " https://www.linkedin.com/groups?home=&gid=6750706&trk=anet_ug_hm ",
            " https://www.tumblr.com/blog/pharmafocusasia "
        ]
    }
    </script>

   
    <style type="text/css">
    body {
        overflow-x: hidden;
    }
    </style>

   
    
    
</head>


<body>

    <!-- header -->
    @include('layouts.partials._header')
    <!-- end header -->

    <!-- Body starts -->
    @yield('content')
    <!-- End Body -->

    <div class="mt-3"></div>

    <!--  Footer -->
    @include('layouts.partials._footer')
    <!-- End Footer -->

    <!-- Advertise -->
    @include('layouts.partials._advertisepopup')
    <!-- End Advertise -->

    <script src="{{ config('app.url') }}mix/app.js"></script>
    <!--End Scripts -->
    <!--Custom Scripts -->
    <script>
    $(document).ready(function() {
        if ($(window).width() > 993) {
            $('body').delegate('.navbar .dropdown a', 'click', function() {
                location.href = this.href;
            });
        }

    });

    if (sessionStorage.getItem('notification') == 'true') {
        $('#notifybar').css('display', 'none');
    }
    </script>

    <!--End Custom Scripts -->
    <!-- Page Scripts -->
    @yield('scripts')

    <script language="Javascript">
  @php
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      //  $ip_address =  //$_SERVER['HTTP_X_FORWARDED_FOR'];
        $ip_address = "1.7.255.255";
        $country = geoip_country_name_by_name($ip_address);
    } else {
       // $ip_address = $_SERVER['REMOTE_ADDR'];
         $ip_address = "1.7.255.255";
        $country = 'India';//geoip_country_name_by_name($ip_address);
    }
    @endphp
    var country = "{{$country}}";
    var url = "{{\Request::url()}}";

    console.log("{{$ip_address}}");
    console.log("{{$country}}");

    jQuery(document).ready(function($) {
        setTimeout(function() {
            if (sessionStorage.getItem('advertOnce') !== 'true') {
                $('#myModalpopup').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                sessionStorage.setItem('advertOnce', 'true');
            }
        }, 3000);
    });
    </script>

    <script>
    if (country == 'Singapore' || country == 'Malaysia' || country == 'Thailand' || country == 'Indonesia' || country ==
        'Philippines' || country == 'Vietnam' || country == 'Taiwan') {
        $('#THERMOFISHER_SEA').css('display', 'block');

    } else {
        $('#THERMOFISHER_SEA').css('display', 'none');

    }


    if (country == 'India' || country == 'China' || country == 'Australia') {
        $('#APAC_EDC').css('display', 'block');
        $('#APAC_CT_Design').css('display', 'block');
        $('#APAC_Pharma_Virtual').css('display', 'block');
    } else {
        $('#APAC_EDC').css('display', 'none');
        $('#APAC_CT_Design').css('display', 'none');
        $('#APAC_Pharma_Virtual').css('display', 'none');
    }

    if (country == 'Taiwan') {
        $('#testing-the-world').css('display', 'block');
        $('#celebrating-70years').css('display', 'block');
    } else {
        $('#testing-the-world').css('display', 'none');
        $('#celebrating-70years').css('display', 'none');
    }

    if (country == 'Burma' || country == 'Cambodia' || country == 'Indonesia' || country == 'Laos' || country ==
        'Malaysia' || country == 'Philippines' || country == 'Singapore' || country == 'Thailand' || country ==
        'Vietnam' || country == 'Timor-Leste') {
        $('#testing-the-world').css('display', 'block');
        $('#celebrating-70years').css('display', 'block');
    }


    if (country == 'Taiwan' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Taiwan' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Taiwan' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#cytiva').css('display', 'none');
    }
    if (country == 'Philippines' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Philippines' &&
        url == 'https://www.pharmafocusasia.com/magazine' || country == 'Philippines' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#cytiva').css('display', 'none');
    }
    if (country == 'Indonesia' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Indonesia' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Indonesia' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#cytiva').css('display', 'none');
    }
    if (country == 'Thailand' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Thailand' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Thailand' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#cytiva').css('display', 'none');
    }
    if (country == 'Vietnam' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Vietnam' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Vietnam' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#cytiva').css('display', 'none');
    }
    if (country == 'Malaysia' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Malaysia' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Malaysia' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#cytiva').css('display', 'none');
    }
    if (country == 'Singapore' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Singapore' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Singapore' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#cytiva').css('display', 'none');
    }
    //Thermofisher
    if (country == 'Taiwan' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Taiwan' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Taiwan' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#TAIWAN').css('display', 'block');
    } else {
        $('#TAIWAN').css('display', 'none');
    }

    if (country == 'Philippines' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Philippines' &&
        url == 'https://www.pharmafocusasia.com/magazine' || country == 'Philippines' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#PHILIPPINES').css('display', 'block');
    } else {
        $('#PHILIPPINES').css('display', 'none');
    }
    if (country == 'Indonesia' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Indonesia' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Indonesia' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#INDONESIA').css('display', 'block');
    } else {
        $('#INDONESIA').css('display', 'none');
    }
    if (country == 'Thailand' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Thailand' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Thailand' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#THAILAND').css('display', 'block');
    } else {
        $('#THAILAND').css('display', 'none');
    }
    if (country == 'Vietnam' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Vietnam' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Vietnam' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#VIETNAM').css('display', 'block');
    } else {
        $('#VIETNAM').css('display', 'none');
    }
    if (country == 'Malaysia' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Malaysia' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Malaysia' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#MALAYSIA').css('display', 'block');
    } else {
        $('#MALAYSIA').css('display', 'none');
    }
    if (country == 'Singapore' && url == 'https://www.pharmafocusasia.com/webinars' || country == 'Singapore' && url ==
        'https://www.pharmafocusasia.com/magazine' || country == 'Singapore' && url ==
        'https://www.pharmafocusasia.com/e-newsletter') {
        $('#SINGAPORE').css('display', 'block');
    } else {
        $('#SINGAPORE').css('display', 'none');
    }

    // Repligen-China
    if (country == 'China' && url == 'https://www.pharmafocusasia.com') {
        $('#Repligen-China').css('display', 'block');
    } else {
        $('#Repligen-China').css('display', 'none');
    }
    // Repligen-Japan

    if (country == 'Japan' && url == 'https://www.pharmafocusasia.com') {
        $('#Repligen-Japan').css('display', 'block');
    } else {
        $('#Repligen-Japan').css('display', 'none');
    }
    // Repligen-Korea

    if (country == 'Korea, Republic of' && url == 'https://www.pharmafocusasia.com') {
        $('#Repligen-Korea').css('display', 'block');
    } else {
        $('#Repligen-Korea').css('display', 'none');
    }

    // Repligen-China-SoloVPE

    if (country == 'China' && url != 'https://www.pharmafocusasia.com') {
        $('#Repligen-China-SoloVPE').css('display', 'block');
    } else {
        $('#Repligen-China-SoloVPE').css('display', 'none');
    }
    // Repligen-Japan-SoloVPE

    if (country == 'Japan' && url != 'https://www.pharmafocusasia.com') {
        $('#Repligen-Japan-SoloVPE').css('display', 'block');
    } else {
        $('#Repligen-Japan-SoloVPE').css('display', 'none');
    }
    // Repligen-Korea-SoloVPE

    if (country == 'Korea, Republic of' && url != 'https://www.pharmafocusasia.com') {
        $('#Repligen-Korea-SoloVPE').css('display', 'block');
    } else {
        $('#Repligen-Korea-SoloVPE').css('display', 'none');
    }


    // Repligen-China-Flowvpx

    if (country == 'China' && url != 'https://www.pharmafocusasia.com') {
        $('#Repligen-China-Flowvpx').css('display', 'block');
    } else {
        $('#Repligen-China-Flowvpx').css('display', 'none');
    }
    // Repligen-Japan-Flowvpx

    if (country == 'Japan' && url != 'https://www.pharmafocusasia.com') {
        $('#Repligen-Japan-Flowvpx').css('display', 'block');
    } else {
        $('#Repligen-Japan-Flowvpx').css('display', 'none');
    }
    // Repligen-Korea-Flowvpx

    if (country == 'Korea, Republic of' && url != 'https://www.pharmafocusasia.com') {
        $('#Repligen-Korea-Flowvpx').css('display', 'block');
    } else {
        $('#Repligen-Korea-Flowvpx').css('display', 'none');
    }



    if (country == 'Malaysia') {
        $('#banner-malasia').css('display', 'block');
    } else {
        $('#banner-malasia').css('display', 'none');
    }

    if (country == 'China') {
        $('#banner-china').css('display', 'block');
        $('#china_gobalto').css('display', 'block');
        $('#china_safetysuit').css('display', 'block');
        $('#china_clinical').css('display', 'block');
        $('#banner-japan').css('display', 'none');

        sessionStorage.setItem('advertOnce', 'true');
    } else if (country == 'Japan') {
        $('#banner-china').css('display', 'none');
        $('#banner-japan').css('display', 'block');
        sessionStorage.setItem('advertOnce', 'true');
    } else {
        $('#banner-japan').css('display', 'none');
        $('#banner-china').css('display', 'none');

        $('#china_gobalto').css('display', 'none');
        $('#china_safetysuit').css('display', 'none');
        $('#china_clinical').css('display', 'none');
    }




    //IBM banner code


    if (country == 'Malaysia' || country == 'Singapore') {

        $('.banner-earlykey').css('display', 'block');
        $('#malysia_gobalto').css('display', 'block');
        $('#malysia_safetysuit').css('display', 'block');
        $('#malysia_clinical').css('display', 'block');
    } else {
        $('.banner-earlykey').css('display', 'none');
        $('#malysia_gobalto').css('display', 'none');
        $('#malysia_safetysuit').css('display', 'none');
        $('#malysia_clinical').css('display', 'none');
    }

    //IBM banner code

    if (country == 'Singapore' || country == 'Vietnam' || country == 'Australia' || country == 'New Zealand' ||
        country == 'Malaysia') {
        $('.banner-biorasi').css('display', 'block');
        $('.banner-southernstar').css('display', 'block');
    } else {
        $('.banner-biorasi').css('display', 'none');
        $('.banner-southernstar').css('display', 'none');
    }


    //Orcle banner code
    if (country == 'India' || country == 'Singapore' || country == 'Philippines' || country == 'Hong Kong' || country ==
        'Australia' || 'New Zealand') {
        $('.banner-oracle').css('display', 'block');
    } else {
        $('.banner-oracle').css('display', 'none');
    }



    if (country == 'Vietnam') {
        $('#vietnames_gobalto').css('display', 'block');
        $('#vietnames_safetysuit').css('display', 'block');
        $('#vietnames_clinical').css('display', 'block');


    } else {
        $('#vietnames_gobalto').css('display', 'none');
        $('#vietnames_safetysuit').css('display', 'none');
        $('#vietnames_clinical').css('display', 'none');
    }

    if (country == 'Thailand') {
        $('#thai_gobalto').css('display', 'block');
        $('#thai_safetysuit').css('display', 'block');
        $('#thai_clinical').css('display', 'block');


    } else {
        $('#thai_gobalto').css('display', 'none');
        $('#thai_safetysuit').css('display', 'none');
        $('#thai_clinical').css('display', 'none');
    }


    if (country == 'Indonesia') {
        $('#indonesian_gobalto').css('display', 'block');
        $('#indonesian_safetysuit').css('display', 'block');
        $('#indonesian_clinical').css('display', 'block');


    } else {
        $('#indonesian_gobalto').css('display', 'none');
        $('#indonesian_safetysuit').css('display', 'none');
        $('#indonesian_clinical').css('display', 'none');
    }


    if (country == 'Indonesia') {
        $('#indonesian_gobalto').css('display', 'block');
        $('#indonesian_safetysuit').css('display', 'block');
        $('#indonesian_clinical').css('display', 'block');


    } else {
        $('#indonesian_gobalto').css('display', 'none');
        $('#indonesian_safetysuit').css('display', 'none');
        $('#indonesian_clinical').css('display', 'none');
    }


    if (country == 'Taiwan') {
        $('#taiwan_safetysuit').css('display', 'block');
        $('#taiwan_gobalto').css('display', 'block');
        $('#taiwan_clinical').css('display', 'block');


    } else {
        $('#taiwan_gobalto').css('display', 'none');
        $('#taiwan_safetysuit').css('display', 'none');
        $('#taiwan_clinical').css('display', 'none');
    }
    //end   orcle banner code



    if (country == 'India') {
        $('#pharma-factory').css('display', 'block');
        $('#saving-money').css('display', 'block');
    } else {
        $('#saving-money').css('display', 'none');
        $('#pharma-factory').css('display', 'none');
    }
    if (country == 'China') {
        $('#repligens-variable').css('display', 'block');
    } else {
        $('#repligens-variable').css('display', 'none');
    }
    </script>
    <!--End Page Scripts -->
</body>

</html>