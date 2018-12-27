<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StartupWeb
 */

?>

</div><!-- #content -->


<footer>
        <div class="footer_wraper">
            <div>
                <div class="footer_leftContent">
                    <div class="logo">
                        <img src='<?php echo get_template_directory_uri()?>/assets/img/logo.png' alt="Waxom logo">
                        <h2>
                            <?php bloginfo('name');?>
                        </h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci suscipit lobortis claritatem.
                    </p>
                    <div class="read_more_footer">
                        <span>Read More</span><img class="arrow_footer" role="button" src='<?php echo get_template_directory_uri()?>/assets/img/arrow_footer_rm.png'
                            alt="read more">
                    </div>
                </div>
            </div>
            
            <div>
                <div class="footer_centerContent">
                    <div class="titleContent">
                        <h2>
                            Recent Posts
                        </h2>
                    </div>
                    <?php dynamic_sidebar('smartslider_area_1'); ?>
                </div>
            </div>

            <div>
                <div class="footer_rightContent">
                    <div class="titleContent">
                        <h2>
                            Our Twitter
                        </h2>
                    </div>
                    <article class="twitter_first_post">
                        <h3>
                            <span class="tag">@waxom</span> Cum soluta nobis eleifend option congue nihil imperdiet
                            doming
                        </h3>
                        <p>
                            3 mins ago
                        </p>
                    </article>

                    <div class="footer_content_divider"></div>
                    <article class="twitter_second_post">
                        <h3>
                            Mirum est <span class="tag">#envato</span> notare quam littera gothica, quam nunc putamus
                            parum anteposuerit litterarum
                        </h3>
                        <p>
                            5 hours ago
                        </p>
                    </article>

                    <div class="footer_content_divider"></div>
                    <article class="twitter_third_post">
                        <h3>
                            Soluta nobis option <span class="link">bit.ly/1Hniso7</span>
                        </h3>
                        <p>
                            20 days ago
                        </p>
                    </article>
                </div>
            </div>

            <aside>
                <h2>
                    Dribbble Widget
                </h2>
                <div class="widget">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/widget_1.png' alt="Dribbble Widget first">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/widget_2.png' alt="Dribbble Widget second">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/widget_3.png' alt="Dribbble Widget third">
                    <img src='<?php echo get_template_directory_uri()?>/assets/img/widget_4.png' alt="Dribbble Widget fourth">
                </div>
            </aside>
        </div>
        <!-- /.footer_wraper -->

        <div class="footer_block">
            <div class="footer_bottom_wraper">
                <div class="footer_bottomContent_left">
                    Copyright©2015><a href="#">Waxom</a>&nbsp;|
                    <nav>
                        <ul role="menubar">
                            <li role="menuitem"><a href="#">Privacy Policy</a>&nbsp;|</li>
                            <li role="menuitem"><a href="#">FAQ</a>&nbsp;|</li>
                            <li role="menuitem"><a href="#">Support</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer_bottomContent_right">
                    <p>
                        Designed by <span>ThemeFire</span> | Front-end Dev <span>V Bundenkov</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

	
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
