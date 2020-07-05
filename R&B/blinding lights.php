<?php
include("../include/header-R&B.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Blinding Lights - The Weeknd</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/The Weeknd - Blinding Lights.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Intro]
          <br />
          Yeah
          <br />
          [Verse 1]
          <br />
          I've been tryna call
          <br />
          I've been on my own for long enough
          <br />
          Maybe you can show me how to love, maybe
          <br />
          I'm 
          <br />
          going through withdrawals
          <br />
          You don't even have?to do too much
          <br />
          You can turn me on with just a touch, baby
          <br />
          <br />
          [Pre-Chorus]
          <br />
          I look around and
          <br />
          Sin City's cold and empty (Oh)
          <br />
          No one's around to judge me (Oh)
          <br />
          I can't see clearly when you're gone
          <br />
          <br />
          [Chorus]
          <br />
          I said, ooh, I'm blinded by the lights
          <br />
          No, I can't sleep until I feel your touch
          <br />
          I said, ooh, I'm drowning in the night
          <br />
          Oh, when I'm like this, you're the one I trust
          <br />
          Hey, hey, hey
          <br />
          <br />
          [Verse 2]
          <br />
          I'm running out of time
          <br />
          'Cause I can see the sun light up the sky
          <br />
          So I hit the road in overdrive, baby, oh
          <br />
          <br />
          [Pre-Chorus]
          <br />
          The city's cold and empty (Oh)
          <br />
          No one's around to judge me (Oh)
          <br />
          I can't see clearly when you're gone
          <br />
          <br />
          [Chorus]
          <br />
          I said, ooh, I'm blinded by the lights
          <br />
          No, I can't sleep until I feel your touch
          <br />
          I said, ooh, I'm drowning in the night
          <br />
          Oh, when I'm like this, you're the one I trust
          <br />
          <br />
          [Bridge]
          <br />
          I'm just coming back to let you know (Back to let you know)
          <br />
          I could never say it on the phone (Say it on the phone)
          <br />
          Will never let you go this time (Ooh)
          <br />
          <br />
          [Chorus]
          <br />
          I said, ooh, I'm blinded by the lights
          <br />
          No, I can't sleep until I feel your touch
          <br />
          Hey, hey, hey
          <br />
          Hey, hey, hey
          <br />
          <br />
          [Outro]
          <br />
          I said, ooh, I'm blinded by the lights
          <br />
          No, I can't sleep until I feel your touch
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/The Weeknd - Blinding Lights.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/The Weeknd - Blinding Lights.mp3" download>Download</a>
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