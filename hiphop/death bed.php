<?php
include("../include/header-hiphop.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Death Bed - Powfu</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Powfu - death bed.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Intro: beabadoobee]
          <br />
          Don't stay awake for too long, don't go to bed
          <br />
          I'll make a cup of coffee for your head
          <br />
          It'll get you up and going out of bed
          <br />
          <br />
          [Verse 1: Powfu]
          <br />
          Yeah, I don't wanna fall asleep, I don't wanna pass away
          <br />
          I been thinking of our future 'cause I'll never see those days
          <br />
          I don't know why this has happened, but I probably deserve it
          <br />
          I tried to do my best, but you know that I'm not perfect
          <br />
          I been praying for forgiveness, you've been praying for my health
          <br />
          When I leave this earth, hopin' you'll find someone else
          <br />
          'Cause yeah, we still young, there's so much we haven't done
          <br />
          Getting married, start a family, watch your husband with his son
          <br />
          I wish it could be me, but I won't make it out this bed
          <br />
          I hope I go to heaven so I see you once again
          <br />
          My life was kinda short, but I got so many blessings
          <br />
          Happy you were mine, it sucks that it's all ending
          <br />
          <br />
          [Chorus: beabadoobee, Powfu, beabadoobee & Powfu]
          <br />
          Don't stay awake for too long, don't go to bed
          <br />
          I'll make a cup of coffee for your head
          <br />
          It'll get you up and going out of bed (Yeah, ayy)
          <br />
          Don't stay awake for too long, don't go to bed
          <br />
          I'll make a cup of coffee for your head
          <br />
          It'll get you up and going out of bed (Ayy, yeah)
          <br />
          <br />
          [Verse 2: Powfu]
          <br />
          I'm happy that you here with me, I'm sorry if I tear up
          <br />
          When me and you were younger, you would always make me cheer up
          <br />
          Taking goofy videos and walking through the park
          <br />
          You would jump into my arms every time you heard a bark
          <br />
          Cuddle in your sheets, sing me sound asleep
          <br />
          And sneak out through your kitchen at exactly 1:03
          <br />
          Sundays, went to church, on Mondays, watched a movie
          <br />
          Soon you'll be alone, sorry that you have to lose me
          <br />
          <br />
          [Chorus: beabadoobee, Powfu, beabadoobee & Powfu]
          <br />
          Don't stay awake for too long, don't go to bed
          <br />
          I'll make a cup of coffee for your head
          <br />
          It'll get you up and going out of bed
          <br />
          Don't stay awake for too long, don't go to bed
          <br />
          I'll make a cup of coffee for your head
          <br />
          It'll get you up and going out of bed
          <br />
          Don't stay awake for too long, don't go to bed
          <br />
          I'll make a cup of coffee for your head
          <br />
          It'll get you up and going out of bed
          <br />
          Don't stay awake for too long, don't go to bed
          <br />
          I'll make a cup of coffee for your head
          <br />
          It'll get you up and going out of bed
          <br />
          <br />
          [Outro: beabadoobee]
          <br />
          Don't stay awake for too long, don't go to bed
          <br />
          I'll make a cup of coffee for your head
          <br />
          It'll get you up and going out of bed
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Powfu - death bed.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Powfu - death bed.mp3" download>Download</a>
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