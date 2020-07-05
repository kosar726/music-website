<?php
include("../include/header-alternative.php");
?>
  
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Afterlife - XYLØ</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/xylo - afterlife.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          I'm bad luck, baby, you know
          <br />
          Follows me around everywhere I go
          <br />
          And I don't need your sympathy, no
          <br />
          I need a fuckin' miracle, oh
          <br />
          Red wine teeth stain, it's been a long day
          <br />
          I just want your love, not your money
          <br />
          Leave me here, I'll be fine
          <br />
          I'll wait for the stars to align
          <br />
          <br />
          [Pre-Chorus]
          <br />
          'Cause oh, how the other half live
          <br />
          With their perfect skin
          <br />
          And oh, how I'll never be, never be
          <br />
          Just like them, so
          <br />
          <br />
          [Chorus]
          <br />
          I, I, I'm waiting for the afterlife
          <br />
          To show me a good time, baby
          <br />
          Somebody save me, I just wanna be loved
          <br />
          I, I, I'm waiting for the afterlife
          <br />
          To show me a good time, baby
          <br />
          Somebody save me, I just wanna be loved
          <br />
          <br />
          [Verse 2]
          <br />
          Don't watch TV no more
          <br />
          The news fuckin' scares me, new world war
          <br />
          And I don't wanna run away, no
          <br />
          I need a fuckin' holiday
          <br />
          So bad blood bankrupt out of love and luck
          <br />
          I'll get the keys to your Murciélago
          <br />
          Another drink will see me through
          <br />
          Feeling invincible
          <br />
          <br />
          [Pre-Chorus]
          <br />
          So oh, how the other half live
          <br />
          With their perfect teeth
          <br />
          And oh, how I'll never be, never be
          <br />
          Just like them, so
          <br />
          <br />
          
          [Chorus]
          <br />
          I, I, I'm waiting for the afterlife
          <br />
          To show me a good time, baby
          <br />
          Somebody save me, I just wanna be loved
          <br />
          I, I, I'm waiting for the afterlife
          <br />
          To show me a good time, baby
          <br />
          Somebody save me, I just wanna be loved
          <br />
          <br />
          
          [Bridge]
          <br />
          <br />
          We're still young, but we got older
          <br />
          We don't believe everything that we're told, yeah
          <br />
          We just wanna love, we just wanna be loved
          <br />
          We're still young, but we got older
          <br />
          We don't believe everything that we're told, yeah
          <br />
          We just wanna love, we just wanna be loved
          
          <br />
          <br />
          [Chorus]
          <br />
          So I, I, I'm waiting for the afterlife
          <br />
          To show me a good time, baby
          <br />
          Somebody save me, I just wanna be loved
          <br />
          I, I, I'm waiting for the afterlife
          <br />
          To show me a good time, baby
          <br />
          Somebody save me, I just wanna be loved
          <br />
          (I just wanna be loved)
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/XYLØ - Afterlife.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/XYLØ - Afterlife.mp3" download>Download </a>
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