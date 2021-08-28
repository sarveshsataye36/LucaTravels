<?php  
require_once "config.php";
$username = $password =$confirmpwd =$email = "";
$error = "";

if($_SERVER['REQUEST_METHOD']=="POST"){
    //check the username empty
    if(empty(trim($_POST["username"]))){
        // $username_err = "username cannot be blank";
        header("Location:index.php?register=empty");
        exit();
    }
    else{
        $sql = "SELECT id FROM users WHERE username =?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_user);

            // set the value of param username 
             $param_user = trim($_POST['username']);
 
             // execute the statement
             if(mysqli_stmt_execute($stmt)){
                 mysqli_stmt_store_result($stmt);
                     $username = trim($_POST['username']);
             }
             else{
                header("Location:index.php?register=something_went_wrong");
                exit();
             }
        }
    }
    mysqli_stmt_close($stmt);
 
    // checking for email

    if(empty(trim($_POST["email"]))){
        // $username_err = "username cannot be blank";
        header("Location:index.php?register=email_blank&username=$username");
        exit();
    }
    else{
        $sql = "SELECT id FROM users WHERE email =?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // set the value of param username 
             $param_email = trim($_POST['email']);

             // execute the statement
             if(mysqli_stmt_execute($stmt)){
                 mysqli_stmt_store_result($stmt);
                 if(mysqli_stmt_num_rows($stmt)==1)
                 {
                     // $email_err = "This email already taken";
                     header("Location:index.php?register=email_is_existed&username=$username");
                      exit();
                     
                 }
                 else{
                     $email = trim($_POST['email']);
                 }
             }
             else{
                 // echo "something went wrong";
                 header("Location:index.php?register=something_went_wrong");
                 exit();
             }
        }
    }
    mysqli_stmt_close($stmt);


// check for password

if(empty(trim($_POST['password']))){
    // $password_err = "Password cannot be blank";
    header("Location:index.php?register=password_must_not_blank&username=$username&email=$email");
        exit();
}
elseif(strlen(trim($_POST['password'])) < 8){
    // $password_err= "Password cannot be less than 8";
    header("Location:index.php?register=password_must_contain_eight_char&username=$username&email=$email");
        exit();
}
else {
    $password = trim($_POST['password']);
}

// confirm password field
if(trim($_POST['password']) != trim($_POST['confirmpwd'])){
    // $confirmpwd_err = "password should match";
    header("Location:index.php?register=confirmpassword_must_match&username=$username&email=$email");
        exit();
}

// if there no error insert into database

if(empty($error)){
    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);

        // sets this parameter
        $param_username = $username;
        $param_password = password_hash($password,PASSWORD_DEFAULT);
        $param_email = $email;

        // try to execute the query

        if(mysqli_stmt_execute($stmt)){
            header("location:start.php?register=success");
        }
        else {
            header("Location:index.php?register=something_went_wrong&username=$username&email=$email");
            exit();
        }
    } 
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
} 

?> 
