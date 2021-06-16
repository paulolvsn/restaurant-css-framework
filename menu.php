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
                <img src="images/carne.jpg" class="img-fluid" alt="brazilian meat with fries">
            </section>
            <section class="col-12 col-md-6">
                <h2 class="text-md-center">MENU</h2>
                <ul>Grilled Garlic Artichoke <span class="badge bg-secondary">VEGAN</span></ul> 
                <ul>Shrimp Cocktail</ul>
                <ul>Beef Tartar</ul>
                <ul>Feijoada</ul>
                <ul>Truffle Polenta Fries <span class="badge bg-secondary">VEGETARIAN</span></ul>
                <ul>Truffle Filet Mignon</ul>
                <ul>Black Seabass <span class="badge bg-secondary">NEW</span></ul>
                <ul>Impossible Burger</ul>
                <ul>Fish Moqueca</ul>
                <ul>Virado à Paulista</ul>
            </section>
            <footer>
        <p class="text-center">© all rights reserved</p>
       </footer>
        </section>
    </main>
</body>
</html>