<?php get_header(); ?>
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Blog</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo esc_url(site_url());?>">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============================================
        =            Blog Page        =
        ==============================================-->
        <section id="blog-full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <?php 
                            if ( have_posts() ) : 
                                while ( have_posts() ) : the_post(); ?>
                                    <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                                        <div class="blog-post-image">
                                            <a href="<?php the_permalink( );?>"> <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?></a>
                                        </div>
                                        <div class="blog-content">
                                            <h2 class="blogpost-title">
                                            <a href="<?php the_permalink( );?>"><?php the_title();?></a>
                                            </h2>
                                            <div class="blog-meta">
                                                <span><?php the_time( 'F j, Y' ) ;?></span>
                                                <span>by <a href=""><?php the_author( );?></a></span>
                                                <span><a href="<?php the_permalink( );?>"><?php the_tags( );?></a></span>
                                            </div>
                                            <?php the_excerpt();?>
                                            <a href="<?php the_permalink( );?>" class="btn btn-dafault btn-details">Continue Reading</a>
                                        </div>
                                        
                                    </article>
                            <?php endwhile; 
                            endif; 
                        ?>
                </div>
                
<?php get_sidebar(); ?>    

<?php get_footer(); ?>