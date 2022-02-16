<?php
$tab = ['nom'=>'daniel','age'=>30];
foreach($tab as $cle=>$valeur){
echo $cle." : ".$valeur."<br>";
}
$tab = array( array(1,2,3), array("a","b","c"), array("daniel", "gabriel", "pauline") );
$tab= array();
    $tab[0]= array(1,2,3);
    $tab[1]= array("a","b","c");
    $tab[2]= array("daniel", "gabriel", "pauline");

    $tab = array( array(1,2,3), array("a","b","c"), array("daniel", "gabriel", "pauline") );
    echo $tab[2][0]; // affichera daniel;
$tab = array( array(1,2,3), array("a","b","c"), array("daniel", "gabriel", "pauline") );
$tab[2][0] = "daniel"; // anciennement "daniel"
?>



