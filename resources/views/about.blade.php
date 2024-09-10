@extends('layouts.app')

@section('content')

@section('navigation')
  <li><a class="btn head-btn2" href="{{ url('/') }}">Home</a></li>
  <li><a class="btn head-btn2" href="{{ url('findjob') }}">Find Jobs</a></li>
  <li><a class="btn head-btn2" href="{{ url('postjob') }}">Post A Job</a></li>
  <li><a class="btn head-btn1" href="{{ url('about') }}">About</a></li>
@endsection
 <div id="about"  class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <span></span>
                     <p>Welcome to Workplace, a freelance site that connects businesses with talented freelancers from around the world.

Our platform is designed to help businesses of all sizes find the right freelancers for their needs. Whether you're a small business owner looking to hire a graphic designer for a one-time project or a large corporation in need of a team of developers for a long-term project, we've got you covered.

At Workplace, we believe that finding the right freelancer shouldn't be a hassle. That's why we've created a platform that makes it easy for businesses to find, hire, and work with talented freelancers from around the world. Our platform is user-friendly and intuitive, making it easy for businesses to post jobs, review freelancer profiles, and communicate with potential hires.</p>
<div class="collapse" id="collapseExample">
  <p>
We pride ourselves on the quality of our freelancers. Every freelancer on our platform is vetted and verified, so businesses can be confident that they're working with the best of the best. Our freelancers come from a variety of backgrounds and specialize in a wide range of fields, from graphic design and web development to content writing and social media marketing.

If you're a freelancer looking for work, Workplace is the perfect platform for you. We offer a wide range of job opportunities, from short-term projects to long-term contracts, so you can find work that fits your schedule and your skillset. And with our user-friendly platform and robust communication tools, it's easy to find and manage jobs, communicate with clients, and get paid.

So whether you're a business looking to hire a freelancer or a freelancer looking for work, Workplace is the perfect platform for you. Join us today and experience the future of freelance work.</p>
</div>
<a class="read_more" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Read More
  </a>
                     
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

@endsection
