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
       <header>
           <section class="row">
               <section class="col-6 col-md-6">
                   <a href="index.html"><img src="icons/logo.jpg" alt="Welcome to Saudade!" class="float-start" height="35px"></a>
               </section>
               <section class="col-6 md-6 d-flex justify-content-end">
                    <a href="https://www.facebook.com" target="_blank"><img src="icons/facebook.png" alt="Facebook" height="20px"></a>
                    <a href="https://www.instagram.com" target="_blank"><img src="icons/instagram.png" alt="Instagram" height="20px"></a>
                    <a href="https://www.twitter.com" target="_blank"><img src="icons/twitter.png" alt="Twitter" height="20px"></a> 
               </section>
           </section>
       </header> 
       <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="menu.html"><b>MENU</b><span class="sr-only"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="photos.html">PHOTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="restaurant.html">RESTAURANT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>

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
