<body>
    <h1>ARITHMETIC</h1>
</body>
<?php
// LESSON 3: ARITHMETIC IN PHP 
//----------------------------------------------------------------------------------------------------------------------------------------------------------------    
    //Increment/Decrement
    echo"<h2><b>1. Increment/Decrement</b></h2><br>";
    echo"************************************************************************************************<br>";
    echo"<i>Example</i><br>";
    $num = 0;
    $num++; //Increase the number of 1
    echo "Result for <b>num</b> is: {$num}<br>";
    echo "<img src='image\lesson_3_1.png' width = '550' height='180'><br>"; 
    $num1=0;
    $num1-=5; //Convert to negative value
    echo "Result for <b>num1</b> is: {$num1}<br>";
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------    
    //Operator Precedence
    echo"<h2><b>2. Operator Precedence</b></h2><br>";
    echo"************************************************************************************************<br>";
    //Review old lessons
        //VARIABLE 1
        $var_1 = 1;
        echo "<b>Variable 1</b> is: {$var_1}<br>";
        //VARIABLE 2
        $var_2 = 2;
        echo "<b>Variable 2</b> is: {$var_2}<br>";
        //VARIABLE 3
        $var_3 = $var_1 + $var_2;
        echo"<b>Variable 3</b> is addition between <b>variable 1</b> and <b>variable 2</b> is: {$var_3}<br>";
        $result = $var_1 - $var_2 + $var_3 * ($var_1/$var_2)**$var_3 - $var_3 % $var_2;
        echo"<b>result</b> is: {$result} <i>(Using calculator to check)</i><br>"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=1"/>
        <meta name="viewport" content="width=device-width, initial"-/>
        <link rel="stylesheet" href="styles.css">
        <title> LESSON 3 FOR PHP </title>
    </head>
    <body>
        <br>
        <br>
        <img src="https://cdn-icons-png.flaticon.com/512/1200/1200745.png" width="350" height="350" alt="Like free icon" >
    <body>
</html>
