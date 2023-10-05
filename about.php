<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="title">About us</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/5.png" alt="">
         <h3>Pani Chaiyo</h3>
         <p>Pani Chaiyo is a water delivery organaization that deliver water. Pani Chaiyo was establish by Dipesh Tha Shrestha while doing his it project.</p>
         <a href="#" class="btn">Visit Us</a>
      </div>

      <div class="box">
         <img src="images/Dipesh.png" alt="">
         <h3>CEO</h3>
         <p><strong>Dipesh Tha Shrestha</strong> is the CEO this company. He is current doing IT Project. He study in Sunway International Business School</p>
         <a href="dipeshthashrestha.com.np" class="btn">Visit His Website</a>
      </div>

      <div class="box">
         <img src="images/herone.png" alt="">
         <h3>Brand Ambassador</h3>
         <p>Miss World 2023, Miss Nepal 2022 is the brand Ambassador of this company. She was Sponser by pani chaiyo during her competion of miss nepal and miss world.</p>
         <a href="#" class="btn">Visit Her Website</a>
      </div>

      <div class="box">
         <img src="images/Invester.png" alt="">
         <h3>Invester 1</h3>
         <p>She is one of the two invester of this company. She became rich after investing in this company. So if you want to be rich. Invest in this Company.</p>
         <a href="#" class="btn">Visit Her Websites</a>
      </div>

      <div class="box">
         <img src="images/Invester2.png" alt="">
         <h3>Invester 2</h3>
         <p>He is one of the two invester of this company. He became rich after investing in this company. So if you want to be rich. Invest in this Company.</p>
         <a href="#" class="btn">Visit His Website</a>
      </div>

      <div class="box">
         <img src="images/team.png" alt="">
         <h3>Pani Chaiyo Team</h3>
         <p>Pani Chaiyo team is compose of 18 member who are expert in their field. The team have contribute alot to develpo and improve this company.</p>
         <a href="#" class="btn">Contact US</a>
      </div>

    

   </div>

</section>

<!-- about section ends -->

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/5.png" alt="">
         <h3>why choose us?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima voluptatibus.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/6.png" alt="">
         <h3>what we provide?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima voluptatibus.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<?php include 'carous.php'; ?>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/l1.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ram Shrestha</h3>
      </div>

      <div class="box">
         <img src="images/l2.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rijan Prajapati</h3>
      </div>

      <div class="box">
         <img src="images/l7.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Pradeep Dhakal</h3>
      </div>

      <div class="box">
         <img src="images/l8.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sumal Suwal</h3>
      </div>

      <div class="box">
         <img src="images/l9.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarad Paudel</h3>
      </div>

      <div class="box">
         <img src="images/dev.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bebek </h3>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>