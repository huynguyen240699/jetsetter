    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="footer-top-left">
                    <div class="footer_logo">
                    <?php 
                        $image = get_field('logo_footer');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif;
                    ?>
                    </div>
                    <div class="icon-network">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg" alt="image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.svg" alt="image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Linkedin.svg" alt="image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.svg" alt="image">
                    </div>
                </div>
                <div class="footer-top-medium">
                    <div class="wrapper-footer">
                        <ul>
                            <li>
                                <a href="">STAY</a>
                            </li>
                            <li>
                                <a href="">DINE</a>
                            </li>
                            <li>
                                <a href="">PLACES</a>
                            </li>
                            <li>
                                <a href="">Experience</a>
                            </li>
                            <li>
                                <a href="">Fly</a>
                            </li>
                            <li>
                                <a href="">People</a>
                            </li>
                            <li>
                                <a href="">Luxury</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-footer">
                        <ul>
                            <li><a href="">ABOUT US</a></li>
                            <li><a href="">ADVERTISE</a></li>
                            <li><a href="">CONTACT US</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-top-right">
                    <h2>Sign up for our newsletter</h2>
                    <input type="text" placeholder="Your email">
                    <button type="submit">SEND</button>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>