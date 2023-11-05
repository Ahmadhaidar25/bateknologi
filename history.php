<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Intensely : Service</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
  <!-- Font Awesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">    
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
  <!-- Animate css -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
  <!-- Bootstrap progressbar  --> 
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main Style -->
  <link href="style.css" rel="stylesheet">

  <!-- Fonts -->

  <!-- Open Sans for body font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!-- Lato for Title -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <style type="text/css">
        .timeline {
          list-style: none;
          padding: 20px 0 20px;
          position: relative;
        }
        .timeline:before {
          top: 0;
          bottom: 0;
          position: absolute;
          content: " ";
          width: 3px;
          background-color: #eeeeee;
          left: 50%;
          margin-left: -1.5px;
        }
        .timeline > li {
          margin-bottom: 20px;
          position: relative;
        }
        .timeline > li:before,
        .timeline > li:after {
          content: " ";
          display: table;
        }
        .timeline > li:after {
          clear: both;
        }
        .timeline > li:before,
        .timeline > li:after {
          content: " ";
          display: table;
        }
        .timeline > li:after {
          clear: both;
        }
        .timeline > li > .timeline-panel {
          width: 46%;
          float: left;
          border: 1px solid #d4d4d4;
          border-radius: 2px;
          padding: 20px;
          position: relative;
          -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
          box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        }
        .timeline > li > .timeline-panel:before {
          position: absolute;
          top: 26px;
          right: -15px;
          display: inline-block;
          border-top: 15px solid transparent;
          border-left: 15px solid #ccc;
          border-right: 0 solid #ccc;
          border-bottom: 15px solid transparent;
          content: " ";
        }
        .timeline > li > .timeline-panel:after {
          position: absolute;
          top: 27px;
          right: -14px;
          display: inline-block;
          border-top: 14px solid transparent;
          border-left: 14px solid #fff;
          border-right: 0 solid #fff;
          border-bottom: 14px solid transparent;
          content: " ";
        }
        .timeline > li > .timeline-badge {
          color: #fff;
          width: 50px;
          height: 50px;
          line-height: 50px;
          font-size: 1.4em;
          text-align: center;
          position: absolute;
          top: 16px;
          left: 50%;
          margin-left: -25px;
          background-color: #999999;
          z-index: 100;
          border-top-right-radius: 50%;
          border-top-left-radius: 50%;
          border-bottom-right-radius: 50%;
          border-bottom-left-radius: 50%;
        }
        .timeline > li.timeline-inverted > .timeline-panel {
          float: right;
        }
        .timeline > li.timeline-inverted > .timeline-panel:before {
          border-left-width: 0;
          border-right-width: 15px;
          left: -15px;
          right: auto;
        }
        .timeline > li.timeline-inverted > .timeline-panel:after {
          border-left-width: 0;
          border-right-width: 14px;
          left: -14px;
          right: auto;
        }
        .timeline-badge.primary {
          background-color: #2e6da4 !important;
        }
        .timeline-badge.success {
          background-color: #3f903f !important;
        }
        .timeline-badge.warning {
          background-color: #f0ad4e !important;
        }
        .timeline-badge.danger {
          background-color: #d9534f !important;
        }
        .timeline-badge.info {
          background-color: #5bc0de !important;
        }
        .timeline-title {
          margin-top: 0;
          color: inherit;
        }
        .timeline-body > p,
        .timeline-body > ul {
          margin-bottom: 0;
        }
        .timeline-body > p + p {
          margin-top: 5px;
        }
      </style>
    </head>
    <body> 

      <!-- BEGAIN PRELOADER -->
      <div id="preloader">
        <div id="status">&nbsp;</div>
      </div>
      <!-- END PRELOADER -->

      <!-- SCROLL TOP BUTTON -->
      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
      <!-- END SCROLL TOP BUTTON -->

      <!-- Start header -->
      <header id="header">
        <!-- header top search -->
        <div class="header-top">
          <div class="container">
            <form action="">
              <div id="search">
                <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search" style="display: inline-block;">
                <button type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- header bottom -->
        <div class="header-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="header-contact">
                  <ul>
                    <li>
                      <div class="phone">
                        <i class="fa fa-phone"></i>
                        +1(800) 699-7071
                      </div>
                    </li>
                    <li>
                      <div class="mail">
                        <i class="fa fa-envelope"></i>
                        iam@domain.com
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End header -->



      <!-- BEGIN MENU -->
      <section id="menu-area">      
        <nav class="navbar navbar-default" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <!-- <a class="navbar-brand" href="index"><h4> PT. BINTANG ANDALAN TEKNOLOGI</h4></a>               -->
              <!-- IMG BASED LOGO  -->
              <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="home">Home</a></li>
                <li><a href="service">Service</a></li>
                <li><a href="portfolio">Portfolio</a></li>    
                <li class="active"><a href="history">History</a></li>           
                <li><a href="contact">Contact</a></li>
              </ul>                     
            </div><!--/.nav-collapse -->
            <!-- <a href="#" id="search-icon">
              <i class="fa fa-search">            
              </i>
            </a> -->
          </div>     
        </nav>
      </section>
      <!-- END MENU --> 

      <!-- Start single page header -->
      <section id="single-page-header">
        <div class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-page-header-left">
                  <h2>History</h2>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-page-header-right">
                  <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">History</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End single page header -->

      <!-- Start Service -->
      <section id="service">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-area">
                <h2 class="title">History</h2>
                <span class="line"></span>
                <p>
                 
                </p>
              </div>
            </div>

            <div class="container">
              <div class="page-header">
                <h1 id="timeline">Timeline</h1>
              </div>
              <ul class="timeline">
                <li>
                  <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">2017</h4>
                    </div>
                    <div class="timeline-body">
                      <p>
                        2 Proyek Bangunan Komersial <br> 
                        1 Proyek Pergudangan

                      </p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">2018</h4>
                    </div>
                    <div class="timeline-body">
                      <p>
                        3 Proyek Bangunan Komersial<br>  
                        2 Proyek Perkantoran

                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">2019</h4>
                    </div>
                    <div class="timeline-body">
                      <p>
                        1 Proyek Data Center <br>
                        2 Proyek Perkantoran<br>
                        1 Proyek Pergudangan
                      </p>
                    </div>
                  </div>
                </li>


                <li class="timeline-inverted">
                  <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">2020</h4>
                    </div>
                    <div class="timeline-body">
                      <p>
                       2 Proyek Data Center  <br>
                       1 Proyek Perkantoran<br>
                       1 Proyek Pergudangan


                     </p>
                   </div>
                 </div>
               </li>
               <li>
                <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">2021</h4>
                  </div>
                  <div class="timeline-body">
                    <p>
                      3 Proyek Data Center<br>  
                      1 Proyek Pabrik

                    </p>
                  </div>
                </div>
              </li>

              <li class="timeline-inverted">
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">2022</h4>
                  </div>
                  <div class="timeline-body">
                    <p>
                      4 Proyek Data Center

                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service -->

    <!-- Start subscribe us -->
    <section id="subscribe">
      <div class="subscribe-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="subscribe-area">
                <h2 class="wow fadeInUp">Subscribe</h2>
                <form action="" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <input type="text" placeholder="Enter Your E-mail..">
                  <button class="subscribe-btn" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End subscribe us -->

    <!-- Start footer -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="footer-left">
              <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="footer-right">
              <a href="index.html"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer -->
    <div class="modal fade" id="AIR-CONDITIONING" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Detail Service ACMV</h5>
          </div>
          <div class="modal-body">

            <div class="row">
              <div class="col-lg-6">
                <div class="panel panel-default">
                  <div class="panel-body">
                   Air Conditioning System

                 </div>
               </div>
             </div>

             <div class="col-lg-6">
              <div class="panel panel-default">
                <div class="panel-body">
                 Chilled Water System

               </div>
             </div>
           </div>

           <div class="col-lg-6">
            <div class="panel panel-default">
              <div class="panel-body">
               Condenser Water System
             </div>
           </div>
         </div>

         <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-body">
             Fresh & Exhaust FAN System
           </div>
         </div>
       </div>


       <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-body">
            Control Panel System
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-body">
            Chemical & Water Treatment
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-body">
            Water Leak Detection System
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-toggle="modal">Close</button>
  </div>
