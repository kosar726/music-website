<?php
include("../include/header-pop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Flux - Ellie Goulding</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Ellie Goulding - Flux.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          Remember me in a simple way, not what I did or said
          <br />
          When I think of you now, I just think of the day we met
          <br />
          Don't forget me, like I didn't care
          <br />
          Yeah, I stole from myself just to make you complete
          <br />
          <br />
          [Pre-Chorus]
          <br />
          (Flux, flux)
          <br />
          I don't think you have the patience
          <br />
          I don't think you know the difference
          <br />
          (Flux, flux)
          <br />
          And I don't want cute imitations
          <br />
          I know you wanted to save me
          <br />
          <br />
          [Chorus]
          <br />
          And I'm still in love with the idea of loving you
          <br />
          It's a state of flux, but it's not enough
          <br />
          And I'm still in love with the idea of loving you
          <br />
          It's a state of flux, I just keep holding on
          <br />
          <br />
          [Post-Chorus]
          <br />
          Would you be taking me higher?
          <br />
          Would we be living as liars?
          <br />
          I wanna know, I wanna know
          <br />
          <br />
          [Verse 2]
          <br />
          When the memories pack up and leave, it will set me free
          <br />
          All those days on the beach will be washing away from me
          <br />
          I will keep you secretly just to keep the peace
          <br />
          Keep steering this ship through the dark and the stormy seas
          <br />
          <br />
          [Pre-Chorus]
          <br />
          (Flux, flux)
          <br />
          I should be counting my blessings
          <br />
          Staying safe in confusion
          <br />
          (Flux, flux)
          <br />
          And maybe I'm learning my lesson
          <br />
          I know you wanted to save me
          <br />
          <br />
          [Chorus]
          <br />
          I'm still in love with the idea of loving you
          <br />
          It's a state of flux, but it's not enough
          <br />
          And I'm still in love with the idea of loving you
          <br />
          It's a state of flux, I just keep holding on
          <br />
          <br />
          [Post-Chorus]
          <br />
          Would you be taking me higher?
          <br />
          Would we be living as liars?
          <br />
          I wanna know, I wanna know
          <br />
          Would we be living in Camden?
          <br />
          Getting a ticket to your band?
          <br />
          I wanna know, I wanna know
          <br />
          <br />
          [Bridge]
          <br />
          Ooh, ooh, ooh
          <br />
          Ooh, ooh, ooh
          <br />
          <br />
          [Chorus]
          <br />
          Oh, I'm still in love with the idea of loving you (Oh, with the idea)
          <br />
          It's a state of flux (It's a state of)
          <br />
          But it's not enough (It's not enough)
          <br />
          I'm still in love with the idea of loving you
          <br />
          It's a state of flux, I just keep holding on
          <br />
          (Oh, I just keep holding on)
          <br />
          I'm still in love with the idea of loving you
          <br />
          It's a state of flux, but it's not enough (Oh, I'm still in love)
          <br />
          I'm still in love with the idea of loving you
          <br />
          It's a state of flux, I just keep holding on
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Ellie Goulding - Flux.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Ellie Goulding - Flux.mp3" download>Download</a>
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