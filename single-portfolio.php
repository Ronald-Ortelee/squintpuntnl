<?php
/**
 * ZP Custom Single Page 
 */
 
remove_action(	'genesis_loop', 'genesis_do_loop' );

add_action(	'genesis_loop', 'zp_custom_single_template' );

function zp_custom_single_template(){
	global $post, $paged;	

	if ( have_posts() ) : while ( have_posts() ) : the_post();
		
			do_action( 'genesis_before_entry' );

			printf( '<article %s>', genesis_attr( 'entry' ) );

			// check post format and call template
			
			
	$content = get_the_content(); 
	$title = get_the_title(  );
	$subtitle = get_the_subtitle(  );
	$permalink=get_permalink(  );	
	$image = genesis_get_image(  array(  'format' => 'url', 'size' => genesis_get_option(  'image_size'  )   )   );

	echo '<div class="one-half first">';
	     echo $title;
		 // echo $subtitle;
	echo '</div>';


	echo '<div class="one-half">';
		if($image){
	       printf(  '<a href = "%s" rel = "bookmark"><img class = "post-image" src = "%s" alt="" /></a>', get_permalink(   ), $image   );
		}
	echo '</div>';
	echo '<div class="post_content">';
	do_action( 'genesis_entry_header' );

	do_action( 'genesis_before_entry_content' );
	printf( '<div %s>', genesis_attr( 'entry-content' ) );
		genesis_do_post_content();
	echo '</div>'; //* end .entry-content
	echo '</div>';




			do_action( 'genesis_after_entry_content' );
			do_action( 'genesis_entry_footer' ); 		
					
			echo '</article>';

			do_action( 'genesis_after_entry' );


		endwhile; 
		
	endif; 


}

genesis();