
<?php
/*
Template Name: Home
*/
?>

<?php
get_header();
?>



    <main>
        <div class="our_solution_block">
            <div class="our_solution">
                <!--Цикл для вывода Solution-->
            <?php
					$query = new WP_Query('cat=9'); 
					if( $query->have_posts() ){
						while( $query->have_posts() ){ $query->the_post();
						?>
                    <section>
                    <?php echo get_the_post_thumbnail( $id, 'thumbnail'); ?>
						<h2><?php the_title();?></h2>
						<p><?php the_content(); ?></p>
                        <div class="liner"></div>
                    </section> 
						<?php
						}
						wp_reset_postdata(); 
					} 
					else echo 'Записей нет.';
				?>
            </div>
        </div>

        <div>
            <div class="realization_wraper">
                <article class="realization_main">
                    <h2>
                        Waxom is Realization of your Ideas.
                    </h2>

                    <p>
                        Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                        etiam<br>
                        processus dynamicus, qui sequitur mutationem consuetudium.
                    </p>
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/realization_bg.png' alt="Realization Waxom">
                </article>

                <article class="purchase_wraper_block">
                    <div class="purchase_wraper">
                        <div class="purchase_wraper_left">
                            <h2>
                                <span>Waxom&nbsp;</span>Multipurpose WordPress Theme
                            </h2>
                            <p>
                                Don't Forget to Rate the Template. Thanks so much!
                            </p>
                        </div>
                        <div class="purchase_wraper_right">
                            <button class="purchase_now_btn">Purchase Now</button>
                        </div>
                    </div>
                </article>
            </div>
            <!-- /.realization_wraper -->
        </div>

        <main>
            <div class="our_projects">
                <article>
                    <h2>
                        Our Latest Projects.
                    </h2>
                    <p>
                        Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                        etiam<br>
                        processus dynamicus, qui sequitur mutationem consuetudium.
                    </p>
                </article>

                <nav class="our_projects_nav">
                    <?php
                        wp_nav_menu( array(
                        'theme_location' => 'SideMenu',
                        'menu_id'        => 'SideMenu',
                        'items_wrap'      => '<ul id="%1$s" role="menubar" class="%2$s">%3$s</ul>',
                        ) );
                    ?>
                </nav>

                <div>
                    <div class="our_projects_prev_wraper">
                   <!--OurProject loop-->
                    <?php
                        $query = new WP_Query('cat=11'); 
                        if( $query->have_posts() ){
                            while( $query->have_posts() ){ $query->the_post();
                            ?>
                        <div class="our_projects_prev_unit">
                        <?php echo get_the_post_thumbnail( $id, array(370,237), array('class' => 'our_projects_prev_img')); ?> <!--Set size preview img and add custom class-->
                            <div class="our_projects_prev_unit_text">
                            <img class="arrow_unit" role="button" src='<?php echo get_template_directory_uri()?>/assets/img/arrow_unit.png' alt="Arrow">
                                <div class="link_bar">
                                    <div class="link_icon"></div>
                                    <div class="lupa_icon" role="search"></div>
                                </div>
                                <h2><?php the_title();?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                            <?php
                            }
                            wp_reset_postdata(); 
                        } 
                        else echo 'Записей нет.';
                    ?>
                    </div>
                    <!-- /.our_projects_prev_wraper -->
                        

                </div>
                       <button class="load_more_btn">Load More</button>
            </div>
            <!-- /.our_projects -->       
        </main>

        <div class="video_content">
            <video preload="none">
                <source src="https://staging.coverr.co/s3/mp4/White-Keyboard.mp4" type="video/mp4">
            </video>
            <article>
                <div class="video_text_wraper">
                    <img class="play_btn" role="button" src='<?php echo get_template_directory_uri()?>/assets/img/video_logo.png' alt="Play button">
                    <h2>
                        Waxom Video Presentation
                    </h2>
                    <p>
                        Investigationes demonstraverunt lectores legere me lius quod ii legunt<br>
                        saepius, qui sequitur mutationem consuetudium.
                    </p>
                    <span>03:26</span>
                </div>
            </article>
        </div>

        <div class="mobile_content_block">
            <div class="mobile_content_wraper">
                <figure class="mobile_img">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/iPhone_in_hand.png' alt="Excellent for Mobile Devices">
                </figure>
                <article>
                    <h2>
                        Excellent for Mobile Devices.
                    </h2>
                    <p class="mobile_main_text">
                        Qisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis<br>
                        nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores<br>
                        legere me lius quod ii legunt saepius claritas. Eodem modo typi, qui nunc nobis<br>
                        videntur parum clari, fiant sollemnes in futurum.
                    </p>
                    <p class="mobile_second_text">
                        Nam liber tempor cum soluta nobis eleifend option;<br>
                        Option congue nihil imperdiet doming id quod mazim placerat facer;<br>
                        Eodem modo typi, qui nunc nobis videntur parum futurum;<br>
                        Investigationes demonstraverunt lectores
                    </p>
                </article>
            </div>
        </div>

        <div class="infographics_block">
            <div class="infographics_wraper" role="region">
                <section class="infographics_unit">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/infographics_icon_1.png' alt="Satisfied Clients">
                    <h2>
                        3587
                    </h2>
                    <p>
                        Satisfied Clients
                    </p>
                    <div class="divider"></div>
                </section>

                <section class="infographics_unit">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/infographics_icon_2.png' alt="Cups of coffee">
                    <h2>
                        207
                    </h2>
                    <p>
                        Cups of coffee
                    </p>
                    <div class="divider"></div>
                </section>

                <section class="infographics_unit">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/infographics_icon_3.png' alt="Blog posts">
                    <h2>
                        2500
                    </h2>
                    <p>
                        Blog posts
                    </p>
                    <div class="divider"></div>
                </section>

                <section class="infographics_unit">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/infographics_icon_4.png' alt="Likes">
                    <h2>
                        873
                    </h2>
                    <p>
                        Likes
                    </p>
                    <div class="divider"></div>
                </section>

                <section class="infographics_unit">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/infographics_icon_5.png' alt="We launched">
                    <h2>
                        900
                    </h2>
                    <p>
                        We launched
                    </p>
                    <div class="divider"></div>
                </section>
            </div>
        </div>

        <div>
            <div class="recent_posts_title">
                <section>
                    <h2>
                        Recent Posts.
                    </h2>
                    <p>
                        Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas
                        est etiam<br>
                        processus dynamicus, qui sequitur mutationem consuetudium.
                    </p>
                </section>
            </div>
            <!--OurProject loop-->

            <div class="recent_posts_wraper">
            <?php
                        $query = new WP_Query('cat=18'); 
                        if( $query->have_posts() ){
                            while( $query->have_posts() ){ $query->the_post();
                            ?>
                           <article>
                                <div class="recent_posts_unit">
                                    <figure>
                                        <div class="posts_date">
                                            <h3>
                                            <?php echo get_the_date('n'); ?>
                                            </h3>
                                            <span><?php echo get_the_date('M'); ?></span>
                                        </div>
                                        <?php echo get_the_post_thumbnail( $id, array(370,237)); ?> 
                                    
                                        <figcaption>
                                            <h3>
                                                <?php the_title();?>
                                            </h3>
                                                <p><?php the_content(); ?></p>
                                            <span>Read More</span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </article>
                            <?php
                            }
                            wp_reset_postdata(); 
                        } 
                        else echo 'Записей нет.';
                    ?>
            </div>

        <div>
            <div class="labels_wraper">
                <div class="labels_position">
                    <figure>
                        <img src='<?php echo get_template_directory_uri()?>/assets/img/label_1.png' alt="The Barber">
                    </figure>
                    <figure>
                        <img src='<?php echo get_template_directory_uri()?>/assets/img/label_2.png' alt="Delicious product">
                    </figure>
                    <figure>
                        <img src='<?php echo get_template_directory_uri()?>/assets/img/label_3.png' alt="We're Designers">
                    </figure>
                    <figure>
                        <img src='<?php echo get_template_directory_uri()?>/assets/img/label_4.png' alt="Cafe Royal">
                    </figure>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
<?php
get_footer();
