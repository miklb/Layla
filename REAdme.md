# Layla #

A demo child theme for the [Mzingi 2](https://github.com/miklb/Mzingi_v2) framework, inspired by the WordPress theme
[Yoko](http://www.elmastudio.de/wordpress-themes/yoko/). All code and CSS has been rewritten for [Habari](http://habariproject.org) and my
own preferences of markup, but feel it's important to reference regardless. [Layla](http://en.wikipedia.org/wiki/Layla) thus is a play on
names of Beatle's wives.

## License ## 

[Apache Software License 2.0](http://www.apache.org/licenses/LICENSE-2.0.html)

## Notes ##

Child themes in Habari are still being tweaked, but as I understand it, if you want to override any of the stylesheets from Mzingi 2.0,
simply add a call in the action_add_theme_vars function a call to the stylesheet you want to over ride, ie,
`Stack::add('template_stylesheet', array(Site::get_url( 'theme', '/css/normalize.css' )), 'reset');`.

**UPDATE** This example theme will not be updated anytime in the near future, but I'm leaving it here for anyone who wants to fork and build on.

I'm working on a new child theme to include as an example for mzingi 2.

