<?php
header('Access-Control-Allow-Origin: *');

$tam = 500;

file_put_contents("partiuList.txt", "");
file_put_contents("filaList.txt", "");
file_put_contents("comidaList.txt", "");

for ($i = 0; $i < $tam; $i++){
    file_put_contents("partiuList.txt", $i." -1 \n", FILE_APPEND);
    file_put_contents("filaList.txt", $i." -1 -1 -1 \n", FILE_APPEND);
    file_put_contents("comidaList.txt", $i." -1 -1 \n", FILE_APPEND);
}

file_put_contents("GenID.txt", "-1");

file_put_contents("contador.txt", "");
file_put_contents("contador.txt", "0\n0\n0\n");


echo "success";
?>