<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    @include('home.style')    
 <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-7">
                        <div class="widgets_container contact_us">
                           <div class="footer_logo">
                               <a href="index.html"><img src="<?php echo url('assets/img/logo/logo1.png') ?>"></a>
                           </div>
                           <p class="footer_desc">Leapsome enhances meaningful feedback and employee engagement. It’s a must-have for every company at any stage. We are growing toward 750 employees, but the rollout was easy, fast, and successful nonetheless. The great customer support helped us through the whole onboarding process.</p>
                            <p><span>Address:</span>K-8/1102,KALINGA NAGAR,BACKSIDE OF SUM HOSPITAL,BHUBANESWAR</p>
                            <p><span>Email:</span> <a href="#">support@order2.com</a></p>
                            <p><span>Call us:</span> <a href="tel:(08)23456789">000000</a> </p>
                        </div>          
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>COMANY</h3>
                            <div class="footer_menu">
                            
                                <ul> 
                                    <li><a href="<?php echo url('aboutus') ?>">About Us</a></li> 
                                    <li><a href="#">Team</a></li>
                                    <!-- <li><a href="<?php // echo // url('item/{{$val->id}}') ?>">Team</a></li> -->
                                    <li><a href="<?php echo url('careers') ?>"> Careers</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="widgets_container widget_menu">
                            <h3>LEGAL</h3>
                            <div class="footer_menu">
                                <ul>
                                     <li><a href="<?php echo url('termsconditions') ?>">Terms & Conditions</a></li>
                                    <li><a href="#">  Refund & Cancellation </a></li>
                                    <li><a href="<?php echo url('privacy') ?>">Privacy Policy</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="widgets_container widget_newsletter">
                            <h3>CONTACT</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Help & Support</a></li>
                                    <li><a href="#">Partner with us</a></li>
                                    <li><a href="#">Ride with us</a></li>

                                   
                                </ul>
                            </div>
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright_area">
                            <h3>@ 2020 order2</h3>
                        </div>
                    </div>    
                    <div class="col-lg-6 col-md-5">    
                        <div class="footer_payment">
                            <ul>
                                <li><a href="#"><img src="assets/img/icon/paypal1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/paypal2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/paypal3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/paypal4.jpg" alt=""></a></li>
                            </ul>
                        </div>
                         <div class="header_social text-right">
                            <ul>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>   
    </footer>
    <!--footer area end-->
    </body>
    </html>