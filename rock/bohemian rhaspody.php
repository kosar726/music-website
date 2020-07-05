<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Bohemian Rhapsody - Queen</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Queen - Bohemian Rhapsody.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Intro]
          <br />
          Is this the real life? Is this just fantasy?
          <br />
          Caught in a landslide, no escape from reality
          <br />
          Open your eyes, look up to the skies and see
          <br />
          I'm just a poor boy, I need no sympathy
          <br />
          Because I'm easy come, easy go, little high, little low
          <br />
          Any way the wind blows doesn't really matter to me, to me
          <br />
          <br />
          [Verse 1]
          <br />
          Mama, just killed a man
          <br />
          Put a gun against his head, pulled my trigger, now he's dead
          <br />
          Mama, life had just begun
          <br />
          But now I've gone and thrown it all away
          <br />
          Mama, ooh, didn't mean to make you cry
          <br />
          If I'm not back again this time tomorrow
          <br />
          Carry on, carry on as if nothing really matters
          <br />
          <br />
          [Verse 2]
          <br />
          Too late, my time has come
          <br />
          Sends shivers down my spine, body's aching all the time
          <br />
          Goodbye, everybody, I've got to go
          <br />
          Gotta leave you all behind and face the truth
          <br />
          Mama, ooh (Any way the wind blows)
          <br />
          I don't wanna die
          <br />
          I sometimes wish I'd never been born at all
          <br />
          [Guitar Solo]
          <br />
          <br />
          [Verse 3]
          <br />
          I see a little silhouetto of a man
          <br />
          Scaramouche, Scaramouche, will you do the Fandango?
          <br />
          Thunderbolt and lightning, very, very frightening me
          <br />
          (Galileo) Galileo, (Galileo) Galileo, Galileo Figaro magnifico
          <br />
          But I'm just a poor boy, nobody loves me
          <br />
          He's just a poor boy from a poor family
          <br />
          Spare him his life from this monstrosity
          <br />
          Easy come, easy go, will you let me go?
          <br />
          Bismillah! No, we will not let you go
          <br />
          (Let him go) Bismillah! We will not let you go
          <br />
          (Let him go) Bismillah! We will not let you go
          <br />
          (Let me go) Will not let you go
          <br />
          (Let me go) Will not let you go
          <br />
          (Never, never, never, never let me go) Ah
          <br />
          No, no, no, no, no, no, no
          <br />
          (Oh, mamma mia, mamma mia) Mamma mia, let me go
          <br />
          Beelzebub has a devil put aside for me, for me, for me!
          <br />
          <br />
          [Verse 4]
          <br />
          So you think you can stone me and spit in my eye?
          <br />
          So you think you can love me and leave me to die?
          <br />
          Oh, baby, can't do this to me, baby!
          <br />
          Just gotta get out, just gotta get right outta here
          <br />
          <br />
          [Outro]
          <br />
          (Ooh)
          <br />
          (Ooh, yeah, ooh, yeah)
          <br />
          Nothing really matters, anyone can see
          <br />
          Nothing really matters
          <br />
          Nothing really matters to me
          <br />
          Any way the wind blows
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Queen - Bohemian Rhapsody.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Queen - Bohemian Rhapsody.mp3" download>Download</a>
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