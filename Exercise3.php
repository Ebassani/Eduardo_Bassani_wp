<?php
/*
Link to gitHub pages repository: https://github.com/Ebassani/ebassani.github.io
Link to page that contains the HTML for the project: https://ebassani.github.io/SpartaGym/Sparta_Gym.html
*/

$month= date("F");
if($month == "August") {
    echo "It's August, so it's still holiday.";
}
else{
    echo "Not August, This is " . $month . " so i don't have any holidays";
}
echo "<br><br>";


$color= "red";
if($color == "red") {
    echo "The color is red. ";
}
else{
    echo "The color is not red.";
}
echo "<br><br>";


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
echo "<br><br>";

?>

<form action="Exercise3.php" method="post">
Name: <input type="text" name="name" required><br>
Age: <input type="number" min=0 name="age" required><br>
<input type="submit">
</form>

<?php
if(isset($_POST['name'])){
    $name= $_POST['name'];
    $age = $_POST['age'];
    if($age>=18){
        echo $name . " is eligible for voting";
    }
    else{
        echo $name . " is NOT eligible for voting";
    }
}
echo "<br><br>";

for($x=9;$x>1;$x--){
    for($i=1;$i<$x;$i++){
        echo $i;
    }
    echo "<br>";
}
echo "<br>";

$size=8;
$i=1;
while($i<=$size){
    $x=1;
    while($x<=$i){
        echo "*";
        $x++;
    }
    echo "<br>";
    $i++;
}
?>