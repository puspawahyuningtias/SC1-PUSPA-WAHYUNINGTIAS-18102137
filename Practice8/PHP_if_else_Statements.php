<!DOCTYPE html>
<html>

<body>

  <!-- The if Statement -->
  <?php
  $t = date("H");

  if ($t < "20") {
    echo "Have a good day!";
  }
  ?>
  <!-- The if...else Statement -->
  <?php
  $t = date("H");

  if ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
  ?>
  <!-- The if...elseif...else Statement -->
  <?php
  $t = date("H");

  if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
  ?>


</body>

</html>