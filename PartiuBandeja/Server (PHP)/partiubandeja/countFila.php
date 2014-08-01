<?php
header('Access-Control-Allow-Origin: *');

$nota = $_GET[nota];
$id= $_GET[id];
$bandeja = $_GET[bandeja];

$date = date("H:i:s");
$date = explode(":",$date);
$hour = ($date[0]-3);
if ($hour<0)
   $hour = $hour+24;
$minute = $date[1];
$second = $date[2];
$time = $hour*60*60;
$time = $time + ($minute*60) + $second;

$list2 = file("filaList.txt");
$t = count($list2) - 1;
if ($id > $t){
    for ($i = $t; $i < ($id+100); $i++){
          file_put_contents("filaList.txt", $i." -1 -1 -1 \n", FILE_APPEND);
     } 
}

$list = file("filaList.txt");

$set = explode(" ",$list[$id]);

$set[1] = $nota;
$set[2] = $bandeja;
$set[3] = $time;
$list[$id] = implode(" ", $set);
file_put_contents("filaList.txt", $list);

echo "success";
?>