<?php
header('Access-Control-Allow-Origin: *');

$id = file("GenID.txt");

$id[0] = $id[0]+1;

if ($id[0]>=500){
    $list = file("partiuList.txt");
    $t = count($list) - 1;
    if ($t < $id[0]){
    	    $tam = 100;
    	    for ($i = 0; $i < 100; $i++){
      		 $aux = $id[0] + $i;  
		 file_put_contents("partiuList.txt", $aux." -1 \n", FILE_APPEND);
		 file_put_contents("filaList.txt", $aux." -1 -1 -1 \n", FILE_APPEND);
   		 file_put_contents("comidaList.txt", $aux." -1 -1 \n", FILE_APPEND);
	    }   
    }
}

file_put_contents("GenID.txt", $id[0]."\n");

echo $id[0];
exit;

?>