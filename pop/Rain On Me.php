<?php
include("../include/header-pop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Rain On Me - Lady Gaga (feat. Ariana Grande)</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Lady Gaga (feat. Ariana Grande) - Rain on Me.jpeg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1: Lady Gaga]
          <br />
          I didn't ask for a free ride
          <br />
          I only asked you to show me a real?good?time
          <br />
          I never asked?for the rainfall
          <br />
          At least I showed?up, you showed me nothing at all
          <br />
          [Pre-Chorus: Lady Gaga]
          <br />
          It's coming down on?me
          <br />
          Water?like?misery
          <br />
          It's coming down?on me
          <br />
          I'm ready,?rain on me
          <br />
          <br />
          [Chorus: Lady Gaga]
          <br />
          I'd rather be dry, but at least I'm alive
          <br />
          Rain on me, rain, rain
          <br />
          Rain on me, rain, rain
          <br />
          I'd rather be dry, but at least I'm alive
          <br />
          Rain on me, rain, rain
          <br />
          Rain on me
          <br />
          <br />
          [Post-Chorus: Lady Gaga & Ariana Grande]
          <br />
          Rain on me
          <br />
          Mmm, oh yeah, baby
          <br />
          Rain on me
          <br />
          [Verse 2: Ariana Grande]
          <br />
          Livin' in a world where no one's innocent
          <br />
          Oh, but at least we try, mmm
          <br />
          Gotta live my truth, not keep it bottled in
          <br />
          So I don't lose my mind, baby, yeah
          <br />
          [Pre-Chorus: Ariana Grande & Lady Gaga]
          <br />
          I can feel it on my skin (It's comin' down on me)
          <br />
          Teardrops on my face (Water like misery)
          <br />
          Let it wash away my sins (It's coming down on me)
          <br />
          Let it wash away, yeah
          <br />
          <br />
          [Chorus: Lady Gaga & Ariana Grande, Lady Gaga & Ariana Grande]
          <br />
          I'd rather be dry, but at least I'm alive
          <br />
          Rain on me, rain, rain
          <br />
          Rain on me, rain, rain
          <br />
          I'd rather be dry, but at least I'm alive
          <br />
          Rain on me, rain, rain
          <br />
          Rain (Rain) on (On) me
          <br />
          <br />
          [Post-Chorus: Ariana Grande, Both & Lady Gaga]
          <br />
          Rain on me
          <br />
          Rain on me
          <br />
          Oh yeah, yeah
          <br />
          Rain on me, ooh yeah
          <br />
          Rain on me
          <br />
          Rain on me, ooh
          <br />
          <br />
          [Bridge: Lady Gaga & Ariana Grande, Lady Gaga & Ariana Grande]
          <br />
          Hands up to the sky
          <br />
          I'll be your galaxy
          <br />
          I'm about to fly
          <br />
          Rain on me, tsunami
          <br />
          Hands up to the sky
          <br />
          I'll be your galaxy
          <br />
          I'm about to fly
          <br />
          Rain on me (Rain on me)
          <br />
          <br />
          [Chorus: Lady Gaga & Ariana Grande, Ariana Grande & Lady Gaga]
          <br />
          I'd rather be dry, but at least I'm alive (Rain on me)
          <br />
          Rain on me, rain, rain
          <br />
          Rain on me, rain, rain (Rain on me)
          <br />
          I'd rather be dry, but at least I'm alive (At least I'm alive)
          <br />
          Rain on me, rain, rain (Rain on me, babe)
          <br />
          Rain on me (Rain on me)
          <br />
          <br />
          [Outro: Lady Gaga & Ariana Grande, Lady Gaga & Ariana Grande]
          <br />
          I hear the thunder comin' down
          <br />
          Won't you rain on me?
          <br />
          Eh, eh, yeah (Rain on, woo)
          <br />
          I hear the thunder comin' down
          <br />
          Won't you rain on me? (Me)
          <br />
          Eh, eh, yeah
          <br />
          Rain on me
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Lady Gaga (feat. Ariana Grande) - Rain On Me.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Lady Gaga (feat. Ariana Grande) - Rain On Me.mp3" download>Download</a>
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