<body>
    <h1> ISSET AND EMPTY</h1>
    ****************************************************************************************************************
    <p><i>Example: </i></p>
</body>
<?php
    // Isset and empty
    // Definition:
    // Isset: Return TRUE if a variable is declared and not NULL
    // Empty: Return TRUE if a variable is not declared and can NULL
    $username = null;
    //$email = null;
    //$password = null;
    if (isset($username)){
        echo"This variable is set";
    }
    else
    {
        echo"This variable is NOT set";
    }
?>
<body>
    <p><i>Example 2:</i></p><br>
    <form action="Lesson10.php" method = "post">
        <label> 
            Input your username: </label> 
        <input type="text" name="user"><br>
        <label> 
            Input your email: </label>
        <input type="text" name="email"><br>
        <label> 
            Input your password: </label>
        <input type="password" name="pass"><br>
        <input type="submit" value="log in"><br>
    </form>
</body>
<?php
    if(isset($_POST["user"]) && isset($_POST["user"]) && isset($_POST["user"])){
        $user = $_POST["user"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        if(empty($user)){
            echo "Username is missing";
        }
        elseif(empty($email)){
            echo "Email is missing";
        }
        elseif(empty($pass)){
            echo "Password is missing";
        }
        else{
            echo "Hello {$user}";
        }
    }
?>
<body>
    <br>
    <br>
    <img src="https://cdn-icons-png.flaticon.com/512/1200/1200745.png" width="350" height="350" alt="Like free icon" >
<body>