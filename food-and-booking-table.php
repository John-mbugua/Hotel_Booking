<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food section</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="aos/aos.css">
    <style>
        <?php include "styling.css"?>
    </style>
    <link rel="stylesheet" href="owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="icofont/icofont.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-sticky-top navbar-expand-lg "  id="header-navbar">
            <a href="#" class="navbar-brand " > tyson motel
              </a>
            <button type="button" class="navbar-toggler btn-light" data-target="#navnew" data-toggle="collapse" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navnew">
            <ul class="navbar-nav ml-auto" >
            <li class="nav-item">
                <a href="/index.php" class="nav-link active">home</a>
            </li>
           
            <li class="nav-item"><a href="#menu" class="nav-link">menu</a></li>
            
            <li class="nav-item"><a href="#" class="nav-link">book a table </a></li>
        

            </ul>
            </div>
            </nav>
    </header>
    <div class="bar-home">
        <div class="w-100" >
            <img src="img/bar.jpg" alt="" >
            <div class="carousel-caption" data-aos="fade-up" data-aos-delay="200">
                <h1 class="text-warning display-4 bar-head">RESTAURANT & BAR LOUNGE</h1>
            </div>
        </div>
    </div>

    <div>
        <!--=========this is the menu section=======-->
        <section id="menu" class="menu">
            <div class="container" >
              <div class="section-title">
                <h2 class="text-warning"> restaurant menu -------------</h2>

              </div>
  
  
              
            <!--=========use of buttons as naviation =======-->
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 d-flex justify-content-center">
                <nav id="menu-f">
                   <li data-filter="*" class="filter-active">
                     <button type="button" class=" btn btn-outline-warning">All</button>
                   </li>
                    <li data-filter=".filter-starters">
                      <button type="button" class=" btn btn-outline-warning">Starters</button>
                    </li>
                    <li data-filter=".filter-desserts">
                      <button type="button" class="btn btn-outline-warning">Desserts</button>
                    </li>
                    <li data-filter=".filter-specialty">
                      <button type="button" class=" btn btn-outline-warning">Specialty</button>
                    </li>
                </nav>
              </div>
            </div>
          <!--=========this is the menu conent=======-->
          <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-6 menu-item filter-starters">
                <a href="img/menu/bread-barrel.jpg"></a>
              <img src="img/menu/bread-barrel.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Spanish Omelette Cheese Mushroom</a><span>$6.0</span>
              </div>
              <div class="menu-ingredients">
                Omellete,cheesse,mushroom and ginger
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="img/menu/caesar.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Kheema Chapatty</a><span>$5.95</span>
              </div>
              <div class="menu-ingredients">
                Egg,beef,onion and chillies
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-desserts">
              <img src="img/menu/cake.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Vanilla Strawberry Cake with extra sauce</a><span>$5.95</span>
              </div>
              <div class="menu-ingredients">
                Vanilla,strawberry and chocalate mint
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
              <img src="img/menu/greek-salad.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Combo2-eight pieces</a><span>$5.95</span>
              </div>
              <div class="menu-ingredients">
               Ranch Dipping sauce or Buffalo dipping sauce
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-speciality">
              <img src="img/menu/lobster-roll.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Original Wings</a><span>$5.95</span>
              </div>
              <div class="menu-ingredients">
                8 pieces with poussin dipping sauce
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-desserts">
              <img src="img/menu/mozzarella.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Ocean Beach</a><span>$5.95</span>
              </div>
              <div class="menu-ingredients">
               Vanilla icecream,sea salt,caramel sauce
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
              <img src="img/menu/spinach-salad.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Hawaiian Vageterian</a><span>$5.95</span>
              </div>
              <div class="menu-ingredients">
                Cheese pineapple,sweetcorn,onion,green pepper and chiilies
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-speciality">
              <img src="img/menu/lobster-bisque.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#">Halloumi fingers</a><span>$5.95</span>
              </div>
              <div class="menu-ingredients">
                Thai sweet chilli dipping sauce
              </div>
            </div>
            
          </div>
      </section>
    </div>
  <div>
      <!--===creating a booking a table section===-->
      <section class="booking-table" id="booking-table">

        <div data-aos-delay="100" data-aos="fade-up">
          <h1 class="text-light booking-header pt-5">Book Table:</h1>
          <h3 class="text-warning booking-header">Please fill in all the details to book a table</h3>
        </div>
         
        <form  data-aos="fade-up" data-aos-delay="200" id="food-form" action="booking_table.php/booking_table.php">

          <div class="row" >
            <div class="col pb-4"><input type="text" class="form-control " placeholder="first name" name="fname" id="fname" required > </div>
            <div class="col pb-4"><input type="text" class="form-control " placeholder="second name" name="sname" id="sname" required > </div>
            <div class="col pb-4"><input type="number" class="form-control "
               placeholder="phone number" name="phone" id="phone" required minlength="10"> </div>
          </div>
          <div class="row">
            <div class="col pb-3"><input type="date" class="form-control pb-3" placeholder="date" name="date1" id="date1" required > </div>
            <div class="col pb-3"><input type="time" class="form-control pb-3" placeholder="time" name="time" id="time" required > </div>
            <div class="col pb-3"><input type="number" class="form-control pb-3" placeholder="# of people" name="people" id="people"
              required > </div>
            
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <textarea name="message" id="message" cols="180" rows="4" placeholder="comment" ></textarea>
            </div>
          </div>
          <div class="text-danger text-center " id="response" style="width: 100%; height: 70px; font-weight: 200px; font-size:20px;" >

          </div>
            <div class=" booking-submit pb-5">
              <input type="submit" value="book a table" class=" btn btn-outline-warning btn-lg " id="newsletter-submit">

            </div>

        </form>

      </section><!--=========this is the end of booking table section ===-->

  </div>
  <?php 
  include('footer.php')
  ?>

    <script src="aos/aos.js"></script>
    <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="isotope-layout/isotope.pkgd.min.js"></script>
      <script src="owl.carousel/owl.carousel.min.js"></script>
      
      <script src="main.js"></script>

      
</body>
</html>