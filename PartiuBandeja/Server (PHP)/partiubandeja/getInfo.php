<?php
header('Access-Control-Allow-Origin: *');

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

$arq = file("contador.txt");
$partiram = $arq[$bandeja];

$arq = file("filaList.txt");
$tolerate = $time - (7*60);

$tam = count($arq);

$filaCount = 0;
$filaSum = 0;

for ($i = 0; $i < $tam; $i++) {
    $set = explode(" ",$arq[$i]);
    if ($set[3]>$tolerate && $set[2]==$bandeja && $set[3]!=-1){
        $filaCount++;
        $filaSum = $filaSum + $set[1];
    }
}


$filaSum = $filaSum/$filaCount;

$arq = file("comidaList.txt");

$tam = count($arq);
$comidaCount = 0;
$comidaSum = 0;
for ($i = 0; $i < $tam; $i++) {
    $set = explode(" ",$arq[$i]);
    if ($set[1]!=-1 && $set[2]==$bandeja){
        $comidaCount++;
        $comidaSum = $comidaSum + $set[1];
    }
}
$comidaSum = $comidaSum/$comidaCount;
if ($comidaCount==0) 
  $comidaSum=0;
if ($filaCount==0)
  $filaSum=0;
if ($partiram<=0)
  $partiram=0;


echo $filaSum."|".$comidaSum."|".$partiram;
echo "|success";
?>