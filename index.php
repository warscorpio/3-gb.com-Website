<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- <link rel="icon" href="assets/images/square.ico" height="32px" style="border-radius: 50%;" type="x-icon" /> -->
    <link rel="icon" href="assets/images/circle.ico" height="16px" type="x-icon" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to 3-GB</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- fa -->
    <!-- <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
    integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
    crossorigin="anonymous"
  /> -->
</head>

<body>
    <!-- ADDED BY PRADEEPA -->
    <?php include('header.php'); ?>
    <!-- //ADDED BY PRADEEPA -->

    <!-- banner section -->
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="slider-info  banner-view banner-top1">
                <div class="banner-info">
                    <div class="container-fluid">
                        <div class="banner-info-bg container-fluid d-flex justify-content-end">
                            <div class="col-lg-4 free-class-form">
                                <div class="contact-form-sec pt-5">
                                    <p class="free-class-form-header mt-3" style="color: black;">Book a <span>Demo
                                            Class</span></p>
                                    <div class="contact-block">
                                        <div class="col-sm-12 mt-4 pl-lg-4 form-div" id="formDiv">

                                            <form id="DemoClassForm" name="DemoClassForm" action="search.php" method="POST">
                                                <!-- One "tab" for each step in the form: -->
                                                <div class="tab">
                                                    <input class="col-lg-12 col-sm-12" placeholder="Name..." oninput="this.className = ''" name="name" required>
                                                    <input class="col-lg-12 col-sm-12" type="text" placeholder="Contact Number" oninput="this.className = ''" name="mobile-number" required>
                                                </div>
                                                <div class="tab">
                                                    <input class="col-lg-12 col-sm-12" placeholder="Email Address" oninput="this.className = ''" name="email" required>
                                                    <input class="col-lg-12 col-sm-12" placeholder="Board of Examination" oninput="this.className = ''" name="board" required>
                                                </div>
                                                <div class="tab">
                                                    <span style="display: inline-flex;justify-content:space-between"><input class="col-lg-3 col-sm-3" placeholder="Class" oninput="this.className = ''" name="class" required>
                                                        <input class="col-lg-8 col-sm-8" placeholder="Subject" oninput="this.className = ''" name="subject" required></span>
                                                    <input class="col-lg-12 col-sm-12" placeholder="Language" oninput="this.className = ''" name='language' required>
                                                </div>
                                                <div class="tab">
                                                    <div class="input-group mb-3">
                                                        <select class="custom-select" id="inputGroupSelect01" multiple>
                                                            <option selected disabled>Days Available</option>
                                                            <option value="Monday">Monday</option>
                                                            <option value="Tuesday">Tuesday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Thursday">Thursday</option>
                                                            <option value="Friday">Friday</option>
                                                            <option value="Saturday">Saturday</option>
                                                            <option value="Sunday">Sunday</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <select class="custom-select" id="inputGroupSelect02" multiple>
                                                            <option selected disabled>Preferred Time Slot</option>
                                                            <option value="6 am - 9 am">6 am - 9 am</option>
                                                            <option value="9 am - 12 pm">9 am - 12 pm</option>
                                                            <option value="12 pm - 3 pm">12 pm - 3 pm</option>
                                                            <option value="3 pm - 6 pm">3 pm - 6 pm</option>
                                                            <option value="6 pm - 9 pm">6 pm - 9 pm</option>
                                                            <option value="9 pm - 12 am">9 pm - 12 am</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="tab">
                                                    <input class="col-lg-12 col-sm-12" placeholder="Budget (per hour)" oninput="this.className = ''" name="budget" required>
                                                    <input class="col-lg-12 col-sm-12" placeholder="Any Specific Requirements" oninput="this.className = ''" name="requirement" required>
                                                </div>
                                                <div style="overflow:auto;">
                                                    <div>
                                                        <button class="btn btn-style btn-style-secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                        <button class="btn btn-style btn-style-secondary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                                    </div>
                                                </div>
                                                <!-- Circles which indicates the steps of the form: -->
                                                <div style="text-align:center;margin-top:20px;">
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>
                                                    <span class="step"></span>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- banner bottom section -->
    <section class="w3l-bottom-grids-6 pb-lg-5 text-center" id="services">
        <div class="container">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-3 col-md-5 px-lg-2 mt-lg-0 mt-3">
                    <div class="area-box color-1">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <h4><a href="blankpage.php" class="title-head">Find a Tutor</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 px-lg-2 mt-lg-0 mt-3 ">
                    <!--mt-md-5 mt-3-->
                    <div class="area-box color-2">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <h4><a href="blankpage.php" class="title-head">Micro Courses</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 px-lg-2 mt-lg-0 mt-3">
                    <div class="area-box color-3">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <h4><a href="latest.php" class="title-head">Latest Updates</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 px-lg-2 mt-lg-0 mt-3">
                    <div class="area-box color-4">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <h4><a href="reviews.php" class="title-head">Review</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom section -->

    <!-- welcome section -->
    <section class="w3l-feature-8">
        <div class="features-main py-5">
            <div class="container py-md-5 py-4">
                <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                    <h3 class="title-main">Welcome to <span>3-GB</span></h3>
                </div>
                <div class="row features text-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info mt-4">
                                <h3 class="feature-titel">
                                    Dedicated Educators
                                </h3>
                                <p class="feature-text">Learning is easier when you have an excellent teacher. That's
                                    why most of our educators have achieved an advanced degree in their field. Our
                                    their lessons.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-sm-0 mt-5">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span class="fa fa-users" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info mt-4">
                                <h3 class="feature-titel">First rate curriculum</h3>
                                <p class="feature-text">Are you a beginner, expert, or somewhere in between?
                                    Not to worry! We offer a variety of high-quality courses designed to prepare you for
                                    your next step. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-lg-0 mt-5">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info mt-4">
                                <h3 class="feature-titel">Commitment to Excellence</h3>
                                <p class="feature-text">Our mission is to embrace the pursuit of excellence both inside
                                    and outside the classroom. We encourage critical thinking and emphasize the learning
                                    process over rote memorization. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //welcome section -->

    <!-- courses section -->
    <div class="w3l-grids-block-5 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">Pick a Course to <span>Get Started</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-5 mt-md-5 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/1.jpg" alt="" class="img-fluid" />
                            <!-- <div class="meta-list">
                                <a href="blankpage.html">art</a>
                                <a href="blankpage.html">design</a>
                            </div> -->
                            <div class="course-price-item">
                                <!-- <h6>₹999</h6> -->
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <!-- <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> Intermediate</li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 4 week</li>
                                </ul> -->
                            </div>
                            <h4><a href="blankpage.html">Piano for beginners</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <!-- <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li> -->
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="blankpage.html">Know Details<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 mt-md-5 mt-5">
                    <!---->
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/2.jpg" alt="" class="img-fluid" />
                            <!-- <div class="meta-list">
                                <a href="blankpage.html">Digital</a>
                                <a href="blankpage.html">Learn</a>
                                <a href="blankpage.html">10% off</a>
                            </div> -->
                            <div class="course-price-item">
                                <!-- <h6>₹999</h6> -->
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <!-- <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> High </li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul> -->
                            </div>
                            <h4><a href="blankpage.html">Python (Back-end)</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <!-- <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li> -->
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="blankpage.html">Know Details<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 mt-md-5 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/3.jpg" alt="" class="img-fluid" />
                            <!-- <div class="meta-list">
                                <a href="blankpage.html">Html</a>
                                <a href="blankpage.html">CSS</a>
                            </div> -->
                            <div class="course-price-item">
                                <!-- <h6>₹999</h6> -->
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <!-- <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> Beginner </li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 5 week</li>
                                </ul> -->
                            </div>
                            <h4><a href="blankpage.html">Intro to Web design</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <!-- <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star-o" aria-hidden="true"></i>
                                        </a></li> -->
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="blankpage.html">Know Details<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 mt-md-5 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/4.webp" alt="" class="img-fluid" />
                            <!-- <div class="meta-list">
                                <a href="blankpage.html">Website</a>
                                <a href="blankpage.html">Wordpress</a>
                            </div> -->
                            <div class="course-price-item">
                                <!-- <h6>₹999</h6> -->
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <!-- <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> Beginner</li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul> -->
                            </div>
                            <h4><a href="blankpage.html">PhP for beginners</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <!-- <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li> -->
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="blankpage.html">Know Details<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 mt-md-5 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/5.jpg" alt="" class="img-fluid" />
                            <!-- <div class="meta-list">
                                <a href="blankpage.html">Arts</a>
                                <a href="blankpage.html">Crafts</a>
                            </div> -->
                            <div class="course-price-item">
                                <!-- <h6>₹999</h6> -->
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <!-- <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> High </li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul> -->
                            </div>
                            <h4><a href="blankpage.html">Origami Mastery</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <!-- <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star-o" aria-hidden="true"></i>
                                        </a></li> -->
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="blankpage.html">Know Details<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 mt-md-5 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/6.png" alt="" class="img-fluid" />
                            <!-- <div class="meta-list">
                                <a href="blankpage.html">Design</a>
                                <a href="blankpage.html">UI/UX</a>
                            </div> -->
                            <div class="course-price-item">
                                <!-- <h6>₹999</h6> -->
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <!-- <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> Beginner </li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul> -->
                            </div>
                            <h4><a href="blankpage.html">UI/ UX with Figma</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <!-- <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="blankpage.htmlrate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li> -->
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="blankpage.html">Know Details<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-style btn-style-secondary mt-sm-3" href="blankpage.html">
                    Browse more courses<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- //courses section -->

    <!-- grids section -->
    <section class="w3l-homeblock1" id='free-class'>
        <div class="w3-services-ab py-5">
            <div class="container py-md-5 py-4">
                <div class="w3-services-grids pb-sm-5 mb-sm-4">
                    <div class="row w3-services-right-grid">
                        <div class="col-xl-4">

                        </div>
                        <div class="col-xl-8">
                            <div class="fea-gd-vv row">
                                <div class="col-md-5 pt-md-5 mt-md-5 mt-4">
                                    <div class="d-flex align-items-center feature-gd ">
                                        <div class="icon">
                                            <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>Flexible Classes</h5>
                                            <!-- <p> Lorem ipsum dolor sit amet, dolor elit.</p> -->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 pt-md-5 mt-md-5 mt-4">
                                    <!---->
                                    <div class="d-flex align-items-center feature-gd">
                                        <div class="icon">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>Personalised Learning</h5>
                                            <!-- <p> Lorem ipsum dolor sit amet, dolor elit.</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-4 pt-md-5">
                                    <div class="d-flex align-items-center feature-gd ">
                                        <div class="icon">
                                            <i class="fa fa-headphones" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>One-on-One</h5>
                                            <!-- <p> Lorem ipsum dolor sit amet, dolor elit.</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-4 pt-md-5">
                                    <div class="d-flex align-items-center feature-gd">
                                        <div class="icon">
                                            <i class="fa fa-play-circle" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>Learn from Home</h5>
                                            <!-- <p> Lorem ipsum dolor sit amet, dolor elit.</p> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container p-5">
                <form>
                    <div class="row justify-content-end align-items-center">
                        <div class="col-md-5 m-2">
                            <h3>Schedule a Free Class!</h3>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center">
                        <div class="col-md-5 m-2">
                            <div class="form-floating"><label for="free-class-name">Student Name</label>
                                <input type="text" class="form-control" id="free-class-name" placeholder="Name of Child"
                                    required>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center">
                        <div class="col-md-5 m-2">
                            <div class="form-floating"><label for="free-class-email">Email address</label>
                                <input type="email" class="form-control" id="free-class-email"
                                    placeholder="Email Address" required>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center">
                        <div class="col-md-5 m-2">
                            <div class="form-floating"><label for="free-class-mobile-number">Mobile Number</label>
                                <input type="text" class="form-control" pattern="[0-9]+" id="free-class-mobile-number"
                                    placeholder="Mobile Number" required>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center">
                        <div class="col-md-5 m-2">
                            <div class="form-floating"><label for="free-class-syllabus">Mobile Number</label>
                                <input type="text" class="form-control" id="free-class-syllabus"
                                    placeholder="Syllabus" required>
                                
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row align-items-center justify-content-end">
                        <div class="col-md-5 m-2">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGrid"
                                    aria-label="Floating label select example" required>
                                    <option selected>Select Syllabus / Board</option>
                                    <option value="CBSE">CBSE</option>
                                    <option value="ICSE">ICSE</option>
                                    <option value="AP">Andhra Pradesh</option>
                                    <option value="AR">Arunachal Pradesh</option>
                                    <option value="AS">Assam</option>
                                    <option value="BH">Bihar</option>
                                    <option value="CH">Chhattisgarh</option>
                                    <option value="GO">Goa</option>
                                    <option value="GJ">Gujarat</option>
                                    <option value="HR">Haryana</option>
                                    <option value="HP">Himachal Pradesh</option>
                                    <option value="JH">Jharkhand</option>
                                    <option value="KN">Karnataka</option>
                                    <option value="KR">Kerala</option>
                                    <option value="MP">Madhya Pradesh</option>
                                    <option value="MH">Maharashtra</option>
                                    <option value="MN">Manipur</option>
                                    <option value="MG">Meghalaya</option>
                                    <option value="MZ">Mizoram</option>
                                    <option value="NG">Nagaland</option>
                                    <option value="OD">Odisha</option>
                                    <option value="PB">Punjab</option>
                                    <option value="RJ">Rajasthan</option>
                                    <option value="SI">Sikkim</option>
                                    <option value="TN">Tamil Nadu</option>
                                    <option value="TS">Telangana</option>
                                    <option value="TR">Tripura</option>
                                    <option value="UP">Uttar Pradesh</option>
                                    <option value="UK">Uttarakhand</option>
                                    <option value="WB">West Bengal</option>

                                </select>
                                <label for="floatingSelectGrid">Syllabus</label>
                            </div>
                        </div>
                    </div> -->
            <!--
                    <div class="row justify-content-end align-items-center">
                        <div class="col-md-5 m-2">
                            <div class="form-floating"><label for="free-class-Class">Class</label>
                                <input type="number" min="1" max="12" class="form-control" id="free-class-class"
                                    placeholder="Class" required>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center">
                        <div class="col-md-5 m-2 ">
                            <button class='btn btn-gradient btn-dark' type='submit' class="form-control">Submit</button>
                        </div>
                    </div>
                </form>
            </div> -->
        </div>
    </section>
    <!-- //grids section -->

    <!-- stats -->
    <!-- <section class="w3_stats py-sm-5 pt-sm-0 pt-5" id="stats">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">Strength in <span>Numbers</span></h3>
                <p class="mt-4 pt-md-5">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                    dolorum
                    fuga.</p>
            </div>
            <div class="w3-stats">
                <div class="row text-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="6300" data-speed="1500"></div>
                            <p class="count-text">Learners & counting</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="638" data-speed="1500"></div>
                            <p class="count-text">Total courses</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="7600" data-speed="1500"></div>
                            <p class="count-text">Successful students</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                        <div class="counter border-right-0">
                            <div class="timer count-title count-number" data-to="36" data-speed="1500"></div>
                            <p class="count-text">Languages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //stats -->

    <!-- testimonial section -->
    <div class="w3l-cutomer-main-cont">
        <div class="testimonials py-5">
            <div class="container py-md-5 py-4">
                <div class="title-heading-w3 text-center mx-auto mb-5 pb-lg-5">
                    <h3 class="title-main">Student Community <span>Feedback </span></h3>
                </div>
                <div class="row content-sec mt-md-5">
                    <div class="col-lg-4 col-md-5 testi-sections mt-md-5 mt-4">
                        <div class="testimonials_grid">
                            <p class="sub-test">
                                <q>The tutors are very approachable and available to answer any question at any time. 3-GB has quickly become my go-to e-learning platform.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <!-- <img src="assets/images/testi2.jpg" alt="" class="img-fluid" /> -->
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Ryan Edison</h5>
                                    <p>Class 12</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5  testi-sections mt-md-5 mt-4">
                        <!-- -->
                        <div class="testimonials_grid">
                            <p class="sub-test">
                            <q>This is an outstanding platform which is easily affordable. The service was superb and the amenities outmatch the competition.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <!-- <img src="assets/images/testi1.jpg" alt="" class="img-fluid" /> -->
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Sandra Hunter</h5>
                                    <p>Class 10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 mt-md-5 mt-4 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>With 3-GB, I was able to start learning online and eventually build up enough knowledge and skills to transistion into a well-paying career.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <!-- <img src="assets/images/testi3.jpg" alt="" class="img-fluid" /> -->
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Paige Turner</h5>
                                    <p>Caption Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonial section -->

    <!-- team section -->
    <!-- <section class="w3l-team py-sm-5 pb-sm-0 pb-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">World Class <span>Instructors</span></h3>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="blankpage.htmlteam-single">
                                <img src="assets/images/team1.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="blankpage.htmlfacebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="blankpage.htmltwitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="blankpage.htmlgoogle-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><a href="blankpage.htmlteam">Olive Yew</a></h5>
                            <small>Teaches Design</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="blankpage.htmlteam-single">
                                <img src="assets/images/team2.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="blankpage.htmlfacebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="blankpage.htmltwitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="blankpage.htmlgoogle-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1 active"><a href="blankpage.htmlteam">Aida Joe</a></h5>
                            <small>UI/UX Designer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="blankpage.htmlteam-single">
                                <img src="assets/images/team3.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="blankpage.htmlfacebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="blankpage.htmltwitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="blankpage.htmlgoogle-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><a href="blankpage.htmlteam">Teri Dac</a></h5>
                            <small>Teaches Skills</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="blankpage.htmlteam-single">
                                <img src="assets/images/team4.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="blankpage.htmlfacebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="blankpage.htmltwitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="blankpage.htmlgoogle-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><a href="blankpage.htmlteam">Anton Bne</a></h5>
                            <small>Web Designer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //team setion -->

    <!-- about-2 section -->
    <section class="w3l-about-2 pb-5">
        <div class="container pb-md-5 pb-4 mb-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 about-2-secs-right mb-lg-0 mb-4 text-center">
                    <img src="assets/images/image.png" alt="" class="img-fluid img-responsive m-auto" />
                </div>
                <div class="col-lg-7 about-2-secs-left pr-lg-5">
                    <h3 class="title-style mb-sm-3 mb-2">
                        Not Sure Where to Begin? <br>Contact Now, We will Help you</h3>
                    <!-- <p>Consectetur adipiscing elit. Aliquam sit amet
                        efficitur tortor.Uspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
                        sapien.</p> -->
                    <div class="mt-4">
                        <a class="btn btn-style btn-style-secondary mt-3" href="contact.html">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about-2 section -->

    <!-- ADDED BY PRADEEPA -->
    <!-- footer -->
    <?php include('footer.php'); ?>
    <!-- //footer -->
    <!-- //ADDED BY PRADEEPA -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        function displaySearch() {
            document.getElementById('search-icon').style.display = "none";
            document.getElementById('search-bar').style.display = "block";
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- banner slider -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })

            $("more-links")
                .mouseenter(function() {
                    $('.dropdown-content').css({
                        'display': 'block'
                    })
                })
                .mouseleave(function() {
                    $('.dropdown-content').css({
                        'display': 'none'
                    })
                });
        })
    </script>
    <!-- //banner slider -->

    <!-- counter for stats -->
    <script src="assets/js/counter.js"></script>
    <!-- //counter for stats -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function() {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function(i, char) {
                        setTimeout(function() {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function() {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- added by pradeepa -->

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("DemoClassForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x;
            var y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // console.log(y);
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // console.log(y[i].value);
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    console.log(y[i].className);
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    <!-- //pradeepa -->
    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>