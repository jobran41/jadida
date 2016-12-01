<?php get_header(); ?>
  <?php get_template_part('content', 'headertop'); ?>  
<div id="fullpage" class="jo">
	<div class="section " id="section0 section-0" data-uk-slideshow="{autoplay:'900s'}">
	     <?php 
                $args  = array(
                    'post_type' => 'slide',
                    'posts_per_page'=> -1
                );
                $the_query = new WP_Query( $args ); 

                ?>
                <div   class="uk-slidenav-position scene" id="scene" >
                <ul class="uk-slideshow uk-overlay-active uk-slideshow-fullscreen" >
                           <?php

                //ul slide
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
            
                //li slide   
            ?>
                <li>
                    <?php 
                        if(get_field('paralaximg')):// case a cocher
                        // ul mte3 paralax
                        ?>
                        <ul >
                        <?php
                        $i=0;
                        if( have_rows('repeaterimg') ):// repeater

                            while ( have_rows('repeaterimg') ) : the_row();  
                                // li
                        ?>
                            <li class="layer" data-depth="<?php echo $i*0.1.'0'?> ">
                                <?php $image = get_sub_field('image');
                                    if( !empty($image) ): ?>
                                        <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                <?php endif; ?>
                            </li>
                        <?php 
                        $i++;
                        endwhile;
                        endif; ?>
                   </ul>
                   <?php
                    endif;
                    ?>
            </li>

            <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                // /ul
            ?>
                 
               </ul>
            <a href="#" class="uk-slidenav uk-slidenav-contrast slidstylr slidenav-previous uk-hidden-small" data-uk-slideshow-item="previous"> <!-- <i class="uk-icon-angle-left"></i> -->
               <img src="<?php  bloginfo('template_url');  ?>/img/left.png" alt="" class="img-responsive">
             </a>
            <a href="#" class="uk-slidenav uk-slidenav-contrast slidstyll slidenav-next uk-hidden-small" data-uk-slideshow-item="next"><!-- <i class="uk-icon-angle-right"></i> -->
                <img src="<?php  bloginfo('template_url');  ?>/img/right.png" alt="" class="img-responsive">
            </a>
          
        </div>
		<!-- <div class="bgbottom"></div> -->
	</div>
	<div class="section second" id="section1">
			<div id="bgpres1" class="clearfix">
                            <!--<h3 id="bigtitle" class="titlebig quisomme is-animated">
                                Qui  <span class="green">sommes</span> <span class="red"> nous?</span> 
                            </h3>-->
                            <ul class="scene2" id="scene2">
                                <li class="layer" data-depth="0.10">
                                        <img  src="http://streamerzweb.com/jadidawp2/wp-content/uploads/2016/11/layer1.png"  />
                                </li>
                                <li class="layer" data-depth="0.20">
                                        <img  src="http://streamerzweb.com/jadidawp2/wp-content/uploads/2016/11/layer2-1.png"  />
                                </li>
                                <li class="layer" data-depth="0.30">
                                        <img  src="http://streamerzweb.com/jadidawp2/wp-content/uploads/2016/11/layer3-1.png"  />
                                </li>
                                <li class="layer" data-depth="0.40">
                                        <img  src="http://streamerzweb.com/jadidawp2/wp-content/uploads/2016/11/layer6.png"  />
                                </li>
                            </ul>
				
	        </div>
	        <div id="bgpres2" class="clearfix">
                    <div class="overfl">
	            <?php 
				$args=array("post_type"=>"page","p"=>174);
				query_posts( $args );
				while ( have_posts() ) : the_post();
				?>

				<?php echo get_the_content();?>
						
				<?php endwhile; wp_reset_query(); ?>
                    
                    <?php 
				$args=array("post_type"=>"page","p"=>175);
				query_posts( $args );
				while ( have_posts() ) : the_post();
				?>

				<?php echo get_the_content();?>
						
				<?php endwhile; wp_reset_query(); ?>
                    </div>     
	        </div> 
			
			<div class="bgbottom"></div>
	</div>
	
	<div class="section third" id="section2"> 
		<div id="bgchart1" class="clearfix " > 
            <h3 id="bigtitle" class="titlebig is-animated"><i class="uk-icon-quote-left  " aria-hidden="true"></i> 
            Charte <br> <span class="green">de </span> <br> <span class="red">qualit&eacute;</span> 
            <i class="uk-icon-quote-right  " aria-hidden="true"></i></h3>
        </div>
        <div id="bgchart2" class="clearfix">
            
            <?php 
				$args=array("post_type"=>"page","p"=>177);
				query_posts( $args );
				while ( have_posts() ) : the_post();
				?>

				<?php echo get_the_content();?>
						
			<?php endwhile; wp_reset_query(); ?>
            
            
                <div class="row modalchart" >
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2 is-animated__single">
                        <a class="modaliso" href="<?php  bloginfo('template_url');  ?>/img/chart/iso.png" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}" title="iso1">
                            <img src="<?php  bloginfo('template_url');  ?>/img/chart/iso.png"  alt="">
                        </a>
                    </div>
                    <div class="col-lg-2 is-animated__single">
                        <a class="modaliso" href="<?php  bloginfo('template_url');  ?>/img/chart/iso2.png" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}" title="iso2">
                            <img src="<?php  bloginfo('template_url');  ?>/img/chart/iso2.png"  alt="">
                        </a>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
        </div>
        <div class="bgbottom"></div>
	</div>
	<div class="section fourth" id="section3">
	    <div id="bghistorique" class="clearfix">
                
                <div class="uk-grid uk-grid-collapse margtophist">
                    <div class="uk-width-2-10 is-animated"> 
                        <?php 
			$args=array("post_type"=>"page","p"=>180);
			query_posts( $args );
			while ( have_posts() ) : the_post();
			?>

			<?php echo get_the_content();?>
					
		<?php endwhile; wp_reset_query(); ?>
                        
                    </div>
                    <div class="uk-width-8-10" >
                        <div id="axe" class="clearfix">
                            <img id="jadidachifre" src="<?php  bloginfo('template_url');  ?>/img/historique/jadidachifre.png" class="image" />
                            <div class="uk-grid uk-grid-collapse" data-uk-check-display data-uk-scrollspy="{cls:'uk-animation-slide-right', target:'.groupetimelinehist', delay:300, repeat:true}">
                                <div class="uk-width-1-10 is-animated__single">
                                    <div class="groupetimelinehist groupetimelinehist1">
                                        <a><span class="texteventhist" >Développement Moutarde Jadida</span></a>
                                        <span class="datehist" >2016</span>
                                        <img class="img-responsive"  src="<?php  bloginfo('template_url');  ?>/img/historique/moutard.png" class="image" />
                                    </div>  
                                </div>
                                <div class="uk-width-1-10 is-animated__single">
                                    <div class="groupetimelinehist groupetimelinehist2">
                                        <a><span class="texteventhist" >Développement <br>mayonnaiseau goût defromage</span></a>
                                        <span class="datehist" >2015</span>
                                        <img class="img-responsive"  src="<?php  bloginfo('template_url');  ?>/img/historique/mayonaisrouge.png" class="image" />
                                    </div>  
                                </div>
                                <div class="uk-width-1-10 is-animated__single"> 
                                    <div class="groupetimelinehist groupetimelinehist3">
                                        <a><span class="texteventhist" >Développement margarine Jadida à l’Huile d’olive</span></a> 
                                        <span class="datehist" >2012</span>
                                        <img class="img-responsive"  src="<?php  bloginfo('template_url');  ?>/img/historique/margarinvert.png" class="image" />
                                    </div>  
                                </div>
                                <div class="uk-width-1-10 is-animated__single">
                                    <div class="groupetimelinehist groupetimelinehist4">
                                        <a><span class="texteventhist" >Développement mayonnaise Jadida</span></a> 
                                        <span class="datehist" >2011</span>
                                        <img class="img-responsive" width="65%" style="margin: 0 auto;" src="<?php  bloginfo('template_url');  ?>/img/historique/mayonais.png" class="image" />
                                    </div>  
                                </div>
                                <div class="uk-width-1-10 is-animated__single">
                                    <div class="groupetimelinehist groupetimelinehist5">
                                      <a><span class="texteventhist" >Développement gamme Huile</span></a>   
                                        <span class="datehist" >2009</span>
                                        <img class="img-responsive"  src="<?php  bloginfo('template_url');  ?>/img/historique/huil.png" class="image" />
                                    </div>  
                                </div>
                                <div class="uk-width-1-10 is-animated__single">
                                    <div class="groupetimelinehist groupetimelinehist6">
                                     <a> <span class="texteventhist" >Développement margarineOmega 3</span></a>   
                                        <span class="datehist" >2005</span>
                                        <img class="img-responsive"  src="<?php  bloginfo('template_url');  ?>/img/historique/margarineomega.png" class="image" />
                                    </div>  
                                </div>
                                <div class="uk-width-1-10 is-animated__single">
                                    <div class="groupetimelinehist groupetimelinehist7">
                                     <a><span class="texteventhist" >Développement gammemargarine Jadida</span></a>    
                                        <span class="datehist" >1987</span>
                                        <img class="img-responsive"  src="<?php  bloginfo('template_url');  ?>/img/historique/margarine.png" class="image" />
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            <div class="bgbottom"></div>
	</div>
	<div class="section" id="section4">
            <div id="bgcontact11" class="clearfix">
                <div class="container  contactt">
                    <div class="overcontact">
                        <div class="uk-grid uk-grid-collapse ">
                            <div class="uk-width-1-2"> 
                                <h4 class="titletop" > 
                                Pour toutes vos suggestions d'amélioration<br> n'hésitez pas à nous contacter :
                                </h4>
                                <div class="textcontact boderbottom" > <span> Adresse:</span> Route du Bac. Z-I Rades. 2040. Rades. Tunisie</div>
                                <div class="textcontact bordertopbottom" > <span> Email:</span>  info@medoil.com.tn</div>
                                <div class="textcontact bordertopbottom" > <span>Fax: </span> + 216 71 449 454</div>
                                <div class="textcontact  bordertopbottom"  ><span>Tel: </span> + 216 70 020 580 / + 216 70 020 581</div>
                                <div class="numvert textcontact bordertop">
                                    <img src="<?php  bloginfo('template_url');  ?>/img/numvert.png" alt="" class="img-responsive" width="30%">
                                </div>
                            </div>
                        
                            <div class="uk-width-1-2">
                                <h3 class="titleform">Contactez-nous</h3>
                                <?php  
                                 echo do_shortcode('[contact-form-7 id="333" title="Formulaire de contact 2"]');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
</div>
<?php get_footer(); ?>