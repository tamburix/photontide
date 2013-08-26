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
                    	<?php if (have_posts()) : ?>

 	 
      	
        <?php while (have_posts()) : the_post(); ?>
                         <article class="post-block">
                            <section class="post-image">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php
										if ( has_post_thumbnail() )
											the_post_thumbnail( 'single-post-thumbnail' );
										else
											echo '<img src="'.get_bloginfo('template_directory').'/images/thumb-default.jpg" style="width:206px; height:129px;" alt="" />';
									?></a>
                            </section>  
                            <header class="post-title">
                            	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_title(); ?></a></h2>
                            </header>
                            <section class="post-excerpt">
                            	<?php the_excerpt(); ?>
                            </section>
                        </article> 
                        <?php endwhile; ?> 
                    	<?php wp_pagenavi(); ?>
                    <?php else: ?> 
                
                      <h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>
					<?php endif; ?>
                        <section id="comments">
                        </section>
                        
                        <section id="comments">
                        </section>
                    </section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>