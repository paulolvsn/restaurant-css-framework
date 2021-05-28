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
              <a class="nav-link" href="photos.html"><b>PHOTOS</b></a>
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