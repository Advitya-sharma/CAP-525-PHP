<?php
      $conn = new mysqli('localhost','root','','ca');
      if ($conn->connect_error) {
        die("Connection failed: " .
        $conn->connect_error); 
    }
    echo "<h1>shOp heRe nOw</h1>";
echo "<h2><a href='./cart.php'> cart</a></h2>";
    $sql = "select * from products ";
      $query=mysqli_query($conn,$sql);
      if(!$query){
        echo "query does not work";
      }
      else{
      while($data=mysqli_fetch_array($query)){ 
      echo "
      <form action='submit.php' method='post'
      <div class='card bg-dark text-white'>
        <h4>name: ".$data['name']."</h6>
        <p>Price: ".$data['price']."</p>
        <input name='name' value=".$data['name']." hidden />
        ";
        echo "<button name='button' type='submit' class='btn btn-primary'>Add to cart</button>";
        echo "</div>  </form>";
      }} 



    ?>