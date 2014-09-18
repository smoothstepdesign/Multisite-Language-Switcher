---
layout: page
title: Install, config and use
---

## Install a multisite environment ##

In order to work correctly, the plugin must be installed within a multisite environment with more than one blog, each blog being set in a different language. This specific WordPress installation is described in details in the article [Create a Network (WP Codex)](http://codex.wordpress.org/Create_A_Network) in which you can also find more information on that topic.

## Choose the blog language ##

In order to choose the blog language, go to the administration menu, to Settings/General and chosse the language at the bottom of that page.

![Settings/General](https://lh4.googleusercontent.com/-ocVNRTQ-ZgU/T7n-9VZ5pEI/AAAAAAAABRc/4dgZ-rHxXLo/s800/howto1.jpg)

> The default downloaded version of WordPress includes only one language. Make sure that you already have the WordPress files related to the languages that you want to use on the other blogs! For this to work, you have to install less .mo files concerning the languages that you want: See the following articles.

> * [Installing WordPress in Your Language](http://codex.wordpress.org/Installing_WordPress_in_Your_Language) 
> * and [Wordpress in your language](http://codex.wordpress.org/WordPress_in_Your_Language)

## Activate the plugin ##

After you [downloaded the Multisite Language Switcher plugin](http://wordpress.org/extend/plugins/multisite-language-switcher/) and extracted the .zip file, copy the entire folder onto the following sub-folder of your WordPress installation:

`wp-content/plugins/`

So far the plugin installation follows the usual procedure. In a practical way, the plugin activation can then be made

*  either by the **network administrator** on all the blogs,
*  or by the **root blog administrator** for each particular blog.

## Settings in the administration menu ##

The plugin settings are rather simple (in the **Administration Menu -> Settings -> Multisite Language Switcher**). You need to activate the plugin once in each blog : click « Save » at the bottom of the settings even if you haven't changed anything yet. It's the only way for the plugin to offer the necessary flexibility, regarding each language for example.

![Settings](https://lh6.googleusercontent.com/-8yXROYsGN_Q/T7oQfpONDtI/AAAAAAAABSQ/qhNr4UrijVI/s800/howto2.jpg)

## Choose the display settings ##

You can choose 4 kinds of displaying:
*  flag and description 
*  flag only
*  description only  
*  description and flag

With the next 4 fields, it is possible to add some text or code HTML in order to personalize the HTML list to appear on the front end when your use the plugin.

![Settings fields](https://lh3.googleusercontent.com/-4xn4cjLsNdA/T7oRXMXsehI/AAAAAAAABSY/lI7q6CXIJAk/s800/howto2.1.jpg)

## Indicate to the visitor the available languages available to read the post ##

With the last two features, you decide if you wish to let the visitor know (and for the system under which priority) the various translations are offered.

![Settings hint and priority](https://lh6.googleusercontent.com/-6NjqfjfRQjs/T7oSE3YUDPI/AAAAAAAABSg/fWT0H0KNb3M/s144/howto2.2.jpg)

## Editing Association of posts ##

On the pages and posts edition screen, a new **Multisite Language Switcher** feature has appeared at the top left, in the side bar of existing pages or posts (thus it is displayed after the first « Save » of a page/post).

The scroll menu next to each flag shows the pages or posts titles. All you have to do is to choose the corresponding translation and to click on « **Update** ». This association between one page or post of one blog and another page or post belonging to another blog is automatically updated on the other blog too.

![Association of posts written in different languages](https://lh4.googleusercontent.com/-_g0dk_aqo0c/T7oOHRlgShI/AAAAAAAABSA/Dxe-w0doBzw/s800/howto3.jpg)

## Use ##

As described in the section Settings, besides indicating for each post or page the available translations, the widget can be integrated in a sidebar. It is also possible to directly use the plugin features in your theme. In this blog for instance, I've used the following code in the _header.php_ file of my WordPress theme.
 
`<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>`

There probably will be new other possible features in the next versions of this plugin…