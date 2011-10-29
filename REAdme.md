# Layla #

A demo child theme for the [Mzingi 2](https://github.com/miklb/Mzingi_v2) framework, inspired by the WordPress theme [Yoko](http://www.elmastudio.de/wordpress-themes/yoko/). All code and CSS has been rewritten for [Habari](http://habariproject.org) and my own preferences of markup, but fell it's important to reference regardless.

## License ##
[Apache Software License 2.0](http://www.apache.org/licenses/LICENSE-2.0.html)

## Notes ##

Child themes in Habari are still being tweaked, but as I understand it, if you want to override any of the stylesheets from Mzingi 2.0, simply add a call in the action_add_theme_vars function a call to the stylesheet you want to over ride, ie,  `Stack::add('template_stylesheet', array(Site::get_url( 'theme', '/css/normalize.css' )), 'reset');`.

Stay tuned for more examples and changes…

