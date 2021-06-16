<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SAUDADE</title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <section class="container-fluid">
             
    <!-- HEADER -->
    <?php include ('header.php'); ?>

<!-- NAVIGATION BAR --> 
   <?php include ('navbar.php') ?>
   

      <?php
          
            mysql_connect('mysql:host=database;dbname=saudade;charset=utf8', 'root', 'root') or die(mysql_error()); // Connect to database server(localhost) with username and password.
            mysql_select_db("account") or die(mysql_error()); // Select registration database.

            if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
                // Verify data
            }else{
                // Invalid approach
            }
            if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
                // Verify data
                $email = mysql_escape_string($_GET['email']); // Set email variable
                $hash = mysql_escape_string($_GET['hash']); // Set hash variable
            }

            $search = mysql_query("SELECT email active FROM account WHERE email='".$email."' AND active='0'") or die(mysql_error()); 
            $match  = mysql_num_rows($search);

            $search = mysql_query("SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
            $match  = mysql_num_rows($search);
  
            echo $match; // Display how many matches have been found -> remove this when done with testing ;)
        ?>
