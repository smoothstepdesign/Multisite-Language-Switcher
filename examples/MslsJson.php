<?php

$obj = new MslsJson;
$obj->add( null, 'Test 3' )
	->add( '2', 'Test 2' )
	->add( 1, 'Test 1' );

// Output: [{"value":1,"label":"Test 1"},{"value":2,"label":"Test 2"},{"value":0,"label":"Test 3"}]
echo $obj;