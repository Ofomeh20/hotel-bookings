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
    <link rel="stylesheet" href="hotel.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid justify-content:center;">
            <a class="navbar-brand" href="#">
                <img src="images/logo2.jpg" alt="logo.jpg" style="width:100px;" class="rounded-pill">
            </a>
            <div class="container mt-3">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">ROOMS</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Vip Pavlour</a></li>
                            <li><a class="dropdown-item" href="#">Suite</a></li>
                            <li><a class="dropdown-item" href="#"> Classic Rooms</a></li>
                            <li><a class="dropdown-item" href="#">Family room</a></li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Amenties</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Swimming pool</a></li>
                            <li><a class="dropdown-item" href="#">Dinning for my beloved </a></li>
                            <li><a class="dropdown-item" href="#"> Aquarium</a></li>
                            <li><a class="dropdown-item" href="#">Spa and wellness </a></li>
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DE luna boards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Sponsors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Sign up</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Login</a>
                    </li>


                    <div class="container" onclick="myFunction(this)">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="#">About </a>
                            <a href="#">Services</a>
                            <a href="#">Clients</a>
                            <a href="#">Contact</a>
                        </div>
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <img src="./images/beach.jpg" alt="imagebackground " class="responsive">
    </div>











</body>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- Bootstrap JS-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>