<?php

$month= date("F");
if($month == "August") {
    echo "It's August, so it's still holiday.";
}
else{
    echo "Not August, This is " . $month . " so i don't have any holidays";
}
echo "<br>";


$color= "color red";
if($color == "color red") {
    echo "The color is red. ";
}
else{
    echo "The color is not red.";
}
echo "<br>";


$grade=70;
echo "The grade is: ";
if($grade>80){
    echo "Excellent";
}
elseif($grade>70){
    echo "Great";
}
elseif($grade>60){
    echo "Good";
}
elseif($grade>50){
    echo "Pass";
}
else{
    echo "Fail";
}
echo "<br>";


?>