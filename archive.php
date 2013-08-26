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

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<!--<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>-->
        <?php	
  $this_category = get_category($cat);
  if (get_category_children($this_category->cat_ID) != "") {
    echo "<h3 class=cat-title>Kategorije</h3>";
    echo "<ul class=cat-list>";
    wp_list_categories('orderby=id&show_count=0&title_li=
&use_desc_for_title=1&child_of='.$this_category->cat_ID);
    echo "</ul>";
  }
?>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<!--<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>-->
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<!--<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>-->
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<!--<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>-->
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<!--<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>-->
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<!--<h2 class="pagetitle">Author Archive</h2>-->
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<!--<h2 class="pagetitle">Blog Archives</h2>-->
 	  <?php } ?>
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
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<p class='center'>Nema zapisa u izabranoj kateforiji</p>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<p>Sorry, but there aren't any posts with this date.</p>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<p class='center'>Sorry, but there aren't any posts by %s yet.</p>", $userdata->display_name);
		} else {
			echo("<p class='center'>No posts found.</p>");
		}
		get_search_form();

	endif;
?>
                    </section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>