<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
    .container {
        min-height: 87vh;

        h1::after {
            content: '';
            display: block;
            border: 3px solid #ee4758;
            width: 100%;
            margin-top: 10px
        }

    }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    <!-- <?php
    // $username = $_GET['sno'];
    $sql = "SELECT * FROM `contacts`;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $email = $row['email'];
        $desc = $row['conern'];
    }
    
    ?> -->
    <?php 
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){ 
        // Insert into contact db
        // $sno = $_POST['sno'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $sql = "INSERT INTO `contacts` (`username`, `email`, `concern`, `dt`) VALUES ('$username', '$email', '$msg', current_timestamp())";        
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your concern has been submitted successfully. Our team will contact with you soon!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }
    
?>

<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
echo'<div class="container my-3">
<h1 class="text-center lg-heading text-black">Contact Us</h1>
<p class="text-gray- my-4 text-monospace ">Let us know your questions, suggestions and concerns by filling out the contact form below:</p>
<form method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="username">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="email address">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="msg" name="msg" rows="3"></textarea>
  </div>
  <button class="btn btn-success">Submit</button>
</form>
</div>';
}
else{
    echo '
    <div class="container">
    <h1 class="text-center lg-heading text-black my-3">Contact Us</h1>
    <p class="lead">You are not logged in. Please login to be able to share your concern.</p>
    </div>
    ';
}

?>

    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>