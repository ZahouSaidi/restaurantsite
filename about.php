<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>à propos</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>à propos de nous</h3>
   <p><a href="home.php">maison</a> <span> / à propos</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Pourquoi nous choisir?</h3>
        <h2> Choisissez-nous pour une expérience gastronomique exceptionnelle, alliant passion, qualité et praticité. <br>
 Notre équipe dévouée prépare des plats délicieux avec des ingrédients frais, offrant une diversité allant des classiques aux créations audacieuses.  <br>
  Nous sommes votre porte d'entrée vers un monde de saveurs exquises, livrées directement à votre porte. <br>
   Notre engagement envers l'excellence culinaire, la rapidité de service et une expérience sans tracas fait de nous le choix évident.  <br> 
   Optez pour bien plus qu'un simple repas, choisissez une véritable aventure gustative avec nous.<br></p></h2>
            <a href="menu.php" class="btn">nos menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">étapes simples</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choisir la commande</h3>
         <p>Faites votre choix parmi notre délicieuse sélection de plats, en quelques clics . <br> Découvrez la diversité de nos options et trouvez le plat parfait pour satisfaire vos papilles.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>livraison rapide</h3>
         <p>Profitez d'une livraison rapide et efficace directement à votre porte. <br> Notre équipe dédiée veille à ce que votre commande arrive rapidement, préservant ainsi la fraîcheur et la saveur de votre repas.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Profiter de la nourriture</h3>
         <p>Savourer chaque bouchée de votre repas fraîchement livré. <br> Laissez-vous emporter par les saveurs exquises que nous avons préparées avec soin pour votre plaisir gastronomique.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">avis clients</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>"Une véritable explosion de saveurs dans chaque plat! La diversité du menu est impressionnante, et la livraison a toujours été ponctuelle. 
               <br> Mon restaurant préféré !"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mehdi Ben Youssef</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>"Les plats sont préparés avec une telle attention aux détails et une qualité exceptionnelle. 
                <br> La livraison est rapide, et chaque bouchée est un délice. <br> Je recommande vivement!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Amina Bouazizi</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>"J'ai été agréablement surpris par la fraîcheur des ingrédients et la présentation soignée de chaque plat.
                La variété des options convient à tous les goûts. <br>
                <br>Une expérience culinaire remarquable!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Anis Trabelsi</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>"La livraison est toujours rapide et les plats sont chauds à l'arrivée. 
                <br>J'apprécie la facilité de navigation sur le site pour passer ma commande. 
                <br>Service impeccable!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Noura Jlassi</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>"Chaque plat est une œuvre d'art culinaire. Les saveurs sont authentiques, et la livraison est toujours à temps.
                <br> Une expérience gastronomique exceptionnelle dans le confort de chez moi!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sami Gharbi</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>Une expérience exceptionnelle! La qualité des plats est inégalée, et la livraison a été rapide. 
                <br>J'ai particulièrement apprécié la saveur authentique de chaque bouchée. Cinq étoiles bien méritées!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Salma Kharrat</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>