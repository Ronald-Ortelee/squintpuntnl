<?php
/**
 * Portfolio Single Page
 */

remove_action(	'genesis_loop', 'genesis_do_loop' );
add_action(	'genesis_loop', 'squint_single_template' );

function squint_single_template(){
	global $post, $paged;

	if ( have_posts() ) : while ( have_posts() ) : the_post();

			do_action( 'genesis_before_entry' );

			printf( '<article %s>', genesis_attr( 'entry' ) );

					echo '<div class="feat">';
					    echo genesis_get_image();
				    echo '</div>';

					echo '<h1 class="title-head">';
						echo get_the_title();
					echo '</h1>';

					echo '<div class="one-half first">';
						echo '<div class="title-head">';						
							do_action( 'genesis_entry_header' );
						echo '</div>';
						echo '<div class="subtitle">';
							echo get_the_subtitle();
						echo '</div>';
					echo '</div>';
					
					// echo '<div class="one-half">';
					//     echo genesis_get_image();
				 //    echo '</div>';

					echo '<div class="one-half">';
						printf( '<div %s>', genesis_attr( 'entry-content' ) );
							genesis_do_post_content();
						echo '</div>'; //* end .entry-content
					echo '</div>';

			// do_action( 'genesis_entry_footer' );
			


			echo '<div class="image-gallery">';
						// echo get_post_meta( get_the_ID(), 'portogal', true );
						echo do_shortcode (get_post_meta( get_the_ID(), '_portogal_meta', true ));
			echo '</div>';

				


			echo '</article>';

			

			do_action( 'genesis_after_entry' );


		endwhile;

	endif;

}

genesis();