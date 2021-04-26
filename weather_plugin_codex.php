<?php
/*
 * Plugin Name:       WEATHER WIDGET API 
 * Plugin URI:        
 * Description:       Showing Weather Information
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            nchibike
 * Author URI:        
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       WEATHER-WIDGET-API 
*/
if (!defined('WPINC')) {
	die;
}
register_activation_hook(__FILE__,'Weather_Plugin_Codex_View');

function Weather_Plugin_Codex_View()
{
	$status="";
$msg="";
$zip="";
if(isset($_POST['submit'])){
    $zip=$_POST['zip'];
    $url="http://api.openweathermap.org/data/2.5/weather?zip=".$zip."&appid=a28a0a04b98271cdd39b747808e31ff3";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    if($result['cod']==200){
        $status="yes";
    }else{
        $msg=$result['message'];
    }
}

include_once('Weather_Api_Functions.php');
}
add_shortcode('Weather_Plugin_Codex','Weather_Plugin_Codex_View');
function Weather_Plugin_Codex_Register_Menu()
{
add_menu_page('My-Weather-Plugin','WEATHER API','manage_options','Weather-API','Weather_Plugin_Codex_View','dashicons-sos',30);
}
add_action('admin_menu','Weather_Plugin_Codex_Register_Menu');
?>