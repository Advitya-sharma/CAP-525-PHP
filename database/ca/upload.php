<?php
      $conn = new mysqli('localhost','root','','ca');
      if ($conn->connect_error) {
        die("Connection failed: " .
        $conn->connect_error); 
    }

if(isset($_POST['button']) && $_FILES["file"]['name'] !=''){
    $file = $_FILES['file']['name'];
    $loc = $_FILES['file']['tmp_name'];
    $folder="uploads/";
    move_uploaded_file($loc,$folder.$file);
    $sql="INSERT INTO upload VALUES('$file')";
    mysqli_query($conn,$sql);
    echo '<script type="text/javascript">
    window.location = "http://localhost/ca/uploadIndex.php";
    </script>';
}
else{
    echo "<script>alert('error: select file')</script>";
}

?>