<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="aos/aos.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <style>
    <?php include "styling.css" ?>
  </style>
  <link rel="stylesheet" href="owl.carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="icofont/icofont.min.css">
  <title>rooms and suites</title>
</head>

<body>
<header >
        <nav class="navbar navbar-sticky-top navbar-expand-lg "  id="header-navbar">
            <a href="#" class="navbar-brand " > tyson motel
              </a>
            <button type="button" class="navbar-toggler btn-light" data-target="#navnew" data-toggle="collapse" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navnew">
            <ul class="navbar-nav ml-auto" >
            <li class="nav-item">
                <a href="/index.php" class="nav-link active">HOME</a>
            </li>
           
            <li class="nav-item"><a href="#header-roms" class="nav-link">ROOMS</a></li>
            </ul>
            </div>
            </nav>
    </header>
  <section id="rooms-home" data-aos="fade-up" data-aos-delay="200">

    <img src="img/rooms/rooms-bg.jpg" alt="" id="rooms-bg" class="w-100">
    <div class="carousel-caption" data-aos="zoom-in" data-aos-delay="200">

      <h2 class="text-warning shadow">ROOMS AND SUITES</h2>
      <a href="" role="button" class="btn btn-warning">book now</a>
    </div>

  </section>
  <div class="pt-5 header-roms" data-aos="fade-up" data-aos-delay="200" id="header-roms">
    <h2 class="text-center text-warning"> TYSON HOTEL ROOMS
      <br> slide to the right to view them
    </h2>
    <div class="owl-carousel color" id="rooms-slider">
      <div class="row">
        <div class="col">
          <img src="img/rooms/single-room.jpg" alt="" class="w-100">
        </div>
        <div class="col text-light">
          <h3>SINGLE ROOM</h3>
          <div class="mb-5">The Single Room is the perfect choice for anyone wanting that littlebit of extra opulence from their stay.<br>
            Benefits of staying in the Single Room include:
            <ul>
              <li>Private and Express Check in and Check out</li>
              <li>Complimentary Breakfast at Cafe Tyson</li>
              <li>Complimentary secretarial services</li>
            </ul>

          </div>
          <span class="bg-info display-4">$225</span> <br>
          <a href="" role="button" class="btn btn-warning mt-4" data-toggle="modal" data-target="#myModal">book this room</a>

        </div>
      </div>
      <!--====creating hotel rooms slides-->
      <div class="row">
        <div class="col text-light">
          <img src="img/rooms/superior-room.jpg" alt="" class="w-100">
        </div>
        <div class="col text-light">
          <h3 class="shadow">Superior Room</h3>

          <div class="mb-5">
            Enjoy all the luxury and comfort you have come to expect from Tyson hotel in the Superior Room.<br>
            Designed as an ideal space for work and relaxation alike, all our rooms are elegantly decorated and equipped with all the latest conviniences,
            <br>including mini bar and in -room electronic safe.All our rooms have complimentary wifi-access.

          </div>
          <span class="bg-info display-4">$400</span> <br>
          <a href="" role="button" class="btn btn-warning mt-4" data-toggle="modal" data-target="#myModal">book this room</a>
        </div>
      </div>

      <!--====creating hotel rooms slides-->
      <div class="row">
        <div class="col text-light">
          <img src="img/rooms/balcony-room.jpg" alt="" class="w-100">
        </div>
        <div class="col text-light">
          <h3 class="shadow">Balcony Deluxe Rooms</h3>
          <div class="mb-5">
            Our Balcony Deluxe room gives you the space you need to relax and really enjoy your stay<br>
            Tastefully decorated in calming tones and hand made fabrics,<br>
            it's the perfect place to unwind after a busy day in the kenyan capital-and take in the beatutiful skyline<br>
            views from your own private balcony<br>
          </div>
          <span class="bg-info display-4">$500</span> <br>
          <a href="" role="button" class="btn btn-warning mt-4" data-toggle="modal" data-target="#myModal">book this room</a>
        </div>
      </div>

      <!--====creating hotel rooms slides-->
      <div class="row ">
        <div class="col text-light">
          <img src="img/rooms/executive-room.jpg" alt="" class="w-100">
        </div>
        <div class="col text-light">
          <h3 class="shadow">Executive Rooms</h3>
          <div class="mb-5">
            Designed as the perfect sanctuary from the stresses and demands of business life<br>
            the Executive Room offers a truly distinctive level of comfort and elegance<br>
            Take a well-deserved break in this beautifully-appointed room and enjoy executive benefits<br>

          </div>
          <span class="bg-info display-4">$600</span> <br>
          <a href="" role="button" class="btn btn-warning mt-4" data-toggle="modal" data-target="#myModal">book this room</a>
        </div>
      </div>

      <!--====creating hotel rooms slides-->
      <div class="row">
        <div class="col ">
          <img src="img/rooms/dulex-room.jpg" alt="" class="w-100">
        </div>
        <div class="col text-light">
          <h3 class="shadow">Deluxe Rooms</h3>
          <div class="mb-5">
            Treat yourself to a deluxe room here at Tyson Hotel for that extra-special touch of space and style.<br>
            Designed with cofort and relaxation in mind,these rooms make the perfect office for catching up on work,<br>
            or alternatively your own private sancuary to simply unwind in.
          </div>
          <span class="bg-info display-4">$350</span> <br>
          <a href="" role="button" class="btn btn-warning mt-4" data-toggle="modal" data-target="#myModal">book this room</a>
        </div>
      </div>
      <!--====creating hotel rooms slides-->

    </div>
  </div>


  </div>

  <!--==========================================modal section for room booking=================================-->
  <div class="modal-section">

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">please enter your details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form id="formappointment" action="rooms.php" name="formappointment">

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">firstname</span>
                </div>
                <input type="text" class="form-control" placeholder="firstname" name="firstname" required id="firstname">
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">secondname</span>
                </div>
                <input type="text" class="form-control" placeholder="secondname" name="secondname" required id="secondname">
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">email</span>
                </div>
                <input type="email" class="form-control" placeholder="email" name="email" required id="email">
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">phone</span>
                </div>
                <input type="number" class="form-control" placeholder="phone" name="phone" required id="phone">
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">check-in</span>
                </div>
                <input type="date" class="form-control" placeholder="check-in" name="check-in" required id="check-in" min="" />
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">check-out</span>
                </div>
                <input type="date" class="form-control datepicker" placeholder="check-out" name="check-out" required id="check-out">
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">no of people</span>
                </div>
                <select name="people">
                  <option value="1">Single person</option>
                  <option value="2">Two people</option>
                 
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">type of room</span>
                </div>
                <select name="type-of-rooms">
                  <option value="1">single-room</option>
                  <option value="2">superior-room</option>
                  <option value="3">executive</option>
                  <option value="4">balcony-dulex</option>
                  <option value="5">dulex</option>
                </select>
              </div>


          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-success">submit</button>
          </div>


          </form>
        </div>



      </div>
    </div>
  </div>
  </div>
  <!--==========================================modal section for room booking end=================================-->

  <?php
  include('footer.php')
  ?>

  <script src="aos/aos.js"></script> 
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="isotope-layout/isotope.pkgd.min.js"></script>
  <script src="owl.carousel/owl.carousel.min.js"></script>
  <script src="main.js" ></script>
  
  <script>
   
  </script>
</body>

</html>