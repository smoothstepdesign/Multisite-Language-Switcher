---
layout: page
title: Functions, classes and methods
---

Most people are likely to use the widget provided by the **Multisite Language Switcher**. But in some cases it can be useful to have the possibility to use the functions and methods of the plugin in a direct way.

## the\_msls ##

This function can be placed anywhere in your theme-files such as _header.php_, _footer.php_ and _sidebar.php_. It will echo an output similar to the widget.

    if ( function_exists ( 'the_msls' ) ) {
        the_msls();
    }

## get\_the\_msls ##

Use _get\_the\_msls_ if a string is needed because your theme handles the output in a different way, for example.

    $str = '';
    if ( function_exists ( 'get_the_msls' ) ) {
        $str = get_the_msls();
    }
    echo $str;

## MslsOutput ##

All these functions use an object type of __MslsOutput__. The method _\_\_toString_ handles all needs when this object is printed. But you can use the _get_-method directly if you want to work with an array of links before it is converted:

    $display = 0;
    $exists  = false;
    $obj     = new MslsOutput();
    foreach ( $obj->get( $display, $exists ) as $link ) {
        echo $link;
    } 

The parameter _$display_ is an integer which can contain any number from 0 to 4. There is a static method in the class MslsLink which is used in a similar way in the option-page of the plugin:

    print_r( MslsLink::get_types() );

If you want to show links to existing translations only set the parameter _$exists_ to _true_. 

### Manipulate the Navigation Menu ###

The class _MslsOutput_ comes also in handy when you'd like to manipulate the items of a Navigation Menu. First you should check if a class with the name _MslsOutput_ exists and if it's the _primary_ menu in your theme (the name can vary). Then you can create the object and request the array of links (in my example just linked flags) to the translations. After that you can create the output, add it to _$items_ and return it.

    function my_custom_menu_item( $items, $args ) {
        if ( function_exists ( 'the_msls' ) && 'primary' == $args->theme_location ) {
            $obj = new MslsOutput;
            $arr = $obj->get( 2 );
            if ( !empty( $arr ) ) {
                $items .= '<li>' . implode( '</li><li>', $arr ) . '</li>';
            }
        }
        return $items;
    }
    add_filter( 'wp_nav_menu_items', 'my_custom_menu_item', 10, 2 );

You could pass - of course - other values different from _2_. Here is a list with all possibilities:

    /**
     * MslsLink - Image + text
     */
    $arr = $obj->get( 0 );

    /**
     * MslsLinkTextOnly - Just text
     */
    $arr = $obj->get( 1 );

    /**
     * MslsLinkImageOnly - Just image
     */
    $arr = $obj->get( 2 );

    /**
     * MslsLinkTextImage - Text + image
     */
    $arr = $obj->get( 3 );