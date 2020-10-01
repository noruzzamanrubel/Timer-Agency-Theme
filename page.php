<?php get_header(); ?>

        <!--=============================================
        =            Blog Page        =
        ==============================================-->
        <section id="blog-full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <?php 
                            if ( have_posts() ) : 
                                while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', 'page' );
                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                endwhile; 
                            endif; 
                        ?>
                </div>
                
<?php get_sidebar(); ?>    

<?php get_footer(); ?>