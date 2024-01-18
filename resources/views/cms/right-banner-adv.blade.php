<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="ad.size" content="width=300,height=250">
    <title>HTML Ad Banner</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.1/TimelineMax.min.js"></script>
<script type="text/javascript">
function init() {
    var frame1 = document.getElementById("frame1"),
    frame2 = document.getElementById("frame2"),
    frame3 = document.getElementById("frame3"),
    frame4 = document.getElementById("frame4"),
    frame5 = document.getElementById("frame5"),
    frame6 = document.getElementById("frame6"),
    frame7 = document.getElementById("frame7");
     
    
    var tl = new TimelineMax();

  tl.to([frame1],.1,{autoAlpha:1,ease:Power0.easeNone},"index")
    .to([frame1],.5,{autoAlpha:0,ease:Power0.easeNone},"+=2.0")
    .to([frame2],.5,{autoAlpha:1,ease:Power0.easeNone},"-=0.2")
    .to([frame2],.5,{autoAlpha:0,ease:Power0.easeNone},"+=2.0")
    .to([frame3],.5,{autoAlpha:1,ease:Power0.easeNone},"-=0.2")
    .to([frame3],.5,{autoAlpha:0,ease:Power0.easeNone},"+=2.0")
    .to([frame4],.5,{autoAlpha:1,ease:Power0.easeNone},"-=0.2")
    .to([frame4],.5,{autoAlpha:0,ease:Power0.easeNone},"+=2.0")
    .to([frame5],.5,{autoAlpha:1,ease:Power0.easeNone},"-=0.2")
    .to([frame5],.5,{autoAlpha:0,ease:Power0.easeNone},"+=2.0")
    .to([frame6],.5,{autoAlpha:1,ease:Power0.easeNone},"-=0.2")
    .to([frame6],.5,{autoAlpha:0,ease:Power0.easeNone},"+=2.0")
    .to([frame7],.5,{autoAlpha:1,ease:Power0.easeNone},"-=0.2");

}
</script>
<script type="text/javascript">
    var clickTag = "https://www.skycargo.com/product/emirates-pharma/";
</script>
<style type="text/css">
#wrapper {width:298px; height:248px;position:relative;border:1px solid #000000;overflow:hidden;background:url(images/Background.png);}
#frame1 {position:absolute;top:-1px;left:-1px;width:300px;height:250px;opacity:0;background:url("{{config('app.url')}}promotions/emirates_banner/01.jpg");}
#frame2 {position:absolute;top:-1px;left:-1px;width:300px;height:250px;opacity:0;background:url("{{config('app.url')}}promotions/emirates_banner/02.png");}
#frame3 {position:absolute;top:-1px;left:-1px;width:300px;height:250px;opacity:0;background:url("{{config('app.url')}}promotions/emirates_banner/03.png");}
#frame4 {position:absolute;top:-1px;left:-1px;width:300px;height:250px;opacity:0;background:url("{{config('app.url')}}promotions/emirates_banner/04.png");}
#frame5 {position:absolute;top:-1px;left:-1px;width:300px;height:250px;opacity:0;background:url("{{config('app.url')}}promotions/emirates_banner/05.png");}
#frame6 {position:absolute;top:-1px;left:-1px;width:300px;height:250px;opacity:0;background:url("{{config('app.url')}}promotions/emirates_banner/06.png");}
#frame7 {position:absolute;top:-1px;left:-1px;width:300px;height:250px;opacity:0;background:url("{{config('app.url')}}promotions/emirates_banner/07.png");}

</style>
</head>
<body onload="init();" style="padding:0;margin:0;">
<a href="javascript:void(window.open(window.clickTag))">
<div id="wrapper">

    <div id="frame1">
    
    </div>
     <div id="frame2">
    
    </div>
     <div id="frame3">
    
    </div>
     <div id="frame4">
    
    </div>
    <div id="frame5">
    
        </div>
        <div id="frame6">
    
            </div>
            <div id="frame7">
    
                </div>

</div>
</a>
</body>
</html>

