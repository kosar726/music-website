<?php
include("../include/header-pop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Temporary Fix - Dirty Blond</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Dirty Blond - Temporary Fix.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          Two years since I’ve seen your face
          <br />
          But I still see it everyday
          <br />
          How’d you feel right?now?
          <br />
          That?I’m not around
          <br />
          <br />
          Still?staring at the photograph
          <br />
          Me and you?behind the broken glass
          <br />
          No sleep tonight
          <br />
          <br />
          Cos all I wanna do is call you
          <br />
          All I wanna do is call you
          <br />
          <br />
          I’ve been crushed in a landslide
          <br />
          Drowned in a riptide
          <br />
          <br />
          I’ve never felt quite like this
          <br />
          Red wine and bandaids
          <br />
          Try to kill the pain
          <br />
          It’s all a temporary fix
          <br />
          <br />
          Someone said your with someone new
          <br />
          Does he make you feel the way I do
          <br />
          Was I not enough?
          <br />
          I think I think too much
          <br />
          <br />
          Stranger lying in my bed
          <br />
          But our songs running through my head
          <br />
          The room’s spinning out
          <br />
          <br />
          Cos all I wanna do is call you
          <br />
          All I wanna do is call you
          <br />
          <br />
          I’ve been crushed in a landslide
          <br />
          Drowned in a riptide
          <br />
          I’ve never felt quite like this
          <br />
          Red wine and bandaids
          <br />
          Try to kill the pain
          <br />
          It’s all a temporary fix
          <br />
          <br />
          Cos all I wanna do is call you
          <br />
          All I wanna do is call you
          <br />
          All I wanna do is call you
          <br />
          All I wanna do is call
          <br />
          I’ve been crushed in a landslide
          <br />
          Drowned in a riptide
          <br />
          I’ve never felt quite like this
          <br />
          Red wine and bandaids
          <br />
          Try to kill the pain
          <br />
          It’s all a temporary fix
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Dirty Blond - Temporary Fix.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Dirty Blond - Temporary Fix.mp3" download>Download</a>
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