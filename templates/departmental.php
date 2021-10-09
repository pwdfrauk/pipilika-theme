<?php 
        // Template Name: Departmental Page
?>

<?php get_header(); ?>

<style>
    .section-title {
      font-size: 34px;
      text-transform: capitalize;
      text-align: center;
      font-weight: 700;
      margin-bottom: 50px;
      margin-top: 0px;
      color: #6861BC;
    }
    .hero-section {
      background: #fff;
    }
    .msg-single-page {
      margin: 60px 0px;
      padding: 60px 0px 0px 0px;
      background-color: #ecf0f5;
    }
    .singlePageHead {
      background-image: url(NewFaculty/NoticeFacultyImg.jpg);
      color: white;
      padding: 100px;
      margin-bottom: 20px;
    }
    .msg-single-page .event-header.event-header-details {
      background: white;
      border-radius: 5px;
      overflow: hidden;
      padding: 15px 10px;
    }
    .msg-single-page .event-header.event-header-details .mt_event_img {
      float: left;
    }
    .msg-single-page .event-header.event-header-details .mt_event_img img {
      max-width: 75px;
      width: 69%;
      padding-right: 10px;
    }

    .msg-single-page .event-header.event-header-details h5.event_head {
      margin: 0;
      padding: 10px 0 0px;
      font-weight: bold;
      font-size: 14px;
      line-height: 15px;
      letter-spacing: 1px;
      color: #848484;
      font-family: Source Sans Pro;
    }

    .msg-single-page .event-header.event-header-details h5.event_head i {
      color: #4680ff;
    }

    .msg-single-page .event-header.event-header-details span.event_span {
      font-size: 22px;
      line-height: 34px;
      color: #3D404F;
    }

    .msg-single-page .article-header.article-header-details {
      box-shadow: 0px 0px 20px rgb(0 0 0 / 7%);
      border-radius: 5px;
      padding: 8px 10px;
      background-color: white;
    }

    .msg-single-page .article-header {
      margin-bottom: 10px;
    }

    .msg-single-page .article-header.article-header-details .article-details {
      margin: 0;
    }
    .msg-single-page .article-details .post-author,
    .tweet-date,
    .top-header,
    .author-biography {
      font-weight: 400;
    }

    .msg-single-page .post-author {
      margin: 4px 0;
      padding-bottom: 15px;
      color: #ff4b2b;
    }

    .msg-single-page .post-author::after {
      content: '';
      display: table;
      width: 100%;
      height: 1px;
      background: #cccccc;
    }

    .articleContent p {
      text-align: justify;
      text-justify: inter-word;
    }

    .ArticleFeatureImg {
      margin-bottom: 11px;
    }

    .articleCard {
      margin-bottom: 10px;
      /*  box-shadow: 0 5px 11px 0px rgb(69 90 100 / 30%);*/
      /* box-shadow: 0px 0px 1px 1px rgb(69 90 100 / 30%); */
      transition: box-shadow 0.2s ease-in-out;
      padding: 17px;
      background-color: white;
      border-radius: 5px;

    }

    .ArticleFeatureImg {
      overflow: hidden;
    }

    .departmental-rightside .card {
      position: relative;
      display: flex;
      flex-direction: column;
      background-color: #fff;
      overflow: hidden;
    }

    .departmental-card {
      background: transparent !important;
      padding-right: 0px;
    }

    .video-thumbnail-card {
      padding: 12px 15px 12px 15px;
    }

    .text-center {
      text-align: center !important;
    }

    .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1.25rem;

    }

    p {
      font-size: 13px;
    }

    .card .card-footer {
      padding: 12px 20px;
    }

    .card-footer:last-child {
      border-radius: 0 0 calc(0.25rem - 0px) calc(0.25rem - 0px);
    }

    .card-footer {
      padding: 1.25rem 1.25rem;
      background-color: rgba(0, 0, 0, 0);
      border-top: 0px solid rgba(0, 0, 0, 0.125);
    }

    .card-footer .wrapper {
      position: relative;
      top: 50%;
      left: 61%;
      transform: translate(-50%, -50%);
    }

    .card-footer .link_wrapper {
      position: relative;
    }

    .card-footer a {
      display: block;
      width: 250px;
      height: 50px;
      line-height: 50px;
      font-weight: bold;
      text-decoration: none;
      text-align: center;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all .35s;
      background: #032159;
      border: 3px solid #032159;
    }

    .icon {
      width: 50px;
      height: 50px;
      border: 3px solid transparent;
      position: absolute;
      transform: rotate(45deg);
      right: 70px;
      top: 0;
      z-index: -1;
      transition: all .35s;
    }

    .icon svg {
      width: 30px;
      position: absolute;
      top: calc(50% - 15px);
      left: calc(50% - 15px);
      transform: rotate(-45deg);
      fill: #2ecc71;
      transition: all .35s;
    }

    .card-footer a:hover {
      width: 150px;
      border: 3px solid #2ecc71;
      background: transparent;
      color: #2ecc71;
    }

    .card-footer a:hover+.icon {
      border: 3px solid #2ecc71;
      right: 23%;
    }

    .mt_event_holder {
      margin-bottom: 15px;
    }

    .shareBtn {
      text-align: right;
    }

    .event-header-details {}

    .shareBtn .btn-group button {
      border-color: #6861BC;
    }

    .shareBtn .btn-group button:hover {
      background: #6861BC;
      color: #ffffff;
    }

    /***  video card ***/

    .video-thumbnail-card {
      position: relative;
      border: 6px solid #fff;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      box-shadow: 0 5px 10px rgb(16 17 21 / 10%);
    }

    .video-thumbnail-img {
      width: 100%;
      height: 338px;
    }

    .video-image-overley-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .play-btn {
      border-radius: 50%;
      text-align: center;
      line-height: 108px;
      animation: animate 2s linear infinite;
      cursor: pointer;
      width: 96px;
      height: 96px;
      position: relative;
    }

    .play-btn i {
      color: #ff4b2b;
      font-size: 107px;
    }

    @keyframes animate {
      0% {
        box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.7);
      }

      40% {
        box-shadow: 0 0 0 50px rgba(255, 193, 7, 0);
      }

      80% {
        box-shadow: 0 0 0 50px rgba(255, 193, 7, 0);
      }

      100% {
        box-shadow: 0 0 0 rgba(255, 193, 7, 0);
      }
    }

    /*end video card */
    @media only screen and (max-width: 768px) {
      .msg-single-page {
        padding: 0px 0px;
      }
      .mt_event_holder {
        margin-bottom: 0px !important;
      }

      .derpartmental-video-area {
        margin-bottom: 60px;
      }
    }

    @media only screen and (max-width: 576px) {
      .mt_event_holder {
        margin-bottom: 15px !important;
      }

      .departmental-contaienr-area {
        display: flex;
        flex-direction: column;
      }
      .section-title {
      font-size: 20px;
      margin-bottom: 20px;
    }
    }

    /* why choice us */

    /* hero section with slider */
    #myCarousel {
      border: 6px solid #fff;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      box-shadow: 0 5px 10px rgb(16 17 21 / 10%);
      height: 440px;
    }

    #myCarousel .item,
    #myCarousel .active,
    #myCarousel .carousel-inner {
      height: 100%;
    }

    .fill {
      width: 100%;
      height: 100%;
      background-position: center;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      background-size: cover;
      -o-background-size: cover;
    }

    .hero-section {
      background-image: url(images/slidersection-bg-img.png);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      position: relative;
      height: 100%;
      padding-bottom: 12px;
    }

    .hero-section::before {
      content: '';
      width: 43%;
      height: 10%;
      top: 0px;
      border-bottom: 477px solid
        /*#5a1e90*/
        #6861BC;
      border-right: 350px solid transparent;
      position: absolute;

    }

    .hero-section-area {
      padding: 12px 15px;
    }

    .hero-rightside img {
      width: 100%;
    }

    .hero-leftside .leftsideinner {
      border: 6px solid #fff;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      box-shadow: 0 5px 10px rgba(16, 17, 21, 0.1);
      height: 440px;
      background: #ffffff;
    }

    .carousel-control .glyphicon {
      background: #757575;
      width: 40px;
      height: 40px;
      font-size: 25px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%
    }

    .carousel-control {
      background-image: none !important;
    }

    .profile-card-name {
      color: #ff4b2b;
    }

    .profile-card-designation {}

   
    /* departmenteal cercle card */

    #TeacherProfile {
      position: relative;

    }

    .message-title {
      background: #6861BC;
      font-size: 17px;
      font-weight: 600;
      text-transform: capitalize;
      margin: 0 0 7px;
      color: #ffffff;
      padding: 10px;
      border-radius: 15px 15px 0px 0px;
    }

    .designation-title {
      font-size: 13px;
      font-weight: 600;
      text-transform: capitalize;
      color: #6c757d;
    }

    .departmental-profile {
      height: 440px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .TeacherProfile-section-padding {}

    #TeacherProfile .serviceBox {
      color: #999;
      padding-bottom: 3px;
      background: linear-gradient(transparent 65%,
          /* var(--thm-color); 65% */
        );
      font-family: 'Poppins', sans-serif;
      text-align: center;
      border-radius: 0 0 150px 150px;
      box-shadow: 0 12px 7px -7px rgb(0 0 0 / 20%);
    }

    #TeacherProfile .serviceBox .service-content {
      background: white;
      border-radius: 15px 15px 150px 150px;
      box-shadow: 0 10px 20px rgb(0 0 0 / 10%);
      margin: 0px 15px 15px 15px;
      border-top: 0px solid transparent !important;
    }

    #TeacherProfile .serviceBox .service-icon {
      padding: 0 20px 20px;
      height: 170px !important;
      color: white;
      background: transparent;
      /*#6861BC*/
      ;
      font-size: 125px;
      line-height: 68px;
      height: 150px;
      width: 247px;
      margin: 0 auto 10px;
      border-radius: 0 0 50px 50px;
    }

    #TeacherProfile .serviceBox .service-icon .profile-img {
      height: 155px;
      width: 155px;
      border-radius: 26px;
      border: 4px solid #6861BC;
      margin: auto;
      margin-top: 20px;
      border-radius: 26px;
      border: 4px solid #6861BC;
      background-position: center !important;
      background-size: cover !important;
      background-repeat: no-repeat !important;
      transition: .5s ease;

    }
    #TeacherProfile .serviceBox .service-icon .profile-img:hover{
      transform: scale(1.1);
    }

    .serviece-info {
      height: 172px;
      padding: 0px 35px;
    }

    .serviceBox .title {
      color: #6861BC;
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      margin: 0 0 7px;
    }

    #TeacherProfile .serviceBox .description {
      font-size: 13px;
      margin: 0 0 15px;
    }

    #TeacherProfile .serviceBox .read-more {
      color: #6861BC;
      font-size: 14px;
      transition: all 0.3s ease 0s;
    }

    .service-box-read-more-button {
      cursor: pointer;
    }

    @media only screen and (max-width: 991px) {
      #TeacherProfile .serviceBox {
        margin: 0 0 30px;
      }
    }

    @media only screen and (max-width: 991px) {
      #TeacherProfile .serviceBox .service-content {
        padding: 0 35px 20px;
      }
    }
    @media only screen and (max-width: 576px) {
      .serviceBox .service-icon {
        width:auto !important;
        padding: 0 !important;
      }
    }



    .read-more-btn{
    margin-right: 10px;
    }
  .spot {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
  }
