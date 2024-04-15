<body>
    <h1>IF - ELSE STATEMENT - SWITCH</h1>
</body>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=1"/>
        <meta name="viewport" content="width=device-width, initial"-/>
        <link rel="stylesheet" href="styles.css">
        <title> LESSON 6 FOR PHP </title>
    </head>
    <body>
        <h2><i>1. IF -ELSE:</i></p>
        <form method="post" action = "Lesson6.php">
            <label>age</label><br>
            <input type="number" name="age"><br>
            <input type="submit" value="Submit">
    </body>
<?php
    //if statement : if some condition is TRUE then do something 
    //             : if some condition is FALSE then don't do 
    echo"************************************************************************************************<br>";
    $age = $_POST["age"]; // input age value
    if ($age >= 18)
    {
        echo"Enough to go to the site";
    }
    elseif($age > 0 && $age <18){
        echo"Not enough to go to the site";
    }
    else {
        echo"Not available";
    }
?>
<body>
    <h2><i>2. SWITCH</h2></i>
    <form method="post" action = "Lesson6.php">
            <label>rank</label><br>
            <input type="text" name="rank"><br>
            <input type="submit" value="Submit">
    </body>
</body>
<?php
    //Switch: Replacement to using many elseif statements
    // More efficient, less code to write
    echo"************************************************************************************************<br>";
    $rank = $_POST["rank"]; //input rank

    switch ($rank){
        case "S"://If the result is rank S => Excellent
            echo"Excellent";
            break;
        case "A"://If the result is rank A => Good
            echo"Good";
            break;
        case "B"://If the result is rank B => Not bad
            echo"Not bad";
            break;
        case "C"://If the result is rank C => Bad
            echo"Bad";
            break;
        case "D"://If the result is rank D => Failed
            echo"Failed";
            break;        
        default:
            echo "Not available";
    }
?>
<body>
    <br>
    <br>
    <img src="https://cdn-icons-png.flaticon.com/512/1200/1200745.png" width="350" height="350" alt="Like free icon" >
<body>
</html>