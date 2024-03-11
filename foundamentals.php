<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
<form method = 'GET'>
    <input type = 'text' name = 'person'>
    <button>SUBMIT</button>
</form>

<?php

//output statements(echo or print)
echo 'Hi there,','<br>';

$name = $_GET['person'];
echo $name.' is a handsome fellow. ', '<br>';
// count te number of words
echo str_word_count('Gilddy clinton '),'<br>';
// determines str len
echo strlen(' Gilddy'),'<br>';
//reverses a str
echo strrev('Gilddy'),'<br>';
// Find the position of the first occurrence of a substring in a string
echo strpos('Gilddy clinton ', 'Gilddy'),'<br>';
// Replace all occurrences of the search string with the replacement string
echo str_replace('Gilddy','Jick', 'Gilddy clinton'),'<br>';

//data types in php
//strings,integers,float, boolean, arrays
//array decleration

$names = array('jick','gilddy','clinton','treasure');
echo $names[0],'<br>';

//arithmetic operators
//+,-,*,%,/, **
//example
echo 5+5,'<br>';
echo 5**5,'<br>';
//assignment operators
$x=10;
$x+=20;
echo $x,'<br>';

// comparism operators
// =,==(comparism check),===(equality n data type), >=,<=,!=
$m = 5;
$y = '8';

if ($m !== $y) {
    echo 'True!','<br>';
}
else {
    echo  'False!','<br>';
}

//increment/decrement operators
$x=10;
echo $x,',';
echo ++$x,',';
echo ++$x,',';
echo --$x,',';
echo --$x,'<br>';

//logical operators
// or(||), and(&&). xor
$m = 12;
$w = 12;
if ($m == $w || $m != $w) {
    echo 'True','<br>';
}

//conditional statements
$p = 2;
if($p==1){
    echo 'Gilddy is cool','<br>';
}
elseif ($p==2) {
   echo 'Gilddy is cool but not friendly','<br>';
}
else{
    echo 'Gilddy is a handsome fellow','<br>';
}

//switch statement in php
$q = 2;
switch($q){
    case 1:
        echo 'php is a hypertext processor';
    break;
    case 2:
        echo 'Today is my bset day on earth';
    break;
    case 3:
        echo 'I enjoyed my days back in high school pretty well';
    break;
    default:
        echo 'check the rules and try again! ';
}
?>
</body>
</html>
