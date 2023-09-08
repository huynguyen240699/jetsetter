<div class="banner">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.jpg">
        <div class="banner-content">
            <p class="classify">PLACE</p>
            <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur </h3>
        </div>
    </div>
    <div class="container">
        <div class="feature">
            <h2 class="feature-article">Feature Articles</h2>
            <div class="feature--content">
                <div class="left">
                    <div class="articles articles--big">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group1.jpg" alt="image">
                        <p class="classify">PLAY</p>
                        <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur </h3>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed velit dignissim sodales ut eu sem.</p>
                    </div>
                    <div class="flex">
                        <div class="articles">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group2.jpg" alt="image">
                            <p class="classify">Experience</p>
                            <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                        </div>
                        <div class="articles">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group3.jpg" alt="image">
                            <p class="classify">People</p>
                            <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                        
                        </div>
                    </div>
                    <div class="flex">
                        <div class="articles">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group4.jpg" alt="image">
                            <p class="classify">People</p>
                            <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                            
                        </div>
                        <div class="articles">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group5.jpg" alt="image">
                            <p class="classify">People</p>
                            <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                        </div>
                    </div>
                    <div class="feature-video">
                        <h2 class="feature-line">Feature Videos</h2>
                        <div class="videos">
                            <div class="videos-left">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video1.jpg" alt="image">
                                <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur </h3>
                                <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed velit dignissim sodales ut eu sem.</p>
                            </div>
                            <div class="videos-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video2.jpg" alt="image">
                                <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video3.jpg" alt="image">
                                <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="ggad">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ggad1.jpg" alt="image">
                    </div>
                    <div class="slider__fashion">
                        <h2><?php echo esc_html( get_field('text') ); ?></h2>
                        <div class="owl-carousel">
                            <?php if( have_rows('slider_banner') ): ?>
                                    <?php while( have_rows('slider_banner') ): the_row(); 
                                        $image = get_sub_field('image');
                                        ?>
                                            <div class="item"><?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?></div>
                                    <?php endwhile; ?>
                            <?php endif; ?>
                    </div>
                    <div class="signup">
                        <h3>Sign Up for Newsletters</h3>
                        <input type="text" placeholder="Email Addres"><br>
                        <button type="submit">Subscribe</button>
                    </div>
                    <!-- <div class="follow-us">
                        <h3>Follow us on Instagram</h3>
                        <a href="">@jetsetter_magazine</a>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group6.jpg" alt="image"></div>
                                <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group6.jpg" alt="image"></div>
                                <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group6.jpg" alt="image"></div>
                                <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group6.jpg" alt="image"></div>
                                <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mask group6.jpg" alt="image"></div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div> -->
                </div>
            </div>
            <div class="gg-ad">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gg-ad.jpg" alt="image">
            </div>
        </div>
    </div>
    <div class="people">
        <div class="container">
            <div class="flex-title">
                <h2 class="title-line">People</h2>
                <a href="">View More</a>
            </div>
            <div class="article-peoples">
                <div class="content-people">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people1.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people2.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
                <div class="content-people">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people3.jpg" alt="image">
                    <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur </h3>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed velit dignissim sodales ut eu sem.</p>
                </div>
                <div class="content-people">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people4.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people5.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="places">
        <div class="container">
            <div class="flex-title">
                <h2 class="title-line">Places</h2>
                <a href="">View More</a>
            </div>
            <div class="places-top">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/places1.jpg" alt="image">
                <div class="content-places-top">
                    <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur </h3>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed velit dignissim sodales ut eu sem.</p>
                </div>    
            </div>
            <div class="places-bottom">
                <div class="content-places-bottom">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/places2.jpg" alt="image">
                    <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
                <div class="content-places-bottom">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/places3.jpg" alt="image">
                    <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
                <div class="content-places-bottom">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/places4.jpg" alt="image">
                    <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
            </div>
            <div class="gg-ad">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gg-ad.jpg" alt="image">
            </div>
        </div>
    </div>
    <div class="stay">
       <div class="container">
            <div class="flex-title">
                <h2 class="title-line">Stay</h2>
                <a href="">View More</a>
            </div>
            <div class="stay-content">
                <div class="stay-content-left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stay1.jpg" alt="image">
                    <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur <h3>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sedo eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sedvelidignissim sodales ut eu sem.</p>
                </div>
                <div class="stay-content-right">
                    <div class="content-right">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stay2.jpg" alt="image">
                        <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                    </div>
                    <div class="content-right">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stay3.jpg" alt="image">
                        <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                    </div>
                    <div class="content-right">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stay4.jpg" alt="image">
                        <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                    </div>
                    <div class="content-right">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stay5.jpg" alt="image">
                        <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="experience">
        <div class="container">
            <div class="flex-title">
                <h2 class="title-line">Experience</h2>
                <a href="">View More</a>
            </div>
            <div class="experience-content">
                <div class="experience-content-left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience1.jpg" alt="image">
                    <h3 class="title__text">Lorem ipsum dolor sit amet,consectetur </h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience2.jpg" alt="image">
                    <h3 class="title__text">Lorem ipsum dolor sit amet,consectetur </h3>
                </div>
                <div class="experience-content-right">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience3.jpg" alt="image">
                    <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur <h3>
                </div>
            </div>
            <div class="gg-ad">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ggad2.jpg" alt="image">
            </div>
        </div>
    </div>
    <div class="dine">
        <div class="container">
            <div class="flex-title">
                <h2 class="title-line">Dine</h2>
                <a href="">View More</a>
            </div>
            <div class="article-peoples">
                <div class="content-people">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people3.jpg" alt="image">
                    <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur </h3>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed velit dignissim sodales ut eu sem.</p>
                </div>
                <div class="content-people">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people1.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people2.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
                <div class="content-people">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people4.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people5.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="luxury">
        <div class="container">
            <div class="flex-title">
                <h2 class="title-line">Luxury</h2>
                <a href="">View More</a>
            </div>
            <div class="luxury-content">
                <div class="luxury-content-left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/luxury1.jpg" alt="image">
                    <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur </h3>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed velit dignissim sodales ut eu sem.</p>
                </div>
                <div class="luxury-content-right">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/luxury2.jpg" alt="image">
                    <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/luxury3.jpg" alt="image">
                    <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
            </div>
            <div class="gg-ad">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gg-ad.jpg" alt="image">
            </div>
        </div>
    </div>
    <div class="people people-second">
        <div class="container">
            <div class="flex-title">
                <h2 class="title-line">People</h2>
                <a href="">View More</a>
            </div>
            <div class="article-peoples">
                <div class="content-people">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people6.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people7.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
                <div class="content-people">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people8.jpg" alt="image">
                    <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur </h3>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed velit dignissim sodales ut eu sem.</p>
                </div>
                <div class="content-people">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people9.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/people10.jpg" alt="image">
                    <h3 class="title__text font--small">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="places lorem">
        <div class="container">
            <div class="flex-title">
                <h2 class="title-line">Lorem Ipsum</h2>
                <a href="">View More</a>
            </div>
            <div class="places-top">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lorem1.jpg" alt="image">
                <div class="content-places-top">
                    <h3 class="title__text font--big">Lorem ipsum dolor sit amet, consectetur </h3>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed velit dignissim sodales ut eu sem.</p>
                </div>    
            </div>
            <div class="places-bottom">
                <div class="content-places-bottom">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lorem2.jpg" alt="image">
                    <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
                <div class="content-places-bottom">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lorem3.jpg" alt="image">
                    <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
                <div class="content-places-bottom">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lorem4.jpg" alt="image">
                    <h3 class="title__text font--medium">Lorem ipsum dolor sit amet, consectetur </h3>
                </div>
            </div>
        </div>
    </div>
</main>