 <?php get_header(); ?>

 <section id="breadcrumbs">

            	<?php

if(function_exists('bcn_display'))

{

    bcn_display();

}

?>

            </section>           
            <section id="page">

            	

                    <section id="content">

                    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                         <article class="post">

                         	<aside class="author-info">

                            	<span class="author-name">Author: <?php the_author(); ?></span>

                                <span class="author-date"><?php the_date('Y-m-d'); ?></span>

                            </aside>
									<section class="content-baner">
										
									</section>
                         	<header>

                                	<h2 class="post-title clearfix"><?php the_title(); ?></h2>

                            </header>

                            <section class="entry">

                                	<div class="excerpt">

                                    	<?php the_excerpt(); ?>

                                    </div>

                                    <?php $themeta = get_post_meta($post->ID, "article-image", TRUE);

									if($themeta != '') { 

									?>

                                    <div class="article-image">

                                    	<img src="<?php echo get_post_meta($post->ID, "article-image", true); ?>" width="720" height="300" alt="">

                                    </div>

                                    <?php } ?>

                                    <div class="column-<?php echo get_post_meta($post->ID, "columns", true); ?>">

                                    <?php the_content(); ?>

								</div>

                            </section>  

                            <footer class="post-share">
                                <section class="banner-ad">
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Pht Single article -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-4291799529188725"
     data-ad-slot="5714742883"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                      </section>

                            <div style="float: left;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>

                            <div style="float: left;"><script src="http://www.stumbleupon.com/hostedbadge.php?s=1"></script></div>
							<div style="float: left; margin-left: 5px;"><g:plusone size="medium"></g:plusone></div>
                            <?php //if (function_exists('fbshare_manual')) echo fbshare_manual(); ?>
							<div class="related-posts clearfix"><?php wp_related_posts(); ?></div>
                            </footer>

                        </article>

                        <?php endwhile; else: ?>



                                <p>Sorry, no posts matched your criteria.</p>

                        

                        <?php endif; ?>

                        <section id="comments">                        	

                            <?php if (function_exists('facebook_comments')) facebook_comments(); ?>

                        </section>

                                            

                    </section>

<?php get_sidebar(); ?>



<?php get_footer(); ?>