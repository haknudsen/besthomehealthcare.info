<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
if (version_compare(phpversion(), '5.4.00', '<')) {
    echo '<div style="color: red;border: 2px solid; padding: 3px; border-radius: 10px;">Php version isn\'t high enough, you have '.phpversion().' need at least 5.4</div>';
}
if (!function_exists('mb_convert_encoding')) {echo '<div style="color: red;border: 2px solid; padding: 3px; border-radius: 10px;">No PHP mbstring module.Php version '.phpversion().'</div>'; exit();}

function file_get_contents_alternative($url) {
	
	
	$ch = curl_init();
	$timeout = 20;
	//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
if (isset($_GET['update']))
{
	

$site_url = 'http://wpvideosites.com/licence/Download/wpvideo.zip';
//==============

 $ch = curl_init($site_url);
  
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
     //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
     $raw_file_data = curl_exec($ch);

     if(curl_errno($ch)){
        echo 'error:' . curl_error($ch);
     }
     curl_close($ch);


//====================================



file_put_contents(dirname(__FILE__)."/download/"."wpvideo.zip", $raw_file_data);

//$zip = new ZipArchive;

//if ($zip->open($path) === true) {
//    for($i = 0; $i < $zip->numFiles; $i++) {
//        $filename = $zip->getNameIndex($i);
//        $fileinfo = pathinfo($filename);
//        copy("zip://".$path."#".$filename, dirname(__FILE__)."/download/".$fileinfo['basename']);
 //   }                  
 //   $zip->close();                  
//}

$path = dirname(__FILE__)."/download/"."wpvideo.zip";
if (!class_exists('ZipArchive')) {echo '<div style="color: red;border: 2px solid; padding: 3px; border-radius: 10px;">No ZipArchive PHP class at your server, please install or update manualy. Php version '.phpversion().'</div>'; exit();}
$zip = new ZipArchive;
$res = $zip->open($path);

if ($res === TRUE) {
  $zip->extractTo(dirname(plugin_dir_path (__FILE__ )));
 $zip->close();
  echo '<div style="color: red;border: 2px solid; padding: 3px; border-radius: 10px;">Update successful. Please <a onclick="window.top.location.replace(\''.get_site_url().'/wp-admin/admin.php?page=WpVideo\');return false;" href="./admin.php?page=WpVideo">reload page.</a></div> .';
} else {
  echo '<div style="color: red;border: 2px solid; padding: 3px; border-radius: 10px;">Update not successful. Please update manual.</div>';
}
}

else 
{
$new_version=file_get_contents_alternative("http://wpvideosites.com/licence/version.php",false);
if ($new_version != $_GET['version']) echo '<div id="update_status" style="color: red;border: 2px solid; padding: 3px; border-radius: 10px;">New version '.$new_version.' available. Click <a onclick="document.getElementById(\'update_status\').innerHTML=\'Please wait...\'"href="../wp-admin/admin-ajax.php?action=wpvideo_up&update=1">here</a> to update.</div>'	;
}



?>