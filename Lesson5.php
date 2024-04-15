<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=1"/>
        <meta name="viewport" content="width=device-width, initial"-/>
        <link rel="stylesheet" href="styles.css">
        <title> LESSON 5 FOR PHP </title>
    </head>
    <body>
        <h1>MATH FUNCTION</h1>
        <h2>Example 1: Solve the x equation</h2>
        <p>Find x</p><br>
        <form method="post" action = "Lesson5.php">
            <label>x1</label><br>
            <input type="number" name="x1"><br>
            <label>x2</label><br>
            <input type="number" name="x2"><br>
            <label>x3</label><br>
            <input type="number" name="x3"><br>
            <input type="submit" value="result"><br>
        </form>
    </body>
</html>
<?php
//LESSON 5: USING MATH FUNCTIONS FOR GET/POST 
//----------------------------------------------------------------------------------------------------------------------------------------------------------------
    // Using a basic math with GET/POST parameters
    $x1 = $_POST["x1"];
    $total1 = null;

    $total1 = $x1**2;
    echo"Result x: {$total1}<br>";

    $x2 = $_POST["x2"];
    $total2 = null;
    $total2 = $x2/3;
    echo"Result x2: {$total2}<br>";
    
    // Using function math with GET/POST parameters
    $x3 = $_POST["x3"];
    $total3 = null;
    $total3 = abs($x3); //Absolute value
    echo"Result x3: {$total3}<br>";
   
    $x4 = sqrt(($x1+$x2)**2); //Square root of 2
    echo"Result x4: {$x4}<br>";
    
    $x5 = round($x4)+round($x2);//Round a decimal number
    echo"Result x5: {$x5}<br>";
    
    $x6 = pow($x1,$x3);//Round a decimal number
    echo"Result x6: {$x6}<br>";
?>

<body>
    <h2>Example 2: Trigonometric equation</h2>
    <form method="post" action = "Lesson5.php">
        <label>radius</label><br>
        <input type="number" name="radius"><br>
        <input type="submit" value="submit">
    </form>
</body>
<?php 
    $radius = $_POST["radius"];
    
    //diameter of a circle
    $C = 2 * $radius * pi();
    echo"result of diameter: {$C}<br>";
    
    //circle area
    $S= $radius**2 * pi();
    echo"circle area: {$S}<br>";   
?>
<body>
    <br>
    <br>
    <img src="https://cdn-icons-png.flaticon.com/512/1200/1200745.png" width="350" height="350" alt="Like free icon" >
<body>
</html>