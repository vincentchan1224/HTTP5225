<!DOCTYPE html>
<html lang="en">
<head>
    <meta harset="UTF-8">
    <title>week3</title>
<body>
    
<?php 
$hour = rand(1,24);
echo $hour;

if($hour<=11){
    echo '<p>Good Morning!</p>';
}elseif($hour<=18){
    echo '<p>Good Afternoon!</p>';
}else{
    echo '<p>Good Night!</p>';
}


$magicNumber = rand(1,100);
if($magicNumber % (3*5) == 0){
    echo "FizzBuzz";
    echo $magicNumber ;
}elseif($magicNumber % 3 == 0){
    echo "Fizz";
    echo $magicNumber ;
}elseif($magicNumber % 5 == 0){
    echo "Buzz";
    echo $magicNumber ;
}else{
    echo $magicNumber ;
}

?>





</body>
</html>