<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="g1.png" type="image/x-icon">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
    #btnhover:hover{
border-color:#e8eaed;
    }
</style>
<title>Google.com</title>
</head>
<body style="background-color:black;">
<center>
<img src="logo.png" alt="" style="margin-top:300px;">
</center>
<form action=""method="post">
<center><input type="search" name="txturl" class="form-control-lg my-5" style="font-size:16px; color:white;width:600px;background-color:transparent;border-radius:25px;"></center>
<center><input id="btnhover" type="submit"  name="subbtn" value="Google Search" class="btn" style="color:white;background-color:#303134;"></center>
</form>

<?php

if(isset($_POST['subbtn'])){
$uxurl=$_POST['txturl'];
if($uxurl!=null){
header("refresh:0; url=https://www.google.com/search?q=$uxurl&sxsrf=ALiCzsbP33abDGoZ17R6F0MyiXXvUAt_6A%3A1671814026243&source=hp&ei=itulY77FDL2lkdUP8LKB-AE&iflsig=AJiK0e8AAAAAY6XpmsD9_HFgW8UrbJdI9fT_SFz704q8&ved=0ahUKEwi-sqbJmJD8AhW9UqQEHXBZAB8Q4dUDCAg&uact=5&oq=hello&gs_lcp=Cgdnd3Mtd2l6EAMyBwguELEDEEMyBwgAELEDEEMyCgguELEDENQCEEMyBAgAEEMyCgguEMcBENEDEEMyBAgAEEMyCgguELEDEIMBEEMyBwgAELEDEEMyBAguEEMyBAgAEEM6BwgjEOoCECc6BAgjECc6BQguEJECOgsIABCxAxCDARCRAjoLCC4QgAQQxwEQ0QM6CAgAELEDEIMBOgsIABCABBCxAxCDAToLCC4QgAQQsQMQgwE6CAguEIMBELEDOhAILhCxAxCDARDHARDRAxBDOgoIABCxAxCDARBDOgcILhDUAhBDOgUIABCABDoNCC4QsQMQgwEQ1AIQQ1CPO1iQWWD2WmgIcAB4AIAB4wGIAc0LkgEDMi03mAEAoAEBsAEK&sclient=gws-wiz");
}
else{
    echo "<center><h1 class='display-1 mt-5 text-white'>URL Not Found</h1></center>";
}
}

?>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>