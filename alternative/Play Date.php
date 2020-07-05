<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Play Date - Melanie Martinez</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Melanie Martinez - play date.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          You call me on the telephone, you feel so far away
          <br />
          You tell me to come over, there's some games you want to play
          <br />
          I walk into your house, nobody's home
          <br />
          It's just me and you, you and me alone
          <br />
          <br />
          [Pre-Chorus]
          <br />
          We're just playing hide and seek
          <br />
          It's getting hard to breathe under the sheets with you
          <br />
          I don't want to play no games
          <br />
          I'm tired of always chasing, chasing after you
          <br />
          <br />
          [Chorus]
          <br />
          I don't give a fuck about you anyways
          <br />
          Who ever said I give a shit about you?
          <br />
          You never share your toys or communicate
          <br />
          I guess I'm just a play date to you
          <br />
          <br />
          [Verse 2]
          <br />
          Wake up in your bedroom and there's nothing left to say
          <br />
          When I try to talk you're always playing board games
          <br />
          I wish I had monopoly over your mind
          <br />
          I wish I didn't care all the time
          <br />
          <br />
          [Pre-Chorus]
          <br />
          We're just playing hide and seek
          <br />
          It's getting hard to breathe under the sheets with you
          <br />
          I don't want to play no games
          <br />
          I'm tired of always chasing, chasing after you
          <br />
          <br />
          [Chorus]
          <br />
          I don't give a fuck about you anyways
          <br />
          Who ever said I give a shit about you?
          <br />
          You never share your toys or communicate
          <br />
          I guess I'm just a play date to you
          <br />
          <br />
          [Bridge]
          <br />
          Ring around the rosy
          <br />
          I never know, I never know what you need
          <br />
          Ring around the rosy, I want to give you, want to give you
          <br />
          What you need
          <br />
          <br />
          [Chorus]
          <br />
          I don't give a fuck about you anyways
          <br />
          Who ever said I give a shit about you?
          <br />
          You never share your toys or communicate
          <br />
          I guess I'm just a play date to you
          <br />
          <br />
          [Outro]
          <br />
          You know I give a fuck about you everyday
          <br />
          Guess it's time that I tell you the truth
          <br />
          If I share my toys, will you let me stay?
          <br />
          Don't want to leave this play date with you
          <br />          
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Melanie Martinez - Play Date.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Melanie Martinez - Play Date.mp3" download>Download</a>
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
</body>

</html>