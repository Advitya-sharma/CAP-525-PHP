<?php
      $conn = new mysqli('localhost','root','','ca');
      if ($conn->connect_error) {
        die("Connection failed: " .
        $conn->connect_error); 
    }
if(isset($_POST['button'])){
$sql="INSERT INTO cart(name) VALUE ('".$_POST["name"]."')";
if (mysqli_query($conn, $sql)) {
  echo "added to cart";
} else {
  echo "Error: ".mysqli_error($conn);
}
}

?>
