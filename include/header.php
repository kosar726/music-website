<!DOCTYPE html>
<html lang="en-US" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />

  <link rel="stylesheet" href="./css/style.css" />

  <title>feedback</title>
</head>

<body>
  
  <nav class="navbar navbar-expand-md bg-dark navbar-dark  background-black">
    <a class="navbar-brand font-weight-bold  background-black" href="./index.php">SevenMusic.ir</a>
    <button class="navbar-toggler mr-auto mb-2 background-black" type="button" data-toggle="collapse" data-target="#myNavbar">
      <span>Menu</span>
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="myNavbar">

      <div class="container-fluid">

        <div class="row">

          <div class="col-md-3 col-lg-3 col-xl-2 sidebar shadow-lg fixed-top">

            <a href="#"
              class="navbar-brand font-weight-bold text-white d-block mx-auto text-center py-3 mb-2 border-bottom">Genres</a>

            <ul class="navbar-nav flex-column mt-4 p-0">

              <li class="nav-item"><a class="nav-link text-left  sidebar-link p-2 mb-2" href="../alternative/alternative.php"> ALTENATIVE </a></li>
              <li class="nav-item"><a class="nav-link text-left sidebar-link p-2 mb-2" href="../hiphop/HipHop.php">HIP HOP</a></li>
              <li class="nav-item"><a class="nav-link text-left sidebar-link p-2 mb-2" href="../pop/pop.php">POP</a></li>
              <li class="nav-item"><a class="nav-link text-left  sidebar-link p-2 mb-2" href="../rock/Rock.php">ROCK</a></li>
              <li class="nav-item"><a class="nav-link text-left sidebar-link p-2 mb-2" href="../R&B/R&B.php">R&B</a></li>
            </ul>
          </div>
          
          <div class="col-md-9 col-lg-9 col-xl-10 top-navbar mr-auto color-nav fixed-top py-2">

            <div class="row align-items-center">
              <div class="col-md-6 logo">
              <a href="./index.php" style="text-decoration:none;">
                <img src="./img/logo6.png" class="img-fluid" style="width: 100px; height: 100px;" />
                <span class="text-white" style="font-size: 25px;">Se<span class="background-black font-weight-bold" style="font-size: 30px;">7</span>en Music</span>
                <img src="./img/logo6.png" class="img-fluid" style="width: 100px; height: 100px;" />
              </a>
              </div>
                <div class="col-md-6">
                    <form action="search.php">
                        <div class="input-group search-form">
                            <input type="text" class="form-control search-input" placeholder=". . . Search">
                            <button class="btn search-button" type="submit"><i class="fas fa-search color-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>