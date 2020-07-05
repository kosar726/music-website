<?php
include("../include/header-hiphop.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Holler Boys - UpChurch</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/UpChurch - Holler Boys.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Intro]
          <br />
          Whoa, whoa
          <br />
          <br />
          [Verse 1]
          <br />
          The only poison I've had is ivy
          <br />
          The only man I fear is God
          <br />
          No snakes can make me run now
          <br />
          'Cause I've been bit by 'em all
          <br />
          No buck can stare me down
          <br />
          No neighbor can shut me up
          <br />
          I'm off the grid and I'm off my rocker
          <br />
          I'm off in the holler son
          <br />
          <br />
          [Chorus]
          <br />
          We them holler boys
          <br />
          Holler if you’re needin’ somethin' done
          <br />
          Holler if you need a chip or a shoulder
          <br />
          And a hand with a loaded gun
          <br />
          We'll be out that screen door, no shirt on
          <br />
          Leavin' two black marks down a one lane road
          <br />
          Yeah we, yeah we, yeah we them holler boys
          <br />
          <br />
          [Verse 2]
          <br />
          The only fight I've ever been in
          <br />
          Was takin' up for somebody else
          <br />
          The only time I got my jaw jacked is never but damn sure not quite yet
          <br />
          The times I miss the most are the times nobody knows
          <br />
          When it was me, my cousin, and a couple of my buddies
          <br />
          Racin' down ol' Sams Creek Road
          <br />
          <br />
          [Chorus]
          <br />
          We them holler boys
          <br />
          Holler if you’re needin’ somethin' done
          <br />
          Holler if you need a chip or a shoulder
          <br />
          And a hand with a loaded gun
          <br />
          We'll be out that screen door, no shirt on
          <br />
          Leavin' two blackmarks down a one lane road
          <br />
          Yeah we, yeah we, yeah we them holler boys
          <br />
          <br />
          [Bridge]
          <br />
          Holler boy native to the the holler soil
          <br />
          Washed in the spring of a farmer's joy
          <br />
          <br />
          [Chorus]
          <br />
          We them holler boys
          <br />
          Holler if you’re needin' somethin' done
          <br />
          Holler if you need a chip or a shoulder
          <br />
          Or a hand with a loaded gun
          <br />
          We them holler boys
          <br />
          Holler if you’re needin’ somethin' done
          <br />
          Holler if you need a chip or a shoulder
          <br />
          And a hand with a loaded gun
          <br />
          We'll be out that screen door, no shirt on
          <br />
          Leavin' two blackmarks down a one lane road
          <br />
          Yeah we, yeah we, yeah we them holler boys
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/UpChurch - Holler Boys.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/UpChurch - Holler Boys.mp3" download>Download</a>
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