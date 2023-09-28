<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHI</title>
    <!-- meta des -->
    <meta name="keywords" content="DHI">
    <meta name="description" content="DHI">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="DHI">
    <!------------Website Theme Color---------------------->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#3A8291">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#3A8291">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#3A8291">
    <!---------------------- favicon ---------------------->
    <link rel="icon" href="assets/images/favicon.png">
    <!---------------------- css ---------------------->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
</head>

<body>
    <div class="wrapper">
        <!------------  header ----------->
        <?php include 'header.php';?>
        <!------------ // header ----------->
        <!------------ banner area --------->
        <section class="banner">
            <div class="container-fluid">
                <div class="banner-wrapper">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-xl-7">
                            <div class="banner-heading-area">
                                <h5>Hair Implantation</h5>
                                <h1>Life-Changing,<br>Natural-Looking Results</h1>
                                <p>3,498 Hair Implanted In Six Hour</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-5">

                            <div class="counter-mobile-wrapper desktop-hidden">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row align-items-center">
                                            <!-- 1 -->
                                            <div class="custom-col">
                                                <div class="transparent-white-bg">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="box-icon me-3">
                                                            <img src="assets/images/calender.png" class="img-fluid"
                                                                alt="Years of experience">
                                                        </div>
                                                        <div class="box-container">
                                                            <h6>52</h6>
                                                            <p>Years</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 2 -->
                                            <div class="custom-col">
                                                <div class="transparent-white-bg">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="box-icon me-3">
                                                            <img src="assets/images/hospital.png" class="img-fluid"
                                                                alt="Years of experience">
                                                        </div>
                                                        <div class="box-container">
                                                            <h6>75</h6>
                                                            <p>Clinics</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 3 -->
                                            <div class="custom-col">
                                                <div class="transparent-white-bg">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="box-icon me-3">
                                                            <img src="assets/images/globe.png" class="img-fluid"
                                                                alt="Years of experience">
                                                        </div>
                                                        <div class="box-container">
                                                            <h6>45</h6>
                                                            <p>Countries</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 4 -->
                                            <div class="custom-col custom-fifty">
                                                <div class="transparent-white-bg">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="box-icon me-3">
                                                            <img src="assets/images/patients.png" class="img-fluid"
                                                                alt="Years of experience">
                                                        </div>
                                                        <div class="box-container">
                                                            <h6>300000 +</h6>
                                                            <p>Delighted Patients</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 5 -->
                                            <div class="custom-col custom-fifty">
                                                <div class="transparent-white-bg">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="box-icon me-3">
                                                            <img src="assets/images/bill.png" class="img-fluid"
                                                                alt="Years of experience">
                                                        </div>
                                                        <div class="box-container">
                                                            <h6>300 +</h6>
                                                            <p>Procedures Everyday</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="banner-upper-form">
                                <div class="banner-title">
                                    <h2 class="text-center">BOOK A CONSULTATION WITH THE EXPERT NOW</h2>
                                </div>
                                <div class="main-form-area">
                                    <form action="<?php echo $link."call-us.php"; ?>" id="query-form" method="post"
                                        class="booking-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name">
                                            <span class="help-block" id="error-name"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="E-Mail">
                                            <span class="help-block" id="error-email"></span>
                                        </div>
                                        <div class="form-group">
                                            <select class="location form-control form-select" name="location">
                                                <option value="">Preferred Location</option>
                                                <option value="australia">Australia</option>
                                                <option value="greece">Greece</option>
                                                <option value="jersey">Jersey</option>
                                                <option value="portugal">Portugal</option>
                                            </select>
                                            <span class="help-block" id="error-location"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone" id="tel"
                                                placeholder="Mobile Number">
                                            <span class="help-block" id="error-phone"></span>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-blue w-100" id="send_message">Book An
                                                Appointment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----------// banner area --------->


        <!---------- counter area --------->
        <section class="mobile-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="counter-wrapper">
                            <div class="row align-items-center">
                                <!-- 1 -->
                                <div class="custom-col">
                                    <div class="d-flex justify-content-center">
                                        <div class="box-icon me-3">
                                            <img src="assets/images/calender.png" class="img-fluid"
                                                alt="Years of experience">
                                        </div>
                                        <div class="box-container">
                                            <h6>52</h6>
                                            <p>Years</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="custom-col">
                                    <div class="d-flex justify-content-center">
                                        <div class="box-icon me-3">
                                            <img src="assets/images/hospital.png" class="img-fluid"
                                                alt="Years of experience">
                                        </div>
                                        <div class="box-container">
                                            <h6>75</h6>
                                            <p>Clinics</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="custom-col">
                                    <div class="d-flex justify-content-center">
                                        <div class="box-icon me-3">
                                            <img src="assets/images/globe.png" class="img-fluid"
                                                alt="Years of experience">
                                        </div>
                                        <div class="box-container">
                                            <h6>45</h6>
                                            <p>Countries</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="custom-col">
                                    <div class="d-flex justify-content-center">
                                        <div class="box-icon me-3">
                                            <img src="assets/images/patients.png" class="img-fluid"
                                                alt="Years of experience">
                                        </div>
                                        <div class="box-container">
                                            <h6>300000 +</h6>
                                            <p>Delighted Patients</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- 5 -->
                                <div class="custom-col">
                                    <div class="d-flex justify-content-center">
                                        <div class="box-icon me-3">
                                            <img src="assets/images/bill.png" class="img-fluid"
                                                alt="Years of experience">
                                        </div>
                                        <div class="box-container">
                                            <h6>300 +</h6>
                                            <p>Procedures Everyday</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------// counter area --------->

        <!-------- treatment area --------->
        <section class="section-area treatment-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-heading-area">
                            <h6>Safety | Maximum Density | Natural Results</h6>
                            <h2>Treatment Patients Results</h2>
                            <p class="col-md-12 col-xl-8 mx-auto">
                                At DHI, our objective is to bring you the latest and
                                the most effective techniques in <br> hair transplant, ensuring the highest level of care and
                                attention.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row upper-gap">
                    <div class="col-md-12 col-xl-6">
                        <div class="video-review-area">
                            <video id="myVideo" class="treatment-video" poster="assets/images/video-poster.png" controls width="100%" loop autoplay muted>
                                <source src="assets/video/video.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <div class="image-review-area">
                            <div id="treatment-carousel" class="owl-carousel">
                                <div class="item owl-box">
                                    <a class="swap" href="#">
                                        <img src="assets/images/t-1.png">
                                        <img src="assets/images/t-2.png">
                                    </a>
                                </div>
                                <div class="item owl-box">
                                    <a class="swap" href="#">
                                        <img src="assets/images/t-2.png">
                                        <img src="assets/images/t-1.png">
                                    </a>
                                </div>
                                <div class="item owl-box">
                                    <a class="swap" href="#">
                                        <img src="assets/images/t-3.png">
                                        <img src="assets/images/t-4.png">
                                    </a>
                                </div>
                                <div class="item owl-box">
                                    <a class="swap" href="#">
                                        <img src="assets/images/t-4.png">
                                        <img src="assets/images/t-3.png">
                                    </a>
                                </div>
                            </div>
                            <!-- <button class="btn custom-btn up desktop-hidden">Before</button>
                            <button class="btn custom-btn down desktop-hidden">After</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------// treatment area-------->

        <!-------- technique area --------->
        <section class="section-area technique-area upper-gap">
            <div class="container">
                <div class="technique-wrapper">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-xl-6 m-0 p-0">
                            <div class="main-heading-area text-left technique-content">
                                <h6>Technique</h6>
                                <h2>Get Hair Naturally With DHI –</h2>
                                <h3>World`s Finest Hair Transplant Technique</h3>
                                <p>
                                    At DHI, our objective is to bring you the latest and the most
                                    effective techniques in hair transplant ensuring the highest
                                    level of care and attention.
                                </p>
                                <p>
                                    As one of the best hair transplant centres in India,
                                    we provide you with all the information about hair
                                    transplant which helps you understand the right hair
                                    fall treatment for you. This, in turn, allows you to make an
                                    informed choice based on your needs and goals.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6 m-0 p-0">
                            <div class="technique-img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------// technique area --------->

        <!---------- table area --------->
        <section class="section-area table-area">
            <div class="container">
                <div class="row margin-top">
                    <div class="col-md-12 col-xl-4 p-0 text-center">
                        <div class="table-main-heading">
                            <h2 class="dark-color dark-title"><b>FUE</b></h2>
                        </div>
                        <div class="white-table">
                            <div class="table-heading-title">
                                <h4>Follicular<br>Unit Extraction</h4>
                            </div>
                            <div class="table-list">
                                <ul>
                                    <li>Virtually painless procedure</li>
                                    <li>Slits are made</li>
                                    <li>No control on angle, depth & direction - unnatural results</li>
                                    <li>No written protocol followed</li>
                                    <li>Scars are left on scalp</li>
                                    <li>Low graft survival</li>
                                    <li>Recovery: 2-3 days</li>
                                    <li>Performed by multiple technicians, results in high graft handling & follicle
                                        damage</li>
                                </ul>
                            </div>
                            <div class="table-footer"></div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4 p-0 text-center mobile-gap-up">
                        <div class="table-main-heading">
                            <h2 class="light-color"><b>DHI</b></h2>
                        </div>
                        <div class="dark-table">
                            <div class="table-heading-title-dark">
                                <h4>Direct<br>Hair Implantation</h4>
                            </div>
                            <div class="table-list">
                                <ul>
                                    <li>Virtually painless procedure</li>
                                    <li>Follicles implanted directly</li>
                                    <li>Complete control on angle, depth & direction - 100% natural result</li>
                                    <li>Global protocol followed - accredited with UK CQC</li>
                                    <li>No scars</li>
                                    <li>90% graft survival rate</li>
                                    <li>Recovery: 1 days</li>
                                    <li>DHI Direct Hair Implantation is a patented technique performed only by DHI Academy trained and certified Doctors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4 p-0 text-center">
                        <div class="table-main-heading">
                            <h2 class="dark-color dark-title-two"><b>FUT</b></h2>
                        </div>
                        <div class="white-table">
                            <div class="table-heading-title">
                                <h4>Follicular<br>Unit Transplantation</h4>
                            </div>
                            <div class="table-list">
                                <ul>
                                    <li>Painless procedure</li>
                                    <li>Cuts are made</li>
                                    <li>No control on angle, depth & direction - unnatural results</li>
                                    <li>No written protocol followed</li>
                                    <li>Leaves a prominent scar</li>
                                    <li>Very low graft survival</li>
                                    <li>Recovery: 2 weeks</li>
                                    <li>Performed by multiple technicians, results in high graft handling & follicle
                                        damage</li>
                                </ul>
                            </div>
                            <div class="table-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------// table area --------->

        <!-------- why choose us -------->
        <section class="section-area why-choose-area another-gap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-heading-area">
                        <!--<h6>Lorem Ipsum</h6>-->
                        <h2>Why Choose DHI?</h2>
                        <!-- <p class="col-md-12 col-xl-8 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies<br>molestie dictum. Maecenas vitae neque eros.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row upper-gap">
                    <div class="col-md-12 col-xl-12">
                        <div class="main-why-area">
                            <div id="why-carousel" class="owl-carousel why-area-owl">
                                <div class="item">
                                    <!-- 1 -->
                                    <div class="why-for-desktop mobile-hidden"> 
                                        <div class="grid-two">
                                            <figure class="effect-sadie">
                                            <img src="assets/images/hair.png" class="icons" alt="img02" />
                                            <figcaption>
                                                <h2>
                                                <span>
                                                    <img src="assets/images/hair.png" alt="img02" />
                                                </span>
                                                </h2>
                                                <p>Legacy of 50 years of focus only on Hair Restoration.</p>
                                                <a href="#"></a>
                                            </figcaption>
                                            </figure>
                                        </div>
                                        <div class="grid-text">
                                            <div class="no-area">
                                            <h3>01 <span>50 Years Legacy</span>
                                            </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 1 -->
                                    <div class="why-for-mobile desktop-hidden">
                                        <div class="why-upper d-flex justify-content-center">
                                            <h3>01</h3>
                                            <img src="assets/images/mobile-icon/hair.png" class="icons" alt="img02" />
                                        </div>
                                        <div class="why-para-for-mob">
                                            <p>Legacy of 50 years of focus only on Hair Restoration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- 2 -->
                                    <div class="why-for-desktop mobile-hidden"> 
                                        <div class="grid-two">
                                            <figure class="effect-sadie">
                                            <img src="assets/images/shield.png" class="icons" alt="img02" />
                                            <figcaption>
                                                <h2>
                                                <span>
                                                    <img src="assets/images/shield.png" alt="img02" />
                                                </span>
                                                </h2>
                                                <p>Completely natural results with use of DHI Implanters that give perfect control ion depth, angle and direction.</p>
                                                <a href="#"></a>
                                            </figcaption>
                                            </figure>
                                        </div>
                                        <div class="grid-text">
                                            <div class="no-area">
                                            <h3>02 <span>Natural Result</span>
                                            </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="why-for-mobile desktop-hidden">
                                        <div class="why-upper d-flex justify-content-center">
                                            <h3>02</h3>
                                            <img src="assets/images/mobile-icon/shield.png" class="icons" alt="img02" />
                                        </div>
                                        <div class="why-para-for-mob">
                                            <p>Completely natural results with use of DHI Implanters that give perfect control ion depth, angle and direction.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- 3 -->
                                    <div class="why-for-desktop mobile-hidden"> 
                                        <div class="grid-two">
                                            <figure class="effect-sadie">
                                            <img src="assets/images/techniq.png" class="icons" alt="img02" />
                                            <figcaption>
                                                <h2>
                                                <span>
                                                    <img src="assets/images/techniq.png" alt="img02" />
                                                </span>
                                                </h2>
                                                <p>World's most advanced technique Direct Hair Implantation -No Pain No. Scars. No Downtime.</p>
                                                <a href="#"></a>
                                            </figcaption>
                                            </figure>
                                        </div>
                                        <div class="grid-text">
                                            <div class="no-area">
                                            <h3>03 <span>Our Technique</span>
                                            </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="why-for-mobile desktop-hidden">
                                        <div class="why-upper d-flex justify-content-center">
                                            <h3>03</h3>
                                            <img src="assets/images//mobile-icon/techniq.png" class="icons" alt="img02" />
                                        </div>
                                        <div class="why-para-for-mob">
                                            <p>World's most advanced technique Direct Hair Implantation -No Pain No. Scars. No Downtime.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <!-- 4 -->
                                    <div class="why-for-desktop mobile-hidden">
                                        <div class="grid-two">
                                            <figure class="effect-sadie">
                                            <img src="assets/images/pen.png" class="icons" alt="img02" />
                                            <figcaption>
                                                <h2>
                                                <span>
                                                    <img src="assets/images/pen.png" alt="img02" />
                                                </span>
                                                </h2>
                                                <p>Sophisticated imported instruments used.</p>
                                                <a href="#"></a>
                                            </figcaption>
                                            </figure>
                                        </div>
                                        <div class="grid-text">
                                            <div class="no-area">
                                            <h3>04 <span>Our instruments</span>
                                            </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4 -->
                                    <div class="why-for-mobile desktop-hidden">
                                        <div class="why-upper d-flex justify-content-center">
                                            <h3>04</h3>
                                            <img src="assets/images/mobile-icon/pen.png" class="icons" alt="img02" />
                                        </div>
                                        <div class="why-para-for-mob">
                                            <p>Sophisticated imported instruments used.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- 5 -->
                                    <div class="why-for-desktop mobile-hidden">
                                        <div class="grid-two">
                                            <figure class="effect-sadie">
                                            <img src="assets/images/boy.png" class="icons" alt="img02" />
                                            <figcaption>
                                                <h2>
                                                <span>
                                                    <img src="assets/images/boy.png" alt="img02" />
                                                </span>
                                                </h2>
                                                <p>Clear winner of IMRD'S customer satisfaction Survey in 2015.</p>
                                                <a href="#"></a>
                                            </figcaption>
                                            </figure>
                                        </div>
                                        <div class="grid-text">
                                            <div class="no-area">
                                            <h3>05 <span>99% Satisfaction</span>
                                            </h3>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- 5 -->
                                    <div class="why-for-mobile desktop-hidden">
                                        <div class="why-upper d-flex justify-content-center">
                                            <h3>05</h3>
                                            <img src="assets/images/mobile-icon/boy.png" class="icons" alt="img02" />
                                        </div>
                                        <div class="why-para-for-mob">
                                            <p>Clear winner of IMRD'S customer satisfaction Survey in 2015.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- 6 -->
                                    <div class="why-for-desktop mobile-hidden">
                                        <div class="grid-two">
                                            <figure class="effect-sadie">
                                            <img src="assets/images/people.png" class="icons" alt="img02" />
                                            <figcaption>
                                                <h2>
                                                <span>
                                                    <img src="assets/images/people.png" alt="img02" />
                                                </span>
                                                </h2>
                                                <p>Largest and the only Organized Hair Restoration Company in India.</p>
                                                <a href="#"></a>
                                            </figcaption>
                                            </figure>
                                        </div>
                                        <div class="grid-text">
                                            <div class="no-area">
                                            <h3>06 <span>Largest company</span>
                                            </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 6 -->
                                    <div class="why-for-mobile desktop-hidden">
                                        <div class="why-upper d-flex justify-content-center">
                                            <h3>06</h3>
                                            <img src="assets/images/mobile-icon/people.png" class="icons" alt="img02" />
                                        </div>
                                        <div class="why-para-for-mob">
                                            <p>Largest and the only Organized Hair Restoration Company in India.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- 7 -->
                                    <div class="why-for-desktop mobile-hidden">
                                        <div class="grid-two">
                                            <figure class="effect-sadie">
                                            <img src="assets/images/map-icon.png" class="icons" alt="img02" />
                                            <figcaption>
                                                <h2>
                                                <span>
                                                    <img src="assets/images/map-icon.png" alt="img02" />
                                                </span>
                                                </h2>
                                                <p>Largest brand in the world with 75 cunics across 45 countries in all continents.</p>
                                                <a href="#"></a>
                                            </figcaption>
                                            </figure>
                                        </div>
                                        <div class="grid-text">
                                            <div class="no-area">
                                            <h3>07 <span>Our Presence</span>
                                            </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 7 -->
                                    <div class="why-for-mobile desktop-hidden">
                                        <div class="why-upper d-flex justify-content-center">
                                            <h3>07</h3>
                                            <img src="assets/images/mobile-icon/map-icon.png" class="icons" alt="img02" />
                                        </div>
                                        <div class="why-para-for-mob">
                                            <p>Largest brand in the world with 75 cunics across 45 countries in all continents.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- 8 -->
                                    <div class="why-for-desktop mobile-hidden">
                                        <div class="grid-two">
                                            <figure class="effect-sadie">
                                            <img src="assets/images/medical-team.png" class="icons" alt="img02" />
                                            <figcaption>
                                                <h2>
                                                <span>
                                                    <img src="assets/images/medical-team.png" alt="img02" />
                                                </span>
                                                </h2>
                                                <p>World's largest medical team in hair resto Lan with Collective ex years.</p>
                                                <a href="#">dd</a>
                                            </figcaption>
                                            </figure>
                                        </div>
                                        <div class="grid-text">
                                            <div class="no-area">
                                            <h3>08 <span>Medical Team</span>
                                            </h3>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- 8 -->
                                    <div class="why-for-mobile desktop-hidden">
                                        <div class="why-upper d-flex justify-content-center">
                                            <h3>08</h3>
                                            <img src="assets/images/mobile-icon/medical-team.png" class="icons" alt="img02" />
                                        </div>
                                        <div class="why-para-for-mob">
                                            <p>World's largest medical team in hair resto Lan with Collective ex years.</p>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------// why choose us -------->

        <!-------- testimonials ------>
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-heading-area">
                            <h6>Reviews</h6>
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <div class="main-review-area">
                        <div id="review-carousel" class="owl-carousel">
                            <div class="item">
                                <!-- for desktop -->
                                <div class="grid mobile-hidden">
                                    <figure class="effect-lily">
                                        <img src="assets/images/govinda.png" alt="img1" />
                                        <figcaption>
                                            <div>
                                                <h2>Govinda - Bollywood Actor</h2>
                                                <p>"Choose DHI at the right time."</p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- for mobile -->
                                <div class="testimonial-grid-mobile desktop-hidden">
                                    <div class="user-image">
                                        <img src="assets/images/govinda.png" class="img-fluid rounded-3"
                                            alt="Govinda" />
                                    </div>
                                    <div class="user-review">
                                        <h3>Govinda - Bollywood Actor</h3>
                                        <p>"Choose DHI at the right time."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- for desktop -->
                                <div class="grid mobile-hidden">
                                    <figure class="effect-lily">
                                        <img src="assets/images/rohit.png" alt="img1" />
                                        <figcaption>
                                            <div>
                                                <h2>Rohit Roy - Actor</h2>
                                                <p>"When you look better!<br> You Feel Better."</p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- for mobile -->
                                <div class="testimonial-grid-mobile desktop-hidden">
                                    <div class="user-image">
                                        <img src="assets/images/rohit.png" class="img-fluid rounded-3" alt="Rohit" />
                                    </div>
                                    <div class="user-review">
                                        <h3>Rohit Roy - Actor</h3>
                                        <p>"When you look better! You Feel Better."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------// testimonials ------>

        <!--------- our process --------->
        <section class="process">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-heading-area">
                            <h6>Our Process</h6>
                            <h2>The DHI Hair Transplant Process</h2>
                            <p class="col-md-12 col-xl-8 mx-auto">As one of the best hair transplant centres in India,
                                we provide you with all the information about hair transplant which helps you understand
                                the right hair fall treatment for you. This, in turn, allows you to make an informed
                                choice based on your needs and goals.</p>
                        </div>
                    </div>
                </div>
                <div class="process-wrapper mt-3">
                    <div class="row align-items-center flex-wrap-reverse">
                        <div class="col-md-12 col-xl-6 m-0 p-0">
                            <div class="process-img"></div>
                        </div>
                        <div class="col-md-12 col-xl-6 m-0 p-0">
                            <div class="process-content">
                                <div class="video-area">
                                    <a data-fancybox="" href="https://youtu.be/yeP_4tpXSt8">
                                        <div class="box-video">
                                            <span class="play-buttons-icon">
                                                <i class="fa fa-play"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="process-main-content">
                                    <div class="process-sub-title">
                                        <h4>Step 1</h4>
                                    </div>
                                    <div class="process-sub-content">
                                        <p>Hair follicles are extracted one-by-one from the donor area, usually from the
                                            back of the head, using a specially designed, disposable tools with the
                                            diameter of 1mm or less. There is no need to cut or shave the head prior the
                                            session.</p>
                                    </div>
                                    <div class="space"></div>
                                    <div class="process-sub-title">
                                        <h4>Step 2</h4>
                                    </div>
                                    <div class="process-sub-content">
                                        <p>The hair follicles are then kept at a specific temperature and in a solution
                                            that enhances their development after placement, without separating, cutting
                                            or generally handling the grafts.</p>
                                    </div>
                                    <div class="space"></div>
                                    <div class="process-sub-title">
                                        <h4>Step 3</h4>
                                    </div>
                                    <div class="process-sub-content">
                                        <p>The hair follicles are implanted directly into the region suffering from the
                                            hair loss. Each hair follicle is placed in a specific direction, angle and
                                            depth, providing 100% natural results and growth for a lifetime.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------// our process --------->

        <!------------ location ------------>
        <section class="section-area location-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-xl-6">
                        <div class="left-section">
                            <div class="main-heading-area">
                                <h6>Location</h6>
                                <h2>Our Presence Around The World</h2>
                            </div>
                            <div class="button-group">
                                <a href="#" class="btn btn-light-bg">NATIONAL PRESENCE</a>
                                <a href="#" class="btn btn-dark-bg">GLOBAL PRESENCE</a>
                            </div>
                            <div class="country-list">
                                <ul class="list-unstyled">
                                    <li class="list-inline-item"><span class="dashed"></span> Australia</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Greece</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Jersey</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Portugal</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="list-inline-item"><span class="dashed"></span> Bahrain</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Hong Kong</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Morocco</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Qatar</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="list-inline-item"><span class="dashed"></span> Belgium</li>
                                    <li class="list-inline-item"><span class="dashed"></span> India</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Mauritius</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Dubai</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="list-inline-item"><span class="dashed"></span> Bulgaria</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Indonesia</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Malaysia</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Switzerland</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="list-inline-item"><span class="dashed"></span> Colombia</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Isle Of Man</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Netherlands</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Paris</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="list-inline-item"><span class="dashed"></span> Egypt</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Ireland</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Canada</li>
                                    <li class="list-inline-item"><span class="dashed"></span> United Kingdom</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="list-inline-item"><span class="dashed"></span> France</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Italy</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Panama</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Mexico</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="list-inline-item"><span class="dashed"></span> Germany</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Jordan</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Philippines</li>
                                    <li class="list-inline-item"><span class="dashed"></span> Brazil</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="list-inline-item"><span class="dashed"></span> Sri Lanka</li>
                                    <li class="list-inline-item"><span class="dashed"></span> United Arab Emirates</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <div class="image-area">
                            <img src="assets/images/map.png" class="img-fluid" alt="Globe">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------// location ---------->

        <!-------------- footer ------------>
        <?php include 'footer.php';?>
        <!-------------// footer ----------->
    </div>
    <!---wrapper div-->
    <!---------------------- js ---------------------->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/custom/script.js"></script>

</body>

</html>