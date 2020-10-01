<?php 
/**
 * Template Name: Gallery
 */

get_header();?>
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Gallery</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo esc_url(site_url());?>">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=============================
=            Gallery            =
==============================-->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-1.jpg">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-2.jpg">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-3.jpg" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-3.jpg">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="700ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 600ms; -webkit-animation-delay: 600ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-4.jpg" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-4.jpg">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-5.jpg" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-5.jpg">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-6.jpg" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/item-6.jpg">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>   

<?php get_footer(); ?>