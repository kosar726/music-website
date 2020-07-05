<?php
include("../include/header-pop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Daisies - Katy Perry </h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Katy Perry - Daisies.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          Told them your dreams, and they all started laughing
          <br />
          I guess you're out of your mind?'til?it actually happens
          <br />
          <br />
          [Pre-Chorus]
          <br />
          I'm?the small town
          <br />
          One in seven billion
          <br />
          Why?can't it be me?
          <br />
          <br />
          [Chorus]
          <br />
          They told me I was out there,?tried?to?knock me down
          <br />
          Took?those sticks and?stones, showed 'em I could build a house
          <br />
          They tell me that I'm crazy, but I'll never let 'em change me
          <br />
          'Til they cover me in daisies, daisies, daisies
          <br />
          They said I'm going nowhere, tried to count me out
          <br />
          Took those sticks and stones, showed 'em I could build a house
          <br />
          They tell me that I'm crazy, but I'll never let 'em change me
          <br />
          'Til they cover me in daisies, daisies, daisies
          <br />
          <br />
          [Verse 2]
          <br />
          When did we all stop believing in magic?
          <br />
          Why did we put all our hopes in a box in the attic?
          <br />
          <br />
          [Pre-Chorus]
          <br />
          I'm the long shot
          <br />
          I'm the Hail Mary
          <br />
          Why can't it be me?
          <br />
          <br />
          [Chorus]
          <br />
          They told me I was out there, tried to knock me down (Knock me down)
          <br />
          Took those sticks and stones, showed 'em I could build a house
          <br />
          They tell me that I'm crazy, but I'll never let 'em change me
          <br />
          'Til they cover me in daisies, daisies, daisies
          <br />
          They said I'm going nowhere, tried to count me out
          <br />
          Took those sticks and stones, showed 'em I could build a house
          <br />
          They tell me that I'm crazy, but I'll never let 'em change me
          <br />
          'Til they cover me in daisies, daisies, daisies
          <br />
          <br />
          [Bridge]
          <br />
          Hey, hey
          <br />
          Oh, cover me in daisies
          <br />
          Hey, hey
          <br />
          <br />
          [Pre-Chorus]
          <br />
          I'm the small town
          <br />
          One in seven billion
          <br />
          Why can't it be me?
          <br />
          <br />
          [Chorus]
          <br />
          They told me I was out there, tried to knock me down
          <br />
          Took those sticks and stones, showed 'em I could build a house
          <br />
          They tell me that I'm crazy, but I'll never let 'em change me
          <br />
          'Til they cover me in daisies, daisies, daisies
          <br />
          They said I'm going nowhere, tried to count me out (Count me out)
          <br />
          Took those sticks and stones, showed 'em I could build a house
          <br />
          They tell me that I'm crazy, but I'll never let 'em change me
          <br />
          'Til they cover me in daisies, daisies, daisies
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Katy Perry - Daisies.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Katy Perry - Daisies.mp3" download>Download</a>
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