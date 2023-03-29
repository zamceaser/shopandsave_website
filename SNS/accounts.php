<?php

    session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<html>
    <head>
        <link rel="stylesheet" href="acc_styles.css" type="text/css"/>
		<link rel="icon" href="Images/icon.png" />
        
        <script src="https://kit.fontawesome.com/365de3e27b.js" crossorigin="anonymous"></script>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
    </head>
    
    <body>    
        <a style="float:left;margin-left: 2%;" href="index1.php"><h4>Home</h4></a>
        <a style="float:left;margin-left: 90%;" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><h4>Log out</h4></a>
        <div class="container">
            
            <div>
                <h1> Welcome Back, <?php echo $user_data['fname']; ?></h1>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked admin-menu">
                        <li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Home</a></li>
                        <li><a href="http://www.jquery2dotnet.com" data-target-id="Profile"><i class="fa fa-list-alt fa-fw"></i>Profile</a></li>
                        <li><a href="http://www.jquery2dotnet.com" data-target-id="Activity"><i class="fa fa-file-o fa-fw"></i>Activity</a></li>
                        <li><a href="http://www.jquery2dotnet.com" data-target-id="Devices"><i class="fa fa-bar-chart-o fa-fw"></i>Devices</a></li>
                        <li><a href="http://www.jquery2dotnet.com" data-target-id="Messaging"><i class="fa fa-table fa-fw"></i>Messaging</a></li>
                        <li><a href="http://www.jquery2dotnet.com" data-target-id="InstallationJobs"><i class="fa fa-tasks fa-fw"></i>Installation Jobs</a></li>
                        <li><a href="http://www.jquery2dotnet.com" data-target-id="Settings"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>
                    </ul>
                </div>
                <div class="col-md-9 well admin-content" id="home">
                    <p>
                        Hello! This is a forked snippet.<br>
                        
                        <b>Admin Page IS STILL UNDER DEVELOPMENT!!</b>
                    </p>
                    <p>
                        Website is designed and developed  by <a href="https://www.instagram.com/zamceaser/?hl=en" target="_BLANK">Semi Ravitisai</a>
                        <br>
                        Thank you for your patience..
                    </p>
                </div>
                <div class="col-md-9 well admin-content" id="Profile">
                    <p> Name: <b> <?php echo $user_data['fname']; echo " ".$user_data['lname']; ?></b><br>
                     Address: <b> <?php echo $user_data['cust_addr'];?> </b><br>
                     Phone Number: <b> <?php echo $user_data['cust_phone'];  ?> </b><br>
                     Email: <b> <?php echo $user_data['email']; ?></b><br>
                     Date Registered: <b> <?php echo $user_data['date_registered']; ?></b></p>
                </div>
                <div class="col-md-9 well admin-content" id="Activity">
                    Pages
                </div>
                <div class="col-md-9 well admin-content" id="Devices">
                    Charts
                </div>
                <div class="col-md-9 well admin-content" id="Messaging">
                    Table
                </div>
                <div class="col-md-9 well admin-content" id="InstallationJobs">
                    Forms
                </div>
                <div class="col-md-9 well admin-content" id="Settings">
                    Settings
                </div><div class="col-md-9 well admin-content" id="Settings">
                    Log Out
                </div>
            </div>
        </div>
        
        <script>
            $(document).ready(function()
            {
                var navItems = $('.admin-menu li > a');
                var navListItems = $('.admin-menu li');
                var allWells = $('.admin-content');
                var allWellsExceptFirst = $('.admin-content:not(:first)');

                allWellsExceptFirst.hide();
                navItems.click(function(e)
                {
                    e.preventDefault();
                    navListItems.removeClass('active');
                    $(this).closest('li').addClass('active');

                    allWells.hide();
                    var target = $(this).attr('data-target-id');
                    $('#' + target).show();
                });
            });
        </script>

    </body>

</html>