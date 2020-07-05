<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Second Chance - Shinedown</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Shinedown - Second Chance.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Verse 1]
          <br />
          My eyes are open wide
          <br />
          By the way, I made it through the day
          <br />
          I watched the world outside
          <br />
          By the way, I'm leaving out today
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Well I just saw Halley's comet, she waved
          <br />
          Said, "Why you always running in place?"
          <br />
          Even the man in the moon disappeared
          <br />
          Somewhere in the stratosphere
          <br />
          <br />
          [Chorus]
          <br />
          Tell my mother, tell my father
          <br />
          I've done the best I can
          <br />
          To make them realize, this is my life
          <br />
          I hope they understand
          <br />
          <br />
          [Post-Chorus]
          <br />
          I'm not angry, I'm just saying...
          <br />
          Sometimes goodbye is a second chance
          <br />
          <br />
          [Verse 2]
          <br />
          Please don't cry one tear for me
          <br />
          I'm not afraid of what I have to say
          <br />
          This is my one and only voice
          <br />
          So listen close, it's only for today
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Well I just saw Halley's comet, she waved
          <br />
          Said, "Why you always running in place?"
          <br />
          Even the man in the moon disappeared
          <br />
          Somewhere in the stratosphere
          <br />
          <br />
          [Chorus]
          <br />
          Tell my mother, tell my father
          <br />
          I've done the best I can
          <br />
          To make them realize, this is my life
          <br />
          I hope they understand
          <br />
          <br />
          [Post-Chorus]
          <br />
          I'm not angry, I'm just saying...
          <br />
          Sometimes goodbye is a second chance
          <br />
          <br />
          [Bridge]
          <br />
          Here's my chance
          <br />
          This is my chance
          <br />
          <br />
          [Chorus]
          <br />
          Tell my mother, tell my father
          <br />
          I've done the best I can
          <br />
          To make them realize, this is my life
          <br />
          I hope they understand
          <br />
          <br />
          [Post-Chorus]
          <br />
          I'm not angry, I'm just saying...
          <br />
          Sometimes goodbye is a second chance
          <br />
          <br />
          [Outro]
          <br />
          Sometimes goodbye is a second chance
          <br />
          Sometimes goodbye is a second chance
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Shinedown - Second Chance.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Shinedown - Second Chance.mp3" download>Download</a>
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