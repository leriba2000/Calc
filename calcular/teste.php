<?php
/**
 * plugin name: denis
*/

function denis ($atts) 
{
    return '<iframe src="'.plugins_url().'/calcular/index.php" frameborder="0" width="400" height="210" style="border:0">';   //frameborder='0'  allowfullscreen></iframe>";
}

add_shortcode('calcular', 'denis');