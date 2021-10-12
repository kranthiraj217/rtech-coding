<?php
define('g', 9.8);

$NAME = array("Hadrosaurus","Struthiomimus","Velociraptor","Euoplocephalus","Stegosaurus","Tyrannosaurus Rex");
$LEG_LENGTH = array("1.2","0.92","1.0","1.6","1.40","2.5");

$STRIDE_LENGTH = array("1.4","1.34","2.72","1.87","1.90","5.76");

$STANCE = array("bipedal","bipedal","bipedal","quadrupedal","quadrupedal","bipedal");

for($i=0;$i<=5;$i++){
    $speed = (($STRIDE_LENGTH[$i] / $LEG_LENGTH[$i] - 1) * sqrt($LEG_LENGTH[$i] * g));

}
for($i=5; $i>=0 && $i<=5 ;$i--){
    if(($speed <= 6.4544706986708 || $speed >= 0.57154760664941 ) && $STANCE[$i] =="bipedal"){

        echo "<h1>$NAME[$i]</h1>";
        echo "<br>";
    }
}

?>
