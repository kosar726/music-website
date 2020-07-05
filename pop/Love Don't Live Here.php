<?php
include("../include/header-pop.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Love Don't Live Here Anymore - Madonna</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Madonna - Love Don't Live Here Anymore.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Chorus]
          <br />
          You abandoned me
          <br />
          Love don't live here anymore
          <br />
          Just a vacancy
          <br />
          Love don't live here anymore
          <br />
          <br />
          [Verse 1]
          <br />
          When you lived inside of me
          <br />
          There was nothing I could conceive
          <br />
          That you wouldn't do for me
          <br />
          Troubles seemed so far away
          <br />
          You changed that right away, baby
          <br />
          <br />
          [Chorus]
          <br />
          You abandoned me
          <br />
          Love don't live here anymore
          <br />
          Just a vacancy
          <br />
          Love don't live here anymore
          <br />
          <br />
          [Verse 2]
          <br />
          Love don't live here anymore
          <br />
          Just emptiness and memories
          <br />
          Of what we had before you went away
          <br />
          Found another place to stay, another home
          <br />
          <br />
          [Chorus]
          <br />
          You abandoned me
          <br />
          Love don't live here anymore
          <br />
          Just a vacancy
          <br />
          Love don't live here anymore
          <br />
          <br />
          [Bridge]
          <br />
          In the windmills of my eyes
          <br />
          Everyone can see the loneliness inside me
          <br />
          Why'd ya have to go away?
          <br />
          Don't you know I miss you so and need your love?
          <br />
          <br />
          [Chorus]
          <br />
          You abandoned me
          <br />
          Love don't live here anymore
          <br />
          Just a vacancy
          <br />
          Love don't live here anymore
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Madonna - Love Don t Live Here Anymore.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Madonna - Love Don t Live Here Anymore.mp3" download>Download</a>
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