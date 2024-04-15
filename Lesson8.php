<body>
    <h1>LOOP FUNCTION</h1>
</body>
<body>
    <h2>1. FOR LOOP FUNCTION</h2>
    <p> FOR loop: repeat some code a certain of <b>"a"</b> times<br>
    <p><i>Example 1</i></p>
</body>
<?php
    // FOR loop: repeat some code a certain of # times
    for ($i = 0; $i <=5;$i++){  //start = 0 and repeat continious 5 times
        echo"Hello MystQ <br>";
    }
    for ($i = 10; $i <=20;$i+=2){   // Start = 10 and perform an arithmetic progression of 2
        echo $i."<br>";
    }
    for ($i = 10; $i >0;$i-=2){   // Start = 10 and perform a subtraction progression of 2
        echo $i."<br>";
    }
?>
<body>
    <p><i>Example 2: </i></p>
    <form method="post" action="Lesson8.php">
        <label>Input x: </label><br>
        <input type="number" name="x"><br>
        <input type="submit" value="submit">
    </form>
</body>
<?php
    $count = $_POST["x"];
    for ($i = 1; $i <= $count; $i++){ // Count from 1 to count input
        echo $i."<br>";
    }
?>
<body>
    <h2>2. WHILE LOOP FUNCTION</h2>
    <p> WHILE loop: do some code infinitely while some conditions remain true 
    <p><i>Example 3: </i></p><br>
</body>
<?php
    //WHILE loop: do some code infinitely while some conditions remain true
    $y = 0;
    while ($y <= 10){
        $y++;
        echo $y."<br>";
    }
    // COMPARASION FOR AND WHILE
    // Declaration: FOR = for(initialization; condition; iteration){body of 'for' loop}
    //              WHILE= while ( condition) {statements; //body of loop}
    // Format: FOR = Initialization, condition checking, iteration statement are written at the top of the loop.
    //         WHILE = Only initialization and condition checking is done at the top of the loop.
    // Use: FOR = The 'for' loop used only when we already knew the number of iterations.
    //      WHILE = The 'while' loop used only when the number of iteration are not exactly known.
    // Condition: FOR = If the condition is not put up in 'for' loop, then loop iterates infinite times.
    //            WHILE = If the condition is not put up in 'while' loop, it provides compilation error.
    // Initialization: FOR = In 'for' loop the initialization once done is never repeated.
    //                 WHILE = In while loop if initialization is done during condition checking, then initialization is done each time the loop iterate.
    // Iteration statement: FOR = In 'for' loop iteration statement is written at top, hence, executes only after all statements in loop are executed.
    //                      WHILE = In 'while' loop, the iteration statement can be written anywhere in the loop.
?>
<body>
    <br>
    <br>
    <img src="https://cdn-icons-png.flaticon.com/512/1200/1200745.png" width="350" height="350" alt="Like free icon" >
<body>
</html>