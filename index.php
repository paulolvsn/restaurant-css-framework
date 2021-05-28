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
<script>
badgesHTML = prompt('Combien de badges HTML as-tu ?');

badgesCSS = prompt('Combien de badgets CSS as-tu ?');

totalbadge = parseInt(badgesHTML) + parseInt(badgesCSS);

alert('Woaw, tu as '+totalbadge+" !");


</script>

    <title>SAUDADE</title>
</head>
<body>
   <section class="container-fluid">
       <header>
           <section class="row">
               <section class="col-6 col-md-6">
                   <a href="index.php"><img src="icons/logo.jpg" alt="Welcome to Saudade!" class="float-start" height="35px"></a>
               </section>
               <section class="col-6 md-6 d-flex justify-content-end">
                    <a href="https://www.facebook.com" target="_blank"><img src="icons/facebook.png" alt="Facebook" height="20px"></a>
                    <a href="https://www.instagram.com" target="_blank"><img src="icons/instagram.png" alt="Instagram" height="20px"></a>
                    <a href="https://www.twitter.com" target="_blank"><img src="icons/twitter.png" alt="Twitter" height="20px"></a> 
               </section>
           </section>
       </header>
       <?php include('navbar.php') ?>
  <main>
         <img src="images/feijoada3.jpg" alt="feijoada" class="img-fluid">
           <section class="row">
               <section class="col-12 col-md-4">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1 class="display-6 text-center">WELCOME TO SAUDADE</h1>
                      <p class="lead text-justify"><b>Saudade</b> is a chain of Brazilian restaurants located all over Brussels. Serving everything from <b>coxinha</b> to a nice <b>feijoada</b>. Live Brazilian music every weekend!</p>
                    </div>
                  </div>
               </section>
          <section class="col-12 col-md-3"><h3 class="text-center">PROMOS</h3>
                   <ul><b>MONDAYS:</b> DINNER FOR TWO FOR THE PRICE OF ONE</ul>
                   <ul><b>WEDNESDAYS:</b> HALF PRICE EVERYTHING</ul>
                   <ul><b>HAPPY HOUR:</b> EVERY DAY FROM 17-19</ul>
               </section>
               <section class="col-12 col-md-3 justify-content-end"><h3 class="text-center">NEWS</h3>
               <p class="text-justify">Bolsonaro is the worst "leader" Brazil has elected in several decades. His lack of interest towards minorities and health, environment and education has destroyed our country. Racist, homophobe, sexist and mysogynist, the elected President ends up encouraging like-minded people to express themselves in a more free way. Click <a href="https://www.theguardian.com/world/jair-bolsonaro" alt="Bolsonaro's a piece of shit" target="_blank">here</a> to see what he's been up to lately.</p></section>
           </section>
       </main>
       <footer>
        <p class="text-center">© all rights reserved</p>
       </footer>
    </section>
  </body>
</html>