<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>ASIQUEFEST</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="<?php echo base_url('assets/images/fevicon.png') ?>" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <!-- style css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
  <!-- Responsive-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css') ?>">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css') ?>">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout contineer_page">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="<?php echo base_url('assets/images/loading.gif') ?>" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="<?php echo base_url ('index.php') ?>"><img src="<?php echo base_url('assets/images/logo2.png') ?>" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
              
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                    <li> <a href='<?php echo base_url('index.php') ?>'>Home</a> </li>
                  
                      <li> <a href='<?php echo base_url() . "welcome/about" ?>'>About</a> </li>
                      <li class="active"> <a href="<?php echo base_url() . "welcome/concerts" ?>">Concerts</a> </li>
                      <li> <a href='<?php echo base_url() . "welcome/gallery" ?>'>Gallery</a> </li>
                      <li> <a href='<?php echo base_url() . "welcome/contact" ?>'>Contact</a> </li>
      
                        
                      
                     </ul>
                   </nav>
                
               </div> 
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     
</header>


<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>Upcoming Concerts</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- upcoming -->
<div id="upcoming" class="upcoming">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
       <div class="box_text">
          <div class="titlepage">
            <h2>Upcoming Concerts</h2>
          </div>
          <p>AsiqueFest kali ini membawa musisi-musisi papan atas Indonesia ke dalam sebuah pertunjukan musik. AsiqueFest diharapkan dapat dinikmati seluruh masyarakat sekaligus memberikan wadah bagi generasi muda untuk berkarya, berinovasi, mengembangkan dan meningkatkan kreativitas tanpa batas, mendukung pertumbuhan Industri hiburan</p>
        </div>
      </div> 
    
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
         <div class="upcomimg">
           <figure><img src="<?php echo base_url('assets/images/up2.jpg') ?>" alt="#"/></figure>
        </div>
          </div>
  </div>
    </div>
</div>
<!-- end upcoming -->


    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <form class="contact_bg">
            <div class="row">
              <div class="col-md-12">
                <div class="titlepage">
                  
                </div>
              </div>
            </div>
            </form>

            </div>
            <div class="col-md-12 border_top">
              <form class="news">
               <h3>Newsletter</h3>
                <input class="newslatter" placeholder="ENTER YOUR MAIL" type="text" name=" ENTER YOUR MAIL">
                <button class="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                  <div class="address">
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="<?php echo base_url('assets/icon/loc.png') ?>" alt="#" /></a>BEKASI
                   
                        <li>
                          
                            <a href="#"><img src="<?php echo base_url('assets/icon/call.png') ?>" alt="#" /></a>0881-0244-06999 </li>
                          <li>
                            <a href="#"><img src="<?php echo base_url('assets/icon/email.png') ?>" alt="#" /></a>asique@fest.com </li>
                          </ul>
                         

                        </div>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                           <ul class="social_link">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                          </ul>
                       </div>
                    </div>
                  </div>

                </div>

              </div>
               <div class="container">
              <div class="copyright">
               
                  <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free  html Templates</a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
          <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
          <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
          <script src="<?php echo base_url('assets/js/jquery-3.0.0.min.js') ?>"></script>
          <script src="<?php echo base_url('assets/js/plugin.js') ?>"></script>
          <!-- sidebar -->
          <script src="<?php echo base_url('assets/js/plugin.js') ?>"></script>
          <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




</body>

</html>