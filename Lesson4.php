<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=1"/>
        <meta name="viewport" content="width=device-width, initial"-/>
        <link rel="stylesheet" href="styles.css">
        <title> LESSON 4 FOR PHP </title>
    </head>
<body>
    <h1>GET AND POST IN PHP</h1><br>
    <h2>Username and Password</h2><br>
    <p> You need to create username and password in HTML tags.</p><br>

    <form action="Lesson4.php" method="get">
    <label>
        username: </label><br>
    <input type="text" name="username"><br>
    <label>
        password: </label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="log in"><br> 
</body>
<?php 
//-------------------------------------------------------------------------------------------------------------------------------------------------
// Lesson 4: GET AND POST IN PHP
//DEFINITIONS
    //$GET , $POST: special variables used to collect data from a HTML form data
    //              is to sent the file in the action attributes of <form>
    //              <form action="index.php" method="get">
    
    //$GET :        Data is appended to the url
    //              NOT SECURE
    //              char limited
    //              bookmark is possible
    //              GET request can be cached
    //              Better for the search page
//************GET****************************************************************** *//
    echo"<i>Display username and password using GET<br></i>";
    //---------------------------------------------------------------
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        echo "{$_GET["username"]}<br>"; //print username 
        echo "{$_GET["password"]}<br>"; //print password
    }
?>

<body>
    <h2>Example1: Identify user </h2>
    <p>Create a your identify </p>
    <form method="post" action="Lesson4.php">
    <label>
        firstname</label><br>
    <input type="text" name="firstname"><br>
    <label>
        lastname</label><br>
    <input type="text" name="lastname"><br>
    <label>
        phone</label><br>
    <input type="text" name="phone"><br>
    <label>
        address</label><br>
    <input type="text" name="address"><br>
    <label>
        ID</label><br>
    <input type="text" name="ID"><br>
    <input type="submit" value = "result"><br>
</body>
<?php
    //$POST :       Data is packed inside the body of the HTTP request
    //              MORE SECURE
    //              No data limit
    //              Cannot bookmark
    //              GET request can't be cached
    //              Better for submitting credentials

//************POST****************************************************************** *//
    echo"<i>Display results using POST<br></i>";
    //---------------------------------------------------------------
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "{$_POST["firstname"]}<br>"; //print your name
        echo "{$_POST["lastname"]}<br>"; //print ID
        echo "{$_POST["phone"]}<br>";
        echo "{$_POST["address"]}<br>";
        echo "{$_POST["ID"]}";
    }
?>
<body>
    <br>
    <br>
    <img src="https://cdn-icons-png.flaticon.com/512/1200/1200745.png" width="350" height="350" alt="Like free icon" >
<body>
</html>