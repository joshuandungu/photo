<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel= "stylesheet" href="css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Photo Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id=navbarDropdown href="#nature" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#nature">Nature</a></li>
                            <li><a class="dropdown-item" href="#marriage">Marriage </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#festival">Festivals</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image11.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<a id="nature">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Nature</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md col-12">
    <img src="images/image1.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md col-12">
    <img src="images/image2.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md col-12">
    <img src="images/image11.png" class="img-fluid pb-3">
  </div></div>
</div>
</section>
</a>
<a id="marriage">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Marriage</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md col-12">
    <img src="images/img7.jpeg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md col-12">
    <img src="images/img8.jpeg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md col-12">
    <img src="images/img9.jpeg" class="img-fluid pb-3">
  </div></div>
</div>
</section>
</a>
<a id="festival">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Festivals</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md col-12">
    <img src="images/g-1.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md col-12">
    <img src="images/g-3.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md col-12">
    <img src="images/g-6.jpg" class="img-fluid pb-3">
  </div></div>
</div>
</section></a>

<a id="contact">
  <section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="about.php" method="POST">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" placeholder="Name" required class="form-control">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" placeholder="Email" required class="form-control">
      </div>
      <div class="form-group">
        <label>Number:</label>
        <input type="text" name="number" placeholder="Phone Number" required class="form-control">
      </div>
      <button type="submit" class="btb btn-success">Submit</button>
    </form>
  </div>
  </section>
</a>

<a id="about">
  <section class="my-4">
  <div class="py-4">
    <h2 class="text-center">About</h2>
  </div>
  <div class="conatiner-fluid">
    <h3 class="text-center"></h3><br>
    <p class="text-center"><b>I am a passionate photographer interested in working in architecture nature, festivals, music, freelancer and all shooting services. I am a freelancer with an experience of 5 years</b></p>
  </div>
</section>
</a>

    <script src="https://ajx.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.clodflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.5/js/bootstrap.min.js"></script>

</body>
</html>