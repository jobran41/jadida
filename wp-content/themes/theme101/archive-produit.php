<?php get_header(); ?>
<?php get_template_part('content', 'headertop'); ?>
<div class="bgproduit">
	<div class="container-fluid ">
	<div class="elemprod" style=" margin-left:-15px;margin-right:-15px;" >
		<div class="uk-grid uk-grid-collapse">
		    <div class="uk-width-8-10 bgcatalogue" style="">
			    <div class="uk-grid uk-grid-collapse  my-tab-content" data-href="#my-tab-content" > 	
				    <ul  class=" uk-width-1-3 bgmargarine  bgprodimg nav nav-tabs unstyled" >
						<li >
							<div class="">
								<a href="#grass" data-toggle="tab" >
								<img width="60%"height="40%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/grass.png" alt="" >
								<div class="bggrasstxt bgalltxtarticle">
							    	<h2 class="" id="txtprod"> Matière grasse <br> composée</h2>
			    	               
							    </div>
							   </a>
							</div>
						</li>
					</ul>
					<ul  class=" uk-width-1-3 bgprodimg bgmargarinepro nav nav-tabs unstyled" >	
				            <li class="active">	
						<div class="" >
				    	           <a  href="#margarine" data-toggle="tab" >
							<img width="60%"height="40%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/margarinee.png" alt="" >
                                                        <div class="bgmargarinetxt bgalltxtarticle">
                                                            <h2 class="padingtoptxt" id="txtprod">Margarine</h2>
                                                            
                                                        </div>
					            </a>
						</div>
					    </li>
					</ul>
					<ul  class=" uk-width-1-3  bgvetela  bgprodimg bggrass nav nav-tabs unstyled" >
			               <li>
							<div class="">
								<a  href="#margarinepro" data-toggle="tab">
									<img width="60%"height="40%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/margarinepro.png" alt="" >
									<div class="bgmargarineprotxt bgalltxtarticle">
								    	<h2 class="" id="txtprod">Margarine <br> professionnelle</h2>
								    
								    </div>
							   </a>
							</div>
						</li>
					</ul>
				</div>
 				<div class="uk-grid uk-grid-collapse my-tab-content" data-href="#my-tab-content"> 	
				    <ul  class=" uk-width-1-3 bgvetela  bgprodimg nav nav-tabs unstyled" >
						<li>
                                                    <div class="">
                                                       <a href="#graise" data-toggle="tab">
                                                            <img width="38%"height="23%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/graisevegetal.png" alt="" >
                                                            <div class="bgvegetaltxt bgalltxtarticle">
                                                            <h2 class="" id="txtprod"> Graisse <br> végétale</h2>
                                                            </div>
                                                        </a>
                                                    </div>
						</li>
					</ul>
					<ul  class=" uk-width-1-3 bgprodimg bgmoutard nav nav-tabs unstyled" >	
				        <li class="active floatnone">	
							<div class="">
				    	        <a  href="#moutard" data-toggle="tab" >
									<img width="23%"height="13%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/moutard.png" alt="" >
									<div class="bgmoutardtxt bgalltxtarticle">
								    	<h2 class="padingtoptxt" id="txtprod">Moutarde
</h2>
									    	
								    </div>
					            </a>
							</div>
						</li>
					</ul>
					<ul  class=" uk-width-1-3  bgvetela  bgprodimg bgmayonaise nav nav-tabs unstyled" >
			            <li class="floatnone">
							<div class="">
								<a  href="#mayonaise" data-toggle="tab">
									<img width="25%"height="15%" class="img-responsive center-block" src="<?php  bloginfo('template_url')?>/img/produit/mayonaise.png" alt="" >
									<div class="bgmayonaisetxt bgalltxtarticle">
                                                                            <h2 class="padingtoptxt" id="txtprod">Mayonnaise </h2>
