<?php
header('Access-Control-Allow-Origin: *');

$nota = $_GET[nota];
$id= $_GET[id];
$bandeja = $_GET[bandeja];

$list2 = file("comidaList.txt");
$t = count($list2) - 1;
if ($id > $t){
    for ($i = $t; $i < ($id+100); $i++){
          file_put_contents("comidaList.txt", $i." -1 -1 \n", FILE_APPEND);
     } 
}


$list = file("comidaList.txt");

$set = explode(" ",$list[$id]);

$set[1] = $nota;
$set[2] = $bandeja;
$list[$id] = implode(" ", $set);
file_put_contents("comidaList.txt", $list);

echo "success";
?>