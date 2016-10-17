<?php

$searchlabel = apply_filters( 'hoot_search_form_label', __( 'Search', 'responsive-brix' ) );
$searchplaceholder = apply_filters( 'hoot_search_form_placeholder', __( 'Type Search Term...', 'responsive-brix' ) );
$searchsubmit = apply_filters( 'hoot_search_form_submit', __( 'Search', 'responsive-brix' ) );

echo '<div class="searchbody">';

	echo '<form method="get" class="searchform" action="' . esc_url( home_url( '/' ) ) . '" >';

		echo '<label for="s" class="screen-reader-text">' . $searchlabel . '</label>';
		echo '<i class="fa fa-search"></i>';
		echo '<input type="text" class="searchtext" name="s" placeholder="' . $searchplaceholder . '" />';
		echo '<input type="submit" class="submit forcehide" name="submit" value="' . esc_attr( $searchsubmit ) . '" />';

	echo '</form>';

echo '</div><!-- /searchbody -->';