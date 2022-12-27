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

<h1 class="text-center mt-3">Log In Form</h1>

<div class="container">
    <center>
<form class="mt-5 card card-body bg-dark text-white" style="width:60%;" action="insert.php" method="post">
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Email</label>
<div class="col-sm-10">
<input type="email" name="uxemail" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label !">Password</label>
<div class="col-sm-10">
<input type="password" name="uxpass" class="form-control form-control-sm" id="colFormLabel" placeholder = " Enter Your Password ">
</div>
</div>

<input type="submit" value="Log in" class="form-control">

</form>
</center>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>