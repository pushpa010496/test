@extends('../layouts/app')
@section('style')
<style type="text/css">
  .text-wrap{
    text-shadow: 0 0 8px #131010  ;
    color: transparent !important;
  }
  .img-wrap{
    -webkit-filter: blur(10px); /* Safari 6.0 - 9.0 */
    filter: blur(10px);
  }
  body {
  -webkit-user-select: none;
     -moz-user-select: -moz-none;
      -ms-user-select: none;
          user-select: none;
}
#reboot{
  cursor: pointer;
}
a#reboot:hover{
  text-decoration: underline;
}
</style>
@endsection

@section('content')
<script type="text/javascript">
   sessionStorage.setItem('advertOnce','true');
</script>

<div class="clearfix"></div>

  <div class="container">

    <div class="row PF-MobP030">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/knowledgebank') }}">Knowledge Bank</a>
          </li>
          <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><a href="{{url('articles')}}">Healthcare Articles</a></li>
        </ol>
      </nav>
    </div>

    <div class="row PF-WytBG">
      <!-- // RIGHT SECTION --> 
      <div class="col-lg-9 col-xs-12 PF-BrdrDDD p-1">
       
        <div class="col-lg-12 col-xs-12">
          <h1 class="pt-2 PF-TXTRED">Zebra Hospital Vision Study</h1>
                
        </div> 

     

          <!-- MAIN BODY -->
          <div class="col-lg-12">
            <p> </p>
            <p>Clinical mobility is transforming care at healthcare facilities around the world and is having a profound impact on nurses, doctors, IT executives and patients. Zebra commissioned three global research studies to better understand the role of technology in acute care hospitals. The studies focused on nurse managers, IT decision makers and recently hospitalised patients. The Future of Healthcare 2022 Hospital Vision Study summarises the results of this analysis.</p>
            <p><strong>EXECUTIVE SUMMARY</strong></p>

            <p>The global healthcare industry is facing a seemingly insurmountable number of challenges – from aging populations and staff shortages to rising costs – that are placing enormous pressure on institutions, doctors, workers, patients and communities. As a result, there is a higher demand for services and support that are not sustainable with existing resources and methods. Hospitals are increasingly turning to technology and automation to reduce the strain on an already fragile system<span style="color: rgb(0, 72, 102);">...<a href="http://promotions.asianhhm.com/hospital-vision-study-global" id="reboot" class="PF-TXTRED"><strong style="font-size: 18px">Read More</strong></a></span> <span class="text-wrap" onmousedown="return false">over the years, this crisis has remained unchanged. The reason: a poor healthcare delivery system that fails to swiftly diagnose and deliver treatment.
            </span></p>

            <span class="text-wrap" onmousedown="return false"> 

              <p><strong>Innovation is this:</strong></p>
            <p>This is an emergency. Thousands of doctors and hospitals will not spring overnight and take the wheel. Rural healthcare systems are overburdened and ill-equipped to facilitate timely diagnosis and treatment. To mitigate these challenges, technological devices have been built to accurately detect and distinguish between the various anaemias.</p>

            <p>This is innovation; not because these devices do what they do, but because they can greatly improve treatment outcomes. In the grand scheme of things, innovations like these are taking the medical community a step closer to alleviating the many crises impeding healthcare delivery.</p>

            <p><strong>Healthcare Re-engineered</strong></p>

            <p>There are many emerging technological innovations in the diagnostic space. From my perspective, there are the three impending waves of transformation: Telediagnosis brings medical expertise to rural areas via the internet, smart pathology augments accuracy in diagnosis, and smart screening solutions are transforming laboratory medicine by generating results with speed, accuracy and precision.</p>

            <p>Of the three, screening devices are the only innovation where technology works for and alongside doctors in the lab. The integration of digital pathology with AI-powered analysis has been taking large strides, and its untapped potential is being recognised by various specialties within pathology. Standing on the shoulders of vast medical knowledge, the repertoire of AI algorithms extends from conducting routine diagnostic tests like CBCs to complex histopathological screening.</p>

            <p><strong>The Beginning of a Journey: From Strength to Strength</strong></p>

            <p>Misdiagnosis and under-diagnosis are very serious problems plaguing healthcare. The source? Varied errors in laboratory medicine. However, medical expertise is not to be blamed.</p>

            <p>Here’s why: A pathologist spends at least 6 out of 8 hours a day analysing samples2. Laboratory workflow might turn chaotic, with hundreds of samples flowing in sometimes. An understaffed team, limited equipment and a constant pressure to deliver crucial results under constraints, widens the risk of errors.</p>

            <p>Rural healthcare is worse: the absence of medical expertise explains why PHCs and CHCs are closed 56 per cent of the time. Only half the required lab technicians are present and the doctors have an absenteeism rate of about 45 per cent<sup>3</sup>.</p>

            <p>When tyres hit the road, these are the real problems that prevent essential care from reaching the masses. Integrating AI innovations with existing procedures would circumvent these issues by bringing down errors and facilitating the reallocation of resources. They can offer valuable diagnostic insights and be used as a clinical decision support tool; unlocking the scope for multi-disciplinary convergence and patient-centric approaches. The exciting thing is that it’s happening now and we are at the forefront of a revolution that is changing pathology forever.</p>

            <p>The true brilliance of AI innovations is that they will replace the ‘big problems’ in healthcare with the ‘patient’ at the centre; strengthening medical expertise to pursue its biggest goal: a world where health is not a problem.</p>
        

            <p><strong>References:</strong></p>

            <p><em>1.https://www.ndtv.com/food/global-nutrition-report-2017-india-carries-a-serious-burden-of-anemia-obesity-and-
              malnutrition-1772100<br>
              2. Maung, Raymond TA. "What is the best indicator to determine anatomic pathology workload? Canadian experience." American journal of clinical pathology 123.1 (2005): 45-55.<br />
              3. Singh, Sandeep, and Sorabh Badaya. "Health care in rural India: A lack between need and feed." South Asian journal of cancer 3.2 (2014): 143.
            </em></p>
            <p></p>   
            </span>                  

          </div> 
          <!-- END MAIN BODY -->

         
        
        </div>
        <!-- // RIGHT SECTION // --> 

      <!--// RIGHT SECTION - Square Banners -->
      <div class="col-lg-3 col-xs-12 text-center"> 
        <div class="bg-gray border-secondary">
          <div class="text-center">
            {{-- <h3 class="adv-title">Advertisements</h3> --}}
          </div>
          @foreach($banners as $k=>$banner)   
               @foreach($banner->pagesCount as $j=>$pcount)
                 @if($banner->positions[0]->id == 6 and $pcount->id == 11)

                 <a href="{{$banner->url}}" target="_blank" class="mb-3" title="{{$banner->title}}"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}banners/{{$banner->image}}" alt="{{$banner->alt_tag}}" /></a>
                 @else
                 @endif  
               @endforeach
             @endforeach
        </div>
      </div>
      <!-- RIGHT SECTION - Square Banners // --> 
    </div>

  </div>



@endsection

@section('scripts')

@endsection