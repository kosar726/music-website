<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">We Will Rock You - Queen</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Queen - We Will Rock You.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Verse 1]
          <br />
          Buddy, you're a boy, make a big noise
          <br />
          Playing in the street, gonna be a big man someday
          <br />
          You got mud on your face, you big disgrace
          <br />
          Kicking your can all over the place, singing
          <br />
          <br />
          [Chorus]
          <br />
          We will, we will rock you
          <br />
          We will, we will rock you
          <br />
          <br />
          [Verse 2]
          <br />
          Buddy, you're a young man, hard man
          <br />
          Shouting in the street, gonna take on the world someday
          <br />
          You got blood on your face, you big disgrace
          <br />
          Waving your banner all over the place
          <br />
          <br />
          [Chorus]
          <br />
          We will, we will rock you (Sing it out)
          <br />
          We will, we will rock you
          <br />
          <br />
          [Verse 3]
          <br />
          Buddy, you're an old man, poor man
          <br />
          Pleading with your eyes, gonna make you some peace someday
          <br />
          You got mud on your face, you big disgrace
          <br />
          Somebody better put you back into your place
          <br />
          <br />
          [Chorus]
          <br />
          We will, we will rock you, sing it
          <br />
          We will, we will rock you, everybody
          <br />
          We will, we will rock you, hmm
          <br />
          We will, we will rock you, alright
          <br />
          [Guitar Solo]
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Queen - We Will Rock You.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Queen - We Will Rock You.mp3" download>Download</a>
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