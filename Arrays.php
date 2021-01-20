<?php

//1. $color = array('white', 'green', 'red', 'blue', 'black');
//Write a script that display the following string -
//"The memory of that scene for me is like a frame of film forever frozen at that
//moment: the red carpet, the green lawn, the white house, the leaden sky. The
//new president and his first lady. - Richard M. Nixon"
//The words 'red', 'green' and 'white' should come from $color variables .

$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that
moment: the ".$color[3]."carpet, the ".$color[1]." lawn, the". $color[0] ."house, the leaden sky. The
new president and his first lady. - Richard M. Nixon";



//2. $color = array('white', 'green', 'red'')
//Write a PHP script that will display the colors in the following order :
//Output :
//white, green, red,
//● green
//● red
//● white

$color = array('white', 'green', 'red');

echo "<ul>";

foreach ($color as $value){
    echo "<li>".$value."</li>";
}



//3. $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
//"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
//"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
//"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
//"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
//Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
//Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest");
//Create a PHP script which displays the capital and country name from the above
//array $cities. Sort the list by the capital of the country.
//Sample Output :
//The capital of Netherlands is Amsterdam
//The capital of Greece is Athens
//The capital of Germany is Berlin

$cities= array(
    "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
    "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
    "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
    Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
    Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest"
);
echo "<ul>";
foreach ($cities as $value){
    echo "<li>".$value."</li>";
}
echo "</ul>";

//4. $x = array(1, 2, 3, 4, 5);
//Delete an element from the above PHP array. After deleting the element, integer
//keys must be normalized.
//Sample Output :
//array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
//array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

function myArr ($num){
    return $num;
}

$x = array(1, 2, 3, 4, 5);
$newArr = array_map("myArr",$x);
print_r($newArr);
echo "<br>";
unset($newArr[3]);
print_r($newArr);
echo "<br>";

//5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
//Write a PHP script to get the first element of the above array.
//Expected result : white

$color = array(4 => 'white', 6 => 'green', 11=> 'red');

echo $color[4]."<br>";

//7. Write a PHP script that inserts a new item in an array in any position.
//Expected Output :
//Original array :
//1 2 3 4 5
//After inserting '$' the array is :
//1 2 3 $ 4 5


$original = array( 1, 2, 3, 4, 5 );
$inserted = array( '$' );
print_r($original);
echo "<br>";
array_splice( $original, 3, 0, $inserted );
print_r($original);
echo "<br>";


//8. Write a PHP script to sort the following associative array :
//array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
//a) ascending order sort by value
//b) ascending order sort by Key
//c) descending order sorting by Value
//d) descending order sorting by Key

$sorting = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

print_r($sorting);
echo "<br>";
//a)
asort($sorting);
foreach ($sorting as $value){
    echo $value;
    echo "<br>";
}
echo "<br>";
//b)
ksort($sorting);

foreach ($sorting as $value){
    echo $value;
    echo "<br>";
}
echo "<br>";
//c)
arsort($sorting);

foreach ($sorting as $value){
    echo $value;
    echo "<br>";
}
echo "<br>";
//d)
krsort($sorting);

foreach ($sorting as $value){
    echo $value;
    echo "<br>";
}
echo "<br>";

//9. Write a PHP script to calculate and display average temperature, five lowest
//and highest temperatures.
//Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
//73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
//Expected Output :
//Average Temperature is : 70.6
//List of seven lowest temperatures : 60, 62, 63, 63, 64,
//List of seven highest temperatures : 76, 78, 79, 81, 85,

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$sum = 0;

$a = array_filter($temperatures);
$average = array_sum($a)/count($a);
echo round($average, 1)."<br>";

asort($temperatures, SORT_NUMERIC);
print_r(array_slice($temperatures, 0, 5, true));
echo "<br>";

rsort($temperatures);
print_r(array_slice($temperatures, 0, 5, true));
echo "<br>";

//11. Write a PHP program to merge the following two arrays.
//Sample arrays :
//$array1 = array(array(70,40), array(25, 45));
//$array2 = array("example", "com");
//Expected Output :
//Array
//(
//[0] => Array
//(
//[0] => example
//[1] => 70
//[2] => 40
//)
//[1] => Array
//(
//[0] => com
//[1] => 25
//[2] => 45
//)
//)

$array1 = array(array(70,40), array(25, 45));
$array2 = array("example", "com");

print_r(array_merge($array1, $array2));
echo "<br>";

//12. Write a PHP function to change the following array's all values to upper or
//lower case.
//Sample arrays :
//$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
//Expected Output :
//Values are in lower case.
//Array ( [A] => blue [B] => green [c] => red )
//Values are in upper case.
//Array ( [A] => BLUE [B] => GREEN [c] => RED )

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function arrUpper ($text){
    return strtoupper($text);
}

