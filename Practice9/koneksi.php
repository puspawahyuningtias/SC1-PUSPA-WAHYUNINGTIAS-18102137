<?php
 $servername = "localhost";
 $username = "ifscxyz1_18102137";
 $password = "FxfBMRkVay2s";
 $dbname = "ifscxyz1_18102137";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
?>