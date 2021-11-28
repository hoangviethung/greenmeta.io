<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenmeta
 */

?>

<!-- FOOTER -->
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-logo">
                <?php the_custom_logo();
                            if (is_front_page() && is_home()) : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <?php else : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <?php endif;
                            $greenbeli_description = get_bloginfo('description', 'display');
                            if ($greenbeli_description || is_customize_preview()) :
                            ?>
                <p class="site-description">
                    <?php echo $greenbeli_description; ?>
                </p>
                <?php endif; ?>
                <!-- <div class="footer__nav">
                    <a class="bt bt--primary-light" href="https://greenbeli.gitbook.io/green-beli/" target="_blank"
                        rel="noopener noreferrer">Whitepaper</a>
                    <a class="bt bt--primary" href="/terms-of-use">Terms of Use</a>
                </div> -->
            </div>
            <div class="footer-socials">
                <h3 class="footer__title">JOIN OUR COMMUNITIES</h3>
                <div class="footer__socials"><a href="https://twitter.com/Green_Beli" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-twitter"></i></a><a href="https://t.me/GreenBeli"
                        target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram-plane"></i></a><a
                        href="https://medium.com/@greenbeli" target="_blank" rel="noopener noreferrer"><i
                            class="fab fa-medium-m"></i></a><a href="https://discord.gg/Uqa7PDeBqK" target="_blank"
                        rel="noopener noreferrer"><i class="fab fa-discord"></i></a><a
                        href="https://www.facebook.com/GreenBeli" target="_blank" rel="noopener noreferrer"><i
                            class="fab fa-facebook"></i></a></div>
            </div>
        </div>
    </div>
</footer>
</div>

</div>

<?php wp_footer(); ?>

</body>

</html>