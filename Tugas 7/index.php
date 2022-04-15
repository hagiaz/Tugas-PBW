<?php 
require_once("authentication.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="Assets/icon.ico"/>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="style1.css"/>

</head>

<body>

    <script src = "main.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <img src="Assets/xyz-seeklogo.com.svg" width="50" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24" style="filter: brightness(0) invert(1);"></img>
            <a class="navbar-brand" href="index.html">XYZ Corporation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" id="list1" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="list1" href="log_out.php">Log Out</a>
                    </li>
                  </ul>
                </ul>
            </div>
        </div>
      </nav>

      <div>
        <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src = "Assets/news.jpg" width=auto height="500" role="img"aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false" style="filter: brightness(40%); min-width: 100%;">
              <title>Blogs</title>

              <div class="container">
                <div class="carousel-caption">
                  <h1 style="text-shadow: 3px 3px #000000;">Blogs</h1>
                  <p>Travel Blogs Around The World</p>
                  <p><a class="btn btn-dark" href="#blog">Learn more</a></p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <img src = "Assets/about.jpg" width=auto height="500" role="img"aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false" style="filter: brightness(40%); min-width: 100%;">
              <title>Placeholder</title>

              <div class="container">
                <div class="carousel-caption">
                  <h1 style="text-shadow: 3px 3px #000000;">About</h1>
                  <p>Who We Are</p>
                  <p><a class="btn btn-dark" href="#about">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src = "Assets/contact.jpg" width=auto height="500" role="img"aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false" style="filter: brightness(40%); min-width: 100%;">
              <title>Placeholder</title>

              <div class="container">
                <div class="carousel-caption">
                  <h1 style="text-shadow: 3px 3px #000000;">Contact Us</h1>
                  <p>Reach To Us</p>
                  <p><a class="btn btn-dark" href="#">Learn more</a></p>
                </div>
              </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel1"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel1"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </header>

    <section id="about">
      <img class="d-block mx-auto mb-4" id="icon" src="Assets/xyz-seeklogo.com.svg" alt="" width="auto" height="auto" style="min-width: 200px; max-width: 225px;">
    </section>

    <section id="about2">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 class="greeting">We Are XYZ.</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-12 text-center">
          <div class="col-md-8">
            <p class="greeting-text">Estabilished in 2022, We are an imaginary multinational travel blog company with
              expertise in seeking and delivering trusted news about travels. Our goal is to spread the words from and to
              the world, and help the travelers to choose their next destination.
            </p>
          </div>
          <br>
          <button type="button" class="btn btn-dark" style="width: 40%;">
            <a href = "#" style="text-decoration: none; color: white;">Read More</a>
          </button>
        </div>
      </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#4b4e50"
        fill-opacity="1"
        d="M 0 269 C 485 291 496 173 1213 244 L 1441 273 L 1440 320 L 1380 320 C 1320 320 1200 320 1080 320 C 960 320 840 320 720 320 C 600 320 480 320 360 320 C 240 320 120 320 60 320 L 0 320 Z"
      ></path>
    </svg>

    <section id="blog">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h1 class="greeting2 mb-4">Our Blogs</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="Assets/lombok.jpg" class="card-img-top bg-dark" alt="..." style="height: 180px;" />
              <div class="card-body">
                <h5><b><a href="#" style="text-decoration: none;">Exploring Lombok</a></b></h5>
                <p class="card-text">With panoramic views of the bay, there’s a reason South Lombok will leave you speechless.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="Assets/shinkansen.jpg" class="card-img-top" alt="..." style="height: 180px;" />
              <div class="card-body">
                <h5><b><a href="#" style="text-decoration: none;">The Joys of Shinkansen</a></b></h5>
                <p class="card-text">As the fastest train in Japan and one of the fastest in the world, it takes you to your destination in just a flash.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="Assets/nara.jpg" class="card-img-top" alt="..." style="height: 180px;"/>
              <div class="card-body">
                <h5><b><a href="#" style="text-decoration: none;">Devious Deer of Nara</a></b></h5>
                <p class="card-text">Nara, Japan is an excellent place to visit, and a big part of this is the wild deer that roam the city.</p>
              </div>
            </div>
            <br>
            <button type="button" class="btn btn-light" id="blogbutton">
              <a href = "#" style="text-decoration: none; color: rgb(0, 0, 0);">Read More</a>
            </button>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#212529"
          fill-opacity="1"
          d="M 0 269 C 492 260 496 173 1015 235 L 1441 273 L 1440 320 L 1380 320 C 1320 320 1200 320 1080 320 C 960 320 840 320 720 320 C 600 320 480 320 360 320 C 240 320 120 320 60 320 L 0 320 Z"
        ></path>
      </svg>
    </section>

    <footer class="bg-dark text-white text-center pb-5">
      <br>
      <p>&copy; 2022 Hagi Azzam Azzikri - 2010631170076 - 4C</p>
      <p>
        <a href=# onclick="backtotop()">Back To Top</a>
      </p>
    </footer>

</body>
</html>