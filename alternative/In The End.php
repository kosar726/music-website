<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">In The End - Tommee Profitt (feat Fleurie & Jung Youth) </h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/tommee profitt ( feat. fleurie) - in the end.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Intro: Fleurie]
          <br />
          It starts with one
          <br />
          All I know
          <br />
          It's so unreal
          <br />
          Watch you go
          <br />
          <br />
          [Chorus: Fleurie]
          <br />
          I tried so hard and got so far
          <br />
          But in the end, it doesn't even matter
          <br />
          I had to fall to lose it all
          <br />
          But in the end, it doesn't even matter
          <br />
          <br />
          [Verse 1: Jung Youth & Fleurie]
          <br />
          One thing, I don't know why
          <br />
          It doesn't even matter how hard you try
          <br />
          Keep that in mind, I designed this rhyme
          <br />
          To remind myself of a time when I (I tried so hard)
          <br />
          In spite of the way you were mockin' me
          <br />
          Actin' like I was part of your property
          <br />
          Remembering all the times you fought with me
          <br />
          I'm surprised it got so (Got so far)
          <br />
          Things aren't the way they were before
          <br />
          You wouldn't even recognize me anymore
          <br />
          Not that you knew me back then
          <br />
          But it all comes back to me (In the end)
          <br />
          You kept everything inside
          <br />
          And even though I tried, it all fell apart
          <br />
          What it meant to me will eventually
          <br />
          Be a memory of a time when I
          <br />
          [Chorus: Fleurie]
          <br />
          I tried so hard and got so far
          <br />
          But in the end, it doesn't even matter
          <br />
          I had to fall to lose it all
          <br />
          But in the end, it doesn't even matter
          <br />
          <br />
          [Verse 2: Jung Youth]
          <br />
          One thing, I don't know why
          <br />
          It doesn't even matter how hard you try
          <br />
          Keep that in mind
          <br />
          I designed this rhyme to explain in due time
          <br />
          All I know
          <br />
          Time is a valuable thing
          <br />
          Watch it fly by as the pendulum swings
          <br />
          Watch it count down to the end of the day
          <br />
          The clock ticks life away
          <br />
          It's so unreal
          <br />
          You didn't look out below
          <br />
          Watch the time go right out the window
          <br />
          Tryin' to hold on, but you didn't even know
          <br />
          I wasted it all just to watch you go
          <br />
          I kept everything inside
          <br />
          And even though I tried, it all fell apart
          <br />
          What it meant to me will eventually be a memory
          <br />
          Of a time when I tried so hard
          <br />
          <br />
          [Outro: Jung Youth]
          <br />
          So unreal
          <br />
          Tried so hard
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Tommee Profitt (feat Fleurie) - In The End.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Tommee Profitt (feat Fleurie) - In The End.mp3" download>Download</a>
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