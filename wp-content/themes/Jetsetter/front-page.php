<?php get_header();?>
    <div class="banner">
        <div class="owl-carousel">
            <?php if( have_rows('slider_banner') ): ?>
                    <?php while( have_rows('slider_banner') ): the_row(); 
                        $image = get_sub_field('image');
                        ?>
                            <div class="item">
                                <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                                <div class="banner-content">
                                    <p class="classify"><?php echo get_sub_field('classify');?></p>
                                    <h3 class="title__text font--big"><?php echo get_sub_field('title_banner');?></h3>
                                </div>
                            </div>
                    <?php endwhile; ?>
            <?php endif; ?>
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
                        <?php 
                            $image = get_field('ggad_vertical');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="slider__fashion">
                        <h3><?php echo esc_html( get_field('text') ); ?></h3>
                        <div class="owl-carousel">
                            <?php if( have_rows('slider_fashion') ): ?>
                                    <?php while( have_rows('slider_fashion') ): the_row(); 
                                        $image = get_sub_field('image');
                                        ?>
                                            <div class="item">
                                                <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                                            </div>
                                    <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="signup">
                        <h3>Sign Up for Newsletters</h3>
                        <input type="text" placeholder="Email Addres"><br>
                        <button type="submit">Subscribe</button>
                    </div>
                    <div class="follow-us">
                        <h3><?php echo esc_html( get_field('title_insta') ); ?></h3>
                        <div class="owl-carousel">
                            <?php if( have_rows('slider_instagram') ): ?>
                                    <?php while( have_rows('slider_instagram') ): the_row(); 
                                        $image = get_sub_field('image_insta');
                                        ?>
                                            <div class="item">
                                                <a><?php echo get_sub_field('shortcode'); ?></a>
                                                <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                                            </div>
                                    <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gg-ad">
                <?php 
                        $image = get_field('ggad_horizontal');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
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
                <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'  => array( 'post-people' ),
                        'order' => 'ASC', 
                        'orderby' => 'date',
                        'post__not_in' => array(187,189,191,193,195), 
                    );
                    // The Query
                    $get_post = new WP_Query( $args );
                    // The Loop?
                    if ( $get_post->have_posts() ) {
                        $post_outputs = [];
                        $counter = 0;
                        while ( $get_post->have_posts() ):
                            $get_post->the_post();
                            $counter++;
                            if($counter === 1 || $counter === 3 || $counter === 4):
                                echo '<div class="parent-item">';
                            endif;
                            ?>
                                <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail');?>
                                <h3 class="title__text"><?php echo get_the_title();?></h3>
                            <?php 
                            if($counter === 3):
                                echo '<div class="content">';
                                echo get_the_content();
                                echo '</div>';
                            endif;    
                            if($counter === 2 || $counter === 3 ): 
                                echo '</div>';
                            endif;
                        endwhile;
                        if($counter !== 2 || $counter !== 3 ): 
                            echo '</div>';
                        endif;
                    } else {
                        echo 'NOT CONNECT';
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <div class="places">
        <div class="container">
            <div class="flex-title">
                <h2 class="title-line">Places</h2>
                <a href="">View More</a>
            </div>
            <div class="places-content">
                <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'  => array( 'post-places' ),
                        'order' => 'ASC', 
                        'orderby' => 'date',
                    );
                    // The Query
                    $get_post = new WP_Query( $args );
                    // The Loop?
                    if ( $get_post->have_posts() ) {
                        $post_outputs = [];
                        $counter = 0;
                        while ( $get_post->have_posts() ):
                            $get_post->the_post();
                            $counter++;
                            if($counter === 1 || $counter === 2 ):
                                echo '<div class="places_item">';
                            endif;
                            ?>
                                <div class="places-item-content">
                                    <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail');?>
                                    <div class="item-content">
                                        <h3 class="title__text"><?php echo get_the_title();?></h3>
                                        <?php if($counter === 1):
                                            echo '<div class="content">';
                                            echo get_the_content();
                                            echo '</div>';
                                        endif;  ?>
                                    </div>
                                </div>
                            <?php 
                            if($counter === 1 || $counter === 4 ): 
                                echo '</div>';
                            endif;
                        endwhile;
                        if($counter !== 1 || $counter !== 4 ): 
                            echo '</div>';
                        endif;
                    } else {
                        // no posts found
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
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
                <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'  => array( 'post-stay' ),
                        'order' => 'ASC', 
                        'orderby' => 'date',
                    );
                    // The Query
                    $get_post = new WP_Query( $args );
                    // The Loop?
                    if ( $get_post->have_posts() ) {
                        $post_outputs = [];
                        $counter = 0;
                        while ( $get_post->have_posts() ):
                            $get_post->the_post();
                            $counter++;
                            if($counter === 1 || $counter === 2 ):
                                echo '<div class="stay_item">';
                            endif;
                            ?>
                                <div class="stay-item-content">
                                    <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail');?>
                                    <div class="item-content">
                                        <h3 class="title__text"><?php echo get_the_title();?></h3>
                                        <?php if($counter === 1):
                                            echo '<div class="content">';
                                            echo get_the_content();
                                            echo '</div>';
                                        endif;  ?>
                                    </div>
                                </div>
                            <?php 
                            if($counter === 1 || $counter === 5 ): 
                                echo '</div>';
                            endif;
                        endwhile;
                        if($counter !== 1 || $counter !== 5 ): 
                            echo '</div>';
                        endif;
                    } else {
                        // no posts found
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
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
                <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'  => array( 'post-experience' ),
                        'order' => 'ASC', 
                        'orderby' => 'date',
                    );
                    // The Query
                    $get_post = new WP_Query( $args );
                    // The Loop?
                    if ( $get_post->have_posts() ) {
                        $post_outputs = [];
                        $counter = 0;
                        while ( $get_post->have_posts() ):
                            $get_post->the_post();
                            $counter++;
                            if($counter === 1 || $counter === 3):
                                echo '<div class="experience-item">';
                            endif;
                            ?>
                                <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail');?>
                                <h3 class="title__text"><?php echo get_the_title();?></h3>
                            <?php   
                            if($counter === 2 || $counter === 3 ): 
                                echo '</div>';
                            endif;
                        endwhile;
                        if($counter !== 2 || $counter !== 3 ): 
                            echo '</div>';
                        endif;
                    } else {
                        echo 'NOT CONNECT';
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
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
            <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'  => array( 'post-dine' ),
                        'order' => 'ASC', 
                        'orderby' => 'date',
                    );
                    // The Query
                    $get_post = new WP_Query( $args );
                    // The Loop?
                    if ( $get_post->have_posts() ) {
                        $post_outputs = [];
                        $counter = 0;
                        while ( $get_post->have_posts() ):
                            $get_post->the_post();
                            $counter++;
                            if($counter === 1 || $counter === 2 || $counter === 4):
                                echo '<div class="dine-item">';
                            endif;
                            ?>
                                <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail');?>
                                <h3 class="title__text"><?php echo get_the_title();?></h3>
                            <?php 
                            if($counter === 1):
                                echo '<div class="content">';
                                echo get_the_content();
                                echo '</div>';
                            endif;    
                            if($counter === 1 || $counter === 3 ): 
                                echo '</div>';
                            endif;
                        endwhile;
                        if($counter !== 2 || $counter !== 3 ): 
                            echo '</div>';
                        endif;
                    } else {
                        echo 'NOT CONNECT';
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
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
                <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'  => array( 'post_luxury' ),
                        'order' => 'ASC', 
                        'orderby' => 'date',
                    );
                    // The Query
                    $get_post = new WP_Query( $args );
                    // The Loop?
                    if ( $get_post->have_posts() ) {
                        $post_outputs = [];
                        $counter = 0;
                        while ( $get_post->have_posts() ):
                            $get_post->the_post();
                            $counter++;
                            if($counter === 1 || $counter === 2):
                                echo '<div class="luxury-item">';
                            endif;
                            ?>
                                <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail');?>
                                <h3 class="title__text"><?php echo get_the_title();?></h3>
                            <?php 
                            if($counter === 1):
                                echo '<div class="content">';
                                echo get_the_content();
                                echo '</div>';
                            endif;    
                            if($counter === 1 || $counter === 3 ): 
                                echo '</div>';
                            endif;
                        endwhile;
                        if($counter !== 1 || $counter !== 3 ): 
                            echo '</div>';
                        endif;
                    } else {
                        echo 'NOT CONNECT';
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
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
                <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'  => array( 'post-people' ),
                        'post__in' => array(187,189,191,193,195), 
                    );
                    // The Query
                    $get_post = new WP_Query( $args );
                    // The Loop?
                    if ( $get_post->have_posts() ) {
                        $post_outputs = [];
                        $counter = 0;
                        while ( $get_post->have_posts() ):
                            $get_post->the_post();
                            $counter++;
                            if($counter === 1 || $counter === 3 || $counter === 4):
                                echo '<div class="parent-item">';
                            endif;
                            ?>
                                <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail');?>
                                <h3 class="title__text"><?php echo get_the_title();?></h3>
                            <?php 
                            if($counter === 3):
                                echo '<div class="content">';
                                echo get_the_content();
                                echo '</div>';
                            endif;    
                            if($counter === 2 || $counter === 3 ): 
                                echo '</div>';
                            endif;
                        endwhile;
                        if($counter !== 2 && $counter !== 4):
                            echo '</div>';
                        endif;
                    } else {
                        // no posts found
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <div class="places lorem">
        <div class="container">
            <div class="flex-title">
                <h2 class="title-line">Lorem Ipsum</h2>
                <a href="">View More</a>
            </div>
            <div class="places-content">
                <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'  => array( 'post-lorem' ),
                        'order' => 'ASC', 
                        'orderby' => 'date',
                    );
                    // The Query
                    $get_post = new WP_Query( $args );
                    // The Loop?
                    if ( $get_post->have_posts() ) {
                        $post_outputs = [];
                        $counter = 0;
                        while ( $get_post->have_posts() ):
                            $get_post->the_post();
                            $counter++;
                            if($counter === 1 || $counter === 2 ):
                                echo '<div class="places_item">';
                            endif;
                            ?>
                                <div class="places-item-content">
                                    <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail');?>
                                    <div class="item-content">
                                        <h3 class="title__text"><?php echo get_the_title();?></h3>
                                        <?php if($counter === 1):
                                            echo '<div class="content">';
                                            echo get_the_content();
                                            echo '</div>';
                                        endif;  ?>
                                    </div>
                                </div>
                            <?php 
                            if($counter === 1 || $counter === 4 ): 
                                echo '</div>';
                            endif;
                        endwhile;
                        if($counter !== 1 || $counter !== 4 ): 
                            echo '</div>';
                        endif;
                    } else {
                        // no posts found
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</main>
<?php
    get_footer();

