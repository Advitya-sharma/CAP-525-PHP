<?php
      $conn = new mysqli('localhost','root','','ca');
      if ($conn->connect_error) {
        die("Connection failed: " .
        $conn->connect_error); 
    }
    echo "<h1>Cart</h1>";
    $total=0;
      $sql = "SELECT * FROM products WHERE name IN (select * from cart)";
      $query=mysqli_query($conn,$sql);
      if(!$query){
        echo "query does not work";
      }
      else{
      while($data=mysqli_fetch_array($query)){ 
        $total += $data['price'];
      echo "
      <form action='del.php' method='post'
      <div class='card bg-dark text-white'>
        <h4>name: ".$data['name']."</h6>
        <h4>price: ".$data['price']."</h6>
        <input name='name' value=".$data['name']." hidden />";
        echo "<button name='button' type='submit' class='btn btn-primary'>delete</button>";
        echo "</div> </form>";
      }
    echo "\n Total price ".$total;
    } 


?>