<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Bang - AJR</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/ajr - bang.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          I get up, I get down, and I'm jumpin' around
          <br />
          And the rumpus and ruckus are comfortable now
          <br />
          Been a hell of a ride, but I'm thinking it's time to grow
          <br />
          Bang! Bang! Bang!
          <br />
          So I got an apartment across from the park
          <br />
          Put quinoa in my fridge, still I'm not feeling grown
          <br />
          Been a hell of a ride, but I'm thinking it's time to go
          <br />
          Bang! Bang! Bang! Here we go!
          <br />
          <br />
          [Chorus]
          <br />
          So put your best face on, everybody
          <br />
          Pretend you know this song, everybody
          <br />
          Come hang, let's go out with a bang!
          <br />
          Bang! Bang! Bang!
          <br />
          I'm way too young to lie here forever
          <br />
          I'm way too old to try, so whatever
          <br />
          Come hang, let's go out with a bang!
          <br />
          Bang! Bang! Bang!
          <br />
          <br />
          [Verse 2]
          <br />
          Feel like I'm gonna puke 'cause my taxes are due
          <br />
          Do my password begin with a one or a two?
          <br />
          Been a hell of a ride, but I'm thinking it's time to grow
          <br />
          Bang! Bang! Bang! Metronome:
          <br />
          Man, I'm up to something (Up to something)
          <br />
          Ooh-de-la-di-do, thank you all for coming (All for coming)
          <br />
          I hope you like the show 'cause it's on a budget (On a budget)
          <br />
          So ooh-de-la-di-do, yeah, come on, here we go, yeah
          <br />
          Come on, here we go!
          <br />
          <br />
          [Chorus]
          <br />
          So put your best face on, everybody
          <br />
          Pretend you know this song, everybody
          <br />
          Come hang, let's go out with a bang!
          <br />
          Bang! Bang! Bang!
          <br />
          I'm way too young to lie here forever
          <br />
          I'm way too old to try, so whatever
          <br />
          Come hang (Come hang), let's go out with a bang!
          <br />
          Bang! Bang! Bang! (Bang, bang-bang-bang-bang)
          <br />
          Bang! Bang! Bang! (Bang, bang-bang-bang-bang, bang)
          <br />
          <br />
          [Bridge]
          <br />
          Been a hell of a ride, but I'm thinking it's time to go
          <br />
          So put your best face on, everybody
          <br />
          Pretend you know this song
          <br />
          Everybody come hang, let's go out with a bang!
          <br />
          Bang! Bang! Bang! Here we go!
          <br />
          <br />
          [Chorus]
          <br />
          So put your best face on, everybody
          <br />
          Pretend you know this song, everybody
          <br />
          Come hang, let's go out with a bang!
          <br />
          Bang! Bang! Bang! (Bang, bang-bang-bang-bang)
          <br />
          I'm way too young to lie here forever
          <br />
          I'm way too old to try, so whatever
          <br />
          Come hang (Come hang), let's go out with a bang!
          <br />
          Bang! Bang! Bang!
          <br />
          Here we go! (Bang, bang)
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/AJR - Bang.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/AJR - Bang.mp3" download>Download</a>
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