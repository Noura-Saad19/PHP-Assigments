<?php


// Assigment 1
// 1- We have a message encoded in ASCII hexadecimal format. For example: 
// $hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921'; 
// Decode it back to read the message
$hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
echo "the message is : ". hex2bin($hexMessage);
echo "<hr>";

// ========================================================================

// 2- We have HTML content stored inside a variable. For example: 
// $htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>"; 
// Find a way to remove all HTML tags from the content (keeping only the text inside it) 

$htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
echo "the message is : ". strip_tags($htmlContent) ."<br>" ;
// echo "the message is : ". htmlspecialchars($htmlContent); ---to know if any one want to hack me
echo "<hr>";

// ========================================================================

// 3- Some of our website users submit their form inputs with extra spaces (before or after the actual data). For example: 
// $username = " Kareem Fouad "; 
// Find a way to remove these extra spaces. 

$username = " Kareem Fouad ";
echo  var_dump($username) ."<br>";
echo "the username is : ". trim($username)."<br>";
echo  var_dump(trim($username))."<br>";
echo "<hr>";

// ========================================================================
// 4- Displaying large numbers in the website may be hard to read. 
// It’s too hard to read a number like this: 
// $num = 15023198.91; 
// Find a way to display the numbers in this grouped format: 15,023,198.91
  
$num = 15023198.91;
echo "The number is : ". number_format($num,2);
echo "<hr>";


// ========================================================================
// 5- Given an associative array, For example: 
// $employeePositions = [ 
// 'kareem fouad' => 'backend', 
// 'ahmed bahnasy' => 'frontend', 
// 'mohammed nabeel' => 'android', 
// ]; 
// Convert it into two numeric arrays: one for keys only and the other for values only. 

$employeePositions = [ 
'kareem fouad' => 'backend', 
'ahmed bahnasy' => 'frontend', 
'mohammed nabeel' => 'android', 
];

echo "<pre>";
print_r(array_keys($employeePositions));
print_r(array_values($employeePositions));
echo "</pre>";
echo "<hr>";

// ========================================================================
// 6- Given a numeric array of three elements, For example: 
// $nums = [4, 7, 1]; 
// Destructure the array into three variables $x, $y and $z (in only one statement). 

$nums = [4, 7, 1];
list($x,$y,$z)=$nums;
echo "x = ".$x ."   "."y = ".$y."     "."z = ".$z;

echo "<hr>";
// ========================================================================
// 7- Given an associative array, For example: 
// $userData = [ 
// 'name' => 'kareem', 
// 'job' => 'backend', 
// 'language' => 'php', 
// 'framework' => 'laravel', 
// ]; 
// Destructure the array into variables $name, $job … etc (in only one statement, variable names should be the same as key names).

$userData = [ 
'name' => 'kareem', 
'job' => 'backend', 
'language' => 'php', 
'framework' => 'laravel', 
]; 
extract($userData);
echo "Name is : ".$name . "     ". "Job is : ".$job."      "."Language is : ".$language."    ". "framework  is : ".$framework ;
?>