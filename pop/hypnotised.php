<?php
include("../include/header-pop.php");
?>
<div class="contaienr-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Hypnotised - Years & Years</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Years & Years - Hypnotised.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          I had a dream of a ship that we sailed in the night
          <br />
          Such a sweet, sweet call
          <br />
          The siren soothes my mind
          <br />
          Who am I going to be when the curtain is drawn?
          <br />
          In the cool, cool light, they whispered to me, "take it all"
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Ooh-ooh-ooh
          <br />
          The fortune said
          <br />
          "Flowers bloom with no regret"
          <br />
          <br />
          [Chorus]
          <br />
          Surround me, body and soul
          <br />
          Pull me into your glow, make me blush
          <br />
          Unbound me, spin me in gold
          <br />
          As the story unfolds in your touch
          <br />
          Ooh-ooh-ooh-ooh
          <br />
          Who can breathe me into life?
          <br />
          Ooh-ooh-ooh-ooh
          <br />
          Just one more look at you
          <br />
          My heart has been hypnotised
          <br />
          <br />
          [Verse 2]
          <br />
          I know a place where it's always so perfect and blue
          <br />
          And the boy says, "Babe, believe me, it's all for you"
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Ooh-ooh-ooh
          <br />
          The fortune said
          <br />
          (The fortune, it said)
          <br />
          "Flowers bloom with no regret"
          <br />
          (With no regret)
          <br />
          <br />
          [Chorus]
          <br />
          Surround me, body and soul
          <br />
          Pull me into your glow, make me blush
          <br />
          Unbound me, spin me in gold
          <br />
          As the story unfolds in your touch
          <br />
          Ooh-ooh oh ooh
          <br />
          Who can breathe me into life?
          <br />
          Ooh-ooh oh ooh
          <br />
          Just one more look at you
          <br />
          My heart has been hypnotised
          <br />
          <br />
          [Bridge]
          <br />
          And every colour comes to life
          <br />
          As petals fall before your eyes
          <br />
          You kiss me, and I'm hypnotised
          <br />
          <br />
          [Chorus]
          <br />
          Surround me, body and soul
          <br />
          Pull me into your glow, make me blush
          <br />
          Unbound me, spin me in gold
          <br />
          As the story unfolds in your touch
          <br />
          Ooh-ooh oh ooh
          <br />
          Who can breathe me into life?
          <br />
          Ooh-ooh oh ooh
          <br />
          Just one more look at you
          <br />
          My heart has been hypnotised
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Years & Years - Hypnotised.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Years & Years - Hypnotised.mp3" download>Download</a>
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