.svg-wrapper {
  margin-top: 0;
  position: relative;
  width: 150px;

  height: 40px;
  display: inline-block;
  border-radius: 3px;
  margin-left: 5px;
  margin-right: 5px;
  transform: scale(0.9);
}

#shape {
  stroke-width: 6px;
  fill: transparent;
  stroke: #009FFD;
  stroke-dasharray: 85 400;
  stroke-dashoffset: -220;
  transition: 1s all ease;
}


#text {
  margin-top: -35px;
  text-align: center;
}

#text a {
  color: #6861BC;
  text-decoration: none;
  font-weight: 100;
  font-size: 1.1em;
  transition: 1.5s ease;
}
#text a:hover{
  color: #06D6A0;
}


.svg-wrapper:hover #shape {
  stroke-dasharray: 50 0;
  stroke-width: 3px;
  stroke-dashoffset: 0;
  stroke: #06D6A0;
}
 @media only screen and (max-width:768px) {
      .hero-leftside .leftsideinner {
        height: auto !important;
      }

      .hero-section::before {
        content: '';
        width: 67%;
        height: 10%;
        top: 0px;
        border-bottom: 867px solid #26c976;
        border-right: 343px solid transparent;
        position: absolute;
      }

      #myCarousel {
        height: 360px;
        margin-bottom: 25px;
      }
      

    }

    @media only screen and (max-width:576px) {
      .hero-section::before {
        content: '';
        width: 43%;
        height: 10%;
        top: 0px;
        border-bottom: 750px solid #26c976;
        border-right: 245px solid transparent;
        position: absolute;
      }
      #myCarousel {
        height: 260px;
      }
      .departmental-profile {
        height: 448px;
      }
    }
  </style>

  <div class="hero-section">
    <div class="hero-section-area">
      <div class="container">
        <div class="row">
          <!-- hero leftside -->
          <div class=" col-md-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
              	<?php
                    $the_query = new WP_Query(
                        array( 
                            'category_name' => 'slider', 
                        )
                    );
                    if ( $the_query->have_posts() ):
                     $post_slider = 1;
                        while ( $the_query->have_posts() ):
                            $the_query->the_post();
                            if(has_post_thumbnail()): 
                            ?>
                            <?php if($post_slider===1): ?> <div class="item active myitem">
                                <?php else: ?>  <div class="item myitem">
                                    <?php endif; ?>
					                  <div class="fill"
					                    style="background-image:url('<?php the_post_thumbnail_url(get_the_ID(), 'full'); ?>')"></div>
					                  <div class="carousel-bg-img-spacer"></div>
					                </div>
                            <?php endif; ?>

                    <?php 
                        $post_slider++;
                        endwhile;
                    endif;
                    wp_reset_postdata();
                                ?>
              </div>
              <!-- end slider  -->

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>


          <!-- hero rightsede  -->
          <div class="col-md-4 departmental-card">
            <div class="departmental-rightside">
              <div class="card departmental-card">
                <div id="TeacherProfile" class="TeacherProfile-section-padding">
                  <div class="col-xs-12 atf-main-TeacherProfile text-center departmental-profile">
                    <div class="serviceBox wow fadeIn" style="visibility: visible;">
                      <div class="service-content">
                        <h2 class="message-title">Message from Head</h2>
                        <div class="service-icon">
                          <div class="profile-img" style="background: url('images/t3.jpeg');min-height:155px;"></div>
                        </div>
                        <div class="serviece-info">
                          <div style="min-height: 108px;">
                            <h3 style="overflow: hidden;min-height:21px;max-height:32px;" class="title">Professor Dr.
                              Enamul Basher</h3>
                            <div style="overflow: hidden;min-height:30px;max-height:46px;">
                              <h6 class="designation-title">Professor & Dean, Faculty of Business Studies</h6>
                            </div>
                            <p class="description"
                              style="min-height: 32px;max-height:56px;overflow:hidden;margin-bottom: 7px;">Bangladesh
                              Army University <br>of Science and Technology (BAUST)
                          </div>
                          <div class="svg-wrapper">
                            <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                              <rect id="shape" height="40" width="150" />
                              <div id="text">
                                <a href=""><span class="spot"></span> <i class="fa fa-eye"></i> <b> Read more </b></a>
                              </div>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END COL -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="msg-single-page">
    <div class="container">
      <h2 class="section-title">FACULTY OF BUSINESS STUDIES (BS)</h2>
      <!-- profile card slider  -->
      <style>
        /* departmenteal cercle card */
        /* departmenteal cercle card */
        .serviceBox {
          position: relative;

        }

        .profilecard {
          /* padding-bottom: 60px; */
        }

        .message-title {
          background: #6861BC;
          font-size: 17px;
          font-weight: 600;
          text-transform: uppercase;
          margin: 0 0 7px;
          color: #ffffff;
          padding: 10px;
          border: 15px 15px 0px 0px;
        }

        .designation-title {
          font-size: 12px;
          font-weight: 600;
          color: #6c757d;
        }


        .serviceBox {
          color: #999;
          padding-bottom: 3px;
          background: linear-gradient(transparent 65%,
              /* var(--thm-color); 65% */
            );
          font-family: 'Poppins', sans-serif;
          text-align: center;
          border-radius: 0 0 150px 150px;
          box-shadow: 0 12px 7px -7px rgb(0 0 0 / 20%);
        }

        .serviceBox .service-content {
          background: white;
          border-radius: 15px 15px 150px 150px;
          box-shadow: 0 10px 20px rgb(0 0 0 / 10%);
          margin: 0px 15px 15px 15px;
          border-top: 15px solid #6861BC;
          margin-top: 42px;
        }

        .serviceBox .service-icon {
          padding: 0 20px 20px;
          height: 155px !important;
          color: white;
          background: transparent;
          /*#6861BC*/
          ;
          font-size: 125px;
          line-height: 68px;
          height: 150px;
          width: 247px;
          margin: -56px auto 25px;
          border-radius: 0 0 50px 50px;
        }

        .serviceBox .service-icon .profile-img {
          width: 150px;
          height: 150px;
          margin: auto;
          border-radius: 26px;
          border: 4px solid #6861BC;
          background-position: center !important;
          background-size: cover !important;
          background-repeat: no-repeat !important;

        }

        .profile-contact-info span i {
          font-size: 10px;
        }

        .profile-contact-info span {
          font-size: 12px;
        }

        .serviece-info {
          padding: 0 20px 20px;
        }

        .serviceBox .title {
          color: #6861BC;
          font-size: 14px;
          font-weight: 600;
          text-transform: uppercase;
          margin: 0 0 7px;
        }

        .serviceBox .description {
          font-size: 14px;
          margin: 0 0 15px;
        }

        .serviceBox .read-more {
          color: #6861BC;
          font-size: 14px;
          transition: all 0.3s ease 0s;
        }

        .service-box-read-more-button {
          cursor: pointer;
        }

        .service-box-read-more-button {
        }

        @media only screen and (max-width: 991px) {
          .serviceBox {
            margin: 0 0 30px;
          }
        }

        @media only screen and (max-width: 991px) {
          .serviceBox .service-content {
            padding: 0 35px 20px;
          }
        }

      </style>

