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
       
       <section class="row">
           <section class="col-12 col-md-4">
               <img src="images/abobora.jpg" alt="pumpkin" class="img-fluid">
           </section>
           <section class="col-12 col-md-4">
               <img src="images/mandioca.jpeg" alt="mandioca" class="img-fluid">
           </section>
           <section class="col-1é col-md-4">
               <img src="images/pinhao.jpg" alt="pinhao" class="img-fluid">
           </section>
           <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item active"><a class="page-link" href="photos.php">1</a></li>
              <li class="page-item"><a class="page-link" href="photos2.php">2</a></li>
              <li class="page-item"><a class="page-link" href="photos3.php">3</a></li>
              <li class="page-item"><a class="page-link" href="photos4.php">4</a></li>
              <li class="page-item">
                <a class="page-link" href="photos2.php">Next</a>
              </li>
            </ul>
          </nav>
       </section>
       <footer>
        <p class="text-center">© all rights reserved</p>
       </footer>
    </body>
    </html>