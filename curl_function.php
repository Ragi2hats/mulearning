<?php
function get_url($url){
    $ch = curl_init (); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch); 
    echo $result;
    
}
get_url("https://www.php.net/images/logos/php-logo.svg");


$image_url = 'https://www.php.net/images/logos/php-logo.svg';
$save_as = 'img/123d4.svg';
$ch = curl_init($image_url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


$raw_data = curl_exec($ch);
curl_close($ch);
$fp = fopen($save_as, 'w');
fwrite($fp, $raw_data);
fclose($fp);


$file = fopen("ip.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
echo fwrite($file,$ip);
fclose($file);