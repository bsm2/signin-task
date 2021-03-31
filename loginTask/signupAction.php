<?php 

    session_start();

    require 'connection.php';   

    if($_SERVER['REQUEST_METHOD'] == "POST"){

    function clean($str){

    return stripcslashes(htmlspecialchars(trim($str)));

    }

    $id      = $_POST['id'];
    $name     = clean($_POST['name']);
    $email    = clean($_POST['email']);
    $password = md5(clean($_POST['password']));
    $address  = clean($_POST['address']);
    $gender  = $_POST['gender'];
    

        // Validation 

        $Messages = array();
        if (empty($_POST['name']) || strlen($_POST['name']) <5) {
            $Messages[]='error happend in the name<br>';
        }else{
            echo $_POST['name'].'<br>';
            $_SESSION['name']= $name;
        }
        if ( empty($_POST['email'])|| !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
            $Messages[]= 'error happend in the email <br>';
        }else{
            echo $_POST['email'].'<br>';
            $_SESSION['email']= $email;
        }
        if ( empty($_POST['password']) || strlen($_POST['password']) < 5) {
            $Messages[]='error happend in the password <br>';
        }else {
            echo $_POST['password'].'<br>';
        }
        if (empty($_POST['address']) ) {
            $Messages[]='error happend in the address <br>';
        }else{
            $_SESSION['address']= $address;
            echo $_POST['address'].'<br>';
        }
        if (empty($_POST['gender']) ) {
            $Messages[]='error happend in the address <br>';
        }else{
            $_SESSION['gender']= $gender;
            echo $_POST['gender'].'<br>';
        }

        if( !empty($Messages) ){

            foreach ($Messages as $message) {
                echo $message.'<br>';
            }

        }else{
            $query = "INSERT into users (name,password,email,address,gender) values('$name','$password','$email','$address','$gender')";
            $result =  mysqli_query($con,$query);  
            
            if($result){
                $Messg =  'data inserted ';
            }else{
                $Messg =   'error in insert op';
            }

        }

            echo $Messg;
            //$_SESSION['id']=;
            header('Location: userProfil.php');



    }else{

    $errorMessage =  'Error in request method';

    // header('Location: signup.php?errorMessage='.$errorMessage);


}

?>