</h2>                                                                    
									    	
								    </div>
							   </a>
							</div>
						</li>
					</ul>
				</div>
		    </div>
		    <div class="uk-width-2-10 colorgreen my-tab-content" data-href="#my-tab-content" >
	            <ul  class="nav  nav-tabs unstyled bghuil " >
			         <li>
				        <div class=""  >
					    	<a href="#huil" data-toggle="tab">
						    	<img width="220px"height="300px" class="img-responsive center-block" src="<?php   bloginfo('template_url')?>/img/produit/huil.png" alt="" >
						    	
					        </a>
						</div>
                                            
				    </li>
				</ul>
                        <div class="bgdesc ">
						    		<h2 id="txtprod">
			                     	    <?php $term = get_term( '2', 'type' ); 
										echo $term->name;?>
	                                                     </h2>
	                                
						    	</div>
		    </div>
		</div>
	</div>
</div>
<div class="don"></div>
<div class="prodbg">
	<div class="container" style=""> 
		<div id="my-tab-content" class="tab-content">
		<div class="tab-pane " id="mayonaise">
		   <!--<h1>Mayonnaise</h1>-->
                       <div class="contenairehuil" ></div>
                       <div data-uk-slideset="{medium: 2, animation: 'slide-bottom'}"> 
                        <?php
                        /*$parents = propost(461);
                        foreach ($parents as $parent) {
                            echo $parent[0].'<br>';
                            echo $parent[1].'<br>';
                        }
                        foreach ($parents as $parent) {
                            $fils=parampost($parent[1]);
                            foreach ($fils as $fil) {
                                echo $parent[1].'<br>';
                                echo $fil.'<br>'; 
                            }
                        }*/
                        //$mayonaisepost = propost(461);    
                        $parents = propost(461);
                        echo '<ul id="mayonaiseid" class="uk-subnav  stylenav uk-subnav-pill">';  
                        foreach ( $parents as $parent ) {
                            echo ' <li data-uk-filter='.$parent[1].'><a>'.$parent[0].'</a></li>'; 
                         }
                         ?>
                       </ul>
                    <div data-uk-slideset"{controls: '#mayonaiseid'}"> 
                        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4"> 
                           <?php 
                           foreach ($parents as $parent) {   
                               $fils=parampost($parent[1]);
                                foreach ($fils as $fil) {
                                echo ' <li data-uk-filter='.$parent[1].'>' 
                                   . '<a class="opensection"  href="#'.$fil[2].'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$fil[2].'" class=" contenumodal">
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$fil[0].'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$fil[3].'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';  
                                     ;
                                } 
                             }
                           ?> 
                        </ul> 
                         <a href="#" class="uk-slidenav uk-slidenav-previous stylpprev" data-uk-slideset-item="previous"></a>
                         <a href="#" class="uk-slidenav uk-slidenav-next  stylpnext" data-uk-slideset-item="next"></a>
                    </div>
                </div>   
                </div>
        <div class="tab-pane " id="moutard"> 
            <!--<h1>moutarde</h1> -->
            <div class="contenairehuil" ></div>
            <div data-uk-slideset="{medium: 3, animation: 'slide-bottom'}">
                        <?php
                        $parents = propost(481);    
                        echo '<ul id="moutarde22" class="uk-subnav  stylenav uk-subnav-pill">';  
                        foreach ( $parents as $parent ) {
                            echo ' <li data-uk-filter='.$parent[1].'><a>'.$parent[0].'</a></li>'; 
                         }
                         //echo '<li data-uk-filter="1"><a>jooo</a></li>'; 
                         ?>
                       </ul>
                    <div data-uk-slideset"{controls: '#moutarde22'}">   
                        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4"> 
                           <?php
                           foreach ($parents as $parent) { 
                               //echo '<pre>';print_r($parent);echo '<pre>'; 
                               $fils=parampost($parent[1]);
                               //print_r($fils); 
                                foreach ($fils as $fil) {
                                echo ' <li data-uk-filter='.$parent[1].'>' 
                                   . '<a class="opensection"  href="#'.$fil[2].'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$fil[2].'" class=" contenumodal">
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$fil[0].'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$fil[3].'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';  
                                } 
                             }
                           ?> 
                        </ul>
                    </div> 
                </div> 
            
           
        </div>
        <div class="tab-pane " id="graise">
          <!-- <h1 class="titleslidprod">Graisse végétale
