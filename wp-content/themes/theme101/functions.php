<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
	require get_template_directory() . '/inc/script.php';
/*
	==========================================
	 Include Walker file
	==========================================
*/
require get_template_directory() . '/inc/walker.php';



// function load_external_jQuery() { // load external file  
//     wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery  
//     wp_enqueue_script('jquery2.2', get_stylesheet_directory_uri() . '/js/jquery-2.2.2.min.js', array(), '2.2.2', true);
//     wp_enqueue_script('jquery');
//     wp_register_script('blur', get_stylesheet_directory_uri() . '/js/jquery-1.12.2.min.js',array(), '1.12.0', true );
//     wp_enqueue_script('blur');
    
// }  
// add_action('wp_enqueue_scripts', 'load_external_jQuery');

/*
	==========================================
	 Activate menus
	==========================================
*/



function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	register_nav_menu('top', 'top Navigation');
	
}

add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5',array('search-form'));

/*
	==========================================
	 Sidebar function
	==========================================
*/
function awesome_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}
add_action('widgets_init','awesome_widget_setup');


/*
	==========================================
	 Head function
	==========================================
*/
function awesome_remove_version() {
	return '';
}
add_filter('the_generator', 'awesome_remove_version');

/*
	==========================================
	 Custom Post Type
	==========================================
*/
function awesome_custom_post_type (){
	
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio',$args);
}
add_action('init','awesome_custom_post_type');

function awesome_custom_taxonomies() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Fields',
		'singular_name' => 'Field',
		'search_items' => 'Search Fields',
		'all_items' => 'All Fields',
		'parent_item' => 'Parent Field',
		'parent_item_colon' => 'Parent Field:',
		'edit_item' => 'Edit Field',
		'update_item' => 'Update Field',
		'add_new_item' => 'Add New Work Field',
		'new_item_name' => 'New Field Name',
		'menu_name' => 'Fields'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'field' )
	);
	
	register_taxonomy('field', array('portfolio'), $args);
	
	//add new taxonomy NOT hierarchical
	
	register_taxonomy('software', 'portfolio', array(
		'label' => 'Software',
		'rewrite' => array( 'slug' => 'software' ),
		'hierarchical' => false
	) );
	
}

add_action( 'init' , 'awesome_custom_taxonomies' );

/*
	==========================================
	Custom Term Function
	==========================================
*/
function custom_field_excerpt() {
	global $post;
	$text = get_field('content',false,false);
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 10; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}
function awesome_get_terms( $postID, $term ){
	
	$terms_list = wp_get_post_terms($postID, $term); 
	$output = '';
					
	$i = 0;
	foreach( $terms_list as $term ){ $i++;
		if( $i > 1 ){ $output .= ', '; }
		$output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}
	
	return $output;
	
}

function propost($id){
        $options = array(
        'post_type' => 'produit',
        'posts_per_page' => -1,
        'post_parent' => $id,
         'orderby' => 'date'   
    );
   //$tab= array();
    $query = new WP_Query($options);
    // run the loop based on the query
    if ($query->have_posts()) {
         $tab = array();
             while ($query->have_posts()) : $query->the_post(); 
             $tab2=array();
                $tab2[] = get_the_title();
                $tab2[]=get_the_ID(); 
            $tab[]=$tab2;
            endwhile;
            wp_reset_postdata(); 
            
           // echo '<pre>' ; print_r($tab);  echo '<pre>';
           
        return $tab;
    }
}
function data(){ 

$a = "abc";
$b = "def";
$c = "ghi";

return array($a, $b, $c);
}

function parampost($types) { 

    $options = array(
        'post_type' => produit,
        'posts_per_page' => -1, 
        'post_parent' => $types,
    );
   // if(isset($_GET['token'])) echo '<pre>'.print_r($produits,true).'</pre>';
    $query = new WP_Query($options);
    // run the loop based on the query
    if ($query->have_posts()) {
        $tab=array();
       // global $post;
             while ($query->have_posts()) : $query->the_post();
            $tab2=array();
            $tab2[]= get_the_title();
            $tab2[]= get_field('image'); 
            $tab2[]=get_the_ID();
             $tab2[]=get_the_content();
            $tab[]=$tab2; 
            //echo '<pre>';  print_r($post); echo '</pre>'; 
           endwhile;
            wp_reset_postdata();
            
        return $tab;
    }
}

function getchild($idchild){

    $args = array(
    'post_type'      => produit,
    'posts_per_page' => -1,
    'post_parent'    => $idchild
 );
$parent = new WP_Query( $args );
if ( $parent->have_posts() ) :
    $tab=array();
     while ( $parent->have_posts() ) : $parent->the_post(); 
     $tab2=array();
     $tab2[]=get_the_ID();
     $tab2[]= get_the_title();
     $tab[]=$tab2; 
    endwhile; 
    endif; wp_reset_query();
    return $tab;
}
function recursiveFunction($p_id){
    $children = getchild($p_id);
    //print_r($immediate_children);
    if($children) {
        foreach($children as $child) {
            echo $child.'<br>';
            recursiveFunction($child[0]);
        }
    }
}
function childrea($ch){
    $args = array(
	'post_parent' => $ch,
	'post_type'   => 'produit',  
	'numberposts' => -1
);
return get_children( $args );
}
function childlevl($idchild){

    $args = array(
    'post_type'      => produit,
    'posts_per_page' => -1,
    'post_parent'    => $idchild 
 );
$parent = new WP_Query( $args );
if ( $parent->have_posts() ) :
    $tab=array();
     while ( $parent->have_posts() ) : $parent->the_post(); 
     $tab2=array();
     $tab2[]=get_the_ID();
     $tab2[]= get_the_title();
     $tab[]=$tab2; 
    endwhile; 
    endif; wp_reset_query();
    return $tab;
}