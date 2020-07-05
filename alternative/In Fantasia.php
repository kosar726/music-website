<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">In Fantasia - Kishi bashi</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/kishi bashi - in fantasia.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          In Fantasia the mirrors lie to us they plant a seed
          <br />
          One by one we build an empire where devils roam and breed
          <br />
          Fading sunsets... to forget them is the mark of death
          <br />
          As we break in through the window
          <br />
          Of mind and greed
          <br />
          Darkened bridges sink away into the brackishness
          <br />
          Swirling sin into a rainbow of atrophy
          <br />
          When the winters help the golden autumns take it's leave
          <br />
          Spawning passages for vampires
          <br />
          To suck and feed
          <br />
          <br />
          Kareru kareru
          <br />
          Subetega kareteruno
          <br />
          Fuyuno sabaku fuyuno sabaku ga hirogaru
          <br />
          Warerano yoruga kuru warerano yoruga hajimaru
          <br />
          Karehaga kareru warerano fuyuno sabaku
          <br />
          Waking insights born of jealousy and faithlessness
          <br />
          Gave us strength among the gentiles of modernity
          <br />
          In Fantasia the spirits hide from us they cannot bleed
          <br />
          Innocence is not a virtue in times of need
          <br />
          <br />
          Endless twilight... if only stars would show their faithful stare
          <br />
          In this world of fading memories, we'd cease to be
          <br />
          <br />
          In Fantasia the air is dense to me it hurts to scream
          <br />
          At windless castles in the darkness, too faint to see...
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Kishi Bashi - In Fantasia.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Kishi Bashi - In Fantasia.mp3" download>Download</a>
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