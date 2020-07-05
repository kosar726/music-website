<?php
include("../include/header-R&B.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">What You Did - Mahalia (feat. Ella Mai)</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Mahalia (feat. Ella Mai) - What You Did.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Intro]
          <br />
          Oh baby
          <br />
          [Verse 1: Mahalia]
          <br />
          I know what you did
          <br />
          Yeah, I know, I know
          <br />
          And I wanna talk 'bout it
          <br />
          And I know you don't
          <br />
          I been holding guard for so long, so long
          <br />
          And I don't know where to start, I don't know where to start
          <br />
          Tell me where you hide, where do you go?
          <br />
          Tell me is she nice, does she know I know?
          <br />
          Tell me why you lie, tell me why
          <br />
          I don't know what you are, I don't know what you are, no
          <br />
          <br />
          [Chorus: Mahalia]
          <br />
          What you did
          <br />
          Yeah, you know I love you but I can't forgive it
          <br />
          You could tell me stay, but I have to go
          <br />
          'Cause I would not expect someone to stay around
          <br />
          If I let them down, oh
          <br />
          <br />
          [Verse 2: Ella Mai]
          <br />
          Oh, it's funny how
          <br />
          Right when I let my guard down
          <br />
          You play around
          <br />
          And no, not this time, we can't hash it out
          <br />
          It's too late for me to stay
          <br />
          I wish all the things you say was what your behaviour displayed
          <br />
          But, no, I could've done without lies, lies
          <br />
          And although I know love is blind, blind
          <br />
          This just don't feel right
          <br />
          Ain't no more we, ain't no more you with me
          <br />
          <br />
          [Chorus: Mahalia, Ella Mai, Both]
          <br />
          What you did (What you did)
          <br />
          You know I love you but I can't forgive it (I can't forgive)
          <br />
          You could tell me stay, but I have to go (I gotta go)
          <br />
          'Cause I would not expect someone to stay around
          <br />
          If I let them down, oh
          <br />
          What you did (What you did)
          <br />
          Yeah, you know I love you but I can't forgive it (You know I love you, boy)
          <br />
          You could tell me stay, but I have to go (Stay)
          <br />
          'Cause I would not expect someone to stay around
          <br />
          If I let them down, oh
          <br />
          <br />
          [Bridge: Mahalia]
          <br />
          Oh, you've become the reason I'm so down (Down, down)
          <br />
          Oh, I won't excuse you, I don't wanna go down, yeah (Down, down)
          <br />
          Do you know that you've been the reason I'm so low? (So low)
          <br />
          So you told me to stay here, but you know that I won't
          <br />
          'Cause I still can't believe
          <br />
          <br />
          [Chorus: Mahalia, Ella Mai]
          <br />
          What you did, no
          <br />
          You know I love you but I can't forgive it
          <br />
          You could tell me stay, but I have to go
          <br />
          'Cause I would not expect someone to stay around
          <br />
          If I let them down, oh
          <br />
          What you did (What you do, what you do)
          <br />
          Yeah, you know I love you but I can't forgive it (Can't forgive, can't, can't forgive)
          <br />
          You could tell me stay, but I have to go (Have to go)
          <br />
          'Cause I would not expect someone to stay around
          <br />
          If I let them down, oh
          <br />
          <br />
          [Outro: Mahalia]
          <br />
          Wow (Don't apologize, please)
          <br />
          I would never, I would never do it, baby (After all, you've had your fun; oh boy)
          <br />
          (Don't try change my mind, please)
          <br />
          Don't try change my mind
          <br />
          (Baby, me and you are done)
          <br />
          Me and you are done
          <br />
          (Boy, oh boy)
          <br />
          (Boy, oh boy)
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Mahalia (feat. Ella Mai) - What You Did.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Mahalia (feat. Ella Mai) - What You Did.mp3" download>Download</a>
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