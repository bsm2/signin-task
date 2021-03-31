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
        <h1 >sign up</h1>
        <br>
        <form method="post" action="signupAction.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Adress</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="adress">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        female
                    </label>
                </div>
            </div>

            <button type="submit"  class="btn btn-primary">Submit</button>

        </form>
    </div>

</body>

</html>