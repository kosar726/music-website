<?php
include("../include/header-R&B.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Love Struck - Boyz II Men</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Boyz II Men - Love Struck.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Intro]
          <br />
          Ay-yay-yay-yay, yeah
          <br />
          Ay-yay-yay-yay, yeah, ooh
          <br />
          <br />
          [Chorus]
          <br />
          Love struck, intoxicated
          <br />
          Truth is I know you're taken
          <br />
          Queen of Hearts is the?game?you're playin'
          <br />
          Baby, it's?hard to fake it
          <br />
          This might get?complicated
          <br />
          Oh, yeah, yeah
          <br />
          <br />
          [Verse]
          <br />
          Say, "Goodbye," but it never ends
          <br />
          And you end up in my bed again
          <br />
          In public, you don't say nothin'
          <br />
          In private, you scream my name
          <br />
          I can keep your secret safe, oh-ooh
          <br />
          <br />
          [Pre-Chorus]
          <br />
          We know it's not right (It's not right)
          <br />
          But she wants one more time, oh, no
          <br />
          We both know that it's wrong
          <br />
          If I'm who you want
          <br />
          <br />
          [Chorus]
          <br />
          I'm so love struck, intoxicated (Yay-yay-yay, yeah)
          <br />
          Truth is I know you're taken (Yay-yay-yay, yeah)
          <br />
          <br />
          Queen of Hearts is the game you're playin' (Yay-yay-yay, yeah)
          <br />
          Baby, it's hard to fake it
          <br />
          This might get complicated
          <br />
          This might get
          <br />
          <br />
          [Bridge]
          <br />
          Ay-yay-yay-yay, yeah, oh, complicated
          <br />
          Ay-yay-yay-yay, yeah, ooh, complicated
          <br />
          Ay-yay-yay-yay, yeah, ooh, yeah
          <br />
          Baby, it's hard to fake it
          <br />
          This might get complicated
          <br />
          Oh, yeah, yeah
          <br />
          <br />
          [Chorus]
          <br />
          I'm so love struck, intoxicated (Yay-yay-yay, yeah)
          <br />
          Truth is I know you're taken (Yay-yay-yay, yeah)
          <br />
          Queen of Hearts is the game you're playin' (Yay-yay-yay, yeah)
          <br />
          Baby, it's hard to fake it
          <br />
          Well, this might get complicated
          <br />
          This might get
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Boyz II Men - Love Struck.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Boyz II Men - Love Struck.mp3" download>Download</a>
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