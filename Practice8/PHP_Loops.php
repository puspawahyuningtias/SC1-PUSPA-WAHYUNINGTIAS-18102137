<!DOCTYPE html>
<html>

<body>
    <!-- While Loop -->
    <?php
    $x = 1;

    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
    <br>
    <?php
    $x = 0;

    while ($x <= 100) {
        echo "The number is: $x <br>";
        $x += 10;
    }
    ?>
    <br>
    <!-- do...while Loop -->
    <?php
    $x = 1;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    ?>
    <br>
    <?php
    $x = 6;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    ?>
    <br>
    <!-- for Loop -->
    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    ?>
    <br>
    <?php
    for ($x = 0; $x <= 100; $x += 10) {
        echo "The number is: $x <br>";
    }
    ?>
    <br>
    <!-- Foreach Loop -->
    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>
    <br>
    <?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }
    ?>
    <br>
    <!-- PHP Break -->
    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
    }
    ?>
    <br>
    <!-- PHP Continue -->
    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
    ?>
    <br>
    <!-- Break and Continue in While Loop -->
    <?php
    $x = 0;

    while ($x < 10) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
    <br>
    <?php
    $x = 0;

    while ($x < 10) {
        if ($x == 4) {
            $x++;
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
</body>

</html>