<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

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
<body>
    <?php
    $conn = new mysqli('localhost','root','','ca');
    if ($conn->connect_error) { 
    die("Connection failed: " .$conn->connect_error); 
        }
if(isset($_POST['username']) || isset($_POST['password'])){
        $sql = "select username,password,type from login where username='".$_POST['username']."' and '".$_POST['password']."'";
        $query=mysqli_query($conn,$sql);
        $data=mysqli_fetch_array($query);

        if(mysqli_num_rows($query)==0){
            echo "query does not work";
        }
        elseif($data['type'] == 'hod'){
            header('Location:http://localhost/assignment/hod.php');
        }
        else{
            session_start();
            date_default_timezone_set("Asia/Calcutta");
            $date = date('m/d/Y h:i:s a', time());
            echo $date;
            $sql = "insert INTO time (login,logout) VALUES('".$date."',0)";
            $query=mysqli_query($conn,$sql);
            $_SESSION['intime'] = $date;
            $_SESSION['name']= $_POST['username'];
            $_SESSION['type']= $_POST['password'];
            header('Location:http://localhost/assignment/tasks.php');
        }
    }     

    ?>
    <h1>Login</h1>
    
<form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <label for="username">username</label>
    <input required class="form-control" type="text" name="username" class="form-control">
    <label  for="password">Password</label>
    <input required class="form-control" type="password" name="password" class="form-control">
    <br>
    <button type="submit" class="btn btn-primary">login</button>
</form>     
</body>