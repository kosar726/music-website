<?php
include("../include/header-pop.php");
?>

<div class="container-fuid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">American Sadness - XYLØ </h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/XYLØ - American Sadness.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          Take a sip of this American sadness
          <br />
          I just wanna sleep tonight
          <br />
          We got history that keeps?on?repeating
          <br />
          We don't wanna?believe it
          <br />
          Oh, believe me
          <br />
          <br />
          [Pre-Chorus]
          <br />
          It's like we?livin' in slow motion, killin' time, killin' time
          <br />
          Rip my heart out of my chest, oh God
          <br />
          <br />
          [Chorus]
          <br />
          Maybe I said too much
          <br />
          Or maybe I (Maybe I)
          <br />
          Maybe I didn't say enough
          <br />
          When you're touchin' me, I don't feel a thing
          <br />
          Or maybe my heart's not in it anymore
          <br />
          Maybe my heart's not in it anymore
          <br />
          Maybe my heart's not in it anymore
          <br />
          <br />
          [Post-Chorus]
          <br />
          Maybe my, maybe my
          <br />
          Heart's not in it anymore
          <br />
          Maybe my heart's not in it anymore, more
          <br />
          <br />
          [Verse 2]
          <br />
          Pull it up (Pull it up)
          <br />
          I put the suitcase in the back of the trunk (Of the trunk)
          <br />
          Put every state in between the two us
          <br />
          Can't believe it, this history, repeatin' history
          <br />
          Oh, believe me
          <br />
          <br />
          [Pre-Chorus]
          <br />
          It's like we livin' in slow motion, killin' time, killin' time
          <br />
          Rip my heart out of my chest, oh God
          <br />
          <br />
          [Chorus]
          <br />
          Maybe I said too much
          <br />
          Or maybe I (Maybe I)
          <br />
          Maybe I didn't say enough
          <br />
          When you're touchin' me, I don't feel a thing
          <br />
          Or maybe my heart's not in it anymore
          <br />
          Maybe my heart's not in it anymore
          <br />
          Maybe my heart's not in it anymore
          <br />
          <br />
          [Post-Chorus]
          <br />
          Maybe my, maybe my
          <br />
          Heart's not in it anymore
          <br />
          I don't feel a thing
          <br />
          Maybe my heart's not in it anymore, more
          <br />
          <br />
          [Bridge]
          <br />
          Tell me what I don't wanna hear
          <br />
          Let that sink in, insincere
          <br />
          Write down my goodbyes
          <br />
          You'll drink deep and dry your eyes
          <br />
          Maybe I gave you too little of me
          <br />
          <br />
          [Chorus]
          <br />
          Maybe I said too much
          <br />
          Or maybe I (Maybe I)
          <br />
          Maybe I didn't say enough
          <br />
          When you're touchin' me, I don't feel a thing
          <br />
          Or maybe my (Maybe my) heart's not in it anymore
          <br />
          Maybe my heart's not in it anymore
          <br />
          Maybe my heart's not in it anymore
          <br />
          Maybe my heart's not in it anymore
          <br />
          <br />
          [Post-Chorus]
          <br />
          Maybe my, maybe my
          <br />
          Heart's not in it anymore
          <br />
          Maybe my heart's not in it anymore, more
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/XYLØ - American Sadness.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/XYLØ - American Sadness.mp3" download>Download</a>
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