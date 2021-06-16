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
                <!-- <p>Click <a href="createaccount.php"><b>here</b></a> to create an account! -->
            </section>
        </section>

        <footer>
          <p class="text-center">© all rights reserved</p>
         </footer> 
    </main>
</body>
</html>