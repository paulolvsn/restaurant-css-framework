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

      <main>

      <?php
                 try {
                  $db = new PDO('mysql:host=database;dbname=saudade;charset=utf8', 'root', 'root');
              } catch (Exception $e) {
                  die('Erreur : ' . $e->getMessage());
              }
                if(isset($_POST['create-account'])) {
                  $firstname = $_POST['firstname'];
                  $familyname = $_POST['familyname'];
                  $email = $_POST['email'];
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $req = $db->prepare('INSERT INTO account(firstname, familyname, email, username, password) VALUES(?,?,?,?,?)');
                  $req->execute(array($firstname, $familyname, $email, $username, $password));

                  echo 'You\'ve been sent a confirmation email!';

                  $to      = $email; // Send email to our user
                    $subject = 'Signup | Verification'; // Give the email a subject 
                    $message = '
                    
                    Thanks for signing up!
                    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                    
                    ------------------------
                    Username: '.$username.'
                    Password: '.$password.'
                    ------------------------
                    
                    Please click this link to activate your account:
                    http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
                    
                    '; // Our message above including the link
                                        
                    $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
                    mail($to, $subject, $message, $headers); // Send our email
                } ?>

      <section class="row">
            <section class="d-flex justify-content-center">
        <form method="post" action="createaccount.php">
            <label class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname">
            <label class="form-label">Family name</label>
            <input type="text" class="form-control" name="familyname">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            <button type="submit" class="btn btn-dark" name="create-account">SEND</button> 

        </form>
      </main>