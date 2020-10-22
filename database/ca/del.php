<?php
      $conn = new mysqli('localhost','root','','ca');
      if ($conn->connect_error) {
        die("Connection failed: " .
        $conn->connect_error); 
    }
if(isset($_POST['button'])){
$sql="DELETE FROM cart WHERE name=('".$_POST["name"]."')";
if (mysqli_query($conn, $sql)) {
  echo "Deleted from cart";
} else {
  echo "Error: ".mysqli_error($conn);
}
}

?>
