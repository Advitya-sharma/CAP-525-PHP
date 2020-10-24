<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>company</title>

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    
<style>

.card{
margin-top:20px;
}

</style>

</head>
<body>    

<?php

$conn = new mysqli('localhost','root','','ca');
if ($conn->connect_error) { 
    die("Connection failed: " .$conn->connect_error); 
}
    
echo '<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist">

<a class="nav-item nav-link" class="class" href="#tickets" data-toggle="tab">Book tickets</a>
<a class="nav-item nav-link active" class="class" href="#hotel" data-toggle="tab">Book hotel</a>

</div>
</nav>

<div class="container tab-content" id="nav-tabContent">
<div class="container tab-pane" id="tickets">';


$sql = "select * from ticket ";

$query=mysqli_query($conn,$sql);

if(!$query){
echo "query does not work";
}

else{

while($data=mysqli_fetch_array($query)){

echo "<div class='card bg-dark text-white'>
<h4>Location: ".$data['location']."</h4>
<h6>Mode: ".$data['mode']."</h6>
<p>Price: ".$data['price']." <br/>Date: ".$data['date']."</p>";
echo "<button class='btn btn-primary'>book</button>";
echo "</div>";
}}
?>

</div>


<div class="container tab-pane active" id="hotel">
<form method="POST">
<input type="date" name="date">
<button type="submit" name="submit">Find</button>
</form>

<?php

if(!empty($_POST['date'])){

echo "<br> <br><span class='alert alert-primary'>data shown for date ".$_POST['date']."</span>";

$sql = "select * from hotel where datex='".$_POST["date"]."'";

$query=mysqli_query($conn,$sql);

if(!$query){
echo "query does not work";
}
else{

while($data=mysqli_fetch_array($query)){

    echo "<div class='card bg-dark text-danger'>

    <h3>".$data['name']."</h3>";

    echo "<p>Hotel id: ".$data['id']."</p>";

    if($data['available']){

        echo "<button class='btn btn-primary'>book</button>";

        echo "</div>";

    }

    else{ 
        echo "<button class='btn btn-warning'>check another hotel</button></div>"; 
    } 
}
}
}

else{

echo "<br> <br><span class='alert alert-primary'>data shown for all dates</span>";

$sql = "select * from hotel";

$query=mysqli_query($conn,$sql);

if(!$query){
echo "query does not work";
}

else{

while($data=mysqli_fetch_array($query)){

echo "<div class='card bg-dark text-danger'><h3>".$data['name']."</h3>"; 

echo "<p>Hotel id: ".$data['id']."</p>";

if($data['available']){

echo "<button class='btn btn-primary'>book</button>";
echo "</div>";

}
else{ echo "<button class='btn btn-warning'>check another hotel</button></div>"; 
} 
    }
}
}
?>
</div>
</div>
</body>
</html>