$newArr = array_map("arrUpper",$color);
print_r($newArr);
echo "<br>";


//13. Write a PHP script which displays all the numbers between 200 and 250 that
//are divisible by 4.
//Note : Do not use any PHP control statement.
//Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248

$divisibleByFour = array();

for ($i = 200; $i < 250 ; $i ++){
    if($i % 4 == 0){
        array_push($divisibleByFour , $i);
    }
}

print_r( $divisibleByFour);
echo "<br>";

//14. Write a PHP script to get the shortest/longest string length from an array.
//Sample arrays : ("abcd","abc","de","hjjj","g","wer")
//Expected Output : The shortest array length is 1. The longest array length is 4.
$wordsArray = array("abcd","abc","de","hjjj","g","wer");
$shortestWord = strlen($wordsArray[0]);
$longestWord = strlen($wordsArray[0]);
for ($i = 1 ; $i < sizeof($wordsArray) ; $i ++){

    if(strlen($wordsArray[$i]) > $longestWord){
        $longestWord = strlen($wordsArray[$i]);
    }

    if(strlen($wordsArray[$i]) < $shortestWord){
        $shortestWord = strlen($wordsArray[$i]);
    }
}

echo "The shortest array length is ".$shortestWord.". The longest array length is ".$longestWord."<br>";


//15. Write a PHP script to generate unique random numbers within a range.
//Sample Range : (11, 20)
//Sample Output : 17 16 13 20 14 19 18 15 11 12

for ($i = 1 ; $i < 10 ; $i ++){
    echo  rand(11, 20);
    echo "<br>";
}

//16. Write a PHP script to get the largest key in the array.


$max_key = max( array_keys( $wordsArray) );
 echo $max_key;


//17. Write a PHP function that returns the lowest integer in the array that is not 0.

$numbersArr = array(-1,0,1,12,-100,1);

// function minimumValue(Array $values)
// {
// return min(array_diff(array_map('intval', $values), array(0)));
// }

$shortestNumber = strlen($numbersArr[0]);
for ($i = 1 ; $i < sizeof($numbersArr) ; $i ++){

    if($numbersArr[$i] != 0) {
        if ($numbersArr[$i] < $shortestNumber) {
            $shortestNumber = strlen($numbersArr[$i]);
        }
    }
}

echo $shortestNumber;


//18. Write a PHP function to floor decimal numbers with precision.
//Note: Accept three parameters number, precision, and $separator
//Sample Data :
//1.155, 2, "."
//100.25781, 4, "."
//-2.9636, 3, "."
//Expected Output :
//1.15
//100.2578
//-2.964

 function floorDecimal($number, $precision, $separator)
 {
 $numberApart = explode($separator, $number);
 $number_part[1]=substr_replace($numberApart[1],$separator,$precision,0);
 if($numberApart[0]>=0)
 {$numberApart[1]=floor($numberApart[1]);}
 else
 {$numberApart[1]=ceil($numberApart[1]);}

 $ceil_number= array($numberApart[0],$numberApart[1]);
 return implode($separator,$ceil_number);
 }
 print_r(floorDecimal(1.155, 2, ".")."\n");
 print_r(floorDecimal(100.25781, 4, ".")."\n");
 print_r(floorDecimal(-2.9636, 3, "."));


//19. Write a PHP script to print "second" and Red from the following array.
//Sample Data :
//$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
//    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
//    "holes" => array ( "First", 5 => "Second", "Third"));



 $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
 "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
 "holes" => array ( "First", 5 => "Second", "Third"));
 echo $color["holes"][5];
 echo $color["color"]["a"];


//20. Write a PHP function to sort an array according to another array acting as a
//priority list.


 function listNum($a, $b)
 {
   global $orderNum;

   foreach($orderNum as $key => $value)
     {
       if($a==$value)
         {
           return 0;
           break;
         }

       if($b==$value)
         {
           return 1;
           break;
         }
     }
 }

$orderNum[0] = 1;
$orderNum[1] = 3;
$orderNum[2] = 4;
$orderNum[3] = 2;

$orderNum[0] = 2;
$orderNum[1] = 1;
$orderNum[2] = 3;
$orderNum[3] = 4;
$orderNum[4] = 2;
$orderNum[5] = 1;
$orderNum[6] = 2;

 usort($array, "listNum");

 print_r($array);
 echo "<br>";

//24. Write a PHP script to sort an array using case-insensitive natural ordering.

$names = array(
    "ashraf", "abed", "monther", "ahmed"
);
sort($names, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($names as $key => $val) {
    echo "names[" . $key . "] = " . $val;
}