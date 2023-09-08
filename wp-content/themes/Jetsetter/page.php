<?php /* Template Name: CustomPage */ ?>

<?php get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
                while(have_posts()):
                    the_post();
                    get_template_part('template-part/content/content','page');
                    if( comments_open()|| get_comments_number()){
                        commetns_template();
                    }
                endwhile;    
            ?>
        </main>
    </div>
<?php
get_footer();

