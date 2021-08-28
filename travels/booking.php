<?php
 require_once "config.php";

 $username = $mobile = $caddress = $faddress = $sdate = $ldate = $trip = $member = "";
 
 $error="";
 

 if($_SERVER['REQUEST_METHOD']=="POST"){
    //check the username empty
    if(empty(trim($_POST["username"]))){
        // $username_err = "username cannot be blank";
        header("Location:start.php?booking=empty_name");
        exit();
    }
    else{
        $sql = "SELECT id FROM booking WHERE username =?";
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
                header("Location:start.php?booking=something_went_wrong");
                exit();
             }
        }
    }
    mysqli_stmt_close($stmt);
   
    // check for mobile number

    if(empty(trim($_POST['mobile']))){
        header("Location:start.php?booking=empty_mobile");
        exit();
    }
    elseif(strlen(trim($_POST['mobile'])) < 10){
        header("Location:start.php?booking=mobile_incorrect");
        exit();
    }
    else {
        $mobile = trim($_POST['mobile']);
    }

    // check for caddress

        if(empty(trim($_POST["caddress"]))){
            header("Location:start.php?booking=empty_caddress");
            exit();
        }
        else{
            $sql = "SELECT id FROM booking WHERE caddress =?";
            $stmt = mysqli_prepare($conn, $sql);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt, "s", $param_cadd);
    
                // set the value of param username 
                 $param_cadd = trim($_POST['caddress']);
     
                 // execute the statement
                 if(mysqli_stmt_execute($stmt)){
                     mysqli_stmt_store_result($stmt);
                         $caddress = trim($_POST['caddress']);
                 }
                 else{
                    header("Location:start.php?booking=something_went_wrong");
                    exit();
                 }
            }
        }
  
        // mysqli_stmt_close($stmt);

            // check for faddress

            if(empty(trim($_POST["faddress"]))){
                header("Location:start.php?booking=empty_faddress");
                exit();
            }
            else{
                $sql1 = "SELECT id FROM booking WHERE faddress =?";
                $stmt1 = mysqli_prepare($conn, $sql1);
                if($stmt1)
                {
                    mysqli_stmt_bind_param($stmt1, "s", $param_fadd);
        
                    // set the value of param username 
                     $param_fadd = trim($_POST['faddress']);
         
                     // execute the statement
                     if(mysqli_stmt_execute($stmt1)){
                         mysqli_stmt_store_result($stmt1);
                             $faddress = trim($_POST['faddress']);
                     }
                     else{
                        header("Location:start.php?booking=something_went_wrong");
                        exit();
                     }
                }
            }
            mysqli_stmt_close($stmt1);
            
            // check for sdate

            if(empty(trim($_POST["sdate"]))){
                header("Location:start.php?booking=empty_sdate");
                exit();
            }
            else{
                $sql2 = "SELECT id FROM booking WHERE sdate =?";
                $stmt2 = mysqli_prepare($conn, $sql2);
                if($stmt2)
                {
                    mysqli_stmt_bind_param($stmt2, "s", $param_sdate);
        
                    // set the value of param username 
                     $param_sdate = trim($_POST['sdate']);
         
                     // execute the statement
                     if(mysqli_stmt_execute($stmt2)){
                         mysqli_stmt_store_result($stmt2);
                             $sdate = trim($_POST['sdate']);
                     }
                     else{
                        header("Location:start.php?booking=something_went_wrong");
                        exit();
                     }
                }
            }
            mysqli_stmt_close($stmt2);
            
            // check for ldate

            if(empty(trim($_POST["ldate"]))){
                header("Location:start.php?booking=empty_ldate");
                exit();
            }
            else{
                $sql3 = "SELECT id FROM booking WHERE ldate =?";
                $stmt3 = mysqli_prepare($conn, $sql3);
                if($stmt3)
                {
                    mysqli_stmt_bind_param($stmt3, "s", $param_ldate);
        
                    // set the value of param username 
                     $param_ldate = trim($_POST['ldate']);
         
                     // execute the statement
                     if(mysqli_stmt_execute($stmt3)){
                         mysqli_stmt_store_result($stmt3);
                             $ldate = trim($_POST['ldate']);
                     }
                     else{
                        header("Location:start.php?booking=something_went_wrong");
                        exit();
                     }
                }
            }
            mysqli_stmt_close($stmt3);

            // check for trip

            if(empty(trim($_POST["trip"]))){
                header("Location:start.php?booking=empty_trip");
                exit();
            }
            else{
                $sql4 = "SELECT id FROM booking WHERE trip =?";
                $stmt4 = mysqli_prepare($conn, $sql4);
                if($stmt4)
                {
                    mysqli_stmt_bind_param($stmt4, "s", $param_trip);
        
                    // set the value of param username 
                     $param_trip = trim($_POST['trip']);
         
                     // execute the statement
                     if(mysqli_stmt_execute($stmt4)){
                         mysqli_stmt_store_result($stmt4);
                             $trip = trim($_POST['trip']);
                     }
                     else{
                        header("Location:start.php?booking=something_went_wrong");
            exit();
                     }
                }
            }
            mysqli_stmt_close($stmt4);

            // check for member

            if(empty(trim($_POST["member"]))){
                header("Location:start.php?booking=empty_member");
        exit();
            }
            else{
                $sql5 = "SELECT id FROM booking WHERE member =?";
                $stmt5 = mysqli_prepare($conn, $sql5);
                if($stmt5)
                {
                    mysqli_stmt_bind_param($stmt5, "s", $param_member);
        
                    // set the value of param member 
                     $param_member = trim($_POST['member']);
         
                     // execute the statement
                     if(mysqli_stmt_execute($stmt5)){
                         mysqli_stmt_store_result($stmt5);
                             $member = trim($_POST['member']);
                     }
                     else{
                        header("Location:start.php?booking=something_went_wrong");
                        exit();
                     }
                }
            }
            mysqli_stmt_close($stmt5);


            // if there no error insert into database

if(empty($error)){
    $sql6 = "INSERT INTO booking (username, mobile, caddress, faddress, sdate, ldate, trip, member) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt6 = mysqli_prepare($conn, $sql6);
    if($stmt6)
    {
        mysqli_stmt_bind_param($stmt6, "ssssssss", $param_username, $param_mobile, $param_cadd, $param_fadd, $param_sdate, $param_ldate, $param_trip, $param_member);

        // sets this parameter
        $param_username = $username;
        $param_mobile = $mobile;
        $param_cadd = $caddress;
        $param_fadd = $faddress;
        $param_sdate = $sdate;
        $param_ldate = $ldate;
        $param_trip = $trip;
        $param_member = $member;
          

        // try to execute the query

        if(mysqli_stmt_execute($stmt6)){
            header("location:start.php?booking=sucess");
        }
        else {
            header("Location:start.php?booking=something_went_wrong");
            exit();
        }
    } 
    mysqli_stmt_close($stmt6);
}
mysqli_close($conn);
} 
?>    