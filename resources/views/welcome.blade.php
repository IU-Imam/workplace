@extends('layouts.app')

@section('content')
@section('navigation')
  <li><a class="btn head-btn1" href="{{ url('/') }}">Home</a></li>
  <li><a class="btn head-btn2" href="{{ url('findjob') }}">Find Jobs</a></li>
  <li><a class="btn head-btn2" href="{{ url('postjob') }}">Post A Job</a></li>
  <li><a class="btn head-btn2" href="{{ url('about') }}">About</a></li>
@endsection
<body class="main-layout">
      <!-- loader  -->
      
      <!-- end loader -->
      <!-- header -->
   
      <!-- banner -->
      <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/banner.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span>We Provide</span> Job to skilled</h1>
                     <a href="#contact">Contact Us</a>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="second-slide" src="images/banner.jpg" alt="Second slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span>We Provide</span> Job Job & Job</h1>
                     <a href="#contact">Contact Us</a>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/banner.jpg" alt="Third slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span>Workplace</span> <h1>A freelance site</h1>
                     <a href="#contact">Contact Us</a>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/banner.jpg" alt="four slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span>We Provide</span>Jobs easily</h1>
                     <a href="#contact">Contact Us</a>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/banner.jpg" alt="five slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span>We Provide</span> Friend </h1>
                     <a href="#contact">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <!-- end banner -->
      <!-- about -->
      <div id="about"  class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Job Portal</h2>
                     <span></span>
                     <p>This platform is open for students who can find their desire part time job, Companies can hire skilled person. </p>
                     <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/about_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- mobile -->
      
      <div class="container " >
        <div class="titlepage">
         <h2>Users</h2>
      </div>
         
         <div class="list-group list-group-horizontal ">
            <div class="list-group-item  ">
                                      @forelse ($users as $user)
                                       <a href="./userprofile/{{ $user->id }}"><img src="/avatars/{{ $user->user_img}}" alt="{{ $user->name }}" width="50" height="50" class="rounded-circle"></a>
                                      <a href="#" class="">{{ $user->name }}</a>
                                       @empty
                                           
                                       @endforelse
                                      
            </div>
         </div>      
                                   
                   
               
            
        
 

      <!-- end mobile -->
      <!-- clients -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <div class="titlepage">
                     <h2>What is Say clients</h2>
                     <span></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="clients_box">
                     <p>There are many types of work place but i like this workplace most.</p>
                  </div>
                  <div class="jonu">
                     <img src="images/aa.png" height="15%" width="15%" alt="#"/>
                     <h3>Altaf Vai </h3>
                     <strong>(sure there isn't)</strong>
                     <a class="read_more" href="#">Get A Quote</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end clients -->
      <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request A call back</h2>
                  </div>
               </div>
               <div class="col-md-6 offset-md-3">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="contactus" placeholder="Message" type="type" Message="Name">Message </textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <div class="col-md-6 padding_bottom1   ">
                     <h3>Subscribe Now</h3>
                     <form class="footer_form">
                        <input class="enter" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit">submit</button>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                           <h3>Links</h3>
                           <ul class="cont">
                              <li>Inbox for link </li>
                           </ul>
                        </div>
                        <div class="col-md-5 offset-md-1">
                           <h3>Contact us</h3>
                           <ul class="cont">
                              <li>01800000000 </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. WORKPLACE </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
    
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
@endsection
