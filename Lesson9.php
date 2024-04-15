<body>
    <h1>ARRAY</h1>
    <h2>Array</h2>
</body>
<?php
   // array = "variable" which can hold more than one value at a time
    echo"*******************************************************************************<br>";
    echo"<i>Example</i><br>";
    $numbers = array(2, 4, 6, 8, 10);
    
    //array_push($numbers, "egg", 0.123456789); // add some elements to the array

    //array_pop($numbers); // remove elements final from the array

    //array_shift($numbers); // remove first elements from the array

    $reverse = array_reverse($numbers); // reverse order elements in the array
   
    $length = count($reverse); 

    //for ($i = 0; $i < $length; $i++) {
       //echo "the ith element is $i: " . $numbers[$i] . "<br>";
    //}
    for ($i = 0; $i < $length; $i++) {
       echo "the ith element is $i: " . $reverse[$i] . "<br>";
    }
?>
<body>
    <h2>Associatety Array</h2>
</body>
<?php
    //associatety array: an array make of key => value pairs
    echo"*******************************************************************************<br>";
    echo"<i>Example 2</i><br>";
    $capital = array("USA"=>"Washington DC", 
                    "Vietnam"=>"Hanoi", 
                    "Thailand"=>"Bangkok", 
                    "Korea"=>"Seoul");
    //echo $capital["Vietnam"]; //print capital of conntry
    foreach($capital as $key => $value){
        echo "{$key} => {$value} <br>";
    }
?>
<body>
    *************************************************************************************<br>
    <p><i>Example 3:</i></p>
    <form method="post" action ="Lesson9.php">
        <label>
            Input country name: 
        </label>
        <input type="text" name="key">
        <input type="submit" value="submit" />
    </form>
</body>
<?php 
        $caps = array("USA"=>"Washington DC", 
        "Vietnam"=>"Hanoi", 
        "Thailand"=>"Bangkok", 
        "Korea"=>"Seoul",
        "France"=>"Paris",
        "Germany"=>"Berlin",);
        $cap = $caps[$_POST["key"]];
        echo"the capital is: {$cap} <br>";

?>
<body>
    <br>
    <br>
    <img src="https://cdn-icons-png.flaticon.com/512/1200/1200745.png" width="350" height="350" alt="Like free icon" >
<body>
</html>