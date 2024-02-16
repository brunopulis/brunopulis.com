<?php

// remove contact form 7 from all pages, only to contact form.
function contactform7_check_dequeue()
{
	$check_cf7 = false;

	if ( is_page( 'contact' ) ) 
  {
		$check_cf7 = true;
	}

	if ( !$check_cf7 ) 
  {
		wp_dequeue_script( 'contact-form-7' );
		wp_dequeue_style( 'contact-form-7' );
	}
}

add_action( 'wp_enqueue_scripts', 'contactform7_check_dequeue', 77 );
