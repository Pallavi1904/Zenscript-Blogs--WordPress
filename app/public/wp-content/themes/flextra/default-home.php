<?php
/**
 * Template Name: Default Home Page
 */

get_header();
?>

<main id="primary">
    <section id="main-banner-wrap">
        <div class="container">
            <div class="main-banner-content-box">
                <?php
                    $flextra_banner_heading = get_theme_mod( 'flextra_banner_heading', '' );
                    if ( ! empty( $flextra_banner_heading ) ) { ?>
                    <h3><?php echo esc_html( $flextra_banner_heading ); ?></h3>
                <?php } ?>
                <?php
                    $flextra_banner_text = get_theme_mod( 'flextra_banner_text', '' );
                    if ( ! empty( $flextra_banner_text ) ) { ?>
                    <p><?php echo esc_html( $flextra_banner_text ); ?></p>
                <?php } ?>
                <div class="banner-button">
                    <?php
                    $flextra_banner_button_link = get_theme_mod( 'flextra_banner_button_link', '' );
                    if ( ! empty( $flextra_banner_button_link ) ) { ?>
                        <a href="<?php echo esc_url( $flextra_banner_button_link ); ?>"><i class="fa-solid fa-arrow-right mr-2"></i><?php echo esc_html('Get A Quote','flextra'); ?></a>
                    <?php } ?>
                </div>
                <div class="main-banner-inner-box">
                    <?php
                    $flextra_banner_image = get_theme_mod( 'flextra_banner_image', '' );
                    if ( ! empty( $flextra_banner_image ) ) { ?>
                        <img src="<?php echo esc_url( $flextra_banner_image ); ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="about-wrap" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <?php
                        $flextra_about_short_heading = get_theme_mod( 'flextra_about_short_heading', '' );
                        if ( ! empty( $flextra_about_short_heading ) ) { ?>
                        <h4><?php echo esc_html( $flextra_about_short_heading ); ?></h4>
                    <?php } ?>
                    <?php
                        $flextra_about_heading = get_theme_mod( 'flextra_about_heading', '' );
                        if ( ! empty( $flextra_about_heading ) ) { ?>
                        <h3><?php echo esc_html( $flextra_about_heading ); ?></h3>
                    <?php } ?>
                    <?php
                        $flextra_about_content = get_theme_mod( 'flextra_about_content', '' );
                        if ( ! empty( $flextra_about_content ) ) { ?>
                        <p><?php echo esc_html( $flextra_about_content ); ?></p>
                    <?php } ?>
                    <div class="about-button">
                        <?php
                        $flextra_about_button_link = get_theme_mod( 'flextra_about_button_link', '' );
                        if ( ! empty( $flextra_about_button_link ) ) { ?>
                            <a href="<?php echo esc_url( $flextra_about_button_link ); ?>"><?php echo esc_html('More About','flextra'); ?><i class="fa-solid fa-arrow-right mr-2"></i></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-image">
                        <?php
                        $flextra_about_image_big = get_theme_mod( 'flextra_about_image_big', '' );
                        if ( ! empty( $flextra_about_image_big ) ) { ?>
                            <img class="about-image1" src="<?php echo esc_url( $flextra_about_image_big ); ?>">
                        <?php } ?>
                        <div class="inner-about-image">
                            <?php
                            $flextra_about_image_small = get_theme_mod( 'flextra_about_image_small', '' );
                            if ( ! empty( $flextra_about_image_small ) ) { ?>
                                <img class="about-image2" src="<?php echo esc_url( $flextra_about_image_small ); ?>">
                            <?php } ?>
                        </div>
                        <div class="round-shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();