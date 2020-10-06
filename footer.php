            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 id="footer_top_title" class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo esc_html(get_theme_mod('timer_footer_top_Heading')); ?></h2>
                                <p id="footer_top_des" class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms"><?php echo wp_kses_post(get_theme_mod('timer_footer_top_textarea')); ?></p>
                                <a id="footer_top_btn" href="<?php echo esc_url(site_url('/contact'));?>" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms"><?php echo esc_html(get_theme_mod('timer_footer_top_button')); ?></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p id="copyrights"class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> <?php echo wp_kses_post( get_theme_mod('timer_footer_copyright') ); ?> <a href="https://github.com/noruzzamanrubel" target="_blank">Noruzzaman Rubel</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
<?php wp_footer(); ?>

 	</body>
</html>