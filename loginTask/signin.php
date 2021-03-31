<?php 
    session_start();
    if(isset($_SESSION['name'])){

        header('Location: userProfil.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h1 >sign in</h1>
        <br>
        <form method="post" action="signinAction.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit"  class="btn btn-primary">Submit</button>

        </form>
    </div>

</body>

</html>