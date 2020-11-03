<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tasks</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</head>



<body >
<nav class="text-white navbar navbar-light bg-dark">
  <h2 class="text-white navbar-brand">Task</h2>
  
<form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

<input value="logout" name="logout" hidden>
<button type="submit">Logout</button>
  
</form>

  <?php
  session_start();
    $conn = new mysqli('localhost','root','','ca');
    if ($conn->connect_error) { 
    die("Connection failed: " .$conn->connect_error);
    }
    if(isset($_POST['logout'])){
            date_default_timezone_set("Asia/Calcutta");
            $date = date('m/d/Y h:i:s a', time());
            echo $date;
            $sql = "update time SET logout='".$date."' WHERE login='".$_SESSION['intime']."'";
            $query=mysqli_query($conn,$sql);
             header('Location:http://localhost/assignment/login.php');
             session_destroy();
    }



  ?>
</nav>
<br>
<br>
<div style="display:flex;justify-content: center;align-items: center;flex-direction:column;">
<?php
    
$sql = "select * from tasks";

$query=mysqli_query($conn,$sql);

if(!$query){
echo "query does not work";
}

else{
while($data=mysqli_fetch_array($query)){

echo '<div class="bg-dark card" style="width:400px;margin-top:30px;">
<h3 class="bg-primary">'.$data['taskname'].'</h3>
<h5 class="bg-secondary">'.$data['description'].'</h5>
</div>';
    }
}
?>
</div>

</body>