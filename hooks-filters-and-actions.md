---
layout: page
title: Hooks, filters and actions
---

The Multisite Language Switcher provides some filters and actions whose are very useful for programmers who wants to interact with the plugin from their functions and classes.

*Read first the [introduction](http://codex.wordpress.org/Plugin_API#Hooks.2C_Actions_and_Filters) provided by the WordPress community if you don't know what hooks are.*

## msls\_admin\_validate ##

You can use this filter if you want to add some custom validation for an input field in configuration page of the plugin. This can be useful if you added your own input fields to this page.

Example:

{% gist lloc/5f922fc770d818365992 msls_admin_validate.php %}

## msls\_filter\_string ##

You can override the string for the output of the translation hint. *$output* contains the original string and *$links* is an array of generated links to the available translations.

Example:

{% gist lloc/5f922fc770d818365992 msls_filter_string.php %}

You can use the following code if you want to remove this filter completely:

    remove_action( 'the_content', 'msls_content_filter' );

## msls\_head\_hreflang ##

The plugin creates automatically [hreflang annotations](https://support.google.com/webmasters/answer/189077?hl=en) in the head of the generated HTML using the code of the language only (eg. en, de, fr). You can easily override this value:

Example:

{% gist lloc/5f922fc770d818365992 msls_head_hreflang.php %}

You can use the following code if you want to remove these tags completely:

    remove_action( 'wp_head', 'msls_head' );

