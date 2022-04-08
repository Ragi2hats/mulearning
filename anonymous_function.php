<?php
$arr = [10,3,70,21,54];
usort ($arr, function ($x , $y) {
   return $x > $y;
});
foreach ($arr as $x){
   echo $x . "\n";
}

//Anonymous function as closure
$maxmarks=300;
$percent=function ($marks) use ($maxmarks) {return $marks*100/$maxmarks;};
echo "marks=285 percentage=". $percent(285);