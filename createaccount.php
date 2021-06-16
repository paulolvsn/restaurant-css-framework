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