<style>
  .section-padding {
    padding:70px 0px;
  }
  .owl-carousel.owl-drag .owl-item  {
    height: 383px !important;
  }
  .NoticeAndFacultySection{
    padding-bottom:60px;
    padding-top: 120px;
    position: relative;
  }
  .NoticeAndFacultySection-container {
     position: relative;
  }
  .NoticeAndFacultyDark{
      background-color: #051d4a;
  }
  .NoticeAndFacultyLight{
      background-color: #ecf0f5;
  }
  .TitleCOlor{
      color: #b80924 !important;
  }
  .facultyCardSingle{
      display: flex;
      flex-direction: row;
      background-color: white;
      margin:0px 0px 21px 0px;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 5px 11px 0px rgb(69 90 100 / 30%);
      padding-left: 0px;
  }
  .facultyCardimg {
    width: 150px;
    height: 125px
  }
  .facultyCardSingle img{
      border:.5px solid white;
  }
  .facultyCard{
  }
  .facultyTitle{
      color: white;
      margin-bottom: 21px;
  }
  .divider {
      width: 100px;
      height: 3px;
      padding: 0;
      margin: 21px 0px 21px 0px;
      background: #b1b1b1;
      border: none;
      transition:width 0.5s;
  }
  .Noticedivider{
      width: 60px;
      height: 3px;
      padding: 0;
      margin: 21px 0px 21px 0px;
      background: #b1b1b1;
      border: none;
      transition:width 0.5s;
  }
  .Profiledivider{
      width: 80px;
      height: 3px;
      padding: 0;
      margin: 21px 0px 21px 0px;
      background: #b1b1b1;
      border: none;
      transition:width 0.5s;
  }
  .semoreDivider{
      width: 10px;
      height: 3px;
      padding: 0;
      margin: 21px 0px 21px 0px;
      background: #b1b1b1;
      border: none;
      transition:width 0.5s;
  }
  .NoticeTitles{
      color: white;
      
  }
  .FacultyCardTitleAndDis{
      margin-left: 25px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding-bottom: 5px;
      padding-right: 2px;
  }
  .FacultyCardTitleAndDis h5{
      font-weight: 600;
   }
  .FacultyCardTitleAndDis p{
      margin:0px;
  }
  .FacultyCardTitleAndDis p i{
      font-size: 12px;
  }
  
  .facultyCardSingle p{
      color: #024c02;
  }
  .facultyCardSingle a{
      text-decoration: none;
  }
  .facultyCardSingle p:hover{
   color: #b80924;
  }
  .facultyCardSingle h5 a:hover{
      color:#0d2d62;
  }
  .facultyCardSingle h5 a{
      font-weight: bold;
      color:#b80924;
      font-size: 17px;
  }
  
  .facultyTitle:hover,.NoticeTitles:hover{
  
  }
   @media only screen and (max-width:768px) {
    .departmental-card  {
        margin-left: 0px;
        padding-left: 0px;
        padding-right: 15px;
      }
      #TeacherProfile .serviceBox .service-content {
        padding: 0 0px 20px !important;
      }
      #TeacherProfile .serviceBox {
        height: 183px !important;
      }
      .owl-carousel.owl-loaded {
          display: block;
          margin-bottom: 25px;
      }
      .owl-carousel.owl-drag .owl-item {
        height: 406px !important;
      }
  }
  @media only screen and (max-width:576px) {

  }
  /* notice */
      .studiare-event-item {
          margin-bottom: 21px;
      }
      .studiare-event-item-holder {
          background-color: #fff;
          border: 1px solid #e5e5e5;
          padding: 0.75rem;
          overflow: hidden;
          transition: all .3s ease;
          border-radius: 5px;
          box-shadow: 0 5px 11px 0px rgb(69 90 100 / 30%);
      }
      
      .event-inner-content {
          display: flex;
          align-items: center;
          padding: 8px;
      }
      
      .top-part {
          display: flex;
          flex-grow: 1;
          align-items: center;
      }
      
      .date-holder {
          margin-right: 24px;
      }
      
      .date {
          border-color: #f9a134;
      }
      
      .date {
          position: relative;
          width: 69px;
          height: 63px;
          border: 2px solid #06D6A0;
          border-radius: 4px;
          color: #495057;
          line-height: 1.2;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
      }
      
      .date-day {
          font-size: 30px !important;
      }
      .date-month {
          font-size: 14px !important;
      color: #808080;
      line-height: 22px;
      }
      
      .date span,.eventHeader span {
          border: 0;
          font-family: inherit;
          font-size: 100%;
          font-style: inherit;
          font-weight: inherit;
          margin: 0;
          outline: 0;
          padding: 0;
          vertical-align: baseline;
          box-sizing: border-box;
      }
      
      .event-meta {
          margin-bottom: 8px;
      }
      
      .event-meta-piece {
          font-size: 14px;
          padding-right: 15px;
          color: #8f8f8f;
      }
      .event-meta-piece i {
          color: #f9a134;
      }
      .event-meta-piece i {
          font-size: 18px;
          margin-right: 8px;
          color: #f9a134;
      }
      
      .event-meta-piece {
          font-size: 14px;
          padding-right: 15px;
          color: #8f8f8f;
      }
      .NoticeTitle {
          margin-bottom: 0;
      }
      .NoticeTitle, .h4 {
          font-family: Raleway;
          font-weight: 500;
          font-style: normal;
          color: #464749;
          font-size: 18px;
          font-display: swap;
      }
      .NoticeTitle {
          font-size: 13px;
          line-height: 1.4;
          clear: both;
          margin: 0 0 2px;
      }
      
      .date:before{
          left: 12px;
          content: "";
          position: absolute;
          top: -7px;
          width: 2px;
          height: 14px;
          border-radius: 2px;
          background-color:#06D6A0;
        }
      .date:after{
          right: 12px;
          content: "";
          position: absolute;
          top: -7px;
          width: 2px;
          height: 14px;
          border-radius: 2px;
          background-color:#06D6A0;
      }
      .eventHeader{
          margin-bottom: 40px !important;
      
      }
      .section-subtitle{
          color: #1e83f0;
      }
      
      .studiare-event-item-holder:hover{
          box-shadow: 0 3px 6px rgb(155, 155, 155);
          cursor: pointer;
          border-radius: 5px;
      }
      
       .NoticeTitle a:focus, .NoticeTitle a:active,.NoticeTitle a:visited {
          text-decoration: none;
          outline: none;
          color: #0d2d62;
      }
      .NoticeTitle a:hover{
          text-decoration: none;
          outline: none;
          color: #b80924
      }
      .notice{
          padding-top: 50px;
      }
      .NoticeTitle{
          font-family: 'Montserrat', sans-serif;
          font-size: 18px;
          font-weight: bold;
      }
      .afterHoverTiltles{
           width: 400px;
           color: #b80924;
          
      }
      .backgroundsomething img{
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              object-fit: cover;
        }
      .notice-title-area {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-align: end;
          -ms-flex-align: end;
          align-items: flex-end;
          -webkit-box-pack: justify;
          -ms-flex-pack: justify;
          justify-content: space-between;
          }
      .seeMore {
          text-align: right;
          padding-right: 23px; 
      }
      .semoreDivider {
          margin-left: auto;
          }
      .facultyTitle hr,
      .NoticeTitles hr,
      .seeMore hr {
          margin-top:0px;
      }
      .notice-container {
        position: relative;
      }
      .faculty-overley {
        width: 400px;
        position: absolute;
        right: 0;
        bottom:-59px;
      }

      .faculty-overley img {
        width: 100%;
      }
        .notice_card_area {
            height: 640px;
            overflow: auto;
        }
      @media only screen and (max-width:768px) {
          .notice-title-area  {
              display: block;
          }
          .seeMore {
              margin-top:20px;
              text-align: right;
          }
        .faculty-overley {
        width: 300px;
        position: absolute;
        right: 0;
        bottom:-104px;
      }
       .NoticeAndFacultySection {
        padding-bottom: 105px;
       }
       .NoticeAndFacultySection {
        padding-top: 60px;
       }
       .departmentalnotice-overly {
        display: none;
       }
       .notice-container {
        position: relative;
        padding-bottom: 25px;
        }
      }
       @media only screen and (max-width: 567px) {
        .NoticeAndFacultySection{
            padding:30px 0px;
          }
          .facultyCardSingle {
          flex-direction: column;
          align-items: center;
          padding: 10px;
          }
          .facultyCardimg {
          width: 100%;
          height: 140px;
          } 
          .FacultyCardTitleAndDis {
            margin-left: 0px;
            align-items: flex-start;
            width: 100%;
            margin-top: 10px;
          }
          .NoticeTitle, .h4 {
            font-size: 14px;
          }
          .seeMore {
              margin-top:20px;
              text-align: right;
          }
          .semoreDivider {
          width: 10px;
          height: 3px;
          padding: 0;
          margin: 21px 0px 21px 0px;
          background: #b1b1b1;
          border: none;
          transition: width 0.5s;
          text-align: right;
          margin-left: auto;
          }
        .faculty-overley {
        width: 200px;
        position: absolute;
        right: 0;
        bottom:-74px;
      }
       .NoticeAndFacultySection {
        padding-bottom: 75px;
       }
       }
       .departmentalnotice-overly {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 444px;

        }

        .departmentalnotice-overly img {
            width: 100%;

        }
        .owlAndNoticeSection{
          position: relative;
        }
      </style>

      <!-- slider Section  owl carousel -->
      <div class="container owlAndNoticeSection">
        <div class="col-md-7">
          <div class="our-client-section">
            <div class="profileTitleDiv">
              <h3 class="TitleCOlor ">Profile Card Slider</h2>
              <hr class="Profiledivider">
            </div>
              
            <div class="profilecard owl-carousel owl-theme">
            	<!-- teacher list 1  -->
            <?php
            	$the_query = new WP_Query(
                        array( 
                            'category_name' => 'Teacher List',
                            'order'          => 'ASC',
                        )
                    );
                    if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ):
                            $the_query->the_post();  ?>
                <div class="serviceBox " style="visibility: visible;">
                <div class="service-content">
                  <!-- <h2 class="message-title">MESSAGE FROM VC</h2> -->
                  <div class="service-icon">
                    <div class="profile-img"
                      style="background: url(<?php the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>);">
                    </div>
                  </div>
                  <div class="serviece-info">
                    <div style="min-height: 108px;">
                      <div style="min-height:20px;max-height: 31px;overflow: hidden;">
                        <h3 class="title"><?php echo get_the_title(); ?></h3>
                      </div>
                      <div style="overflow: hidden;max-height:46px;min-height:30px;">
                        <h6 class="designation-title"></h6>
                      </div>
                      <div class="profile-contact-info" style="max-height: 35px;overflow: hidden;">
                        <span style="display:block;"><i class="fa fa-phone" aria-hidden="true"></i> 01727442468</span>
                        <span style="display:block;"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                          dean_ece@baust.edu.bd</span>
                      </div>
                    </div>
                    <div class="svg-wrapper">
                      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                        <rect id="shape" height="40" width="150" />
                        <div id="text">
                          <!-- <a href=""><span class="spot"></span> <i class="fa fa-eye"></i> <b>Read More </b></a> -->
                          <a style="position:bottom" href="#" class="read-more service-box-read-more-button"><span class="spot"></span> <i class="fa fa-eye"></i> View Profile</a>
                        </div>
                      </svg>
                    </div>
                    
                  </div>
                </div>
              </div>
		<?php 
				endwhile;
                    endif;
                    wp_reset_postdata(); ?>

              <!-- end service box -->
           </div>
      <!-- teacher list slider 1  -->
      <!-- teacher list slider two  -->
           <div class="profilecard2 owl-carousel owl-theme">
              <!-- start service box -->
            <?php
            	$the_query = new WP_Query(
                        array( 
                            'category_name' => 'Teacher List',
                            'order'          => 'DSC',
                        )
                    );
                    if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ):
                            $the_query->the_post();  ?>
                <div class="serviceBox " style="visibility: visible;">
                <div class="service-content">
                  <!-- <h2 class="message-title">MESSAGE FROM VC</h2> -->
                  <div class="service-icon">
                    <div class="profile-img"
                      style="background: url(<?php the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>);">
                    </div>
                  </div>
                  <div class="serviece-info">
                    <div style="min-height: 108px;">
                      <div style="min-height:20px;max-height: 31px;overflow: hidden;">
                        <h3 class="title"><?php echo get_the_title(); ?></h3>
                      </div>
                      <div style="overflow: hidden;max-height:46px;min-height:30px;">
                        <h6 class="designation-title"></h6>
                      </div>
                      <div class="profile-contact-info" style="max-height: 35px;overflow: hidden;">
                        <span style="display:block;"><i class="fa fa-phone" aria-hidden="true"></i> 01727442468</span>
                        <span style="display:block;"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                          dean_ece@baust.edu.bd</span>
                      </div>
                    </div>
                    <div class="svg-wrapper">
                      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                        <rect id="shape" height="40" width="150" />
                        <div id="text">
                          <!-- <a href=""><span class="spot"></span> <i class="fa fa-eye"></i> <b>Read More </b></a> -->
                          <a style="position:bottom" href="#" class="read-more service-box-read-more-button"><span class="spot"></span> <i class="fa fa-eye"></i> View Profile</a>
                        </div>
                      </svg>
                    </div>
                    
                  </div>
                </div>
              </div>
		<?php 
				endwhile;
                    endif;
                    wp_reset_postdata(); ?>
            </div>
            <!--end  teacher list slider two  -->
            <!--  end profile teacher list  -->
          </div>
        </div>
        <div class="col-md-5 notice-container">
          <div class="row notice-title-area ">
            <div class="NoticeTitles col-xs-6 col-sm-6">
              <h3 class="TitleCOlor">Notice</h3>
              <hr class="Noticedivider">
            </div>
            <div class="seeMore col-xs-6 col-sm-6">
              <h5 class="TitleCOlor">View All</h5>
              <hr class="semoreDivider">
            </div>
          </div>
          <div class="notice_card_area">
          	<?php
                    $the_query = new WP_Query(
                        array( 
                            'category_name' => 'notice', 
                        )
                    );

                    if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ):
                            $the_query->the_post();
                             ?>

                    <div class="row">
                        <div id="event-326" class="studiare-event-item col-xs-12">
                            <div class="studiare-event-item-holder">
                                <div class="event-inner-content">
                                    <div class="top-part">
                                        <div class="date-holder">
                                            <div class="date">
                                                <span class="date-day"><?php echo get_the_date('d'); ?> </span>
                                                <span class="date-month"><?php echo get_the_date('M'); ?></span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4 class="NoticeTitle"><a
                                                    href="<?php the_permalink();?>">
                                                        <?php echo get_the_title();?>
                                                    </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile; endif;
                    wp_reset_postdata();  ?>
             </div>
        </div>

        <div class="departmentalnotice-overly">
          <img src="<?php echo get_template_directory_uri();?>/images/back.png">
      </div>
      </div>
    </div>
  </div>
  <!--  why cohice us container -->
  <style>
        /* why choice us */
    .dep-why-choice-us-sec {
      padding-top: 0px;
      padding-bottom:60px;
    }
    .WhyChooseUs {
      font-family: 'Dosis', sans-serif !important;
      padding: 70px 0px !important;
    }

    .WhyChooseUs h2 {
      margin-top: 0px !important;
    }

    .WhyChooseUs p {
      margin: 0px !important;
    }

    .upperDiv {
      border-left: 4px solid #6861BC;
    }

    .whyChoseUs-leftside {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .WhyChooseUs a:focus,
    .WhyChooseUs a:active,
    .WhyChooseUs a:visited {
      text-decoration: none;
      outline: none;
    }

    .WhyChooseUs a:hover {
      text-decoration: none;
      outline: none;
    }
    @media only screen  and (max-width: 768px ) {
      .dep-why-choice-us-sec {
          padding: 10px 0px;
      }
      .departmental-leftside {
        margin-bottom: 25px;
      }
    }
  </style>
  <div class="container dep-why-choice-us-sec">
     <div class="row departmental-contaienr-area">
        <div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-12 col-md-8 departmental-leftside ">
          <div class="articleCard">
            <div class="upperDiv">
              <div class="WhyChooseUsTitle" id="" style="height: auto; padding-left: 20px;">
                <p style=" line-height: 29px;"><span style="color: rgb(17, 17, 17); font-size: 18px;"><span
                      style="font-size: 15px;font-weight: 400;font-style: normal;color: #ff7162;">A
                      modern Education You Need </span></span></p>
              </div>
              <div class="WhyChooseUsHeading" id="" style="height: auto; padding-left: 20px;">
                <h2 style="line-height: 30px;"><span
                    style=" font-weight: 900; font-style: normal; font-size: 35px;text-transform: capitalize;margin-bottom: 50px;margin-top: 0px;color: #6861BC;">Why
                    BAUST is best</span><span
                    style="color: #6861BC; font-size: 35px;  font-weight: 900; font-style: normal;">?</span>
                </h2>
              </div>
            </div>
            <div class="lp-element lp-pom-text nlh" id="lp-pom-text-698" style="height: auto;margin-top: 15px;">
              <p style="line-height: 29px;font-size: 16px; font-style: normal; color: rgb(17, 17, 17);">Lorem ipsum
                dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minimveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</span></p>
            </div>
            <div style="margin-top:25px;">
              <div class="lp-element lp-pom-text nlh" id="lp-pom-text-700"
                style="height: auto; display:flex; flex-direction:row;align-items: center;margin-top:20px;">
                <i style="margin-right:10px; color:#6861BC;font-size: 20px;" class="fa fa-check-circle"></i>
                <p style="line-height: 29px;margin-bottom: 0px;"><span
                    style="color: rgb(17, 17, 17); font-size: 16px; font-weight: 400; font-style: normal;">Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit,</span></p>
              </div>
              <div class="lp-element lp-pom-text nlh" id="lp-pom-text-700"
                style="height: auto; display:flex; flex-direction:row;align-items: center;margin-top:20px;">
                <i style="margin-right:10px; color:#6861BC;font-size: 20px;" class="fa fa-check-circle"></i>
                <p style="line-height: 29px;margin-bottom: 0px;"><span
                    style="color: rgb(17, 17, 17); font-size: 16px;  font-weight: 400; font-style: normal;">Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit,</span></p>
              </div>
              <div class="lp-element lp-pom-text nlh" id="lp-pom-text-700"
                style="height: auto; display:flex; flex-direction:row;align-items: center;margin-top:20px;">
                <i style="margin-right:10px; color:#6861BC;font-size: 20px;" class="fa fa-check-circle"></i>
                <p style="line-height: 29px;margin-bottom: 0px;"><span
                    style="color: rgb(17, 17, 17); font-size: 16px;  font-weight: 400; font-style: normal;">Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit,</span></p>
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 departmental-rightside derpartmental-video-area">
          <div class="card video-thumbnail-card">
            <div class="video-thumbnail-img"
              style="background: url('<?php echo get_template_directory_uri();?>/images/bookmage.jpg');background-size:cover;background-position:center; background-repeat:no-repeat;">
            </div>
            <div class="video-image-overley-button">
              <a style="position: absolute;" href="#">
                <div class="video-thumbnail">
                  <div class="play-btn">
                    <i class="fa fa-play-circle" aria-hidden="true"><a href="#" class=""></a></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>
 <?php get_footer(); ?>