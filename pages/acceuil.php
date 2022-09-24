<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/indes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>acceuil</title>
</head>
<body>
<?php
      include '../nav bar/navbar.php'  ?>
   
   <section class=" bg-dark">

     <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/m2 (1).jpg" class="d-block w-100" alt="..." width="">
    </div>
    <div class="carousel-item">
      <img src="../images/m5.jpg" class="d-block w-100" alt="..." width="1200px">
    </div>
    <div class="carousel-item">
      <img src="../images/e.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   </section>

  <section class="container-fluid p-5  bg-light  " >
   <h2 class="text-dark">Annonces</h2>  
  <p  class="text-dark">Retrouver vos chambres aux prix que vous voulez .</p> 
   
  <div class="row row-cols-1 row-cols-md-3 g-5">
  <div class="col-sm">
    <div class="card h-70">
    <a href="">
      <img src="../images/m4.jpg" class="card-img-top" height="300px";
      alt="...">  </a>
      <div class="card-body">
        <h5 class="card-title">Chambre a louer a mermoz</h5>
        <p class="card-text">Chaussure de course de route pour hommes <br> </p>
      

   </div>
  </div>
</div>
    
<div class="col-sm">
    <div class="card h-70">
    <a href="">
      <img src="../images/m4.jpg" class="card-img-top" height="300px";
      alt="...">  </a>
      <div class="card-body">
        <h5 class="card-title">Chambre a louer a mermoz</h5>
        <p class="card-text">Chaussure de course de route pour hommes <br> </p>
      
        
            </div>
    </div>
</div>

<div class="col-sm">
    <div class="card h-70">
    <a href="">
      <img src="../images/m4.jpg" class="card-img-top" height="300px";
      alt="...">  </a>
      <div class="card-body">
        <h5 class="card-title">Chambre a louer a mermoz</h5>
        <p class="card-text">Chaussure de course de route pour hommes <br> </p>
      
        
            </div>
    </div>
</div>

</div>
  </section>
   

<section>
  <div class="container-fluid bg-secondary  p-5">
    <h2 class="text-uppercase text-dark"> trouver un appartement n'a pas été si simple !</h2>
    <p class="text-break text-dark">En vue des difficultes que nous rencontrons pour trouver un appartement ,un studio ou  une maison ;cela nous a amener à créer ce site web pour faciliter l'acces au logement quelque soit ou vous etes , au prix que vous desirer.
      Fini de marcher tout le temps a la recherhe d'un logement ,fini les longues heures d'attentes , fini les milliers de coups files ; A ce Seloger ,votre vie sera plus simple.
    </p>


  <div class="container  mt-3  p-5 bg-white  text-center text-dark border">
   <h1 class="text-start">Devenez Membre</h1>
  
   <p class="text-break font-family:  Calibri, 'Trebuchet MS', sans-serif;"> Vous avez une chambre , une maison ,un appartement , un studio à louer et vous voulez trouver votre prochain locataire , il ni y'a pas mieux que SeLoger pour vous le trouver ,rejoignez-nous dans notre communaute pour permettre à des milliers de potentiels localataires de vous trouver </p>
    <a href="" > <button type="button" class="btn btn-primary">S'inscrire</button></a>
  </div>
</div>
</section>
  <?php
include '../nav bar/footer.php'  ?>
 
</body>
</html>