<?php

 // Maak een Array met 3 namen van medeleerlingen.
 $names = array("Sandy-Bridge", "Berre", "Wooter");

  // Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.
 for ($i = 0; $i <= count($names); $i++){
 echo $names[$i];
 echo "<br>";
 }

  // Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.
 foreach($names as $name){
 echo $name;
 echo "<br>";
 }
 echo "<br>";

  // Itereer met een for-loop over de variable $naam alsof het een array was.
 $naam = "Frankie";
 for ($i = 0; $i <= count($naam); $i++){
 echo $naam[$i];
 echo "<br>";
 }
  ?>
