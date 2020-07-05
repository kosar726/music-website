<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3"> Good Vibration - The Beach Boys</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/The Beach Boys - Good Vibration.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          I-I love the colorful clothes she wears
          <br />
          And the way the sunlight plays upon her hair
          <br />
          I hear the sound of a gentle word
          <br />
          On the wind that lifts her perfume through the air
          <br />
          <br />
          [Chorus]
          <br />
          I'm pickin' up good vibrations
          <br />
          She's giving me excitations (Oom bop bop)
          <br />
          I'm pickin' up good vibrations (Good vibrations, bop bop)
          <br />
          She's giving me excitations (Excitations, bop bop)
          <br />
          I'm pickin' up good vibrations (Good vibrations, bop bop)
          <br />
          She's giving me excitations (Excitations, bop bop)
          <br />
          I'm pickin' up good vibrations (Good vibrations, bop bop)
          <br />
          She's giving me excitations (Excitations)
          <br />
          <br />
          [Verse 2]
          <br />
          Close my eyes, she's somehow closer now
          <br />
          Softly smile, I know she must be kind
          <br />
          When I look in her eyes
          <br />
          She goes with me to a blossom world
          <br />
          <br />
          [Chorus]
          <br />
          I'm pickin' up good vibrations
          <br />
          She's giving me excitations (Oom bop bop)
          <br />
          I'm pickin' up good vibrations (Good vibrations, bop bop)
          <br />
          She's giving me excitations (Excitations, bop bop)
          <br />
          I'm pickin' up good vibrations (Good vibrations, bop bop)
          <br />
          She's giving me excitations (Excitations, bop bop)
          <br />
          I'm pickin' up good vibrations (Good vibrations, bop bop)
          <br />
          She's giving me excitations (Exci - tations)
          <br />
          <br />
          [Outro]
          <br />
          (Ahh)
          <br />
          (Ah, my my, what elation)
          <br />
          I don't know where but she sends me there
          <br />
          (Oh, my my, what a sensation)
          <br />
          (Oh, my my, what elation)
          <br />
          (Oh, my my, what)
          <br />
          <br />
          Gotta keep those lovin' good vibrations a-happenin' with her
          <br />
          Gotta keep those lovin' good vibrations a-happenin' with her
          <br />
          Gotta keep those lovin' good vibrations a-happenin'
          <br />
          (Ahh)
          <br />
          Good, good, good, good vibrations (Oom bop bop)
          <br />
          (I'm pickin' up good vibrations) (Good vibrations bop bop)
          <br />
          She's giving me excitations (Excitations, bop bop)
          <br />
          Good, good, good, good vibrations
          <br />
          <br />
          Na na na na na, na na na
          <br />
          Na na na na na, na na na (Ba da da, duh da, da)
          <br />
          Na na na na na, na na na (Ba da da, duh da, da)
          <br />
          Na na na na na, na na na (Ba da da, duh da, da)
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/The Beach Boys - Good Vibrations.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/The Beach Boys - Good Vibrations.mp3" download>Download</a>
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