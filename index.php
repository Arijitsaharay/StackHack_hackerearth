<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Technocrat Event Management</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/icons/favicon.ico"/>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    session_start();
    if(isset($_SESSION['uid'])){
        header("location:dashboard.php");
        exit;
    }
?>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.php"><img src="./img/icons/logo2.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                
                               <!--  <li><a href="">Blog</a></li> -->
                                <li><a href="login1.php">Events</a>
                                    <ul class="dropdown">
                                        <li><a href="cultural.php">- Cultural</a>
                                        <ul class="dropdown">
                                                <li><a href="login1.php">- Music Concert</a></li>
                                                <li><a href="login1.php">- Dance Concert</a></li>
                                                <li><a href="login1.php">- Art Exibition</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="login1.php">- Technical</a>
                                          <ul class="dropdown">
                                                <li><a href="login1.php">- Robotics</a></li>
                                                <li><a href="login1.php">- Code It</a></li>
                                                <li><a href="login1.php">- Gaming</a></li>
                                                <li><a href="login1.php">- Build 2 Rule</a></li>
                                                <li><a href="login1.php">- Mech Tech</a></li>
                                            </ul>
                                        </li>
                                     </ul>

                                
                                <li><a href="login1.php">About</a>
                                    <ul class="dropdown">
                                        <li><a href="login1.php">- About Us</a></li>
                                        <li><a href="login1.php">- Contact Us</a></li>
                                        <li><a href="login1.php">- Locate Us</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="#">Account</a>
                                    <ul class="dropdown">
                                        <li><a href="profile.php">- profile</a></li>
                                        <li><a href="order.php">- Tickets</a></li>
                                        
                                    </ul>
                                </li> -->
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="login1.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5" on >Login <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->



    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/circuit1.gif);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Technical <br>Fest 2K20</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">Kolkata</h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="login1.php" class="btn confer-btn">More Information <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/14.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center">
                                <h5 data-animation="fadeInUp" data-delay="100ms">Technocrat Presents</h5>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Science Conference</h2>
                                <!-- Event Meta -->
                                <div class="event-meta" data-animation="fadeInUp" data-delay="500ms">
                                    <a class="event-date" href="login1.php"><i class="zmdi zmdi-account"></i> August 12, 2020</a>
                                    <!-- <a class="event-author" href="#"><i class="zmdi zmdi-alarm-check"></i> Laura Green</a> -->
                                </div>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="login1.php" class="btn confer-btn m-2">View more <i class="zmdi zmdi-long-arrow-right"></i></a>
                                    <a href="login1.php" class="btn confer-btn m-2">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Icon -->
        <div class="icon-scroll" id="scrollDown"></div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">About Event</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">Welcome to the World Of Technology</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Technocrat is the annual science and technology festival of Narula Institute of Technology Bombay. Started in 2004 with the aim of providing a platform for the Indian student community to develop and showcase their technical prowess, we have now grown into Asia's Largest Science and Technology Festival: a grand three-day event on the campus of NiT attracting people from all walks of life including students, academics, professionals and the general public.</p>
                        <a href="login1.php" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Interested <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="img/bg-img/2.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Counter Up Area -->
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <!-- Countdown Text -->
                        <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <br><br>
                            <h6>Conference Date</h6>
                            <h4>Count Every Second Until the Event</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <!-- <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div id="clock">
                                
                            </div>
                        </div> -->

      <style>
    body {
      text-align: center;
    }

    .timer {
      
      font-size: 3rem;
      font-weight: bold;
      padding: 2rem;
      color: white; 
    }
  </style>
    <span class="when-on" style="color: white"></span>

<div id="timer" class="timer"></div>

<script>
  // Set the date we're counting down to
  var countDownDate = new Date(Date.UTC(2020, 07, 12, 07, 60, 00));

  var dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
  document.querySelector('.when-on').innerHTML = countDownDate.toLocaleDateString("en-UK", dateOptions);

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate.getTime() - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("timer").innerHTML = days + "days " + hours + "h " +
      minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("timer").innerHTML = "EXPIRED";
    }
  }, 1000);
</script>

</script>
                    </div>

                </div>
            </div>
        </div>

    </section>
    
    <!-- Our Speakings Area End -->

    <!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url(img/bg-img/14.jpg);">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Choose a Ticket</p>
                        <h4>Ticket Pricing</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">3 events pass</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/core-img/p1.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>₹</span>599</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Full pass</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/core-img/p2.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>₹</span>1499</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Group pass</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/core-img/p3.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>₹</span>4999 </h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->

    <!-- Our Schedule Area Start -->
    <section class="our-schedule-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Our Timetable</p>
                        <h4>Schedule Plan</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Wednesday <br> <span>August 14, 2020</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Thrusday <br> <span>August 15, 2020</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Friday <br> <span>August 16, 2020</span></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/11.jpg" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Build 2 Rule</h6>
                                                    <p>by <span>Technocrat Club</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Aug 2020</p>
                                                <p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/12.jpg" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Art Exibition</h6>
                                                    <p>by <span>Technocrat Club</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Aug 2020</p>
                                                <p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p>
                                            </div>
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/13.jpg" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Gaming</h6>
                                                    <p>by <span>Technocrat Club</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Aug 2020</p>
                                                <p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/11.jpg" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Dance Concert</h6>
                                                    <p>by <span>Technocrat Club</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Aug 2020</p>
                                                <p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p><p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/10.jpg" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Robotics</h6>
                                                    <p>by <span>Technocrat Club</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Aug 2020</p>
                                                <p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/13.jpg" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Mech Tech</h6>
                                                    <p>by <span>Technocrat Club</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Aug 2020</p>
                                                <p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p><p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="wednesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/10.jpg" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Music Concert</h6>
                                                    <p>by <span>Technocrat Club</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Aug 2020</p>
                                                <p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/13.jpg" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Code It</h6>
                                                    <p>by <span>Technocrat Club</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Aug 2020</p>
                                                <p><i class="zmdi zmdi-map"></i> Agarpara,Kolkata, India</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
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
    <!-- Our Schedule Area End -->

    <!-- Our Sponsor And Client Area Start -->
    <section class="our-sponsor-client-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Partners &amp; Sponsors</p>
                        <h4>OFFICIAL SPONSOR</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex flex-wrap">
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="login1.php"><img src="img/core-img/1.jpg" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="login1.php"><img src="img/core-img/2.jpg" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="login1.php"><img src="img/core-img/3.jpg" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="login1.php"><img src="img/core-img/4.jpg" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="login1.php"><img src="img/core-img/5.jpg" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="login1.php"><img src="img/core-img/6.jpg" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="login1.php"><img src="img/core-img/7.jpg" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="login1.php"><img src="img/core-img/8.jpg" alt=""></a>
                        </div>
                    </div>
                </div>

                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Sponsor And Client Area End -->    

    <!-- Contact Area Start -->
    <section class="contact-our-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Have Question?</p>
                        <h4>Contact us</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Address:</p>
                            <h6>81,Nilgunj Road,Agarpara,Kolkata</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Phone:</p>
                            <h6>(+91) 70039 59492</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6>techcrat20@gmail.com</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Website:</p>
                            <h6>www.technocrat.unaux.com</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="home.php" method="post" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name2" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Your Number">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Your Message *"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- Contact Area End -->
    <!-- Map Area -->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.386369394708!2d88.3768853149128!3d22.676656485129353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f899adb6e5139f%3A0x8e43eace10c1361d!2sNarula%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1591044649559!5m2!1sen!2sin" allowfullscreen></iframe>
    </section>
    <?php include_once('footer.php');?>