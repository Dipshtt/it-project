<?php

@include 'config.php';


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

   <script src="https://cdn.tailwindcss.com"></script>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
</head>

<body>
    <div class="flex justify-center bg-#c8d1f4 pt-0 pb-30 pr-8 pl-8 ">
    
    <div class="w-3/4 ">
        <h1 class="title">Our Partners & Clients</h1>
    
         <section class="customer-logos sliderz">
            <div class="m-2">
              <img src="images/logo.png">
            </div>
            <div class="m-2">
              <img src="images/dev.png">
            </div>
            <div class="m-2">
              <img src="images/l1.png">
            </div>
            <div class="m-2">
              <img src="images/l2.png">
            </div>
            <div class="m-2">
              <img src="images/l3.png">
            </div>
            <div class="m-2">
              <img src="images/l4.png">
            </div>
            <div class="m-2">
              <img src="images/l5.png">
            </div>
            <div class="m-2">
              <img src="images/l6.png">
            </div>
            <div class="m-2">
              <img src="images/l7.png">
            </div>
            <div class="m-2">
              <img src="images/l8.png">
            </div>
            <div class="m-2">
              <img src="images/l9.png">
            </div>
            </div>
         </section>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script type="text/javascript" src="main.js"></script>

<script>
    $(document).ready(function () {
  $(".customer-logos").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
});
</script>


</body>
</html>

<script src="js/script.js"></script>

</body>
</html>