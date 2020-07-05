<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Lost On You  - LP</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/lp - lost on you.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          When you get older, plainer, saner
          <br />
          Will you remember all the danger
          <br />
          We came from?
          <br />
          Burning like embers, falling tender
          <br />
          Long before the days of no surrender
          <br />
          Years ago
          <br />
          And well you know?
          <br />
          <br />
          [Pre-Chorus 1]
          <br />
          So smoke 'em if you got 'em
          <br />
          Cause it's going down
          <br />
          All I ever wanted was you
          <br />
          I'll never get to heaven
          <br />
          Cause I don't know how
          <br />
          <br />
          [Chorus]
          <br />
          Let's raise a glass or two
          <br />
          To all the things I've lost on you
          <br />
          Tell me are they lost on you?
          <br />
          Just that you could cut me loose
          <br />
          After everything I've lost on you
          <br />
          Is that lost on you?
          <br />
          Is that lost on you?
          <br />
          Baby, is that lost on you
          <br />
          Is that lost on you?
          <br />
          <br />
          [Verse 2]
          <br />
          Wish that I could see the machinations
          <br />
          Understand the toil of expectations
          <br />
          In your mind
          <br />
          Hold me like you never lost your patience
          <br />
          Tell me that you love me more than hate me
          <br />
          All the time
          <br />
          And you're still mine
          <br />
          <br />
          [Pre-Chorus]
          <br />
          So smoke 'em if you got 'em
          <br />
          Cause it's going down
          <br />
          All I ever wanted was you
          <br />
          Let's take a drink of heaven
          <br />
          This can turn around
          <br />
          <br />
          [Chorus]
          <br />
          Let's raise a glass or two
          <br />
          To all the things I've lost on you
          <br />
          Tell me are they lost on you?
          <br />
          Just that you could cut me loose
          <br />
          After everything I've lost on you
          <br />
          Is that lost on you?
          <br />
          Is that lost on you?
          <br />
          Baby, is that lost on you?
          <br />
          Is that lost on you?
          <br />
          <br />
          Bridge:
          <br />
          Lost on you
          <br />
          Lost on you
          <br />
          <br />
          [Outro]
          <br />
          Let's raise a glass or two
          <br />
          To all the things I've lost on you
          <br />
          Tell me are they lost on you?
          <br />
          Just that you could cut me loose
          <br />
          After everything I've lost on you
          <br />
          Is that lost on you?
          <br />
          <br />
          [Outro]
          <br />
          Is that lost on you?
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/LP - Lost on You.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/LP - Lost on You.mp3" download>Download</a>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include("../include/footer.php")
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