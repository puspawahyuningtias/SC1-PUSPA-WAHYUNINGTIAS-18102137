<!DOCTYPE html>
<html>

<body>
    <!-- PHP String -->
    <?php
    $x = "Hello world!";
    $y = 'Hello world!';

    echo $x;
    echo "<br>";
    echo $y;
    ?>
    <br>
    <!-- PHP Integer -->
    <?php
    $x = 5985;
    var_dump($x);
    ?>
    <br>
    <!-- PHP Float -->
    <?php
    $x = 10.365;
    var_dump($x);
    ?>
    <br>
    <!-- PHP Array -->
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    ?>
    <br>
    <!-- PHP Object -->
    <?php
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar->message();
    ?>
    <br>
    <!-- PHP NULL Value -->
    <?php
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    ?>
</body>

</html>