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
  <h2 class="text-white navbar-brand">Time</h2>
  <a href="http://localhost/assignment/hod.php" class="float-right">Add task</a>
</nav>
<br>
<br>
<div style="display:flex;justify-content: center;align-items: center;flex-direction:column;">
<?php
    $conn = new mysqli('localhost','root','','ca');
    if ($conn->connect_error) { 
    die("Connection failed: " .$conn->connect_error); 
        }

$sql = "select * from time";

$query=mysqli_query($conn,$sql);

if(!$query){
echo "query does not work";
}

else{
while($data=mysqli_fetch_array($query)){

echo '<div class="bg-dark card" style="width:400px;margin-top:30px;">
<h3 class="bg-primary"> login:'.$data['login'].'</h3>
<h5 class="bg-secondary">logout:'.$data['logout'].'</h5>
</div>';
    }
}
?>
</div>

</body>