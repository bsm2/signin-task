
<?php 
    session_start();
    if(!isset($_SESSION['name'])){

        header('Location: home.php');
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <br>
    <div class="container" style="background-color: lightgrey ; font-weight: bold; text-align: center;">
        <div class="row">
            <div class="col-md-3">
                <?php
                    echo 'Name: '. $_SESSION['name'];
                ?>
            </div>
            <div class="col-md-3">
                <?php
                    echo 'Email: '.$_SESSION['email'];
                ?>
            </div>
            <div class="col-md-3">
                <?php
                    echo 'Address: '.$_SESSION['address'];
                ?>
            </div>
            <div class="col-md-2">
                <?php
                    echo $_SESSION['gender'];
                ?>
            </div>
            <div class="col-md-1"><button type="button" class="btn btn-info"><a style="text-decoration: none;" href="signout.php">LogOut</a> </button></div>
        </div>
    </div>

    

</body>

</html>