</h1>-->
          <div class="contenairehuil" ></div>
            <div data-uk-slideset="{medium: 3, animation: 'slide-bottom'}">
                        <?php
                        $parents = propost(456);    
                        echo '<ul id="graisevegetal" class="uk-subnav  stylenav uk-subnav-pill">';  
                        foreach ( $parents as $parent ) {
                            echo ' <li data-uk-filter='.$parent[1].'><a>'.$parent[0].'</a></li>'; 
                         }
                         ?>
                       </ul>
                    <div data-uk-slideset"{controls: '#graisevegetal'}">  
                        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4"> 
                           <?php 
                           foreach ($parents as $parent) {   
                               $fils=parampost($parent[1]);
                                foreach ($fils as $fil) {
                                echo ' <li data-uk-filter='.$parent[1].'>' 
                                   . '<a class="opensection"  href="#'.$fil[2].'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$fil[2].'" class=" contenumodal">
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$fil[0].'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$fil[3].'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';  
                                     ;
                                } 
                             }
                           ?> 
                        </ul>
                    </div>
                </div> 
        </div>	
        <div class="tab-pane" id="margarinepro">
            <!--<h1 class="titleslidprod">Margarine  professionnelle</h1> -->
                       <div class="contenairehuil" ></div> 
           <div data-uk-slideset="{medium: 4,  animation: 'slide-bottom'}">
                        <?php
                        $parents = propost(440);
                        $i=0;
                        echo '<ul id="margarinetable" class="uk-subnav  stylenav uk-subnav-pill">';  
                        //echo  '<li data-uk-filter=""><a></a></li>';  
                        foreach ( $parents as $parent ) {
                            echo ' <li class="parent'.$i.'" data-uk-filter='.$parent[1].'><a>'.$parent[0].'</a></li>'; 
                         $i++;
                        } 
                         $childsnotemtprt = childlevl(443); 
                          $i=0;
                         foreach ($childsnotemtprt as $kparent) {
                             //'<pre>';  print_r($kparent); echo '</pre>';  
                             echo ' <li class=" fils morechild'.$i.'  fils'.$i.'" data-uk-filter='.$kparent[0].'><a>'.$kparent[1].'</a></li>';
                             $i++;
                         }
                          $childss=childlevl(448); 
                          $i=0;
                         foreach ($childss as $kparent) {   
                             //'<pre>';  print_r($kparent); echo '</pre>';  
                             echo ' <li class="sfils  sfils'.$i.'" data-uk-filter='.$kparent[0].'><a>'.$kparent[1].'</a></li>';
                             $i++;
                         }
                         ?> 
                       </ul>  
                    <div data-uk-slideset"{controls: '#margarinetable'}">  
                        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4"> 
                           <?php 
                           foreach ($parents as $parent) {   
                               $fils=parampost($parent[1]);
                                foreach ($fils as $fil) {
                                echo ' <li data-uk-filter='.$parent[1].'>' 
                                   . '<a class="opensection"  href="#'.$fil[2].'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$fil[2].'" class=" contenumodal">
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$fil[0].'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$fil[3].'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';  
                                     ;
                                     $childsnotemt = childrea($fil[2]);
                                     if(empty($childsnotemt)){ 
                                        //echo 'empty <br>';
                                     }else{ 
                                       foreach($childsnotemt as $child) { 
                                           $specid = $child->ID;
                                         $name= $child->post_title;
                                          $value = get_field('image', $specid );
                                           echo ' <li data-uk-filter='.$fil[2].'>' 
                                   . '<a class="opensection"  href="#'.$specid.'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$value.' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$specid.'" class=" contenumodal"> 
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$name.'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$name.'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$value.' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';
                                           
                                         
                                          //echo $name; 
                                         // echo '<img src="'.$value.'" >';
                                       }
                                     }
                                     $childsempt = childrea($fil[2]); 
                                    if(!empty($childsempt)){
                                        //echo 'havent child<br>';
                                    }else{ 
                                      //echo '<pre>';  print_r($childsempt); echo '</pre>';
                                         $specid = $child->ID;
                                         $name= $child->post_title;
                                          $value = get_field('image', $specid ); 
                                         echo ' <li data-uk-filter='.$fil[2].'>' 
                                   . '<a class="opensection"  href="#'.$specid.'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$value.' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$specid.'" class=" contenumodal"> 
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$name.'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$name.'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$value.' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';
                                    }
                                } 
                             }
                           ?> 
                        </ul>
                         <a href="#" class="uk-slidenav uk-slidenav-previous stylpprev" data-uk-slideset-item="previous"></a>
                         <a href="#" class="uk-slidenav uk-slidenav-next stylpnext" data-uk-slideset-item="next"></a>
                    </div>
                </div> 
        
        </div>
        <div class="tab-pane" id="margarine">
           <!--<h1 class="titleslidprod">margarine</h1>-->
           <div class="contenairehuil" ></div>
           <div data-uk-slideset="{medium: 3, animation: 'slide-bottom'}">
                        <?php
                        $parents = propost(433);  
                        $i=0;
                        echo '<ul id="margarinetable" class="uk-subnav  stylenav uk-subnav-pill">';  
                        foreach ( $parents as $parent ) {
                            echo ' <li class="parent'.$i.'" data-uk-filter='.$parent[1].'><a>'.$parent[0].'</a></li>'; 
                         $i++;
                        } 
                         $childsnotemtprt = childlevl(434); 
                          $i=0;
                         foreach ($childsnotemtprt as $kparent) {
                             //'<pre>';  print_r($kparent); echo '</pre>';  
                             echo ' <li class=" fils fils'.$i.'" data-uk-filter='.$kparent[0].'><a>'.$kparent[1].'</a></li>';
                             $i++;
                         }
                         ?> 
                       </ul>  
                    <div data-uk-slideset"{controls: '#margarinetable'}">  
                        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4"> 
                           <?php 
                           foreach ($parents as $parent) {   
                               $fils=parampost($parent[1]);
                                foreach ($fils as $fil) {
                                echo ' <li data-uk-filter='.$parent[1].'>' 
                                   . '<a class="opensection"  href="#'.$fil[2].'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$fil[2].'" class=" contenumodal">
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$fil[0].'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$fil[3].'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';  
                                     ;
                                     $childsnotemt = childrea($fil[2]);
                                     if(empty($childsnotemt)){ 
                                        //echo 'empty <br>';
                                     }else{ 
                                       foreach($childsnotemt as $child) { 
                                           $specid = $child->ID;
                                         $name= $child->post_title;
                                          $value = get_field('image', $specid );
                                           echo ' <li data-uk-filter='.$fil[2].'>' 
                                   . '<a class="opensection"  href="#'.$specid.'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$value.' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$specid.'" class=" contenumodal"> 
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$name.'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$name.'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$value.' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';
                                           
                                         
                                          //echo $name; 
                                         // echo '<img src="'.$value.'" >';
                                       }
                                     }
                                     $childsempt = childrea($fil[2]); 
                                    if(!empty($childsempt)){
                                        //echo 'havent child<br>';
                                    }else{ 
                                      //echo '<pre>';  print_r($childsempt); echo '</pre>';
                                         $specid = $child->ID;
                                         $name= $child->post_title;
                                          $value = get_field('image', $specid ); 
                                         echo ' <li data-uk-filter='.$fil[2].'>' 
                                   . '<a class="opensection"  href="#'.$specid.'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$value.' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$specid.'" class=" contenumodal"> 
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$name.'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$name.'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$value.' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';
                                    }
                                } 
                             }
                           ?> 
                        </ul>
                         <a href="#" class="uk-slidenav uk-slidenav-previous stylpprev" data-uk-slideset-item="previous"></a>
                         <a href="#" class="uk-slidenav uk-slidenav-next stylpnext" data-uk-slideset-item="next"></a>
                    </div>
                </div> 
            </div>
                    
               <!-- start tab huil -->
        <div class="tab-pane active" id="huil">
            <div class="contenairehuil" ></div>
            <div data-uk-slideset="{medium: 4, animation: 'slide-bottom'}">
                
                        <?php
                        /*$parents = propost(461);
                        foreach ($parents as $parent) {
                            echo $parent[0].'<br>';
                            echo $parent[1].'<br>';
                        }
                        foreach ($parents as $parent) {
                            $fils=parampost($parent[1]);
                            foreach ($fils as $fil) {
                                echo $parent[1].'<br>';
                                echo $fil.'<br>'; 
                            }
                        }*/
                        //$mayonaisepost = propost(461);    
                        $parents = propost(460);  
                        echo '<ul id="huilid" class="uk-subnav  stylenav uk-subnav-pill">';  
                        //echo  '<li data-uk-filter=""><a></a></li>'; 
                        foreach ( $parents as $parent ) {
                            echo ' <li data-uk-filter='.$parent[1].'><a>'.$parent[0].'</a></li>'; 
                         }
                         ?>
                       </ul>
                    <div data-uk-slideset"{controls: '#huilid'}"> 
                        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4 bgelemhuil">  
                           <?php 
                           foreach ($parents as $parent) {   
                               $fils=parampost($parent[1]);
                                foreach ($fils as $fil) {
                                echo ' <li data-uk-filter='.$parent[1].'>' 
                                   . '<a class="opensection"  href="#'.$fil[2].'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$fil[2].'" class=" contenumodal">
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$fil[0].'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$fil[3].'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';  
                                     ;
                                } 
                             }
                           ?> 
                        </ul>
                         <a href="#" class="uk-slidenav uk-slidenav-previous stylpprev" data-uk-slideset-item="previous"></a>
                         <a href="#" class="uk-slidenav uk-slidenav-next stylpnext" data-uk-slideset-item="next"></a>
                    </div>
                </div> 
            
        </div>
        <!-- end tab huil -->           
        

        <div class="tab-pane" id="grass">
        <!--<h1 class="titleslidprod"> Matièreeeeeeee grasse  composée</h1> -->
           <div class="contenairehuil" ></div>
            <div data-uk-slideset="{medium: 3, animation: 'slide-bottom'}">
                        <?php
                        $parents = propost(454);    
                        echo '<ul id="matiergrass" class="uk-subnav  stylenav uk-subnav-pill">';  
                        foreach ( $parents as $parent ) {
                            echo ' <li data-uk-filter='.$parent[1].'><a>'.$parent[0].'</a></li>'; 
                         }
                         ?>
                       </ul>
                    <div data-uk-slideset"{controls: '#matiergrass'}">   
                        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-4"> 
                           <?php 
                           foreach ($parents as $parent) {   
                               $fils=parampost($parent[1]);
                                foreach ($fils as $fil) {
                                echo ' <li data-uk-filter='.$parent[1].'>'  
                                   . '<a class="opensection"  href="#'.$fil[2].'"><div class="cadre2 text-center"><img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" /></div>'
                                        . '<div style="display: none; overflow-y: auto;" aria-hidden="false" id="echo  $postid = "#'.$fil[2].'" class=" contenumodal">
                                                <div class=" posmodal">
                                                 <button type="button" class="uk-modal-close uk-close huilclose2"></button>
                                                    <div class="uk-grid">
                                                     <div class="uk-width-8-10">
                                                       <div class="uk-modal-header">
                                                           <h3 class="modaltitle"> 
                                                             '.$fil[0].'
                                                           </h3>
                                                       </div>

                                                        <p class="txtpoup">
                                                               '.$fil[3].'
                                                       </p>
                                                     </div>
                                                                                      <div class="uk-width-2-10">
                                                       <div class="imgart">
                                                             <img class="img-responsive center-block" src='.$fil[1].' alt=""  height="300" width="200" />
                                                       </div>
                                                     </div>
                                                    </div>
                                               </div>
                                           </div>'
                                        . '</a></li>';  
                                     ;
                                } 
                             }
                           ?> 
                        </ul>
                    </div>
                </div> 
        </div>
    </div>
</div>
    
    <div class="totop">
	<a href="#" data-uk-smooth-scroll><i class="uk-icon-toggle-up"></i></a>
	</div>
    
</div>



	
	
</div>

<?php get_footer(); ?>