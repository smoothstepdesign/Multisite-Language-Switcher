<?php

$obj = new MslsGetSet;
$obj->tmp = 'test';

$val = $obj->get_arr();          // array( 'tmp' => 'test' ) == $val
$val = $obj->has_value( 'tmp' ); // true == $val
$val = $obj->is_empty();         // false == $val
echo $obj->tmp;                  // Output: test

$obj->reset();

$val = $obj->get_arr();          // array() == $val
$val = $obj->has_value( 'tmp' ); // false == $val
$val = $obj->is_empty();         // true == $val
echo $obj->tmp;                  // Output: