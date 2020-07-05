<?php
include("../include/header-hiphop.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Sunflower - Post Malone (feat. Swae Lee)</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Post Malone (feat. Swae Lee) - Sunflower.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Intro: Swae Lee]
          <br />
          Ayy, ayy, ayy, ayy (Ooh)
          <br />
          Ooh, ooh, ooh, ooh (Ooh)
          <br />
          Ayy, ayy
          <br />
          Ooh, ooh, ooh, ooh
          <br />
          <br />
          [Verse 1: Swae Lee]
          <br />
          Needless to say, I keep in check
          <br />
          She was a bad-bad, nevertheless (Yeah)
          <br />
          Callin' it quits now, baby, I'm a wreck (Wreck)
          <br />
          Crash at my place, baby, you're a wreck (Wreck)
          <br />
          Needless to say, I'm keeping in check
          <br />
          She was a bad-bad, nevertheless
          <br />
          Callin' it quits now, baby, I'm a wreck
          <br />
          Crash at my place, baby, you're a wreck
          <br />
          Thinkin' in a bad way, losin' your grip
          <br />
          Screamin' at my face, baby, don't trip
          <br />
          Someone took a big L, don't know how that felt
          <br />
          Lookin' at you sideways, party on tilt
          <br />
          Ooh-ooh, some things you just can't refuse
          <br />
          She wanna ride me like a cruise and I'm not tryna lose
          <br />
          <br />
          [Chorus: Swae Lee]
          <br />
          Then you're left in the dust, unless I stuck by ya
          <br />
          You're a sunflower, I think your love would be too much
          <br />
          Or you'll be left in the dust, unless I stuck by ya
          <br />
          You're the sunflower, you're the sunflower
          <br />
          <br />
          [Verse 2: Post Malone]
          <br />
          Every time I'm leavin' on ya (Ooh)
          <br />
          You don't make it easy, no (No, no)
          <br />
          Wish I could be there for ya (Ooh)
          <br />
          Give me a reason to, oh (Oh)
          <br />
          Every time I'm walkin' out (Oh)
          <br />
          I can hear you tellin' me to turn around (Oh, oh)
          <br />
          Fightin' for my trust and you won't back down (No)
          <br />
          Even if we gotta risk it all right now, oh (Now)
          <br />
          I know you're scared of the unknown (Known)
          <br />
          You don't wanna be alone (Alone)
          <br />
          I know I always come and go (And go)
          <br />
          But it's out of my control
          <br />
          <br />
          [Chorus: Post Malone]
          <br />
          And you'll be left in the dust, unless I stuck by ya
          <br />
          You're the sunflower, I think your love would be too much
          <br />
          Or you'll be left in the dust, unless I stuck by ya
          <br />
          You're the sunflower, you're the sunflower (Yeah)
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Post Malone (feat. Swae Lee) - Sunflower.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Post Malone (feat. Swae Lee) - Sunflower.mp3" download>Download</a>
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