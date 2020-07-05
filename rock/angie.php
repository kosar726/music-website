<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Angie - The Rolling Stones</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/The Rolling Stones - Angie.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          Angie, Angie
          <br />
          When will those clouds all disappear?
          <br />
          Angie, Angie
          <br />
          Where will it lead us from here?
          <br />
          With no loving in our souls
          <br />
          And no money in our coats
          <br />
          You can't say we're satisfied
          <br />
          But Angie, Angie
          <br />
          You can't say we never tried
          <br />
          Angie, you're beautiful, yeah
          <br />
          But ain't it time we said goodbye?
          <br />
          Angie, I still love you
          <br />
          Remember all those nights we cried?
          <br />
          All the dreams we held so close
          <br />
          Seemed to all go up in smoke
          <br />
          Let me whisper in your ear
          <br />
          Angie, Angie
          <br />
          Where will it lead us from here?
          <br />
          <br />
          [Verse 2]
          <br />
          Oh, Angie, don't you weep
          <br />
          All your kisses still taste sweet
          <br />
          I hate that sadness in your eyes
          <br />
          But Angie, Angie
          <br />
          Ain't it time we said goodbye? Yeah
          <br />
          <br />
          [Verse 3]
          <br />
          With no loving in our souls
          <br />
          And no money in our coats
          <br />
          You can't say were satisfied
          <br />
          But Angie, I still love you, baby
          <br />
          Everywhere I look, I see your eyes
          <br />
          There ain't a woman that comes close to you
          <br />
          Come on, baby, dry your eyes
          <br />
          But Angie, Angie
          <br />
          Ain't it good to be alive?
          <br />
          Angie, Angie
          <br />
          They can't say we never tried
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/The Rolling Stones - Angie.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/The Rolling Stones - Angie.mp3" download>Download</a>
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