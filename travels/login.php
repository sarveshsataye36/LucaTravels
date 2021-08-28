<?php
// this script handle login
session_start();

// if user already login 
if(isset($_SESSION['email']))
{
    header("location:start.php");  // start in index
    exit();
}
require_once "config.php";
$email =$password = "";
$err = "";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['email']))){
        // $err = "Please enter valid email or password";
        header("Location:index.php?login=incorrect_email");
        // exit();
    }
    elseif(empty(trim($_POST['password']))) {
        header("Location:index.php?login=incorrect_password&email=$email");
        // exit();
    }
    
    else{
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    }

    if(empty($err))
    {
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email = $email;

        //try to execute the statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt) ==1)  // user already exit
            {
                mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                if(mysqli_stmt_fetch($stmt))
                {
                    if(password_verify($password, $hashed_password))
                    {
                        // this mean password correct allow user to login

                        session_start();
                        $_SESSION["email"] = $email; 
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        //Redirect user to start page
                        header("location:start.php?login=success");
                    }
                    else{
                        header("Location:index.php?login=password_incorrect&email=$email");
                    }
                }
            }
            else{
                header("Location:index.php?login=email_not_existed");
            }

        }
    }
    else{
        header("Location:index.php?login=something_went_wrong");
            // exit();
    }
    
}

?>