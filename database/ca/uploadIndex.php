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
  </head>

  <body>
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" href="#upload" data-toggle="tab"
          >upload file</a
        >
        <a class="nav-item nav-link" href="#student" data-toggle="tab"
          >student section</a
        >
      </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
      <div class="container tab-pane active" id="upload">
        <form
          action="upload.php"
          class="form-group"
          method="post"
          enctype="multipart/form-data"
        >
          <label>upload file</label>
          <input name="file" type="file" />
          <button type="submit" class="btn btn-primary" name="button">
            submit
          </button>
        </form>
      </div>
      <div class="container tab-pane" id="student">
        <?php 
        $conn = new mysqli('localhost','root','','ca');
        if ($conn->connect_error){
          die("Connection failed: " .
          $conn->connect_error); 
        }
        $sql="SELECT * FROM upload";
        $query=mysqli_query($conn,$sql);

          echo" <table border='1'>
          <tr>
          <td>File Name</td>
          <td>View</td>
          </tr>";

        while($data=mysqli_fetch_array($query)){
         echo" <tr>
         <td>".$data['file']."</td>
         <td>
         <a target='_blank' href='./uploads/".$data['file']."'>click</a>
          </td>
          </tr>";
        }
        echo"</table>";
        ?>
      </div>
    </div>
  </body>
</html>
