MvcFrameWork, a PHP-based, MVC-inspired CMF
===========================================

This project is created while reading advanced PHP-programming with Model View Controller (MVC)
frameworks with a taste of Content Management Framework (CMF). 


License
-------

MvcFrameWork is licensed according to MIT-license. 
Any included external modules are subject to their own licensing.


Use of external libraries
-----------------------------------

MvcFrameWork uses external libraries for state of the art samples. Any external module can be replaced or
removed for less features but without disturbing the MvcFrameWork core functionality.

The following external modules are included in MvcFrameWork.

### HTMLPurifier
HTMLPurifier by Edward Z. Yang to filter & format HTML.
Website: http://htmlpurifier.org/ 
Version: 4.5.0 (2013-06-04)
License: LGPL
MvcFrameWork path: `src/CTextFilter`
Used by: `CMContent`


### PHP Markdown
Markdown is a text-to-HTML conversion tool for web writers.
Website: http://michelf.ca/
Version: 1.0.1p (2013-04-13)
MvcFrameWork path: `src/CTextFilter`
Used by: `CMContent`


### PHP SmartyPants Typographer
This is a special version of PHP SmartyPants with extra features
Website: http://michelf.ca/
Version: 1.0.1 (2013-01-23)
MvcFrameWork path: `src/CTextFilter`
Used by: `CMContent`


### lessphp
lessphp by leaf to compile LESS.
Website: http://leafo.net/lessphp
Version: 0.3.8 (2012-06-04)
License: Dual license, MIT LICENSE and GPL VERSION 3
MvcFrameWork path: `themes/grid/lessphp`
Used by: `themes/grid/style.php`


### The Semantic Grid System
by Tyler Tate/TwigKit to get grid layout through LESS.
Website: http://semantic.gs/
Version: 1.2 (2012-01-11)
License: Apache License
MvcFrameWork path: `themes/grid/semantic.gs`
Used by: `themes/grid/style.less.css`


History
-------

v0.01 (2013 june)
* This is the first release of MvcFrameWork in a course called phpmvc.


 .   
..:  Copyright 2013 by Lennart Jönsson (bo.lennart.jonsson@gmail.com)
