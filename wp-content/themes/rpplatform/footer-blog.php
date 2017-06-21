<?php
/**
 * The template for displaying the footer
 */
?>

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <?php if ( has_nav_menu( 'footer' ) ) : ?>
                            <p class="footer-menu-title">Home:</p>
                            <nav class="site-footer-menu" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'rpplatform' ); ?>">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer',
                                    'menu_class'     => 'footer-menu',
                                ) );
                                ?>
                            </nav>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <?php if ( has_nav_menu( 'footer-social' ) ) : ?>
                            <p class="social-navigation-title">Follow us:</p>
                            <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'rpplatform' ); ?>">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-social',
                                    'menu_class'     => 'social-links-menu',
                                    'link_before'    => '<span>',
                                    'link_after'     => '</span>',
                                ) );
                                ?>
                            </nav>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-2 address">
                        <p class="footer-contacts-title">Contact us:</p>
                        <p>info@rpplatform.com</p>
                        <p>1 East Poultry Ave<br />
                            London EC1A 9PT, UK</p>
                        <p>UK: +44 (0) 203 137 0774</p>
                        <p>Germany: +49 (0) 123 456 7987</p>
                    </div>
                    <div class="col-md-4">
                        <div class="site-map"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.6799571664687!2d-0.1049717840138887!3d51.51908731766911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b53c630c7c1%3A0x980a99ef39f4ed91!2s1+E+Poultry+Ave%2C+London+EC1A+9PT%2C+UK!5e0!3m2!1sen!2sua!4v1453820230137" width="100%" height="276" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
                    </div>
                    <div class="col-md-12">
                        <p class="copyright">© RP Platform, 2016</p>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
