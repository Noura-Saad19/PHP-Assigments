<?php
// Assigment 1

// 1-Write a PHP program to print the result of the following operations
// Test Data:
// a. -5 + 8 * 6
// b. (55+9) % 9 
// c. 20 + -3*5 / 8 
// d. 5 + 15 / 3 * 2 - 8 % 3 
// ((25.5 * 3.5 - 3.5 * 3.5) / (40.5 - 4.5)) 

echo "result : " . -5 + 8 * 6 . "<br>";
echo "result : " . (55 + 9) % 9  . "<br>";
echo "result : " . 20 + -3 * 5 / 8 . "<br>";
echo "result : " . 5 + 15 / 3 * 2 - 8 % 3  . "<br>";
echo "result : " . ((25.5 * 3.5 - 3.5 * 3.5) / (40.5 - 4.5))  . "<br>";
echo "<hr>";

//========================================================

// 2-Write a PHP program to compare two numbers
// Input Data:
// Input first integer: 25
// Input second integer: 39
// Expected Output
// 25 != 39                                                                          
// 25 < 39                                                                            
// 25 <= 39 

$firstNumber = 25;
$secondNumber = 39;
if ($firstNumber == $secondNumber) {
    echo "25 == 39 <br>";
}
else{
    echo "25 != 39 <br>";
}
if ($firstNumber >= $secondNumber) {
    echo "25 >= 39 <br>";
}
else{
    echo "25 <= 39 <br>";
}
if ($firstNumber > $secondNumber) {
    echo "25  > 39 <br>";
}
else{
    echo "25 < 39 <br>";
}
echo "<hr>";


//========================================================

// 3-Write a PHP program that accepts three integer values and 
// returns true if one of them is 20 or more 
// and less than the substractions of others.
// Sample Output:
// Input the first number: 20                                            
// Input the second number: 15                                            
// Input the third number: 25                                            
// false

$firstNumber = 20;
$secondNumber = 15;
$thirdNumber = 25;
if (($secondNumber >= 20 && ($thirdNumber - $firstNumber)<20) ||  
($firstNumber >= 20 && ($thirdNumber - $secondNumber)<20) || 
($thirdNumber >= 20 && ($firstNumber - $secondNumber)<20)) {
    echo "true";
} 
else {
    echo "false";
}
echo "<hr>";

// ===========================================================

// 4-Write a PHP program to convert an octal number to a decimal number
// Input Data:
// Input any octal number: 10 
// Expected Output
// Equivalent decimal number: 8

$octalNumber = 10;
echo "Equivalent decimal number : " . octdec(10)  . "<br>";
echo "<hr>";

//===========================================================
// 5-Write a PHP program to print the odd numbers from 1 to 99. Prints one number per line.
// Sample Output:
// Sample Output:
// 1                                                                      
// 3                                                                      
// 5                                                                      
// 7                                                                      
// ....                                                                     

// 95                                                                     
// 97                                                                     
// 99 

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . ' , ';
    }
}
echo '<hr>';

//===========================================================

// 6-Write a PHP program to compute the sum of the prime numbers less than 100.
// Note: There are 25 prime numbers that are there in less than 100.
// 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97 and sum of all these numbers is 1060.

function isPrime($number){
    if($number == 1 )
    {
        return false;
    }
    if($number == 0)
    {
        return false;
    }
    for ($i=2; $i < $number ; $i++) { 
        if($number % $i ==0)
        {
            return false;
            break;
        }
    }
    return true;
}
function printPrime($number)
{
    $prime =[];
    for($i=0 ; $i<=$number ; $i++)
    {
        if(isPrime($i))
        {
            echo $i.",";
            array_push($prime,$i);
            
        }
    }
    echo "<br>"; 
    echo "Sum of prime numbers is  : ". array_sum($prime);
}
printPrime(100);
echo "<hr>";


//===========================================================
// 7-Write a PHP program to print numbers between 1 to 100 which are divisible by 3, 5, and by both
// Sample Output:
// Divided by 3:                                                          
// 3, 6, 9, 12, 15, 18, 21, 24, 27, 30, 33, 36, 39, 42, 45, 48, 51, 54, 57
// , 60, 63, 66, 69, 72, 75, 78, 81, 84, 87, 90, 93, 96, 99,              

// Divided by 5:                                                          
// 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 
// 95,                                                                    

// Divided by 3 & 5:                                                      
// 15, 30, 45, 60, 75, 90,
echo "Divided by 3 & 5: " ;
for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo  $i . ' , ';
    }
}
echo "<br><br>" ."Divided by 3: " ;
for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo  $i . ' , ';
    }
}
echo "<br><br>" ."Divided by 5:";
for ($i = 0; $i <= 100; $i++) {
    if ($i % 5 == 0) {
        echo  $i . ' , ';
    }
}
echo "<br><br>";
echo"<hr>";

//==================================================================================
// 8-Write a PHP program to create and display unique three-digit numbers using 1, 2, 3, 4. 
// Also, count how many three-digit numbers are there.
// Expected Output
// 123                                                      
// 124                                                      
// ...                                            
                                                   
// 431                                                      
// 432                                                      
// The total number of the three-digit-number is 24

$counter=0;
for($i=1;$i<=4;$i++){
    for($j=1;$j<=4;$j++){
        for($k=1;$k<=4;$k++){
            if($i != $j && $j != $k && $i!=$k){
                $counter++;
                echo $i,$j,$k ."<br>";
            }
        }
    }
}
echo "Counter of numbers are : ".$counter;
echo"<hr>";

//===============================================================================
//write a program to filter even numbers from an array, delete all even numbers.
$numbers=[1,2,3,4,5,6,7,8,9,10];
$count=count($numbers)-1;
for($i=0;$i<$count;$i++){
    if($numbers[$i]%2==0){
        unset($numbers[$i]);
    }
}
echo "The array after delete even numbers : ";
print_r($numbers);
echo "<br>";
echo "<hr>";

//==================================================================
// write a program to solve it. There are 2 arrays of numbers that are the same size, we
// need to swap even numbers from array_1 to array_2, and swap all odd numbers from
// array_2 to array_1

$numbers1=[1,2,3,4,5];
$numbers2=[6,7,8,9,10];
$count=count($numbers1)-1;
for($i=0;$i<=$count;$i++){
    if($numbers1[$i]%2==0){
        $numbers2[]=$numbers1[$i];
        unset($numbers1[$i]);
    }
    if($numbers2[$i]%2!=0){
        $numbers1[]=$numbers2[$i];
        unset($numbers2[$i]);
    }
}
print_r($numbers1);
echo "<br>";
print_r($numbers2);
echo "<hr>";
?>