</div>
</div>
</div>


<div class="modal fade" id="PLUMBING-SANITARY" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <span class="glyphicon glyphicon-info-sign"></span>&nbsp;Detail Service Plumbing & Sanitary</h5>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-lg-6">
              <div class="panel panel-default">
                <div class="panel-body">
                  Transfer/ Booster Pump Unit
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="panel panel-default">
                <div class="panel-body">
                 Sump Pum Unit
               </div>
             </div>
           </div>

           <div class="col-lg-6">
            <div class="panel panel-default">
              <div class="panel-body">
               Pressure Vessell Installation
             </div>
           </div>
         </div>

         <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-body">
             Raw Water Tank
           </div>
         </div>
       </div>


       <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-body">
            Bio-Tank
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-body">
            Digital Water Meter Unit
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-toggle="modal">Close</button>
  </div>
</div>
</div>
</div>

<div class="modal fade" id="ELECTRICAL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Detail Service Electrical</h5>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-6">
            <div class="panel panel-default">
              <div class="panel-body">
                Power Cable Installation
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="panel panel-default">
              <div class="panel-body">
               Grounding & Power Bonding
             </div>
           </div>
         </div>

         <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-body">
             Lighting Installation
           </div>
         </div>
       </div>

       <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-body">
           Tray/ Ladder Installation
         </div>
       </div>
     </div>


     <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-body">
          Bio-Tank
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-body">
          Subduct Installation
        </div>
      </div>
    </div>


    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-body">
         Grid Stut/ Unistrat
       </div>
     </div>
   </div>

   <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-body">
       Lightning Installation
     </div>
   </div>
 </div>


 <div class="col-lg-6">
  <div class="panel panel-default">
    <div class="panel-body">
     Panel Unit Positioning
   </div>
 </div>
</div>

</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-toggle="modal">Close</button>
</div>
</div>
</div>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="assets/js/bootstrap.js"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>    
<!-- mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->        
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<!-- counter -->
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/jquery.counterup.js"></script>
<!-- Wow animation -->
<script type="text/javascript" src="assets/js/wow.js"></script> 
<!-- progress bar   -->
<script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  


<!-- Custom js -->
<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>