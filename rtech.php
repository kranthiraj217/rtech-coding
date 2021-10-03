<?php
define('g', 9.8);

$NAME = array("Hadrosaurus","Struthiomimus","Velociraptor","Euoplocephalus","Stegosaurus","Tyrannosaurus Rex");
$LEG_LENGTH = array("1.2","0.92","1.0","1.6","1.40","2.5");


$STRIDE_LENGTH = array("1.4","1.34","2.72","1.87","1.90","5.76");

$STANCE = array("bipedal","bipedal","bipedal","quadrupedal","quadrupedal","bipedal");
/*
$keys= array_keys($LEG_LENGTH);
foreach ($keys as $key) {
	$the_calc_value = $LEG_LENGTH[$key]/$STRIDE_LENGTH[$key];
}


echo $the_calc_value;
echo "<br>";

$speed = ($the_calc_value - 1) * sqrt($LEG_LENGTH[$key] * g);
 echo $speed;
*/

 for($i=0;$i<=5;$i++){

 $speed = (($STRIDE_LENGTH[$i] / $LEG_LENGTH[$i] - 1) * sqrt($LEG_LENGTH[$i] * g));
 //echo "$speed";
 //echo "<br>";
 }
  for($i=5;$i>=0 && $i<=5  ;$i--){
   if(($speed <= 6.4544706986708 || $speed >= 0.57154760664941 ) && $STANCE[$i] =="bipedal"){

    echo "<h1>$NAME[$i]</h1>";
    echo "<br>";
 
} 
  
}
 
/*
for($i=0;$i<=5;$i++){
  echo $NAME[$i];
  echo "<br>";
}*/
	
//Tyrannosaurus Rex = 6.4544706986708
//Hadrosaurus = 0.57154760664941
//Struthiomimus =  1.3707820681133
//Velociraptor = 5.3844516898195


/*
echo "<pre>";
print_r($dataset1);
echo "</pre>";
*/
?>