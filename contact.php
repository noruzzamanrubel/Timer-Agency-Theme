<?php 
/**
 * Template Name: Contact
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
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo esc_url(site_url());?>">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 id="contact_ttl" class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo esc_html(get_theme_mod('timer_contact_setting')); ?></h2>
                    <p id="contact_dsc" class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <?php echo wp_kses_post(get_theme_mod('timer_contact_setting_textarea')) ?>
                    </p>
                    <div class="contact-form">
                        <form id="contact-form" method="#" action="#" role="form">
                            <?php the_content() ?>                     
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 id="find_us" class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo esc_html(get_theme_mod('timer_contact_find_setting')); ?></h2>
                    <p id="find_us_area" class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <?php echo wp_kses_post(get_theme_mod('timer_contact_find_setting_textarea')) ?>
                        
                    </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-location-outline"></i>
                    <h5 id="address_one"><?php echo wp_kses_post(get_theme_mod('timer_contact_address_one')) ?></h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <i class="ion-ios-location-outline"></i>
                    <h5 id="address_two"><?php echo wp_kses_post(get_theme_mod('timer_contact_address_two')) ?></h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <h5 id="address_email"><?php echo wp_kses_post(get_theme_mod('timer_contact_email')) ?></h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <h5 id="address_phone"><?php echo wp_kses_post(get_theme_mod('timer_contact_phone')) ?></h5>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>