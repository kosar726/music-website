<?php
include("../include/header-pop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Have It All - Jason Mraz</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Jason Mraz - Have It All.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          May you have auspiciousness and causes of success
          <br />
          May you have the confidence to always do your best
          <br />
          May you take no effort in your being generous
          <br />
          Sharing what you can, nothing more nothing less
          <br />
          May you know the meaning of the word happiness
          <br />
          May you always lead from the beating in your chest
          <br />
          May you be treated like an esteemed guest
          <br />
          May you get to rest, may you catch your breath
          <br />
          <br />
          [Pre-Chorus]
          <br />
          And may the best of your todays be the worst of your tomorrows
          <br />
          And may the road less paved be the road that you follow
          <br />
          <br />
          [Chorus]
          <br />
          Well here's to the hearts that you're gonna break
          <br />
          Here's to the lives that you're gonna change
          <br />
          Here's to the infinite possible ways to love you
          <br />
          I want you to have it
          <br />
          Here's to the good times we're gonna have
          <br />
          You don’t need money, you got a free pass
          <br />
          Here's to the fact that I'll be sad without you
          <br />
          I want you to have it all
          <br />
          <br />
          [Post-Chorus]
          <br />
          Oh! I want you to have it all
          <br />
          I want you to have it
          <br />
          I want you to have it all
          <br />
          <br />
          [Verse 2]
          <br />
          May you be as fascinating as a slap bracelet
          <br />
          May you keep the chaos and the clutter off your desk
          <br />
          May you have unquestionable health and less stress
          <br />
          Having no possessions though immeasurable wealth
          <br />
          May you get a gold star on your next test
          <br />
          May your educated guesses always be correct
          <br />
          And may you win prizes shining like diamonds
          <br />
          May you really own it each moment to the next
          <br />
          And may the best of your todays be the worst of your tomorrows
          <br />
          And may the road less paved be the road that you follow
          <br />
          <br />
          [Chorus]
          <br />
          Well here's to the hearts that you're gonna break
          <br />
          Here's to the lives that you're gonna change
          <br />
          Here's to the infinite possible ways to love you
          <br />
          I want you to have it
          <br />
          Here's to the good times we're gonna have
          <br />
          You don’t need money, you got a free pass
          <br />
          Here's to the fact that I'll be sad without you
          <br />
          I want you to have it all
          <br />
          Oh! I want you to have it all
          <br />
          I want you to have it
          <br />
          I want you to have it all
          <br />
          <br />
          [Bridge]
          <br />
          Oh, I want you to have it all
          <br />
          All you can imagine
          <br />
          All, no matter what your path is
          <br />
          If you believe it then anything can happen
          <br />
          Go, go, go raise your glasses
          <br />
          Go, go, go you can have it all
          <br />
          I toast you
          <br />
          <br />
          [Chorus]
          <br />
          Here's to the hearts that you're gonna break
          <br />
          Here's to the lives that you're gonna change
          <br />
          Here's to the infinite possible ways to love you
          <br />
          I want you to have it
          <br />
          Here's to the good times we're gonna have
          <br />
          You don’t need money, you got a free pass
          <br />
          Here's to the fact that I'll be sad without you
          <br />
          I want you to have it all
          <br />
          Oh! I want you to have it all
          <br />
          I want you to have it
          <br />
          I want you to have it all
          <br />
          <br />
          [Outro]
          <br />
          Here's to the good times we're gonna have
          <br />
          Here's to you always making me laugh
          <br />
          Here's to the fact that I'll be sad without you
          <br />
          I want you to have it all
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Jason Mraz - Have It All.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Jason Mraz - Have It All.mp3" download>Download</a>
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