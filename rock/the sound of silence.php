<?php
include("../include/header-rock.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">The Sound Of Silence - Disturbed</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Disturbed - The Sound Of Silence.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Verse 1]
          <br />
          Hello darkness, my old friend
          <br />
          I've come to talk with you again
          <br />
          Because a vision softly creeping
          <br />
          Left its seeds while I was sleeping
          <br />
          And the vision that was planted in my brain
          <br />
          Still remains within the sound of silence
          <br />
          <br />
          [Verse 2]
          <br />
          In restless dreams I walked alone
          <br />
          Narrow streets of cobblestone
          <br />
          'Neath the halo of a street lamp
          <br />
          I turned my collar to the cold and damp
          <br />
          When my eyes were stabbed by the flash of a neon light
          <br />
          That split the night and touched the sound of silence
          <br />
          <br />
          [Verse 3]
          <br />
          And in the naked light I saw
          <br />
          Ten thousand people, maybe more
          <br />
          People talking without speaking
          <br />
          People hearing without listening
          <br />
          People writing songs that voices never shared
          <br />
          And no one dared disturb the sound of silence
          <br />
          <br />
          [Verse 4]
          <br />
          "Fools", said I, "You do not know
          <br />
          Silence like a cancer grows
          <br />
          Hear my words that I might teach you
          <br />
          Take my arms that I might reach you"
          <br />
          But my words like silent raindrops fell
          <br />
          And echoed in the wells of silence
          <br />
          <br />
          [Verse 5]
          <br />
          And the people bowed and prayed
          <br />
          To the neon God they made
          <br />
          And the sign flashed out its warning
          <br />
          In the words that it was forming
          <br />
          And the sign said "The words of the prophets are written on the subway walls
          <br />
          And tenement halls and whispered in the sound of silence"
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Disturbed - The Sound of Silence.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Disturbed - The Sound of Silence.mp3" download>Download</a>
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