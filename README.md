LinePress
=========

LinePress wants to address these issues

* LESS support
  * LESS parser
	* css.less.php support (using php vars in less)
	* Check out [Human Made - wp-less](https://github.com/humanmade/wp-less)
* Multisite library
	* Media path url rewriting
	  Multisite media support, fix multisite bug that show up often !Check latest
* Performance boosts by minify
	* Frontend minify js depending on constant
	* Frontend minify css depending on constant  
	Check out [Human Made - Minify](https://github.com/mattheu/MPH-Minify) 
* Handy templating function
 * Parse image tag according to html5 standard
 * DRY Templating like Roots
   http://scribu.net/wordpress/theme-wrappers.html
* Options settings file (automatically update settings) (WP CLI ?)
* Child theme implementation for project specific styles / templating / layout
* Clean up the wp head like Roots / Bones do
* PHP debug function that parses below the admin bar and above the header. 
 * Checkout [Human Made - dev](https://github.com/rbl00/hm-dev)  
* Environment (dev/test/stage/prod)  
 * Checkout [wp-cli scaffold ](https://github.com/linepress/wp-cli-scaffold)  
* Bootstrap support

## WP CLI Scaffolding
See [wp-cli scaffold](https://github.com/linepress/wp-cli-scaffold/)

## WP CLI Other
* database migrations  
http://duncanjbrown.com/migrate-your-wp-database-in-one-command/

# Crystalizing the project goals

Provide a project structure standard so all projects look and feel the same only with different flavours. The cookies stay the same shape.

## Things of the past

* annoying plugin activation for project code when it's in a plugin
* endless searching ans switching between plugin and theme
* multiple context instances when using plugin and theme for a project
* no more deprecated functions in un-updatetable plugins and themes
* big coding style and architecture differences between projects