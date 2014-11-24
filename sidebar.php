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
    <section class="contest">
        <a href="http://www.carobnaknjiga.rs/princ-valijant-2"><img src="<?php bloginfo('template_directory'); ?>/images/pht_preporucuje_valijant.jpg" alt=""></a>
    </section>         
  	<section class="friends-banners">
  		<ul>        
        <li><iframe name="Joomag_embed_91fc7273-80e9-43b3-821f-69dcbaa98b59" style="width:220px;height:150px" width="220px" height="150px" hspace="0" vspace="0" frameborder="0" src="http://www.joomag.com/magazine/universal-cinema-/0786709001416300903?p=1&amp;e=1&amp;embedInfo=;image,%2F%2Fstatic.joomag.com%2Fponch%2Fflash%2Fgui%2Fthemes%2Fdefault%2Fbg.jpg,fill"></iframe></li>        
  		</ul>
  	</section>
  	  	
	   <section>
      <div class="g-page" data-width="220" data-href="//plus.google.com/101990028186074669001" data-rel="publisher"></div>
     </section>
	
	
</aside>