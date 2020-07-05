<?php
include("../include/header-R&B.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Gangsta - Kehlani</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Kehlani - Gangsta.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Hook]
          <br />
          I need a gangsta
          <br />
          To love me better
          <br />
          Than all the others do
          <br />
          To always forgive me
          <br />
          Ride or die with me
          <br />
          That's just what gangsters do
          <br />
          <br />
          [Verse 1]
          <br />
          I'm fucked up, I'm black and blue
          <br />
          I'm built for it, all the abuse
          <br />
          I got secrets, that nobody, nobody, nobody knows
          <br />
          I'm good on, that pussy shit
          <br />
          I don't want, what I can get
          <br />
          I want someone, with secrets
          <br />
          That nobody, nobody, nobody knows
          <br />
          <br />
          [Hook]
          <br />
          I need a gangsta
          <br />
          To love me better
          <br />
          Than all the others do
          <br />
          To always forgive me
          <br />
          Ride or die with me
          <br />
          That's just what gangsters do
          <br />
          <br />
          [Verse 2]
          <br />
          My freakness is on the loose
          <br />
          And running, all over you
          <br />
          Please take me to places, that nobody, nobody knows
          <br />
          You got me hooked up on the feeling
          <br />
          You got me hanging from the ceiling
          <br />
          Got me up so high I'm barely breathing
          <br />
          So don't let me, don't let me, don’t let me, don't let me go
          <br />
          <br />
          [Hook]
          <br />
          I need a gangsta
          <br />
          To love me better
          <br />
          Than all the others do
          <br />
          To always forgive me
          <br />
          Ride or die with me
          <br />
          That's just what gangsters do
          <br />
          They do, they do, they do oh
          <br />
          To always forgive me
          <br />
          Ride or die with me
          <br />
          That's just what gangsters do
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Kehlani - Gangsta.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Kehlani - Gangsta.mp3" download>Download</a>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include("../include/footer.php");
  ?>
  <script src=" http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./index.js"></script>
  <script>
     
    $('.section').hide();

    setTimeout(function () {

      $('.section').fadeIn();

      $('.loader').fadeOut();

      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });

    }, 1000)
  </script>
</body>

</html>