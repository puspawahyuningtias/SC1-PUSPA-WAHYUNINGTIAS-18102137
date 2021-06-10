<!DOCTYPE html>
<html>

<body>
    <!-- PHP Integers -->
    <?php
    // Check if the type of a variable is integer   
    $x = 5985;
    var_dump(is_int($x));

    echo "<br>";

    // Check again... 
    $x = 59.85;
    var_dump(is_int($x));
    ?>
    <br>
    <!-- PHP Floats -->
    <?php
    // Check if the type of a variable is float 
    $x = 10.365;
    var_dump(is_float($x));
    ?>
    <!-- PHP Infinity -->
    <?php
    // Check if a numeric value is finite or infinite 
    $x = 1.9e411;
    var_dump($x);
    ?>
    <br>
    <!-- PHP NaN -->
    <?php
    // Invalid calculation will return a NaN value
    $x = acos(8);
    var_dump($x);
    ?>
    <br>
    <!-- PHP Numerical Strings -->
    <?php
    // Check if the variable is numeric   
    $x = 5985;
    var_dump(is_numeric($x));

    echo "<br>";

    $x = "5985";
    var_dump(is_numeric($x));

    echo "<br>";

    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    echo "<br>";

    $x = "Hello";
    var_dump(is_numeric($x));
    ?>
    <br>
    <!-- PHP Casting Strings and Floats to Integers -->
    <?php
    // Cast float to int 
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    ?>

</body>

</html>