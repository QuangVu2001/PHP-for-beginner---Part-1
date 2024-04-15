<body>
    <h1>VARIABLES AND DATA TYPES</h1>
</body>
<?php
//----------------------------------------------------------------------------------------------------------------------------------------------------------------
// LESSON 2: CREATE SOME VARIABLE AND DATATYPES IN PHP
    echo"<b><h2>INTRODUCE MYSELF </b></h2><br>";
    
    //Create "name" variable
    $name = "MystQ ";
    echo "Hello {$name} <br>"; // Print statement "Hello + $name"; 

    //Create "age" variable
    $age = "23"; // Print statement  + $age; 
    echo "I'm {$age} years old <br>";

    //Create "address" variable
    $address = "Vietnam, Ho Chi Minh city "; // Print statement  + $address;
    echo "My address is {$address} <br>";

    $math = "Math <br>";
    $literature = "Literature <br>";
    $english = "English <br>";
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //ARITHMETIC
    echo "<b><i><h2>ARITHMETIC</h2></b></i><br>";
    //VARIABLE 1
    $var_1 = 1;
    echo "<b>Variable 1</b> is: {$var_1}<br>";
    //VARIABLE 2
    $var_2 = 2;
    echo "<b>Variable 2</b> is: {$var_2}<br>";
    //VARIABLE 3
    $var_3 = $var_1 + $var_2;
    echo"<b>Variable 3</b> is addition between <b>variable 1</b> and <b>variable 2</b> is: {$var_3}<br>";
    //VARIABLE 4
    $var_4 = ($var_3 - $var_1) ** $var_2 + $var_3;
    echo"<b>Variable 4</b> is: <br><img src='image\bcf.png' alt=''><br>";
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //You can combine numeric variables (integer, float, ...) and string variables (character)
    echo "<b><i>You can combine numeric variables and string variables </b></i><br>";
    echo "<i>Example:</i><br>";
    echo "***************************************************************************<br>";
    //echo"({$math}*2) + ({$literature}*2) + $english
    echo"My exam results count as: <br><img src='image\a.png' alt ='result' width='750' height='150'><br>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=1"/>
        <meta name="viewport" content="width=device-width, initial"-/>
        <link rel="stylesheet" href="styles.css">
        <title> LESSON 2 FOR PHP </title>
    </head>
    <body>
        <br>
        <br>
        <img src="https://cdn-icons-png.flaticon.com/512/1200/1200745.png" width="350" height="350" alt="Like free icon" >
    <body>
</html>

