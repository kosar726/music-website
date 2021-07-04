<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Title -->
    <title>سون موزیک - <?php echo $title; ?></title>
</head>

<body>
    < <nav class="navbar navbar-expand-lg bg-dark navbar-dark  background-black shadow-sm">
        <a class="navbar-brand" href="index.php">
            <img class="img-fluid" style="width: 100px; height: 100px;" src="./assets/img/logo6.png" alt="لوگو" width="15%">
            <span class="text-white" style="font-size: 25px;">سون موزیک</span>
            <img class="img-fluid" style="width: 100px; height: 100px;" src="./assets/img/logo6.png" alt="لوگو" width="15%">
        </a>
        <button class="navbar-toggler mr-auto mb-2 background-black" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">صفحه ی اصلی</span></a>
                </li>
                <li class="nav-item"><a href="category.php" class="nav-link">دسته بندی ها</a></li>
                <li class="nav-item"><a href="upload.php" class="nav-link">پخش آهنگ های شما</a></li>
            </ul>
           <form method="GET" action="search.php" class="form-inline ml-md-5 ml-lg-5 my-2 my-lg-0">
                <input type="text" name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="جستجو..." aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-2 mr-2" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>