<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Hello, world!</title>
</head>
<body>
<center><h1 class="mt-5">User Information</h1></center>

<div class="container">
<table class="table mt-5 table-striped table-bordered">

<tr class="thead-dark">
    <th>#</th>
    <th>Email</th>
    <th>Password</th>
</tr>

<?php

$conn=mysqli_connect("localhost","root","","dblogin_form");
$query="SELECT * FROM `tbluser_detail`";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){
    ?>
<tr>
    <td> <?php echo $row['Sr.no']   ?> </td>
    <td> <?php echo $row['Email']   ?> </td>
    <td> <?php echo $row['Password']   ?> </td>
</tr>
<?php
}
?>



</table>
</div>
<center><a href="loginform.php" class="btn btn-primary my-3">Go Back</a></center>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
