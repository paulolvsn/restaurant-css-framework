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
              <a class="nav-link" href="menu.html">MENU<span class="sr-only"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="photos.html">PHOTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="restaurant.html">RESTAURANT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><b>CONTACT</b></a>
            </li>
          </ul>
        </div>
      </nav> 
    <main>
        <section class="row">
            <section class="col-12 col-md-6">
                <h4 class="float-end">WRITE US</h4>
                <img src="images/feijoada4.jpeg" alt="feijoada" class="img-fluid"> 
            </section>
            <section class="col-12 col-md-6">  
                  <div class="mb-3">

                <!-- CONNECTING TO DATABASE -->

                <?php
                 try {
                  $db = new PDO('mysql:host=database;dbname=saudade;charset=utf8', 'root', 'root');
              } catch (Exception $e) {
                  die('Erreur : ' . $e->getMessage());
              }
                if(isset($_POST['add-message'])) {
                  $firstname = $_POST['firstname'];
                  $lastname = $_POST['lastname'];
                  $email = $_POST['email'];
                  $message = $_POST['message'];

                  $req = $db->prepare('INSERT INTO contact(firstname, lastname, email, message) VALUES(?,?,?,?)');
                  $req->execute(array($firstname, $lastname, $email, $message));

                  echo 'Your message has been sent! Thank you!';
                }

                
                ?>

                  <form method="post" action="contact.php">
                    <label class="form-label">First Name</label>
                    <input type="first-name" class="form-control" name="firstname" placeholder="John">
                    <label class="form-label">Last Name</label>
                    <input type="last-name" class="form-control" name="lastname" placeholder="Doe">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                  <div class="mb-3">
                    <label class="form-label">Tell us</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-dark" name="add-message">SEND</button> 
                  </form>
                  <p>Click <a href="createaccount.php"><b>here</b></a> to create an account!
            </section>
        </section>

        <footer>
          <p class="text-center">© all rights reserved</p>
         </footer> 
    </main>
</body>
</html>