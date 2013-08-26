     
            </section>
            <footer id="footer">
                <div class="inside">
                	<section class="ft-box">
                    	<h3>Photon Tide</h3>
                        <ul>
                        	<li><a href="<?php bloginfo('url'); ?>/?page_id=2">O grupi</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=5">Uredništvo sajta</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=7">Misija i ciljevi</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=9">Kontakt</a></li>
                        </ul>
                    </section>
                    <section class="ft-box">
                    	<h3>Prijatelji</h3>
                        <ul><?php wp_list_bookmarks('categorize=&title_li='); ?></ul>
                    </section>
                    <section class="ft-box">
                    	<h3>Pratite nas</h3>
                        <ul>
                        	<li class="ft-fb"><a href="http://www.facebook.com/pages/Photon-Tide/132565616194">Facebook</a></li>
                            <li class="ft-tw"><a href="http://twitter.com/photontide">Twitter</a></li>
                            <li class="ft-yt"><a href="http://www.youtube.com/photontide">Youtube</a></li>                            
                        </ul>
                    </section>
                    <section class="ft-newsletter">
                    	<h3>Newsletter</h3>
                    	<!-- Begin MailChimp Signup Form -->
                        <!--[if IE]>
                        <style type="text/css" media="screen">
                            #mc_embed_signup fieldset {position: relative;}
                            #mc_embed_signup legend {position: absolute; top: -1em; left: .2em;}
                        </style>
                        <![endif]--> 
                        <!--[if IE 7]>
                        <style type="text/css" media="screen">
                            .mc-field-group {overflow:visible;}
                        </style>
                        <![endif]-->
                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
                        <script type="text/javascript" src="http://downloads.mailchimp.com/js/jquery.validate.js"></script>
                        <script type="text/javascript" src="http://downloads.mailchimp.com/js/jquery.form.js"></script>
                        
                        <div id="mc_embed_signup">
                        <form action="http://photontide.us2.list-manage.com/subscribe/post?u=c26bb66bc2e10e638a91153ab&amp;id=f44c0a80f8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" style="font: normal 100% Arial, sans-serif;font-size: 10px;">
                            <fieldset style="margin: .5em 0;color: #c8c8c8;text-align: left;">
                            
                        <div class="indicate-required" style="text-align: right;font-style: italic;overflow: hidden;color: #c8c8c8;margin: 0 9% 0 0;">* obavezno polje</div>
                        <div class="mc-field-group" style="clear: both;overflow: hidden;">
                        <label for="mce-EMAIL" style="display: block;margin: .3em 0;line-height: 1em;font-weight: bold;">Email adresa <strong class="note-required">*</strong>
                        </label>
                        <input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="margin-right: 1.5em;padding: .2em .3em;width: 90%;float: left;z-index: 999;">
                        </div>
                                <div id="mce-responses" style="float: left;top: -1.4em;padding: 0em .5em 0em .5em;overflow: hidden;width: 90%;margin: 0 5%;clear: both;">
                                    <div class="response" id="mce-error-response" style="display: none;margin: 1em 0;padding: 1em .5em .5em 0;font-weight: bold;float: left;top: -1.5em;z-index: 1;width: 80%;background: FBE3E4;color: #D12F19;"></div>
                                    <div class="response" id="mce-success-response" style="display: none;margin: 1em 0;padding: 1em .5em .5em 0;font-weight: bold;float: left;top: -1.5em;z-index: 1;width: 80%;background: #E3FBE4;color: #529214;"></div>
                                </div>
                                <div><input type="submit" value="Prijava" name="subscribe" id="mc-embedded-subscribe" class="btn" style="clear: both;width: auto;display: block;margin: 5px 0 0 5%;"></div>
                            </fieldset>	
                            <a href="#" id="mc_embed_close" class="mc_embed_close" style="display: none;">Zatvori</a>
                        </form>
                        </div>
                        <script type="text/javascript">
                        var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';var err_style = '';
                        try{
                            err_style = mc_custom_error_style;
                        } catch(e){
                            err_style = 'margin: 1em 0 0 0; padding: 1em 0.5em 0.5em 0.5em; background: ERROR_BGCOLOR none repeat scroll 0% 0%; font-weight: bold; float: left; z-index: 1; width: 80%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; color: ERROR_COLOR;';
                        }
                        var mce_jQuery = jQuery.noConflict();
                        mce_jQuery(document).ready( function($) {
                          var options = { errorClass: 'mce_inline_error', errorElement: 'div', errorStyle: err_style, onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
                          var mce_validator = mce_jQuery("#mc-embedded-subscribe-form").validate(options);
                          options = { url: 'http://photontide.us2.list-manage.com/subscribe/post-json?u=c26bb66bc2e10e638a91153ab&id=f44c0a80f8&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                                        beforeSubmit: function(){
                                            mce_jQuery('#mce_tmp_error_msg').remove();
                                            mce_jQuery('.datefield','#mc_embed_signup').each(
                                                function(){
                                                    var txt = 'filled';
                                                    var fields = new Array();
                                                    var i = 0;
                                                    mce_jQuery(':text', this).each(
                                                        function(){
                                                            fields[i] = this;
                                                            i++;
                                                        });
                                                    mce_jQuery(':hidden', this).each(
                                                        function(){
                                                            if ( fields[0].value=='MM' && fields[1].value=='DD' && fields[2].value=='YYYY' ){
                                                                this.value = '';
                                                            } else if ( fields[0].value=='' && fields[1].value=='' && fields[2].value=='' ){
                                                                this.value = '';
                                                            } else {
                                                                this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
                                                            }
                                                        });
                                                });
                                            return mce_validator.form();
                                        }, 
                                        success: mce_success_cb
                                    };
                          mce_jQuery('#mc-embedded-subscribe-form').ajaxForm(options);
                        
                        });
                        function mce_success_cb(resp){
                            mce_jQuery('#mce-success-response').hide();
                            mce_jQuery('#mce-error-response').hide();
                            if (resp.result=="success"){
                                mce_jQuery('#mce-'+resp.result+'-response').show();
                                mce_jQuery('#mce-'+resp.result+'-response').html(resp.msg);
                                mce_jQuery('#mc-embedded-subscribe-form').each(function(){
                                    this.reset();
                                });
                            } else {
                                var index = -1;
                                var msg;
                                try {
                                    var parts = resp.msg.split(' - ',2);
                                    if (parts[1]==undefined){
                                        msg = resp.msg;
                                    } else {
                                        i = parseInt(parts[0]);
                                        if (i.toString() == parts[0]){
                                            index = parts[0];
                                            msg = parts[1];
                                        } else {
                                            index = -1;
                                            msg = resp.msg;
                                        }
                                    }
                                } catch(e){
                                    index = -1;
                                    msg = resp.msg;
                                }
                                try{
                                    if (index== -1){
                                        mce_jQuery('#mce-'+resp.result+'-response').show();
                                        mce_jQuery('#mce-'+resp.result+'-response').html(msg);            
                                    } else {
                                        err_id = 'mce_tmp_error_msg';
                                        html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                                        
                                        var input_id = '#mc_embed_signup';
                                        var f = mce_jQuery(input_id);
                                        if (ftypes[index]=='address'){
                                            input_id = '#mce-'+fnames[index]+'-addr1';
                                            f = mce_jQuery(input_id).parent().parent().get(0);
                                        } else if (ftypes[index]=='date'){
                                            input_id = '#mce-'+fnames[index]+'-month';
                                            f = mce_jQuery(input_id).parent().parent().get(0);
                                        } else {
                                            input_id = '#mce-'+fnames[index];
                                            f = mce_jQuery().parent(input_id).get(0);
                                        }
                                        if (f){
                                            mce_jQuery(f).append(html);
                                            mce_jQuery(input_id).focus();
                                        } else {
                                            mce_jQuery('#mce-'+resp.result+'-response').show();
                                            mce_jQuery('#mce-'+resp.result+'-response').html(msg);
                                        }
                                    }
                                } catch(e){
                                    mce_jQuery('#mce-'+resp.result+'-response').show();
                                    mce_jQuery('#mce-'+resp.result+'-response').html(msg);
                                }
                            }
                        }
                        </script>
                        <!--End mc_embed_signup-->
                    </section>
                    <section class="copyright">
                    	<p>All artwork and content on this site is Copyright 2010. Photon Tide.</p>
                    </section>
                </div>
            </footer>			
			<section class="ft-friends-banners">				
				<ul>										
					<li><a href="http://proveramikrofona.com/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/provera-mikrofona.jpg" width="120" height="60" alt="Provera Mikrofona" ></a></li>
					<li><a href="http://domaciweb.com/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/domaciweb.jpg" width="120" height="60" alt="Domaci Web" ></a></li>					<li><a href="http://frenzyspark.com/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/frenzyspark.jpg" width="120" height="60" alt="FrenzySpark" ></a></li>
					<li><a href="http://www.megablog.rs/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/megablog.jpg" width="120" height="60" alt="MegaBlog" ></a></li>
					<li><a href="http://arc3d.rs/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/ARC.jpg" width="120" height="60" alt="Arc3D" ></a></li>
					<li><a href="http://www.filmske-radosti.com/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/filmske-radosti-web.jpg" width="120" height="60" alt="Filmske radosti" ></a></li>
					<li><a href="http://hiphop.iz.rs/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/hiphop-120x60.jpg" width="120" height="60" alt="Hip Hop strana Srbije" ></a></li>
					<li><a href="http://www.exxtreme3d.net/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/exxtreme3d.png" width="120" height="60" alt="Exxtreme 3D" ></a></li>
					<li><a href="http://siriusb.hangar7.hr/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/SiriusB_Banner_120x60.jpg" width="120" height="60" alt="Sirius B" ></a></li>
					<li><a href="http://inverzija.net/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/Inverzija_Banner_120x60.jpg" width="120" height="60" alt="Inverzija" ></a></li>
					<li><a href="http://battlefield-srbija.com/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/battlefield-srbija-120x60.jpg" width="120" height="60" alt="Battlefield Srbija" ></a></li>
                    <li><a href="http://www.filmodeer.com/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/filmodeer-120x60.jpg" width="120" height="60" alt="Filmodeer" ></a></li>
                    <li><a href="http://svemir.wordpress.com/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/svemir-120x60.png" width="120" height="60" alt="Svemir" ></a></li>
                    <li><a href="http://kendo-training.com/"><img src="<?php bloginfo("template_directory"); ?>/images/baneri/kendo_baner.jpg" width="120" height="60" alt="The Way of the Sword" ></a></li>
				</ul>			
			</section>
        </div>                
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
