---
layout: page
title: Integration, snippets and examples
---

Most people are likely to use the widget provided by the **Multisite Language Switcher**. But the dynamic sidebars are not always the best place for the output of the plugin.

*Please keep in mind: Always backup your files and database prior to work on your site, better safe than sorry.*

## Manipulate the Navigation Menu ##

The class _MslsOutput_ comes in handy when you'd like to manipulate the items of a Navigation Menu. First you should check if plugin is active (just check for the existence of function 'the_msls') and if it is the _primary_ menu in your theme (the name can vary). Then you can create the object and request the array of links (in my example just linked flags) to the translations. After that you can create the output, add it to _$items_ and return it.

{% gist lloc/21f15fa36e089340c124 menu-1.php %}

You could pass - of course - other values different from _2_. Here is a list with all possibilities:

{% gist lloc/21f15fa36e089340c124 menu-2.php %}