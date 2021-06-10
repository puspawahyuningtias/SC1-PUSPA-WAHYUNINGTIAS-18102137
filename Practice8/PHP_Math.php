<!DOCTYPE html>
<html>

<body>
    <!-- PHP pi() Function -->
    <?php
    echo (pi());
    ?>
    <br>
    <!-- PHP min() and max() Functions -->
    <?php
    echo (min(0, 150, 30, 20, -8, -200));  // returns -200
    echo (max(0, 150, 30, 20, -8, -200));  // returns 150
    ?>
    <br>
    <!-- PHP abs() Function -->
    <?php
    echo (abs(-6.7));  // returns 6.7
    ?>
    <br>
    <!-- PHP sqrt() Function -->
    <?php
    echo (sqrt(64));  // returns 8
    ?>
    <br>
    <!-- PHP round() Function -->
    <?php
    echo (round(0.60));  // returns 1
    echo (round(0.49));  // returns 0
    ?>
    <br>
    <!-- Random Numbers -->
    <?php
    echo(rand());
    echo (rand(10, 100));
    ?>
    <br>

</body>

</html>