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
            <?php
                global $post;
                $args = array( 'posts_per_page' => 6, 'post_type'=> 'portfolio', 'orderby' => 'menu_order', 'order' => 'ASC' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                        <div class="img-wrapper">
                        <?php the_post_thumbnail('custom',array('class'=> 'img-responsive')); ?>
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="
                                        <?php 
                                        $att_id=get_post_thumbnail_id();
                                        echo wp_get_attachment_image_url($att_id,'full');
                                        
                                        ?>
                                ">Demo</a>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
            <?php endforeach; wp_reset_query(); ?>
        </div>
    </div>
</section>   

<?php get_footer(); ?>