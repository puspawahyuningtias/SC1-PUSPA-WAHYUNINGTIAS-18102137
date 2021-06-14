<!DOCTYPE html>
<html>

<body>

    <!-- Create a PHP Constant -->
    <?php
    // case-sensitivex constant name
    // define("GREETING", "Welcome to W3Schools.com!");
    // echo GREETING;
    // 
    ?>

    // ?>
    // <br>
    // <?php
        // define("GREETING","Welcome to W3Schools.com!", true)
        // echo greeting;
        // 
        ?>

    <!-- PHP Constans Array -->
    <?php
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];
    ?>

    <!-- Constants are Global -->
    <?php
    define("GREETING", "Welcome to W3Schools.com!");

    function myTest()
    {
        echo GREETING;
    }

    myTest();
    ?>
</body>

</html>