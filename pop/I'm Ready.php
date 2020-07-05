<?php
include("../include/header-pop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">I'm Ready - Sam Smith (feat. Demi Lovato)</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Sam Smith (feat. Demi Lovato) - I'm Ready.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1: Sam Smith]
          <br />
          It's a cold night in my bed in the heat of the summer
          <br />
          I've been waitin'?patiently?for a beautiful?lover
          <br />
          He's not a cheater, a believer
          <br />
          He's?a warm, warm-blooded achiever
          <br />
          It's a lonely night in my bed?in?the?heat of the?summer, oh
          <br />
          <br />
          [Pre-Chorus: Sam Smith]
          <br />
          It's so?hard when you're with someone
          <br />
          Your heart breaks and it ain't no fun
          <br />
          But I gotta take that risk tonight
          <br />
          <br />
          [Chorus: Sam Smith & Demi Lovato]
          <br />
          I'm ready, I'm ready, I'm ready, I'm ready
          <br />
          For someone to love me (For someone to love me)
          <br />
          I'm ready (I'm ready), I'm ready (I'm ready)
          <br />
          I'm ready (I'm ready), I'm ready (I'm ready)
          <br />
          For someone to love me, for someone to love me
          <br />
          <br />
          [Verse 2: Demi Lovato]
          <br />
          Oh, yeah
          <br />
          It's a hot night in my head in the chill of the winter
          <br />
          No, I've been lookin' hard for a lover disguised as a sinner
          <br />
          No, not a cheater, a redeemer
          <br />
          He's a cold, cold-blooded defeater
          <br />
          It's a hot night in my head in the chill of the winter, no
          <br />
          <br />
          [Pre-Chorus: Both & Demi Lovato]
          <br />
          It's so hard when you're with someone
          <br />
          Your heart breaks and it ain't no fun (Breaks)
          <br />
          But I gotta take that risk tonight
          <br />
          <br />
          [Chorus: Demi Lovato]
          <br />
          I'm ready, I'm ready, I'm ready, I'm ready
          <br />
          For someone to love me (For someone to love me)
          <br />
          I'm ready (I'm ready), I'm ready (I'm ready)
          <br />
          I'm ready (I'm ready), I'm ready (I'm ready)
          <br />
          For someone to love me, for someone to love me, yeah
          <br />
          <br />
          [Bridge: Sam Smith & Demi Lovato]
          <br />
          Oh, oh
          <br />
          It's a cold night in my bed in the heat of the summer
          <br />
          No, I've been lookin' hard for a lover disguised as a sinner
          <br />
          <br />
          [Chorus: Sam Smith, Demi Lovato & Both]
          <br />
          I'm ready (I'm ready), I'm ready (I'm ready)
          <br />
          I'm ready (I'm ready), I'm ready (I'm ready)
          <br />
          For someone to love me (For someone to love me)
          <br />
          I'm ready (I'm ready), I'm ready (I'm ready)
          <br />
          I'm ready (I'm ready), I'm ready (I'm ready)
          <br />
          For someone to love me, for someone to love me
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Sam Smith (feat. Demi Lovato) - I'm Ready.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Sam Smith (feat. Demi Lovato) - I'm Ready.mp3" download>Download</a>
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