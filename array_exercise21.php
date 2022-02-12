<?php
/*
1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
*/
echo "<ol>
    <li>PHP</li>
    <li>HTML</li>
    <li>JavaScript</li>
    <li>CMS</li>
    <li>Project</li>
</ol>";


/* 2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
*/
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach($courses1 as $i){
    echo $i . "<br>";
}
echo "<br>New Array after deleting an element:<br><br>";
unset($courses1[2]);
foreach($courses1 as $i){
    echo $i . "<br>";
}
echo "<br>";


/* 
3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
*/
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "a) ascending order sort by value<br>";
asort($courses3);
foreach($courses3 as $i){
    echo $i . "<br>";
}
echo"<br>";
echo "b) ascending order sort by Key<br>";
ksort($courses3);
foreach($courses3 as $i){
    echo $i . "<br>";
}
echo"<br>";
echo "c) descending order sort by Value<br>";
arsort($courses3);
foreach($courses3 as $i){
    echo $i . "<br>";
}
echo"<br>";
echo "d) descending order sort by Key<br>";
krsort($courses3);
foreach($courses3 as $i){
    echo $i . "<br>";
}
echo"<br>";

/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/

$courses4=array("php", "html", "javascript", "cms", "project");
$courses4=array_flip($courses4);
$courses4=array_change_key_case($courses4,CASE_UPPER);
$courses4=array_flip($courses4);
foreach($courses4 as $i){
    echo $i . "<br>";
}
echo "<br>";

// 5. Create an array that holds your favorite colors and print them. (indexed arrays)

$colors;
$colors[0]="red";
$colors[1]="green";
$colors[2]="blue";
$colors[3]="gray";
for($i=0;$i<count($colors);$i++){
    echo $colors[$i] . "<br>";
}
echo "<br>";

// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)

$arrayColors=array("red"=>"#E74C3C", "green"=>"#27AE60", "blue"=>"#2980B9", "gray"=>"#909497");
foreach($arrayColors as $x => $x_hex) {
    echo "Color: " . $x . "<br>Hexadecimal equivalent: " . $x_hex . "<br>";
}
echo "<br>";
// 7. Include 12 months in an array named month and print them using loop statement.

$month = ("January","February","March","April","May","June","July","August","September"
,"October","November","December");
foreach($month as $i){
    echo $i . "<br>";
}
echo"<br>";

/*
 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/

/*
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
*/
?>