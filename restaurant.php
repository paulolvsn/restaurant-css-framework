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
               <section class="col-6 col-md-3">
                   <h4>ABOUT</h4>
                   <p class="text-justify">Saudade is an indescribable word in Portuguese that translates in a feeling of longing, yearning, but also in some depths of nostalgia. Saudade opened in 2010 and has now more than a decade of high quality Brazilian food. We serve Brazilian appetizers, such as coxinha and pão de queijo, but also main dishes, such as feijoada, moqueca de peixe, virado à paulista. Make sure to check our <a href="contact.html"> contact page</a> to make a reservation!</p>
               </section>
               <section class="col-6 col-md-3">
                   <h4>OPENING HOURS</h4>
                       <ul><b>Monday</b> 12-22</ul>
                       <ul><b>Tuesday</b> closed</ul>
                       <ul><b>Wednesday</b> 12-22</ul>
                       <ul><b>Thursday</b> 12-22</ul> 
                       <ul><b>Friday</b> 12-22</ul>
                       <ul><b>Saturday</b> 16-22</ul>
                       <ul><b>Sunday</b> closed</ul>
           </section>
               <section class="col-6 col-md-3">
                   <h4>LOCATIONS</h4>
                   <p>Chaussée de Waterloo, 195</p>
                   <p>Rue de Bailli, 45</p>
                   <p>Rue de Flandre, 55</p>
                   <p>Chaussée de Boondael, 460</p>
               </section>
               <section class="col-6 col-md-3">
                   <h4>MAPS</h4>
                  <!--Google map-->
<div id="map-container-google-2" class="z-depth-1-half map-container" class="img-fluid">
    <iframe src="https://maps.google.com/maps?q=Waterloosesteenweg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
      style="border:0" allowfullscreen></iframe>
  </div>
               </section>
           </section>
           <footer>
            <p class="text-center">© all rights reserved</p>
           </footer>
       </main>
    </body>
    </html>