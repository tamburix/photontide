<aside id="sidebar">                
    <section class="forum-box">
    	<header>
        	<a href="<?php bloginfo('url'); ?>/forum/"><img src="<?php bloginfo('template_directory'); ?>/images/forum-sidebar-header.png" width="220" height="73" alt="Forum"></a>
        </header>
        <section class="forum-box-list">
    				<!-- Forum RSS -->                        
    				<?php																	
    				require_once (ABSPATH . WPINC . '/rss.php');
    				$rss = @fetch_rss('http://www.photontide.org/forum/index.php/index.php?action=.xml;type=rss');
    				if ( isset($rss->items) && 0 != count($rss->items) ) {							
    				?>
    				<ul>
    				<?php
    				$rss->items = array_slice($rss->items, 0, 10);
    				foreach ($rss->items as $item ) {
    				?>
    				<li>
    				<a href='<?php echo wp_filter_kses($item['link']); ?>'>
    				<?php echo wp_specialchars($item['title']); ?>
    				</a>
    				</li>
    				<?php } ?>
    				</ul>
    				<?php } ?>									
        </section>
    </section>              
    <section class="facebook-box">
    	<header>
        	<img src="<?php bloginfo('template_directory'); ?>/images/facebook-sidebar-header.png" width="220" height="73" alt="Facebook">
        </header>
        <section style="margin-top: -5px;">
          <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FPhoton-Tide%2F132565616194&amp;width=220&amp;colorscheme=light&amp;connections=6&amp;stream=false&amp;header=false&amp;height=280" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:220px; height:280px; background:#FFFFFF;" allowTransparency="true"></iframe>
        </section>        
    </section>
    <section class="twitter-box">
    	<header>
        	<img src="<?php bloginfo('template_directory'); ?>/images/twitter-sidebar-header-nograin.png" width="220" height="73" alt="Twitter">
        </header>
        <section style="margin-top: -6px;">
        	<a class="twitter-timeline" href="https://twitter.com/PhotonTide" data-widget-id="353052617317945345" data-theme="dark">Tweets by @PhotonTide</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        </section>

    </section>              
  	<section class="friends-banners">
  		<ul>
        <li><div data-configid="4369260/2557560" style="width: 220px; height: 150px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script></li>      
  		</ul>
  	</section>
  	
  	<section class="sponsored-box">
  	<header>
  		<img src="<?php bloginfo('template_directory'); ?>/images/sponzorisani-clanci-header.png" width="220" height="73" alt="Twitter">
                </header>                            
  	<section class="sponsored-box-list">								
  	<ul>									
  		<li><a href="<?php bloginfo("url"); ?>/pet-najboljih-sf-kockarskih-scena/">Pet najboljih SF kockarskih scena</a></li>								
  	</ul>
  	</section>                        
	   <section>
      <div class="g-page" data-width="220" data-href="//plus.google.com/101990028186074669001" data-rel="publisher"></div>
     </section>
	
	<!--
	<section class="friends-banners">
		<ul>
			<li><a href="http://popboks.com/"><img src="<?php bloginfo("template_directory"); ?>/images/popboks.jpg" width="220" height="130" alt="Popboks" ></a></li>	
			<li><a href="http://proveramikrofona.com/"><img src="<?php bloginfo("template_directory"); ?>/images/pmikrofona_baner_220x130.jpg" width="220" height="130" alt="Provera Mikrofona" ></a></li>
			<li><a href="http://domaciweb.com/"><img src="<?php bloginfo("template_directory"); ?>/images/domaci_web.png" width="220" height="130" alt="Domaci Web" ></a></li>
			<li><a href="http://frenzyspark.com/"><img src="<?php bloginfo("template_directory"); ?>/images/fs_baner.jpg" width="220" height="130" alt="FrenzySpark" ></a></li>
			<li><a href="http://www.megablog.rs/"><img src="<?php bloginfo("template_directory"); ?>/images/mega_blog.jpg" width="220" height="130" alt="MegaBlog" ></a></li>
			<li><a href="http://arc3d.rs/"><img src="<?php bloginfo("template_directory"); ?>/images/arc_baner.jpg" width="220" height="130" alt="Arc3D" ></a></li>
		</ul>
	</section>
	-->
</aside>