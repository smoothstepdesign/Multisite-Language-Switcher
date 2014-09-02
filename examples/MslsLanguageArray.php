<?php

$arr = array(
	'it'    => 1,
	'de_DE' => 2,
);
$obj = new MslsLanguageArray( $arr );

$val = $obj->get_val( 'it' );    // 1 == $val
$val = $obj->get_val( 'fr_FR' ); // 0 == $val
$val = $obj->get_arr();          // array( 'it' => 1, 'de_DE' => 2 ) == $val
$val = $obj->get_arr( 'de_DE' ); // array( 'it' => 1 ) == $val