<?php get_header(); ?>

==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php the_title();?></h2>
                    <div class="portfolio-meta">
                        <span><?php the_time( 'F j, Y' ) ;?></span>
                        <span> Category : <?php the_category(',') ;?> </span>
                        <span> Tags : <a href="<?php the_permalink( );?>"> <?php the_tags('');?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->


<section class="single-post">
    <div class="container">
        <div class="row">
            <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-12">
                            <div class="post-img">
                            <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
                            </div>
                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>                          
                        </div>
                    <?php endwhile; 
                endif;              
            ?>
        </div>
        
        <div class="row">
            <div class="col-md-12">
            <?php if ( comments_open() || get_comments_number() ) : ?>
                <div class="post-comment">
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>   


<?php get_footer(); ?>