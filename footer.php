<!-- footer start -->
    <style>
        .main-footer .footer-top {
            position: relative;
            display: block;
            background: #253b70;
            padding: 130px 0px 130px 0px;
            z-index: 1;
        }

        .parallax-icon {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            max-width: 1920px;
            margin: 0 auto;
        }

        .parallax-icon .icon-1 {
            left: 110px !important;
            top: 160px !important;
            background: url(./FooterImg/parallax-icon-1.png);
            width: 131px;
            height: 86px;
            background-repeat: no-repeat;
        }

        .parallax-icon .icon-2 {
            left: 30% !important;
            top: 80px !important;
            background: url(./FooterImg/parallax-icon-2.png);
            width: 32px;
            height: 32px;
            background-repeat: no-repeat;
        }

        .parallax-icon .icon-3 {
            left: 27% !important;
            top: 70% !important;
            background: url(./FooterImg/parallax-icon-3.png);
            width: 59px;
            height: 63px;
            background-repeat: no-repeat;
        }

        .parallax-icon .icon-4 {
            left: 40% !important;
            top: 40% !important;
            background: url(./FooterImg/parallax-icon-4.png);
            width: 15px;
            height: 15px;
            background-repeat: no-repeat;
        }

        .parallax-icon .icon-5 {
            left: 75% !important;
            top: 80px !important;
            background: url(./FooterImg/parallax-icon-5.png);
            width: 119px;
            height: 54px;
            background-repeat: no-repeat;
        }

        .parallax-icon .icon-6 {
            left: 65% !important;
            top: 40% !important;
            background: url(./FooterImg/parallax-icon-6.png);
            width: 47px;
            height: 65px;
            background-repeat: no-repeat;
        }

        .parallax-icon .icon-7 {
            left: 72% !important;
            top: 70% !important;
            background: url(./FooterImg/parallax-icon-7.png);
            width: 57px;
            height: 50px;
            background-repeat: no-repeat;
        }

        .main-footer .footer-top .widget-title {
            position: relative;
            display: block;
            font-size: 22px;
            line-height: 28px;
            font-weight: 900;
            color: #fff;
            margin-bottom: 27px;
        }

        .main-footer ul,
        .main-footer li {
            list-style: none;
            padding: 0px;
            margin: 0px;
        }

        .main-footer h3 {
            position: relative;
            display: block;
            font-size: 22px;
            line-height: 30px;
            font-weight: 900;
            color: #2b3c6b;
            margin-bottom: 10px;
        }

        .main-footer .footer-top .contact-widget {
            position: relative;
            display: block;
            margin-left: -30px;
        }

        .main-footer .footer-top .about-widget .widget-content p {
            position: relative;
            display: block;
            color: #bec5d4;
            margin-bottom: 26px;
        }

        .main-footer .footer-top .contact-widget .widget-content .info-list li i {
            position: absolute;
            left: 0px;
            top: 6px;
            color: #ff7162;
        }

        .main-footer .footer-top .contact-widget .widget-content .info-list li {
            position: relative;
            display: block;
            font-size: 15px;
            color: #bec5d4;
            padding: 0px 0px 0px 25px;
            margin-bottom: 15px;
        }

        .main-footer .footer-top .subscribe-widget .widget-content .text {
            position: relative;
            display: block;
            color: #bec5d4;
            margin-bottom: 28px;
        }

        .main-footer .footer-top .subscribe-widget .widget-content .subscribe-form .form-group {
            position: relative;
            display: block;
            margin: 0px;
        }

        .main-footer .footer-top .subscribe-widget .widget-content .subscribe-form .form-group input[type='email'] {
            position: relative;
            display: block;
            width: 100%;
            height: 70px;
            background: #fff;
            border: 3px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            margin-bottom: 20px;
            transition: all 500ms ease;
        }

        .main-footer .footer-top .contact-widget .widget-content .info-list li a:hover {
            color: #ff7162;
            text-decoration: none;
        }

        .main-footer a:hover {
            color: #ff7162;

            text-decoration: none;
        }

        .main-footer .footer-top .subscribe-widget .widget-content .subscribe-form .form-group .theme-btn:hover {
            color: #ff7162 !important;
        }

        .theme-btn {
            position: relative;
            display: inline-block;
            font-size: 15px;
            font-family: 'M PLUS Rounded 1c', sans-serif;
            padding: 17px 40px;
            background-color: #ff7162;
            line-height: 26px;
            color: #ffffff !important;
            font-weight: 900;
            text-transform: uppercase;
            cursor: pointer;
            text-align: center;
            transition: all 500ms ease;
            z-index: 1;
        }

        .main-footer .footer-top .subscribe-widget .widget-content .subscribe-form .form-group .theme-btn:before {
            background: #fff;
        }

        .theme-btn:hover:before {
            opacity: 1;
            transform: scale(1, 1);
        }

        .theme-btn:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0;
            background-color: #253b70;
            transition: all 0.4s;
            transform: scale(0.2, 1);
        }

        .main-footer .footer-top .subscribe-widget .widget-content .subscribe-form .form-group .theme-btn:before {
            background: #fff;
        }

        .theme-btn:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0;
            background-color: #253b70;
            transition: all 0.4s;
            transform: scale(0.2, 1);
        }

        .main-footer p {
            position: relative;
            font-family: 'Open Sans', sans-serif;
            line-height: 26px;
            color: #615e5d;
            margin-bottom: 0px;
            font-style: normal;
            transition: all 500ms ease;
        }

        .main-footer .footer-top .about-widget .widget-content p:last-child {
            margin-bottom: 0px;
        }

        .main-footer .footer-top .about-widget .widget-content p {
            position: relative;
            display: block;
            color: #bec5d4;
            margin-bottom: 26px;
        }

        .main-footer .footer-top .link-widget {
            position: relative;
            display: block;
            margin-left: 50px;
        }

        .main-footer .footer-top .link-widget .widget-content li {
            position: relative;
            display: block;
            margin-bottom: 14px;
        }

        .main-footer .footer-top .link-widget .widget-content li a {
            position: relative;
            display: inline-block;
            font-size: 15px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            color: #bec5d4;
        }

        .main-footer .footer-top .link-widget .widget-content li a:before {
            position: absolute;
            content: "\f105";
            font-family: 'Font Awesome 5 Free';
            font-size: 14px;
            color: #ff7162;
            font-weight: 700;
            left: 0px;
            top: 1px;
            opacity: 0;
            transition: all 500ms ease;
        }

        .main-footer .footer-top .contact-widget .widget-content .text {
            position: relative;
            display: block;
            color: #bec5d4;
            margin-bottom: 18px;
        }

        .main-footer .footer-bottom .left-content .copyright {
            color: #f7f7f7;
        }

        .main-footer .footer-bottom .left-content .copyright a {
            color: rgb(250, 205, 3);
        }

        .main-footer .footer-bottom {
            background: #15295b;
            padding: 33px 0px;
        }

        .footer-logo img {
            display: inline-block;
            max-width: 100%;
            height: auto;
        }


        .social-style-one li {
            position: relative;
            display: inline-block;
            margin-right: 6px;
        }

        .footer-overly-img-bottom {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 300px;

        }

        .footer-overly-img-bottom img {
            width: 100%;

        }

        .footer-overly-img-top {
            position: absolute;
            left: 0;
            top: 0;
            width: 300px;
        }

        .footer-overly-img-top img {
            width: 100%;
            transform: rotate(180deg);
        }

        figure {
            margin: 0px;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1170px;
                padding: 0px;
            }
        }

        @media only screen and (max-width: 767px) {

            .sec-pad,
            .testimonial-faq,
            .cta-section,
            .main-footer .footer-top,
            .activities-section {
                padding: 64px 0px 70px 0px;
            }

        }

        @media only screen and (max-width: 991px) {
            .parallax-icon {
                display: none !important;
            }

        }


        @media only screen and (max-width: 991px) {
            .main-footer .footer-top .contact-widget {
                margin-left: 0px;
            }
        }

        @media only screen and (max-width: 767px) {
            .main-footer .footer-top .contact-widget {
                margin-bottom: 30px;
            }


        }

        @media only screen and (max-width: 991px) {

            .main-footer .footer-top .about-widget,
            .main-footer .footer-top .link-widget {
                margin: 0px 0px 30px 0px !important;
            }

        }

        @media only screen and (max-width: 1200px) {
            .main-footer .footer-top .link-widget {
                margin-left: 30px;
            }

        }

        @media only screen and (max-width: 576px) {
            .footer-overly-img-top {
                width: 200px;
            }

            .footer-overly-img-bottom {
                width: 200px;
            }
        }

        .parallax-scene span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <footer class="main-footer" style="margin-top: 40px;">
        <div class="footer-top">
            <div class="parallax-scene parallax-scene-2 parallax-icon">
                <span style=" background: url('<?php echo get_template_directory_uri(); ?> /images/parallax-icon-1.png');" data-depth="0.40" data-speed="-5" class="parallax-layer layer icon icon-1"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?> /images/parallax-icon-2.png');" data-depth="0.50" data-speed="-2" class="parallax-layer layer icon icon-2"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?> /images/parallax-icon-3.png');" data-depth="0.30" data-speed="5" class="parallax-layer layer icon icon-3"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?> /images/parallax-icon-4.png');" data-depth="0.40" data-speed="-9" class="parallax-layer layer icon icon-4"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?> /images/parallax-icon-5.png');" data-depth="0.50" data-speed="4" class="parallax-layer layer icon icon-5"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?> /images/parallax-icon-6.png');" data-depth="0.30" data-speed="10" class="parallax-layer layer icon icon-6"></span>
                <span style=" background: url('<?php echo get_template_directory_uri(); ?> /images/parallax-icon-7.png');"data-depth="0.40" data-speed="2" class="parallax-layer layer icon icon-7"></span>
            </div>
            <div class="container">
                <div class="footer-links-area">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <h3 class="widget-title">About Baust</h3>
                                <div class="widget-content">
                                    <div class="text">
                                        <p>Bangladesh Army University of Science & Technology (BAUST), the pioneer
                                            technical institutes of Armed Forces, started its journey from 15th February
                                            2015.</p>
                                        <p> It was the visionary leadership of the honorable prime minister of People’s
                                            Republic of Bangladesh Sheikh Hasina to establish a technical institute of
                                            Armed Forces.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="link-widget footer-widget">
                                <h3 class="widget-title">Resources and Links</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Photo Gallery</a></li>
                                        <li><a href="#">Career Opportunity</a></li>
                                        <li><a href="#">Webmail</a></li>
                                        <li><a href="#">Downloads</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h3 class="widget-title">Contact Us</h3>
                                <div class="widget-content">
                                    <ul class="info-list">
                                        <li><span><i class="fas fa-home"></i> Saidpur Cantonment, Saidpur</span> </li>
                                        <li><i class="fas fa-phone"></i>05526-73403</li>
                                        <li><i class="fas fa-phone"></i>01769 675554, 01769 675553, 01769 675552, 01769
                                            675551</li>
                                        <li><i class="fas fa-envelope"></i><a
                                                href="mailto:info@baust.edu.bd">info@baust.edu.bd</a></li>
                                        <li><i class="fas fa-fax"></i><a href="">05526-73300</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="subscribe-widget footer-widget">
                                <div class="widget-content">
                                    <div class="subscribe-inner">
                                        <form action="#" method="post" class="subscribe-form">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Search  here" required="">
                                                <button type="submit" class="theme-btn">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-overly-img-top">
                <img src="<?php echo get_template_directory_uri();?>/images/back.png">
            </div>
            <div class="footer-overly-img-bottom">
                <img src="<?php echo get_template_directory_uri();?>/images/back.png">
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-container clearfix" style="display: flex;justify-content: center; margin-top: -26px;">
                    <div class="left-content" style="margin-top: 30px;">
                        <div class="copyright">Copyright © <a href="#">BAUST</a> 2021. All Rights Reserved. Developed by
                            <a href="#">Pipilika Soft</a> </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

   
    <!-- footer End -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    

    <!-- footer amimation   -->
     <script>
        document.addEventListener('mousemove', parallax);

        function parallax(e) {
            this.querySelectorAll('.layer').forEach(layer => {
                const speed = layer.getAttribute('data-speed')

                const x = (window.innerWidth - e.pageX * speed) / 100;
                const y = (window.innerHeight - e.pageY * speed) / 100;
                layer.style.transform = `translateX(${x}px) translateY(${y}px)`
            })
        }
    </script>
    <!-- notice -->
     <script>       
            $(".NoticeTitles").hover(function(){
               $(".Noticedivider").css("background-color", "#b80924");
               $(".Noticedivider").css("width", "103PX");
               },function(){
                $(".Noticedivider").css("background-color", "#b1b1b1");
               $(".Noticedivider").css("width", "60PX");
            });
             $(".facultyTitle").hover(function () {
            $(".divider").css("background-color", "#b80924");
            $(".divider").css("width", "173PX");
        }, function () {
            $(".divider").css("background-color", "#b1b1b1");
            $(".divider").css("width", "60PX");
        });

            $(".seeMore").hover(function(){
               $(".semoreDivider").css("background-color", "#b80924");
               $(".semoreDivider").css("width", "59PX");
               $(".seeMore").css("curser", "pointer");

               },function(){
                $(".semoreDivider").css("background-color", "#b1b1b1");
               $(".semoreDivider").css("width", "10PX");
            });

            $(".profileTitleDiv").hover(function(){
               $(".Profiledivider").css("background-color", "#b80924");
               $(".Profiledivider").css("width", "259PX");
               },function(){
                $(".Profiledivider").css("background-color", "#b1b1b1");
               $(".Profiledivider").css("width", "60PX");
            });
    </script>

  <script>
    $(document).ready(function() {
        var slickopts = {
        slidesToShow: 2,
        slidesToScroll: 1,
         autoplay: true,
        dots: true,
        rows: 2, // Removes the linear order. Would expect card 5 to be on next row, not stacked in groups.
        
        responsive: [
          { breakpoint: 992,
            settings: {
              slidesToShow: 1
            }
          },
          { breakpoint: 776,
            settings: {
              slidesToShow: 1,
              rows: 1 // This doesn't appear to work in responsive (Mac/Chrome)
            }
          }]
      };
      $('.pipilika-carousel').slick(slickopts);
    });
   </script>
   
    <?php wp_footer(); ?>
</body>

</html>