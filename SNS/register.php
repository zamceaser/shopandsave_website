<?php
    session_start();

    include("connection.php");
    include("functions.php");


    // database connection code
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // get the post records
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $cust_pass = $_POST['psw'];
        $cust_repass = $_POST['psw-repeat'];
        
        
        if($cust_pass == $cust_repass)
        {
            //save to database
            $user_id = random_num(20);
            $query = "INSERT INTO `customers` (`user_id`, `email`,`fname`, `lname`, `cust_pass`) VALUES ('$user_id', '$email', '$fname','$lname', '$cust_pass' )";

            mysqli_query($con, $query);
            
            header("Location: log.html");
            die;
        }else
            echo "ensure that passwords do match";
    }
    
?>