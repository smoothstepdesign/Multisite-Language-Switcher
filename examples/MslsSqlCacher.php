<?php

// __CLASS__ and __METHOD__ are just for creating a unique footprint here
$cache = MslsSqlCacher::init( __CLASS__ )->set_params( __METHOD__ );

// With MslsSqlCacher you can use everything from WPDB as usual
$var = $cache->get_results(
	$cache->prepare(
		"SELECT ID FROM {$cache->posts} WHERE YEAR(post_date) = %d AND post_status = 'publish'",
		date( 'Y' )
	)
);