    <!-- hero section  -->
    <style>
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
            background-image: url('<?php echo get_template_directory_uri();?>/images/slidersection-bg-img.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            height: 100%;
            margin-bottom: 70px;
        }

        .hero-section::before {
            content: '';
            width: 43%;
            height: 10%;
            top: 0px;
            border-bottom: 477px solid #26c976;
            border-right: 482px solid transparent;
            position: absolute;

        }

        .hero-section-area {
            padding: 12px 15px;
        }

        .hero-leftside img,
        .hero-rightside img {
            width: 100%;
        }

        .hero-leftside img {
            border: 6px solid #fff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            box-shadow: 0 5px 10px rgba(16, 17, 21, 0.1);
            height: 440px;
        }

        .hero-leftside {
            padding-right: 4px;
        }

        .hero-rightside {
            padding-left: 4px;
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

        /*  carousel info box */
        .myitem {
            position: relative;
        }

        .carousel-info-box {
            position: absolute;
            right: 10px;
            bottom: 15px;
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0px 0px 5px 2px #e9e9e9;
            max-width: 75%;
        }

        .carousel-info-box h2 {
            font-size: 20px;
            line-height: 1.3;
            color: #2e2e2e;
            margin-bottom: 0px;
            margin-top: 0px;
        }

        /* hero image overflow card */
        .heroimage-overflow-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 4px;
            padding: 25px;
            box-shadow: 0px 0px 6px 1px #d1d1d1;
            position: absolute;
            left: 40px;
            top: 30%;
            max-width: 350px;

        }

        .heroimage-overflow-card::after {
            content: '';
            display: table;
            width: 3px;
            height: 80px;
            background:
                /*#dc3545;*/
                #f9a134;
            position: absolute;
            left: 0;
            top: 23px;
        }

        .heroimage-overflow-card h2 {
            font-size: 34px;
            font-family: Raleway;
            text-transform: capitalize;
            font-weight: 300;
            margin-top: 0px;
            color: rgb(47, 47, 50);
            line-height: 1.3;
        }

        .heroimage-overflow-card p {
            font-family: Raleway;
            line-height: 30px;
            letter-spacing: 0px;
            font-weight: 400;
            font-size: 17px;
            color:
                /*rgb(125, 126, 127);*/
                rgb(133 133 133);
            line-height: 1.5;
        }

        @media only screen and (max-width:768px) {
            .hero-section {
                padding-bottom: 40px;
            }

            .hero-leftside {
                margin-bottom: 25px;
            }

            .hero-rightside {
                padding-left: 15px;
            }

            #myCarousel {
                height: 360px;
            }

            .hero-leftside img {
                height: 360px;
            }

        }

        @media only screen and (max-width:576px) {
            .hero-section::before {
                content: '';
                width: 43%;
                height: 10%;
                top: 0px;
                border-bottom: 588px solid #26c976;
                border-right: 245px solid transparent;
                position: absolute;
            }

            #myCarousel {
                height: 260px;
            }

            .hero-leftside img {
                height: 260px;
            }
        }
    </style>
    <div class="hero-section">
        <div class="hero-section-area">
            <div class="row">
                <!-- hero leftside -->
                <div class="hero-leftside col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/images/hero-leftside-img.jpg">
                    <div class="heroimage-overflow-card">
                        <h2>self education resources and infos</h2>
                        <p>We are long past the online coursework and training that involves video lectures, unit plans
                            and quizes! </p>
                    </div>
                </div>
                <!-- hero rightside  -->
                <div class="hero-rightside col-md-6">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <!-- query post for slider  -->

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
                                <div class="fill animate__animated animate__zoomIn "
                                    data-src="images/hero-leftside-img.jpg"
                                    style="background-image:url(<?php the_post_thumbnail_url(get_the_ID(), 'full'); ?>)"></div>
                                <div class="carousel-info-box animate__animated animate__fadeInUp animate__slow 2s">
                                    <h2><?php echo get_the_title();?> </h2>
                                </div>
                            </div>
                            <?php endif; ?>

                    <?php 
                        $post_slider++;
                        endwhile;
                    endif;
                    wp_reset_postdata();
                                ?>
                        </div>
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
            </div>
        </div>
    </div>
    <!-- end slider  -->