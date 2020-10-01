
            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="search widget">
                        <form action="<?php echo home_url( '/' ); ?>" method="get" class="searchform" role="search">
                            <div class="input-group">
                                <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="ion-search"></i> </button>
                                </span>
                                </div><!-- /input-group -->
                        </form>
                        </div>
                        <div class="author widget">
                            <?php
                                global $post;
                                $args = array( 'posts_per_page' => -1, 'post_type'=> 'posttype', 'orderby' => 'menu_order', 'order' => 'ASC' );
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ) : setup_postdata($post); ?>
                                <img class="img-responsive" src="
                                <?php $image = get_field('author_bg');
                                    $size = 'full';
                                    if( $image ) {
                                        echo wp_get_attachment_image( $image, $size );
                                    }?>
                                
                                <div class="author-body text-center">
                                    <div class="author-img">
                                        <?php the_post_thumbnail('custom-size');?>
                                    </div>
                                    <div class="author-bio">
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endforeach; wp_reset_query(); ?>
                        </div>

                        <?php dynamic_sidebar( 'category-1' );?>

                                          
                        <?php dynamic_sidebar( 'recent_post' );?>
                        
                    </div>
                </div>
            </div>
        </div>
</section>