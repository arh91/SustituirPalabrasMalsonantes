<?php

/* Plugin Name: wpplugin-three
Plugin URI: http://wpplugin.es
Description: Este plugin sustituye 5 palabras malsonantes que aparezcan en nuestro wordpress por otras que resulten más civilizadas
Version: 5.0.1
Requires at least: 5.0
Tested up to: 4.3
Author: Niko Bellic
Author URI: http://niko-bellic.com
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Update URI: https://example.com/my-plugin/
Text Domain: third-plugin
Domain path: /languages/
*/



function sustituir_palabras($content){

    $palabrasMalsonantes = array("puta", "gilipollas", "mierda", "cabron", "jodete", "jódete");
    $palabrasBiensonantes = array("fruta", "gilipuertas", "caca", "cabrito", "jorobate", "jorobate");

    return str_replace($palabrasMalsonantes, $palabrasBiensonantes, $content);

}

add_filter('the_content', 'sustituir_palabras')
?>