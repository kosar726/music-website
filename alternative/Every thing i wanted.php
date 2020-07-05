<?php
include("../include/header-alternative.php");
?>
  <div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Everything I Wanted - Billie Eilish </h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Billie Eilish - everything i wanted.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          I had a dream
          <br />
          I got everything I wanted
          <br />
          Not what you'd think
          <br />
          And if I'm bein' honest
          <br />
          It might've been a nightmare
          <br />
          To anyone who might care
          <br />
          Thought I could fly (Fly)
          <br />
          So I stepped off the Golden, mm
          <br />
          Nobody cried (Cried, cried, cried, cried)
          <br />
          Nobody even noticed
          <br />
          I saw them standing right there
          <br />
          Kinda thought they might care (Might care, might care)
          <br />
          <br />
          [Pre-Chorus]
          <br />
          I had a dream
          <br />
          I got everything I wanted
          <br />
          But when I wake up, I see
          <br />
          You with me
          <br />
          <br />
          [Chorus]
          <br />
          And you say, "As long as I'm here, no one can hurt you
          <br />
          Don't wanna lie here, but you can learn to
          <br />
          If I could change the way that you see yourself
          <br />
          You wouldn't wonder why you hear
          <br />
          'They don't deserve you'"
          <br />
          <br />
          [Verse 2]
          <br />
          I tried to scream
          <br />
          But my head was underwater
          <br />
          They called me weak
          <br />
          Like I'm not just somebody's daughter
          <br />
          Coulda been a nightmare
          <br />
          But it felt like they were right there
          <br />
          And it feels like yesterday was a year ago
          <br />
          But I don't wanna let anybody know
          <br />
          'Cause everybody wants something from me now
          <br />
          And I don't wanna let 'em down
          <br />
          <br />
          [Pre-Chorus]
          <br />
          I had a dream
          <br />
          I got everything I wanted
          <br />
          But when I wake up, I see
          <br />
          You with me
          <br />
          <br />
          [Chorus]
          <br />
          And you say, "As long as I'm here, no one can hurt you
          <br />
          Don't wanna lie here, but you can learn to
          <br />
          If I could change the way that you see yourself
          <br />
          You wouldn't wonder why you hear
          <br />
          'They don't deserve you'"
          <br />
          <br />
          [Outro]
          <br />
          If I knew it all then, would I do it again?
          <br />
          Would I do it again?
          <br />
          If they knew what they said would go straight to my head
          <br />
          What would they say instead?
          <br />
          If I knew it all then, would I do it again?
          <br />
          Would I do it again?
          <br />
          If they knew what they said would go straight to my head
          <br />
          What would they say instead?
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Billie Eilish - everything i wanted.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Billie Eilish - everything i wanted.mp3" download>Download</a>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include("../include/footer.php")
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