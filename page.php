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
                         	<header>
                                	<h2 class="post-title clearfix"><?php the_title(); ?></h2>
                            </header>
                            <section class="entry">
                                	
                                    <div class="column-<?php echo get_post_meta($post->ID, "columns", true); ?>">
                                    <?php the_content(); ?>
								</div>
                            </section>  
                            <footer class="post-share">
                            <div style="float: left;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
                            <div style="float: left;"><script src="http://www.stumbleupon.com/hostedbadge.php?s=1"></script></div>
                            <?php if (function_exists('fbshare_manual')) echo fbshare_manual(); ?>                           
                            </footer>
                        </article>
                        <?php endwhile; endif; ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                        <section id="comments">
                        </section>
                        
                        <section id="comments">
                        </section>
                    </section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>