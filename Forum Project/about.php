<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
         .container {
        min-height: 87vh;
         }
         
        h2::after {
            content: '';
            display: block;
            border: 3px solid #ee4758;
            width: 100%;
            margin-top: 10px
        }

    </style>
  </head>
  <body>
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_header.php';?>
<div class="container my-3">
<h2 class=" lg-heading text-black">About Us</h2>
<div id="list-example" class="list-group my-4">
<ol>
  <li><a class="list-group-item list-group-item-action" href="#list-item-1">Why made ?</a></li>
  <li><a class="list-group-item list-group-item-action" href="#list-item-2">Made using ?</a></li>
  <li><a class="list-group-item list-group-item-action" href="#list-item-3">Database used ?</a></li>
  <li><a class="list-group-item list-group-item-action" href="#list-item-4">Server used to host ?</a></li>
  <li><a class="list-group-item list-group-item-action" href="#list-item-5">Is it made using any framework ?</a></li>
  <li><a class="list-group-item list-group-item-action" href="#list-item-6">Use of this forum?</a></li>
  <li><a class="list-group-item list-group-item-action" href="#list-item-7">Contact us</a></li>
  </li>
</div>

</div>
  <?php include 'partials/_footer.php';?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>