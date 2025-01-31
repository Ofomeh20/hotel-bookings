<!------>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DE luna</title>
    <!-- Bootstrap CSS ---->


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <!--link html css--->
   <link rel="stylesheet" href="index.css">
</head>
<body>
          <!--NAV BAR ICON AND HEADER-->
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container-fluid">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./images/logo2.jpg" alt="Logo"  class="rounded-pill">
        </a>
                <!--DROPDOWN NAV-->
        <div class="container mt-3">
         
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#">Products</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Rooms</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Vip Pavlour</a></li>
                <li><a class="dropdown-item" href="#">Honeymoon suite</a></li>
                <li><a class="dropdown-item" href="#"> Family suite</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Fun king</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">SPA</a></li>
                <li><a class="dropdown-item" href="#">Family Dinner</a></li>
                <li><a class="dropdown-item" href="#">Fitness center</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Team</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" >Directors</a></li>
                <li><a class="dropdown-item" href="#">Staffs</a></li>
                <li><a class="dropdown-item" href="#">Sponsors</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sign_up.php">sign up</a>
            </li><li class="nav-item">
              <a class="nav-link" href="login.php">login</a>
            </li>
              </ul>
        </div>

     </div>
  </nav>
</div>
</nav>

  
                  <!--image stored in css-->
<div class="image-container mx-auto row col-20">
   <img src="./images/beach.jpg" alt="background" class="background-image col-12"> 
</div>
                <!--CONTAINER FOR THE ROOMS-->

                <div class="section">
                  <section class="course-section">
                  <div class="course-category">
                      <h2><span>ROOMS</span> </h2> 
                <div class="room-cards">
                  <div class="room-card">
                <img src="./images/bedroom1.jpg">
                  <h3>Vip suite</h3>
                    <h4>Our guest requires  <br>a well
                    rest sleep here  <br>at de luna we <br>
                      provide the best .</h4>
                      <button class="register-btn">BOOk NOW</button>
                
              </div>
                 <div class="room-cards">
                   <div class="room-card">
                      <img src="./images/bedroompool.jpg">
                      <h3> Swimming Pool</h3>
                        <h4> Guest are able to cool <br>themselves, 
                        thanks to our pool and servies .<br> we love and care for our guests  </h4>
                        <button class="register-btn">BOOK NOW</button>
                   </div>
                 </div>
                 <div class="rooms-cards">
                  <div class="room-card">
                     <img src="./images/regularbedroom.jpg">
                     <h3> One night suite </h3>
                     <h4> Our one nightsuite is available for <br> users who wants to stay one night 
                      <br> in our facilty</h4>
                      <button class="register-btn">BOOK NOW </button>
                  </div>
                 </div>
                 <div class="rooms-cards">
                  <div class="room-card">
                      <img src="./images/lobby.jpg">
                       <h3>Lobby </h3>
                       <h4>Our equistic taste of welcoming people <br>
                      with a well interory decoration <br>
                    and spaceous view </h4>
                    <button class="register-btn"> BOOK N0W</button>
                  </div>
                 </div>

     </div>
  
          





















  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });
  </script>
    
    <!-- Bootstrap JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
