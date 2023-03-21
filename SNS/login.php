<?php
    session_start();

    include("connection.php");
    include("functions.php");
    

    // database connection code
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // get the post records
        $email = $_POST['email'];
        $cust_pass = $_POST['psw'];
        
        
        if(!empty($email) && !empty($cust_pass))
        {
            //read to database
            $query = "select * from customers where email = '$email' limit 1";
            
            $result = mysqli_query($con,$query);
            
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['cust_pass'] === $cust_pass)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                            echo "<script> alert('Logged in Successfully') </script>";
                            echo "<script> window.location = 'index1.php' </script>";
                        die;
                    }
                }
            }
            
            echo "<script> alert('Email or Password is invalid') </script>"; 
            echo "<script> window.location = 'log.html' </script>";
        }else
            echo "<script> alert('Email or Password is invalid') </script>"; 
            echo "<script> window.location = 'log.html' </script>";
    }

  ?>



