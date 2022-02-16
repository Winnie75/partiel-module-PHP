<?php
$nombre = 5;
$prod = 1;
$i = 0;
while($i <= 10){
    $prod = $nombre*$i;
    echo $nombre . ' fois ' . $i . ' = ' . $prod . '<br>';
    $i++;
}