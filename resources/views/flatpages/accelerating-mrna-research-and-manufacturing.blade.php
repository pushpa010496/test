<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="language" content="english" />
    <title>Accelerating mRNA research and manufacturing </title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex" />
    <link rel="shortcut icon" href="{{ config('app.url') }}images/favicon.ico" type="image/x-icon">
    <meta name="title" content="Accelerating mRNA research and manufacturing" />
    <meta name="description" content="Like you, we know that therapies based on messenger RNA, such as mRNA vaccines, have revolutionary potential. mRNA-based therapies offer precise and individualized therapy." />
    <meta name="keywords" content="" />
    <meta property="og:title" content="Accelerating mRNA research and manufacturing" />
    <meta property="og:description" content="Like you, we know that therapies based on messenger RNA, such as mRNA vaccines, have revolutionary potential. mRNA-based therapies offer precise and individualized therapy." />
    <meta property="og:Keywords" content="" />
    <meta property="og:image" content="{{ config('app.url') }}images/accelerating-mrna-research-and-manufacturing-og.jpg" />
    <link rel="canonical" href="{{URL::current('accelerating-mrna-research-and-manufacturing')}}" />
    <link href="{{ config('app.url') }}mix/app.css" rel="stylesheet" type="text/css" />
    <link href="{{ config('app.url') }}css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <style type="text/css">
        /*ul li, p{font-size: 15px;}*/
        /*.modal{background: rgba(0, 0, 0, 0.7); }
		.modal-dialog{ top: 0 !important; }*/
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Lato', sans-serif;

        }

        .form-bg {
            background: rgb(50, 139, 215);
            background: -moz-linear-gradient(180deg, rgba(50, 139, 215, 1) 0%, rgba(11, 61, 103, 1) 81%);
            background: -webkit-linear-gradient(180deg, rgba(50, 139, 215, 1) 0%, rgba(11, 61, 103, 1) 81%);
            background: linear-gradient(180deg, rgba(50, 139, 215, 1) 0%, rgba(11, 61, 103, 1) 81%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#328bd7", endColorstr="#0b3d67", GradientType=1);
        }

        .trans-bg {
            background-color: rgba(65, 169, 184, 0.9);
        }

        .bg-dark {
            background-color: #333;
        }

        .has-error .help-block {
            text-align: left;
            color: #a94442;
            font-size: 16px;
            margin: 0;
        }

        .TXT-ORNG {
            color: #EE1D23;
        }

        .TXT-GRAY {
            color: #335160;
        }

        .TXT-BLUE {
            color: #17558a;
        }

        .BG-BLUE {
            background-color: #17558a;
        }

        .TXT-LYT {
            color: #C7D8DD;
        }

        .BG-LYT {
            background-color: #EBF4F7;
        }

        .form-control {
            border-radius: 0px;
            height: calc(2.0rem + 2px);
            font-size: 16px;
        }

        p {
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #EE1D23;
        }

        .btn-danger {
            background-color: #EE1D23;
        }

        .Mar-left-n {
            margin-left: -10px;
        }

        .line-height {
            line-height: 130%;
        }

        .connect li {
            list-style: none;
            padding-bottom: 5px;
            margin-left: -10px;
        }

        .connect li::before {
            content: "\f101";
            font-family: FontAwesome;
            position: absolute;
            color: #EE1D23;
            /*font-size: 16px;*/
            font-weight: normal;
            left: 20px;
        }

        .brdr-radius {
            border-radius: 0px;
        }

        .font-11 {
            font-size: 11px;
            line-height: 1.4;
        }

        .font-20 {
            font-size: 20px;
            line-height: 1.2;
        }

        .font-22 {
            font-size: 22px;
            line-height: 1.4;
        }

        .font-18 {
            font-size: 18px;
            line-height: 1.2;
        }

        .font-16 {
            font-size: 16px;
            line-height: 1.2;
        }

        .font-28 {
            font-size: 28px;
            line-height: 1.6;
        }

        .expandcheckbox-div {
            -webkit-transition: all 1s ease-in-out;
            -moz-transition: all 1s ease-in-out;
            -ms-transition: all 1s ease-in-out;
            -o-transition: all 1s ease-in-out;
            /*transition: all 1s ease-in-out;*/
            transition: visibility 0s, opacity 0.5s linear;
        }

        ul {
            list-style-type: disclosure-closed;
        }

        ul li::marker {
            color: #094277;
        }

        /*Mobile ResponsiveCode */
        @media (min-width: 320px) and (max-width: 767px) {
            .font-28 {
                font-size: 16px !important;
            }
        }

        .TXT-Blue {
            color: #094277;
        }

        .fa-facebook {
            padding: 5px 8px;
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        footer i {
            color: #f04e23;
            font-size: 17px;
            border-radius: 5px;
            transition: 500ms;
            background: #f1f1f1;
            margin-right: 5px;
        }

        .fa-linkedin,
        .fa-twitter {
            padding: 5px 5px;
        }

        footer .ft-right a {
            float: right;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .border-top {
            border-top: 1px solid #dee2e6 !important;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-91608244-2');
    </script>

</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-6 align-self-center">
                    <img src="{{ config('app.url') }}images/logo.png" alt="Pharma Focus Asia" class="img-fluid pt-1 pb-1" width="200">
                </div>

                <div class="col-md-6 col-6 align-self-center" align="right">
                    <a class="btn btn-danger btn-sm rounded text-white shadow" href="#about">About Us</a>
                    <a class="btn btn-danger btn-sm rounded text-white shadow" data-toggle="modal" data-target="#myForm">Register Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top mb-3 mt-2"></div>

    <div class="container shadow rounded">
        <div class="row position-relative">
            <div style="top: 50%;" class="banner-text position-absolute container">
                <!-- <div class="row">
					<div class="col-12 col-md-7">
						<h1 style="margin:0 calc(1vh + 1vw); font-size:calc(1vw + 1rem); text-shadow: 1px 1px 9px rgba(0,0,0,0.7);" class="text-white">Genotoxic Impurities:<br> Nitrosamines LC-MS An NSF Guide</h1>
					</div>
				</div> -->

            </div>
            <div class="row m-0">
                <div class="col-12 col-md-6">
                    <img src="{{ config('app.url') }}images/accelerating-mrna-research-and-manufacturing-banner-1.png" alt="accelerating-mrna-research-and-manufacturing" title="accelerating-mrna-research-and-manufacturing" class="img-fluid">
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{ config('app.url') }}images/accelerating-mrna-research-and-manufacturing-banner-2.png" alt="accelerating-mrna-research-and-manufacturing" title="accelerating-mrna-research-and-manufacturing" class="img-fluid">
                </div>
                <div class="col-12 mt-5 text-center">
                    <h1 class="font-weight-bold">Accelerating mRNA research and manufacturing</h1>
                    <h1 class="mb-4 font-weight-bold">Life sciences eSeminar</h1>
                    <h2 class="mb-5 font-weight-bold">2022 April 5 |   09:00 –12:00 SGT</h2>
                </div>
            </div>

        </div>
    </div>


    <div class="container" id="about">
        <div class="row justify-content-center">
            <div class="col-12 my-4">
                <h2 class="font-weight-bold text-center TXT-Blue font-20 mb-3" style="color: #094277;line-height:1.2">
                    Accelerating
                    mRNA research and manufacturing</h2>


                <div class="row justify-content-center">
                    <div class='col-12'>

                        <p class="mb-4">
                            Join us for our new eSeminar, “Accelerating mRNA research and manufacturing” launching on 5
                            April 2022, from
                            9:00 AM-1:00 PM Singapore Time.</p>

                    </div>
                    <!-- <div class = 'col-lg-6 col-md-8 col-sm-12 col-12'>
					 <p class="mb-0">
					 Duration: 59 minutes</p>
					 <button style='border: 1px solid #0077bb;background-color: #0077bb;padding:8px;'><a href='#' style='color:#fff;font-size: 16px;'>REGISTER NOW</a></button>
					 </div> -->

                </div>

                <p class="mb-4">Like you, we know that therapies based on messenger RNA, such as mRNA vaccines, have
                    revolutionary potential.
                    mRNA-based therapies offer precise and individualized therapy. They avoid manufacturing issues
                    associated with
                    recombinant proteins. And, compared with current therapeutics, mRNA is more cost-effective, faster,
                    and flexible
                    to produce.</p>

                <p class="mb-4">In this eSeminar, Danaher hosts multiple partner companies who share Solutions for
                    large-scale production of
                    mRNA-based molecules to help you address some of these challenges.</p>
                <p class="mb-4">We look forward to engaging with you soon!</p>
                <h2 class="font-weight-bold TXT-Blue font-20 mb-3" style="color: #094277;line-height:1.2">Program
                    Agenda:</h2>
                <div class="row m-0">
                    <?php
                    $agenda = array(
                        array('9:00 - 09:03', 'Welcome', 'Sueki Leung, Regional Marketing Manager', 'logo-1'),
                        array('09:03 - 09:10', 'Introduction To Danaher', 'Mike Thompson, President, Danaher Japan & SE Asia', 'logo-2'),
                        array('9:10 - 9:45', 'Plasmid DNA- A cornerstone in modern biotechnology', 'Henrik Ihre, Ph.D., Strategic Technology Partnerships Leader, Cytiva', 'logo-3'),
                        array('9:45 - 10:10', 'High-throughputparallel bioprocessing in “on-line monitoring” micro-bioreactors – from clone screening to automated bioprocess development', 'Eylot Lam, Field Application Specialist, Beckman Coulter Life Science', 'logo-4'),
                        array('10:10 - 10:35', 'Chromatographic solutions for characterization in mRNA production processes', 'Namrata Saxena, Technical Manager, Phenomenex', 'logo-5'),
                        array('10:35 - 11:00', 'Accelerating development of lipid nanoparticles for messenger RNA delivery', 'Anastasia Darwitan, Ph.D., Field Application Scientist, Precision NanoSystems', 'logo-6'),
                        array('11:00 - 11:25', 'SCIEX CE solutions for DNA/RNA', 'Walter Feng, Ph.D., Senior Field Service Application Specialist, CE Solutions, SCIEX', 'logo-7'),
                        array('11:20 - 11:50', 'GxP concepts for the pharmaceutical drug development lifecycle', 'Timothy Bolus, MPM, MBA, Compliance Program Manager, Molecular Devices', 'logo-8'),
                    );
                    ?>
                    @foreach($agenda as $agenda)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card mb-3" style="height: calc(100% - 1rem);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ config('app.url') }}webinars/{{ $agenda[3] }}.jpg" style="width:140px;" class="img-fluid">
                                        <h6 class="card-title d-inline-block m-0 bg-danger px-1 rounded mr-2 text-white">
                                            {{ $agenda[0] }}
                                        </h6>

                                        <h6 class="card-title">{{ $agenda[1] }}</h6>
                                    </div>
                                </div>
                                <h5 class="card-text">{{ $agenda[2] }}</h5>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

                <!-- <div class="col-12 col-sm-7">
				<p class="shadow font-weight-bold BG-BLUE pt-2 text-white text-center font-22 py-3 px-5 rounded" style="cursor: pointer;" data-toggle="modal" data-target="#form-submit">Download Whitepaper</p>
			</div> -->

                <div class="container pt-3 pb-4">
                    <h2 class="font-weight-bold TXT-Blue font-20 mb-3" style="color: #094277;line-height:1.2">Speakers:
                    </h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                            <div class="card mb-3" style="cursor:pointer;height: calc(100% - 1rem);" data-toggle="modal" data-target="#speaker1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-1.jpg" alt="Henrik Ihre" title="Henrik Ihre" class="img-fluid">
                                            <h3 class="font-18 pt-2"><span class="TXT-Blue font-weight-bold">Henrik
                                                    Ihre, Ph.D.</span><br>Strategic Technology Partnerships Leader,
                                                Cytiva</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal start -->
                            <div class="modal fade" id="speaker1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">About Speaker</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-1.jpg" alt="Henrik Ihre" title="Henrik Ihre" class="img-fluid">
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <h3 class="font-18 pt-2 text-left mt-3"><span class="TXT-Blue font-weight-bold">Henrik Ihre,
                                                            Ph.D.</span><br>Strategic Technology Partnerships Leader,
                                                        Cytiva</h3>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <p class="text-left">Henrik Ihre has his roots in biopharma,
                                                        leadership and product development for the biopharma downstream
                                                        industry in specific. He is motivated by bringing new solutions
                                                        to the market enabling the invention and manufacturing of new
                                                        pharmaceuticals for patients developed by partners of Cytiva.
                                                        He’s been the Director of Strategic Technologies since March
                                                        2020 with a specific knowledge and background in the Downstream
                                                        purification of biopharmaceuticals since 20 years back in time.
                                                    </p>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="rounded btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                            <div class="card mb-3" style="cursor:pointer;height: calc(100% - 1rem);" data-toggle="modal" data-target="#speaker2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-2.jpg" alt="Eylot Lam" title="Eylot Lam" class="img-fluid">
                                            <h3 class="font-18 pt-2"><span class="TXT-Blue font-weight-bold">Eylot
                                                    Lam,</span><br>Field Application Specialist, Beckman Coulter Life
                                                Science </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal start -->
                            <div class="modal fade" id="speaker2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">About Speaker</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-2.jpg" alt="Eylot Lam" title="Eylot Lam" class="img-fluid">
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <h3 class="font-18 pt-2 text-left mt-3"><span class="TXT-Blue font-weight-bold">Eylot Lam,</span><br>Field
                                                        Application Specialist, Beckman Coulter Life Science</h3>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <p class="text-left">Eylot is a Field Application Specialist with
                                                        Beckman Coulter Life Science. In this role, he looks after all
                                                        aspects of BioLector (MicroBioreactor) including training,
                                                        demonstration and troubleshooting. Eylot specializes in
                                                        biotechnology and has worked on a diverse range of areas as well
                                                        as life science, medical devices, and molecular biology.</p>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="rounded btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                            <div class="card mb-3" style="cursor:pointer;height: calc(100% - 1rem);" data-toggle="modal" data-target="#speaker3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-3.jpg" alt="Namrata Saxena" title="Namrata Saxena" class="img-fluid">
                                            <h3 class="font-18 pt-2"><span class="TXT-Blue font-weight-bold">Namrata
                                                    Saxena, Ph.D.</span><br>Technical Manager, Phenomenex</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal start -->
                            <div class="modal fade" id="speaker3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">About Speaker</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-3.jpg" alt="Namrata Saxena" title="Namrata Saxena" class="img-fluid">
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <h3 class="font-18 pt-2 text-left mt-3"><span class="TXT-Blue font-weight-bold">Namrata
                                                            Saxena</span><br>Technical Manager, Phenomenex</h3>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <p class="text-left">Namrata is a Technical Manager for the
                                                        Asia/Pacific region with Phenomenex and is based in Sydney,
                                                        Australia. She has a post graduate degree with a specialization
                                                        in Analytical Chemistry and has extensive experience in the
                                                        Liquid chromatography domain and her current focus is in Omics
                                                        and Biologics field.
                                                        Before joining Phenomenex she had worked as “Product Specialist”
                                                        and spent several years in column chemistry, column
                                                        manufacturing and method development in the application and
                                                        manufacturing labs of Bischoff Chromatography, Germany.
                                                        In her current role, she provides product selection, method
                                                        development, training and troubleshooting support to customers
                                                        as well as Phenomenex Sales Consultants globally.</p>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="rounded btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->

                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                            <div class="card mb-3" style="cursor:pointer;height: calc(100% - 1rem);" data-toggle="modal" data-target="#speaker4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-4.jpg" alt="Anastasia Darwitan" title="Anastasia Darwitan" class="img-fluid">
                                            <h3 class="font-18 pt-2"><span class="TXT-Blue font-weight-bold">Anastasia
                                                    Darwitan, Ph.D.,</span><br>Field Application Scientist, Precision
                                                NanoSystems</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal start -->
                            <div class="modal fade" id="speaker4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">About Speaker</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-4.jpg" alt="Anastasia Darwitan" title="Anastasia Darwitan" class="img-fluid">
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <h3 class="font-18 pt-2 text-left mt-3"><span class="TXT-Blue font-weight-bold">Anastasia
                                                            Darwitan</span><br>Field Application Scientist, Precision
                                                        NanoSystems</h3>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <p class="text-left">Dr. Anastasia has undergraduate degree in
                                                        Materials Science & Engineering and completed her Ph.D. in
                                                        nanomedicine for drug delivery at Nanyang Technological
                                                        University, Singapore, in collaboration with Northwestern
                                                        University in 2020. Before joining Precision NanoSystems in June
                                                        2020, she had helped to develop various lipid and polymer-based
                                                        drug delivery systems for various disease applications, such as
                                                        cardiovascular and ocular diseases for 10 years. She also
                                                        researched on nanoparticle surface functionalization with
                                                        targeting ligand and its effect on cell uptake. She is an author
                                                        of peer-reviewed publications dealing with development of
                                                        nanomedicine therapies and is a co-inventor for a patent in this
                                                        field. At Precision NanoSystems, she is responsible for
                                                        providing technical support for clients in formulation and
                                                        process development.</p>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="rounded btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->

                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                            <div class="card mb-3" style="cursor:pointer;height: calc(100% - 1rem);" data-toggle="modal" data-target="#speaker5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-5.jpg" alt="Walter Feng" title="Walter Feng" class="img-fluid">
                                            <h3 class="font-18 pt-2"><span class="TXT-Blue font-weight-bold">Walter
                                                    Feng, Ph.D.,</span><br>Senior Field Service Application Specialist,
                                                CE Solutions, SCIEX</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal start -->
                            <div class="modal fade" id="speaker5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">About Speaker</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-5.jpg" alt="Walter Feng" title="Walter Feng" class="img-fluid">
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <h3 class="font-18 pt-2 text-left mt-3"><span class="TXT-Blue font-weight-bold">Walter Feng,
                                                            Ph.D.,</span><br>Senior Field Service Application
                                                        Specialist, CE Solutions, SCIEX</h3>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <p class="text-left">Dr. Walter Feng is senior field service
                                                        application specialist at SCIEX. SCIEX is leading the
                                                        development of Capillary Electrophoresis (CE) technology. More
                                                        efforts are given to the Biopharma/Pharma market applications
                                                        and solutions. Dr Feng graduated from National University of
                                                        Singapore, Faculty of Science with PhD in 2004. Prior to joining
                                                        SCIEX, he had worked in NUS and A-STAR with various research
                                                        projects using SCIEX CE technology. </p>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="rounded btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->

                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                            <div class="card mb-3" style="cursor:pointer;height: calc(100% - 1rem);" data-toggle="modal" data-target="#speaker6">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-6.jpg" alt="Timothy Bolus" title="Timothy Bolus" class="img-fluid">
                                            <h3 class="font-18 pt-2"><span class="TXT-Blue font-weight-bold">Timothy
                                                    Bolus, MPM, MBA,</span><br>Compliance Program Manager, Molecular
                                                Devices</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal start -->
                            <div class="modal fade" id="speaker6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">About Speaker</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <img src="{{ config('app.url') }}webinars/accelerating-mrna-speaker-6.jpg" alt="Timothy Bolus" title="Timothy Bolus" class="img-fluid">
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <h3 class="font-18 pt-2 text-left mt-3"><span class="TXT-Blue font-weight-bold">Timothy Bolus, MPM,
                                                            MBA,</span><br>Compliance Program Manager, Molecular Devices
                                                    </h3>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <p class="text-left">Tim is the Compliance Product/Program Manager
                                                        at Molecular Devices. Over the past 25 years, Tim has developed
                                                        his expertise working in diagnostic labs, manufacturing,
                                                        clinical development, and in the GxP space bringing the customer
                                                        perspective to the new Compliance Portfolio Marketing team. He
                                                        works closely with Sales and Marketing teams with strategies to
                                                        promote GxP products and services, and works with software
                                                        engineering teams as the product manager to develop innovative
                                                        software solutions, enhancements and features. He obtained his
                                                        dual Masters in Business Administration and Project Management
                                                        from DeVry University in San Francisco (California) and his BS
                                                        in Biology from Angeles University Foundation in the
                                                        Philippines. </p>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="rounded btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->

                        </div>
                    </div>
                </div>
                <p>By registering for this seminar, you confirm that you have read the privacy policies below and freely
                    consent to each operating company's collection and processing of your personal data for the purpose
                    described. You agree that each operating company may collect and process your personal data in
                    accordance with its privacy policy.</p>
                <div>Privacy Policies:</div>
                <div class="mb-4"><a target="_blank" title="" href="https://app.explore.phenomenex.com/e/er?s=822460770&amp;lid=3234&amp;elqTrackId=5061B3CF55ADA4126941C7B3CE69A292&amp;elq=00000000000000000000000000000000&amp;elqaid=2844&amp;elqat=2" data-targettype="webpage" style="color: rgb(20, 92, 158); text-decoration: none;">Beckman
                        Coulter Life Sciences</a> | <a target="_blank" title="" href="https://app.explore.phenomenex.com/e/er?s=822460770&amp;lid=3233&amp;elqTrackId=5844BA3AD88BAB2C60B9EFB2BBEF363B&amp;elq=00000000000000000000000000000000&amp;elqaid=2844&amp;elqat=2" data-targettype="webpage" style="color: rgb(20, 92, 158); text-decoration: none;">Cytiva </a>|
                    <a target="_blank" title="" href="https://app.explore.phenomenex.com/e/er?s=822460770&amp;lid=3232&amp;elqTrackId=644C7090B61BB9EFD4C424109D290C43&amp;elq=00000000000000000000000000000000&amp;elqaid=2844&amp;elqat=2" data-targettype="webpage" style="color: rgb(20, 92, 158); text-decoration: none;">Leica
                        Microsystems</a> | <a target="_blank" title="" href="https://app.explore.phenomenex.com/e/er?s=822460770&amp;lid=3231&amp;elqTrackId=FE4E0301071B655952DE971EB0DAB39F&amp;elq=00000000000000000000000000000000&amp;elqaid=2844&amp;elqat=2" data-targettype="webpage" style="color: rgb(20, 92, 158); text-decoration: none;">Molecular
                        Devices</a> | <a target="_blank" title="" href="https://app.explore.phenomenex.com/e/er?s=822460770&amp;lid=3230&amp;elqTrackId=1C4EC3A9BDCC6C0890F31B1DDC5EB3CF&amp;elq=00000000000000000000000000000000&amp;elqaid=2844&amp;elqat=2" data-targettype="webpage" style="color: rgb(20, 92, 158); text-decoration: none;">Pall
                        Corporation</a> | <a target="_blank" title="" href="https://app.explore.phenomenex.com/e/er?s=822460770&amp;lid=95&amp;elqTrackId=86285D9C1BF1723D25052EF07804F4B3&amp;elq=00000000000000000000000000000000&amp;elqaid=2844&amp;elqat=2" data-targettype="webpage" style="color: rgb(20, 92, 158); text-decoration: none;">Phenomenex
                    </a>| <a target="_blank" title="" href="https://app.explore.phenomenex.com/e/er?s=822460770&amp;lid=3229&amp;elqTrackId=AC7BBC00D63FFDDDD3BB3337E87C738B&amp;elq=00000000000000000000000000000000&amp;elqaid=2844&amp;elqat=2" data-targettype="webpage" style="color: rgb(20, 92, 158); text-decoration: none;">SCIEX</a>
                </div>
                <div class="d-flex">
                    <a class="btn btn-danger btn-sm rounded mx-auto text-white shadow" data-toggle="modal" data-target="#myForm">Register Now</a>
                </div>



                <!-- Form Popup Model Box -->
                <div id="myForm" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content BG-BLUE">
                            <div class="modal-header text-center">
                                <h2 class="text-white font-24 text-white font-weight-bold">Register now</h2>
                                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('acceleratingMrna.post')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group ">

                                                <input type="hidden" name="type" id="type" value="accelerating mrna research and manufacturing">
                                                <input type="hidden" name="formtype" value="modal-form">
                                                <input type="hidden" name="client_subject" value="Registrations for Accelerating mRNA research and manufacturing">
                                                <input type="hidden" name="admin_subject" value="Registrations for Accelerating mRNA research and manufacturing">
                                                <input type="hidden" name="thank_message" value=" Thank you for showing interest in Accelerating mRNA research and manufacturing. One of our concerned team will get back to you soon.">
                                                <input type="hidden" name="client_message" value="  Thank You for showing interest in Accelerating mRNA research and manufacturing. Your visitor registration was successful and one of our concerned team would get back to you at the earliest.">

                                                <input class="form-control" id="firstname" name="firstname" placeholder="First Name *" required value="" type="text">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-group ">
                                                <input class="form-control" id="lastname" name="lastname" placeholder="Last Name *" required="" value="" type="text">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group ">
                                                <input type="text" class="form-control" id="company" name="company" placeholder="Company *" value="" required="">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group ">
                                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone *" value="" required="">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-group ">
                                                <input class="form-control" id="email" name="email" placeholder="Email *" required="" value="" type="email">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <select class="form-control" placeholder="Job Role*" name="job_title" required value="">
                                                    <option value="">Select Job Role*</option>
                                                    <option value="Chemist/Scientist">Chemist/Scientist</option>
                                                    <option value="Principal Scientist/Sr. Scientist">Principal
                                                        Scientist/Sr. Scientist</option>
                                                    <option value="Lab Manager/Lab Director">Lab Manager/Lab Director
                                                    </option>
                                                    <option value="Purchasing Agent (PA)/Sourcing Manager">Purchasing
                                                        Agent (PA)/Sourcing Manager</option>
                                                    <option value="Professor/Assoc. Professor">Professor/Assoc.
                                                        Professor</option>
                                                    <option value="Lab Technician">Lab Technician</option>
                                                    <option value="PhD Student/PostDoc">PhD Student/PostDoc</option>
                                                    <option value="Principal Investigator (PI)">Principal Investigator
                                                        (PI)</option>
                                                    <option value="Executive/CEO/CSO">Executive/CEO/CSO</option>
                                                    <option value="Unknown">Unknown</option>
                                                </select>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <select class="form-control" placeholder="Which Industry do you work in?*" name="industry" required value="">
                                                    <option value="">Which Industry do you work in?*</option>
                                                    <option value="Cannabis">Cannabis</option>
                                                    <option value="Clinical">Clinical</option>
                                                    <option value="Environmental">Environmental</option>
                                                    <option value="Food Safety">Food Safety</option>
                                                    <option value="Food Quality">Food Quality</option>
                                                    <option value="Forensics/Toxicology">Forensics/Toxicology</option>
                                                    <option value="Fuels">Fuels</option>
                                                    <option value="Life Sciences">Life Sciences</option>
                                                    <option value="Personal Care/ Consumer Products">Personal Care/
                                                        Consumer Products</option>
                                                    <option value="Pharmaceutical">Pharmaceutical</option>
                                                    <option value="Specialty Chemical/Industrial">Specialty
                                                        Chemical/Industrial</option>
                                                    <option value="Biopharmaceutical">Biopharmaceutical</option>
                                                </select>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-group {{ $errors->first('country', 'has-error')}}">
                                                <select class="form-control" placeholder="Select Country*" name="country" required value="{{ old('country') }}">
                                                    <option value="">Select Country*</option>
                                                    @foreach($countries as $country)
                                                    <option value="{{$country->country_name}}">
                                                        {{$country->country_name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <span class="help-block">{{ $errors->first('country', ':message') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group ">
                                                <input class="form-control" id="city" name="City" placeholder="City *" required="" value="" type="text">

                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group ">
                                                <input class="form-control" id="address" name="address" placeholder="Address *" required="" value="" type="text">

                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group ">
                                                <input class="form-control" id="postal" name="zip_code" placeholder="Zip or Postal code*" required="" value="" type="text">

                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <textarea class="form-control" id="message" placeholder="Message" name="message"></textarea>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 pt-2">
                                        <div class="form-group text-left text-white mb-3">
                                            <p><small>By checking the box for the following Danaher operating companies, I
                                                    consent
                                                    to receiving communication/ I would like to subscribe to communication,
                                                    including promotional materials, from the following Danaher operating
                                                    companies.</small></p>
                                            <div class="row">
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox" name="intrested" id="inlineCheckbox1" value="Beckman">
                                                    <label class="form-check-label" for="inlineCheckbox1">Beckman
                                                        Coulter</label>
                                                </div>
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox" name="intrested" id="inlineCheckbox2" value="Cytiva">
                                                    <label class="form-check-label" for="inlineCheckbox2">Cytiva</label>
                                                </div>
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox"  name="intrested" id="inlineCheckbox3" value="IntegratedDNATechnologies">
                                                    <label class="form-check-label" for="inlineCheckbox3">Integrated DNA
                                                        Technologies</label>
                                                </div>
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox" name="intrested" id="inlineCheckbox4" value="MolecularDevices">
                                                    <label class="form-check-label" for="inlineCheckbox4">Molecular
                                                        Devices</label>
                                                </div>
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox" name="intrested" id="inlineCheckbox5" value="Pall">
                                                    <label class="form-check-label" for="inlineCheckbox5">Pall</label>
                                                </div>
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox" name="intrested" id="inlineCheckbox6" value="Phenomenex">
                                                    <label class="form-check-label" for="inlineCheckbox6">Phenomenex</label>
                                                </div>
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox" name="intrested" id="inlineCheckbox7" value="Leica">
                                                    <label class="form-check-label" for="inlineCheckbox7">Leica</label>
                                                </div>
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox" name="intrested" id="inlineCheckbox8" value="SCIEX">
                                                    <label class="form-check-label" for="inlineCheckbox8">SCIEX</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-2">
                                        <div class="form-group text-left text-white mb-3">
                                            <p><small>If you consent above, please confirm how you prefer we contact you:</small></p>
                                            <div class="row">
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox" name="declaration" id="by-phone" value="by-phone">
                                                    <label class="form-check-label" for="by-phone">By Phone</label>
                                                </div>
                                                <div class="form-check col-12 col-sm-6 text-left">
                                                    <input class="form-check-input" type="checkbox" name="declaration" id="by-email" value="by-email">
                                                    <label class="form-check-label" for="by-email">By Email</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-2">
                                        <div class="form-group text-center mb-3">
                                            <button type="submit" value="submit" class="btn btn-sm btn-block btn-danger" id="checkBtn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>






                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-blue">Thank You..</h4>
                            </div>
                            <div class="modal-body">
                                <p>{{session('thank_message')}}</p>
                                <br>
                                Thank You
                                <br>
                                Client Success Team – CRM
                                <br>
                                Pharma Focus Asia
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-seconadry" role="button" id="aa" name="aa" href="{{url('promotion/accelerating-mrna-research-and-manufacturing')}}" aria-expanded="false">
                                    Close
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style='    background-color: #002232 !important; color: #ccc; padding: 15px 10px 0 10px; '>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <p>© Ochre Media Pvt Ltd., 2022. All rights reserved.</p>
                </div>

                <div class="col-md-5 col-12 pb-2">
                    <!-- // FOOTER-SOCIAL MEDIA -->
                    <div class="ft-right">
                        <a href="https://www.linkedin.com/company/pharmafocusasia-magazine" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="https://twitter.com/pharmafocusasia" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/PharmaFocusAsia" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <!-- FOOTER-SOCIAL MEDIA // -->
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ config('app.url') }}mix/app.js"></script>

    <script type="text/javascript">
        @if(Session('thank_message'))
        $('#myModal').modal('show');
        @endif
    </script>

    @if($errors->any())
    @if(old('formtype') == 'modal-form')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#register').modal('show');
        });
    </script>


    @endif
    @endif

</body>

</html>