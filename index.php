<?php get_header(); ?>

<section id="focus">

            	<!-- wrapper for navigator elements -->

                <div class="navi"></div>

                

                

                

                <!-- "previous page" action -->

                <a class="prev browse left"></a>

                

                <!-- root element for scrollable -->

                <div class="scrollable" id=chained>   

                   

                   <!-- root element for the items -->

                   <div class="items">

                      <!-- Slide 1-->

                      <?php query_posts('cat=5&posts_per_page=5'); ?>

                   	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                      <div>

                      	 <div class="focus-text">

                         	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                            <?php the_excerpt(); ?>

                         </div>

                         <div class="focus-image">

                         <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, "fokus-image", true); ?>" width="560" height="310" /></a>

                         </div>                         

                      </div>

                      

                      <?php endwhile; ?>

                      <?php endif; ?>

                      <?php wp_reset_query(); ?>

                   </div>

                   

                </div>

                

                <!-- "next page" action -->

                <a class="next browse right"></a>



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



	<?php else : ?>



		<h2 class="center">Not Found</h2>

		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php get_search_form(); ?>



	<?php endif; ?>

                       

                    </section>

<?php get_sidebar(); ?>



<?php get_footer(); ?>