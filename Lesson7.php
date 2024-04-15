<body>
    <h1>LOGICAL OPERATOR</h1>
    <h2>Case 1</h2>
    <p>Check the authenticity of x</p><br>
    <form method="post" action = "Lesson7.php">
        <label>x</label><br>
        <input type="number" name="x"><br>
        <input type="submit" value="result">
    </form>
</body>
<?php
    // Logical Operators: combine conditions statements 
    // if (condition 1 && condition 2) => both conditions are TRUE
    $x = $_POST["x"];
    if($x>=0 && $x<100)
    {
        echo"Correct";
    }
    else
    {
        echo"Not Correct";
    }
?>
<body>
    <h2>Case 2</h2>
        <p>check if y is a leap year</p><br>
        <form method="post" action = "Lesson7.php">
            <label>year: </label><br>
            <input type="number" name="y"><br>
            <input type="submit" value="result">
        </form>
<body>
<?php
    // if (condition 1 || condition 2) => a least condition is  TRUE
    $y = $_POST["y"];

    if ((($y % 4 == 0) && ($y % 100!= 0)) || ($y%400 == 0))
    {
        echo"This is a leaf year";
    }
    else
    {
        echo"This isn't a leaf year";
    }

?>
<body>
    
</body>
    <br>
    <br>
    <img src="https://cdn-icons-png.flaticon.com/512/1200/1200745.png" width="350" height="350" alt="Like free icon" >
<body>
</html>