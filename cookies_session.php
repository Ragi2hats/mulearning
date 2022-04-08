<?php
$product_id = 6;
if(isset($_COOKIE['recently_viewed'])){

                $cookie_get = $_COOKIE['recently_viewed'];
                $cookie_res = unserialize($cookie_get);
                if(!in_array($product_id,$cookie_res)){
                    $cookie_res[] = $product_id;
                }
               setcookie("recently_viewed", "", time() - 3600);
               // again set cookie
               $cookievalue = serialize($cookie_res);
               
               setcookie('recently_viewed',$cookievalue,time() + (86400 * 30), "/");
            }
            else{
              
            $cookie_data[] =  $product_id;
            $cookievalue =serialize($cookie_data);        
            setcookie('recently_viewed',$cookievalue,time() + (86400 * 30), "/");
            
           }

?>
<html>
<body>

<?php
if(!isset($_COOKIE['recently_viewed'])) {
     echo "Cookie named recently_viewed is not set!";
} else {
     echo "Cookie recently_viewed is set!<br>";
     echo "Value is: " . $_COOKIE['recently_viewed'];
}
?>