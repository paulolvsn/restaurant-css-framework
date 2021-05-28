<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <header>
           <section class="row">
               <section class="col-6 col-md-6">
                   <a href="index.html"><img src="logo.jpg" alt="Welcome to Saudade!" class="float-start" height="35px"></a>
               </section>
       </header>
    <main>
        <table class="tablecontact" style="width:100%">
        <thead>
            <tr>
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>email</th>
            <th>message</th>
            </tr>
            </thead>

            <tbody>
                <tr>
                <form method="post" action="backofficecontact.php">
                <td></td>
                <td><input type="text" name="firstname" required></td>
                <td><input type="text" name="lastname" required></td>
                <td><input type="email" name="email" required></td>
                <td><textarea name="message" placeholder="message" rows="1" style="width:100%" required></textarea></td> 
                <td><button type="submit" name="add-message">+</button></td>
            </form>
            </tr>

            <?php
                 try {
                     //on se connecte à mysql
                  $db = new PDO('mysql:host=database;dbname=saudade;charset=utf8', 'root', 'root');
              } catch (Exception $e) 
              {
                  //en cas d'erreur, on affiche un message et on arrête tout
                  die('Erreur : ' . $e->getMessage());
              }

                if(isset($_POST['add-message'])) {
                  $firstname = $_POST['firstname'];
                  $lastname = $_POST['lastname'];
                  $email = $_POST['email'];
                  $message = $_POST['message'];

                  $req = $db->prepare('INSERT INTO contact(firstname, lastname, email, message) VALUES(?,?,?,?)');
                  $req->execute(array($firstname, $lastname, $email, $message));
                }


                //on récupère tout le ocntenu de la table table
                $contact = $db->query('SELECT * FROM contact');
                while ($donnees = $contact->fetch()) {
                    $id = $donnees['id'];
                    $firstname = $donnees['firstname'];
                    $lastname = $donnees['lastname'];
                    $email = $donnees['email'];
                    $message = $donnees['message'];
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$firstname</td>";
                echo "<td>$lastname</td>";
                echo "<td>$email</td>";
                echo "<td>$message</td>";
                echo "<td><form method='post' action='backofficecontact.php'><button type='submit' name='removeGallery' value=$id class='btn-danger'>-</button></form></td>";
                echo "</tr>";
                }
                $contact->closeCursor();
                ?>
                    </tbody>
            </table>
            </body>
                
