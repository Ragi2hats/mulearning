<?php
var_dump(checkdate(33,2,2000)); // check date exist or not
$date=date_create("2013-03-15");// usedto create date. it will be an array with dateand time and timezone
date_add($date,date_interval_create_from_date_string("40 days")); // create
echo date_format($date,"Y-m-d");

$date=date_create();
//date_date_set($date,2020,10,30);
echo date_format($date,"Y/m/d");

date_default_timezone_get(); // get default time zone
date_default_timezone_set("Asia/Bangkok"); //set timezone

date_create("gyuiyiuyui%&&/");
print_r(date_get_last_errors());// display errors

$tz=timezone_open("Asia/Taipei");
print_r(timezone_location_get($tz));


echo date("Y-m-d",strtotime("-1day"));