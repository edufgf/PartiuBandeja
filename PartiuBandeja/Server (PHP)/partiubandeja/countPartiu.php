<?php
header('Access-Control-Allow-Origin: *');

$bandeja = $_GET[bandeja];
$id= $_GET[id];

$list2 = file("partiuList.txt");

$t = count($list2) - 1;
if ($id > $t){
    for ($i = $t; $i < ($id+100); $i++){
          file_put_contents("partiuList.txt", $i." -1 \n", FILE_APPEND);
     } 
}

$list = file("partiuList.txt");
$set = explode(" ",$list[$id]);

if ($set[1]!=$bandeja){
   $arq = file("contador.txt"); 

   if ($set[1]!="-1"){
       $arq[$set[1]] = $arq[$set[1]]-1 . "\n";
   }

   $set[1] = $bandeja;
   $list[$id] = implode(" ", $set);
   file_put_contents("partiuList.txt", $list);

   
   $arq[$bandeja] = $arq[$bandeja]+1 . "\n";
   file_put_contents("contador.txt", $arq);
}

echo "success";
?>