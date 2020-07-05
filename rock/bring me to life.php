<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3"> Bring Me To Life - Evanescence</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Evanescence - Bring Me To Life.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1: Amy Lee]
          <br />
          How can you see into my eyes like open doors?
          <br />
          Leading you down into my core, where I've become so numb
          <br />
          Without a soul, my spirit's sleeping somewhere cold
          <br />
          Until you find it there and lead it back home
          <br />
          <br />
          [Chorus: Amy Lee & Paul McCoy]
          <br />
          Wake me up, wake me up inside
          <br />
          I can't wake up, wake me up inside
          <br />
          Save me, call my name and save me from the dark
          <br />
          Wake me up, bid my blood to run
          <br />
          I can't wake up, before I come undone
          <br />
          Save me, save me from the nothing I've become
          <br />
          <br />
          [Verse 2: Amy Lee]
          <br />
          Now that I know what I'm without, you can't just leave me
          <br />
          Breathe into me and make me real, bring me to life
          <br />
          <br />
          [Chorus: Amy Lee & Paul McCoy]
          <br />
          Wake me up, wake me up inside
          <br />
          I can't wake up, wake me up inside
          <br />
          Save me, call my name and save me from the dark
          <br />
          Wake me up, bid my blood to run
          <br />
          I can't wake up, before I come undone
          <br />
          Save me, save me from the nothing I've become
          <br />
          <br />
          [Bridge: Amy Lee & Paul McCoy]
          <br />
          Bring me to life, I've been livin' a lie, there's nothing inside
          <br />
          Bring me to life
          <br />
          Frozen inside, without your touch, without your love, darling
          <br />
          Only you are the life among the dead
          <br />
          <br />
          [Verse 3: Amy Lee & Paul McCoy]
          <br />
          All this time, I can't believe I couldn't see
          <br />
          Kept in the dark, but you were there in front of me
          <br />
          I've been sleeping a thousand years, it seems
          <br />
          Got to open my eyes to everything
          <br />
          Without a thought, without a voice, without a soul
          <br />
          Don't let me die here
          <br />
          There must be something more
          <br />
          Bring me to life
          <br />
          <br />
          [Chorus: Amy Lee & Paul McCoy]
          <br />
          Wake me up, wake me up inside
          <br />
          I can't wake up, wake me up inside
          <br />
          Save me, call my name and save me from the dark
          <br />
          Wake me up, bid my blood to run
          <br />
          I can't wake up, before I come undone
          <br />
          Save me, save me from the nothing I've become
          <br />
          <br />
          [Outro: Amy Lee & Paul McCoy]
          <br />
          Bring me to life, I've been living a lie, there's nothing inside
          <br />
          Bring me to life
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Evanescence - Bring Me To Life.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Evanescence - Bring Me To Life.mp3" download>Download</a>
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