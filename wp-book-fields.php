<?php

function books_add_custom_metabox(){

	add_meta_box(
		'books meta box',
		'Book',
		'rth_books_meta_callback',
		'slug'
	 );

}

add_action('add_meta_boxes','books_add_custom_metabox');


function rth_books_meta_callback($post){
	wp_nonce_field(basename(__FILE__), 'rth_books_nonce' );
	$rth_books_stored_meta = get_post_meta($post->ID);

	?>

		<div>
			<div class="meta-row">
				<div class="meta-head">
					<label for="book-id" class="row-title">Book Name</label>
				</div>
				<div class="meta-cell">
					<input type="text" name"book-id" id="book-id" value=""/>
					<div class="meta-head">
					<label for="date-made" class="row-title">Date Made</label>
				</div>
				<div class="meta-cell">
					<input type="text" name"date-made" id="date-made" value=""/>
				</div>
				</div>
			</div>
		</div>

	<?php
}