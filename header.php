<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?></title>
    <!-- font wesome  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- animatat css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <!-- slick  -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <!-- Bootstrap 3-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
</head>
<!--  -->
<?php wp_head(); ?>
<body>
    <!-- top Menu  -->
    <div class="header-top ">
        <div class="header-top-area">
            <div class="top-socail-marquee-text">
                <!-- start marquee text here  -->
                <div class="marque-notice-section">
                    <div class="media-webkit-center titleBackForScroll" style="
                border: 0px;">
                        <div class="row">
                            <div class="marquee-row text-left media-text-center font12 media-font15 " style="">
                                <table class="top-bar-table" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <td style=" background-color: #544ea1;" class="marq-notice-area">
                                                <div class="marqueecontent"
                                                    style="display: flex;justify-content: center; align-items: center; background-color: #544ea1">
                                                    &nbsp;
                                                    <span class="mparquee-icon"
                                                        style="display: inline-block;font-size:12px;"><i
                                                            class="fas fa-bullhorn colWhite"></i></span>&nbsp;
                                                    <span class="marquee-notice-text"
                                                        style="font-size: 12px;color: white;display: inline-block;font-weight: 700;">Notice
                                                        :</span>
                                                    <div id="triangle-bottomleft">&nbsp;</div>
                                                </div>
                                            </td>

                                            <td class="middle-td customWidthtd">
                                                <div style=" background-color:#6861BC;height: 32px;">
                                                    <marquee id="top-bar-notice" class=" marquee float-left"
                                                        behavior="scroll" direction="left" height="29" scrolldelay="100"
                                                        scrollamount="5" onmouseover="this.stop()"
                                                        onmouseout="this.start()">
                                                        <a style="color: white" href="#" title="Important Notice"
                                                            target="_blank" rel="noopener noreferrer">
                                                            <span><i class="fas fa-bullhorn"></i></span> ২০২০-২০২১ প্রথম
                                                            বর্ষ স্নাতক (সম্মান) শ্রেণির ভর্তি পরীক্ষার্থীদের প্রবেশপত্র
                                                            ডাউনলোড প্রক্রিয়া শুরু হয়েছে। </a>

                                                        <a style="color: white" href="#" title="Important Notice"
                                                            target="_blank" rel="noopener noreferrer">
                                                            <span><i class="fas fa-bullhorn"></i></span> ২০২০-২০২১ প্রথম
                                                            বর্ষ স্নাতক (সম্মান) শ্রেণির ভর্তি পরীক্ষার্থীদের ছবি ও
                                                            স্বাক্ষর আপলোড প্রক্রিয়া শুরু হয়েছে। </a>

                                                        <a style="color: white" href="#" title="Important Notice"
                                                            target="_blank" rel="noopener noreferrer">
                                                            <span><i class="fas fa-bullhorn"></i></span> ছবি ও স্বাক্ষর
                                                            সংক্রান্ত যে কোন সমস্যা juniv.admsn.help@juniv.edu ইমেইলে
                                                            অথবা সহায়তা কেন্দ্রে যোগাযোগ করে সমাধান করতে হবে।</a>

                                                        <a style="color: white" href="#" title="Important Notice"
                                                            target="_blank" rel="noopener noreferrer">
                                                            <span><i class="fas fa-bullhorn"></i></span> ভর্তি পরীক্ষার
                                                            সময়সূচী
                                                            পরবর্তিতে ওয়েবসাইটের মাধ্যমে জানানো হবে। </a>
                                                    </marquee>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end marquer text here  -->
            </div>
            <div class="social-icons top-social-icon">
                <ul class="top-header-link">
                    <li class="font-14 top-tell-link"><i class="fa fa-phone" aria-hidden="true"><a
                                href="tel:+88-01817600093" class="header-link font-14 top-login-button-link"></i>
                        <span>+88-01817600093</span>
                        </a></li>
                    <li><a href="#" class="header-link font-14 top-login-button-link"><i class="fa fa-sign-in"
                                aria-hidden="true"></i><span>i-EMS Login</span></a></li>
                    <li> <span class="blink"></span><a href="#" class="header-link font-14 top-aplay-button-link">
                            <!--  <i class="fa fa-sign-in" aria-hidden="true"></i> -->
                            <span>Apply Online</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end header top  -->
    <header class=" hidden1">
        <div class="container">
            <div class="row header-area">
                <div class="col-md-1 p-r-0">
                    <img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo.png">
                </div>
                <div class="col-md-11 p-l-0 header-title">
                    <div class="col-md-12">
                        <h2><?php echo get_bloginfo( 'name' ); ?></h2>
                        <p>UGC and Goverment Approved</p>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- menu section -->
    <div class="main-menu">
        <div class="container">
            <div>
                <span class="menu-item">About</span>
                <span class="menu-item">Administration </span>
                <span class="menu-item">Academic</span>
                <span class="menu-item">Admission</span>
                <span class="menu-item">Facilities</span>
                <span class="menu-item">Research </span>
                <span class="menu-item">Archive</span>
                <span class="menu-item">Contact </span>
            </div>
        </div>
    </div>