<?php get_header(); ?>

<section class="singlerecette" id="bgrecette">
	<!-- <div class="container-fluid"> -->
		<div class="uk-grid uk-grid-collapse">
		    <div class="uk-width-1-2">
		    	<div class="imgart">
					<?php $image = get_field('image');
				    if( !empty($image) ): ?>
				        <img class="img-responsive " src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
				    <?php endif; ?>
				    <div class="fontbottom" style=" display: none;">
				    	<div class="uk-grid uk-grid-collapse">
				    		<div class="uk-width-1-5">
				    			<p class="textfontbtl">
				    			<i class="uk-icon-user uk-icon-large"></i>
				    			 <?php the_field('personne'); ?>
				    			 </p>
				    		</div>
				    		<div class="uk-width-1-5">
				    			<p class="textfontbtl">
				    			<img  src="<?php  bloginfo('template_url');  ?>/img/recette/time.png">
				    			<?php the_field('time'); ?>
				    			</p>
				    		</div>
				    		<div class="uk-width-3-5">
				    			<div class="imgform">
			                    	 <?php $image = get_field('smallimage');
								    if( !empty($image) ): ?>
								        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
								    <?php endif; ?>
			                    </div>
				    		</div>
				    	</div>
				    </div>
				</div>
		    </div>
		    <div class="uk-width-1-2">
                        <div class="padrecette">
                           <?php  the_field('content'); ?>
                        </div>
		    </div>
		</div>
		</section>

<?php get_template_part('content', 'headertop'); ?>
<?php get_footer(); ?>