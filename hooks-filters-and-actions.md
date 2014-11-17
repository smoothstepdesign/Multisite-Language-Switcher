---
layout: page
title: Hooks, filters & actions
weight: 5
---

The **Multisite Language Switcher** provides some filters and actions, which are very useful for programmers who want to interact with the plugin from their functions and classes.

**And again: Always backup your files and database prior to work on your site, better safe than sorry.**

> *Read first the [introduction](http://codex.wordpress.org/Plugin_API#Hooks.2C_Actions_and_Filters) provided by the WordPress community if you don't know what hooks are.*

## msls\_admin\_icon\_get\_edit\_new ##

If you want to change the link of the admin icon in case there is no object connected then this filter is for you. The default is that the link points to the 'create new page' of this object type.

Example:

{% gist lloc/5f922fc770d818365992 msls_admin_icon_get_edit_new.php %}

*This would add the parameter 'abc' with the value 'xyz' to the url path.*

## msls\_admin\_language\_section \ msls\_admin\_main\_section \ msls\_admin\_advanced\_section ##

If you want to add custom input fields to the existing sections in the settings of the plugin then you can use one of these actions.

{% gist lloc/5f922fc770d818365992 msls_admin_main_section.php %}

*This would add an input field 'custom field' to the main-section of the settings-page.*

## msls\_admin\_register ##

If you want to add a completely customized settings section to the configuration-pages of the Multisite Language Switcher then you can use this action.
 
Example:

{% gist lloc/5f922fc770d818365992 msls_admin_register.php %}

*This would add a section with the id 'custom section' and an input field 'custom field' to the settings-page of the plugin.*

## msls\_admin\_validate ##

You can use this filter if you want to add some custom validation for an input field in the configuration page of the plugin.

Example:

{% gist lloc/5f922fc770d818365992 msls_admin_validate.php %}

*This can be useful if you have added your own input fields to this page using an action hook like 'msls\_admin\_register'.*

## msls\_blog\_collection\_construct ##

You can easily manipulate the blog collection.

Example:

{% gist lloc/5f922fc770d818365992 msls_blog_collection_construct.php %}

*This would exclude the blog with the ID 1 from the collection.*

## msls\_blog\_collection\_description ##

The description string of every blog is not fixed. You can override it.

Example:

{% gist lloc/5f922fc770d818365992 msls_blog_collection_description.php %}

*This would give the blog with the ID 1 the description 'abc' and the blog with the ID 2 the name 'xyz.*

## msls\_filter\_string ##

You can override the string for the output of the translation hint. *$output* contains the original string and *$links* is an array of generated links to the available translations.

Example:

{% gist lloc/5f922fc770d818365992 msls_filter_string.php %}

*You can use the following code if you want to remove this filter completely:*

    remove_action( 'the_content', 'msls_content_filter' );

## msls\_head\_hreflang ##

The plugin creates automatically [hreflang annotations](https://support.google.com/webmasters/answer/189077?hl=en) in the head of the generated HTML using the code of the language only (eg. en, de, fr). You can easily override this value:

Example:

{% gist lloc/5f922fc770d818365992 msls_head_hreflang.php %}

*You can use the following code if you want to remove these tags completely:*

    remove_action( 'wp_head', 'msls_head' );

## msls\_link\_create ##

There is also a way to manipulate the inner HTML in the generated links. Just create your own MslsLink class.

Example:

{% gist lloc/5f922fc770d818365992 msls_link_create.php %}

*This adds label tags to the descriptional text after the flag icon.*

## msls\_main\_save ##

With this action you can call a completely customized save-routine.

Example:

{% gist lloc/5f922fc770d818365992 msls_main_save.php %}

*Use this action only if you exactly know what you do!*

## msls\_meta\_box\_render\_input\_button ##

You can change or hide the button of the meta box in the edit-screen with this filter.

Example:

{% gist lloc/5f922fc770d818365992 msls_meta_box_render_input_button.php %}

*This wraps the code of the submit-button into HTML comments.*

## msls\_meta\_box\_suggest\_args / msls\_post\_tag\_suggest\_args ##

Maybe you will find it useful to be able to override the [WP_Query](http://codex.wordpress.org/Class_Reference/WP_Query) *$args* for the auto-complete search-field in the meta box which you can see in the edit-screen of the various post-types or taxonomies of your WordPress site.

Example:

{% gist lloc/5f922fc770d818365992 msls_meta_box_suggest_args.php %}

*This would limit the output of the results to a maximum of 5 posts.*

## msls\_meta\_box\_render\_select\_hierarchical ##

This is only valid for hierarchical post types that use the HTML select (and _not_ the new autocomplete inputs)in the meta box.

{% gist lloc/5f922fc770d818365992 msls_meta_box_render_select_hierarchical.php %}

This adds various post_stati to the array _$args_ for _wp\_dropdown\_pages even if this function does not expect this. But inside the function is a call to _get\_pages_ that can use this param.

## msls\_meta\_box\_suggest\_post / msls\_post\_tag\_suggest\_term ##

You can even manipulate the [WP_Post](http://codex.wordpress.org/Class_Reference/WP_Post)- or Term-objects in the result-set created in 'msls\_meta\_box\_suggest\_args' or 'msls\_post\_tag\_suggest\_args'. 

Example:

{% gist lloc/5f922fc770d818365992 msls_meta_box_suggest_post.php %}

*This would add the post_id to the title of the posts in the autocomplete-field of the meta box.*

## msls\_options\_get\_available\_languages ##

You can create a custom function to filter the available languages used in the language section of the plugin-settings.

Example:

{% gist lloc/5f922fc770d818365992 msls_options_get_available_languages.php %}

*Even if it is still not fully tested, it seems to be a smart way to add a language without the language files installed. In this case it would solve the issue with the American flag and the Union Jack.*

## msls\_options\_get\_flag\_url ##

You can set the path to the flag-icons in the admin settings of the plugin but you can also override the path with a filter.
 
Example:

{% gist lloc/5f922fc770d818365992 msls_options_get_flag_url.php %}

*This 'sets' the path to the flag icons to the directory 'images' in the active theme.*

## msls\_options\_get\_permalink ##

I decided to add a filter to the implementation of get_permalink in the plugin so that I can offer a workaround for the issues with the possibility to localize the slugs of custom post types.

Example:

{% gist lloc/5f922fc770d818365992 msls_options_get_permalink.php %}

*This replaces the 'products'-part in the URL with 'produkte' if $language is 'de_DE'.*

## msls\_output\_get ##

You can use this filter if you want to change the format of the generated links to the translations in your blog.

Example:

{% gist lloc/5f922fc770d818365992 msls_output_get.php %}

*This would transform the absolute URL in a relative one and would add the css-class 'current' to the link of the current blog.*

## msls\_output\_get\_tags ##

You can configure the output-tags in the admin settings of the plugin but you can also override these with a filter.

{% gist lloc/5f922fc770d818365992 msls_output_get_tags.php %}

*This would override completely the configuration without looking for existing values.*