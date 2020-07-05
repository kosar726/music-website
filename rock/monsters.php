<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Monsters - Shinedown</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Shinedown - Monsters.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          Good for you, you fooled everybody
          <br />
          Good for you, you fooled everyone
          <br />
          Good for you, now you're somebody
          <br />
          Good for you, you fooled everyone
          <br />
          <br />
          [Pre-Chorus 1]
          <br />
          Leave your weapon on the table
          <br />
          Wrapped in burlap, barely able
          <br />
          Don't get angry, don't discourage
          <br />
          Take a shot of liquid courage
          <br />
          <br />
          [Chorus]
          <br />
          'Cause my monsters are real, and they're trained how to kill
          <br />
          And there's no comin' back and they just laugh at how I feel
          <br />
          And these monsters can fly, and they'll never say die
          <br />
          And there's no goin' back, if I get trapped I'll never heal
          <br />
          Yeah, my monsters are real
          <br />
          <br />
          [Verse 2]
          <br />
          Good for you, you hurt everybody
          <br />
          Good for you, you hurt everyone
          <br />
          Good for you, you love nobody
          <br />
          Good for you, you owe no one
          <br />
          <br />
          [Pre-Chorus 2]
          <br />
          Leave your weapon on the table
          <br />
          Wrapped in burlap, barely able
          <br />
          Call a doctor, say a prayer
          <br />
          Choose a god you think is fair
          <br />
          <br />
          [Chorus]
          <br />
          'Cause my monsters are real, and they're trained how to kill
          <br />
          And there's no comin' back and they just laugh at how I feel
          <br />
          And these monsters can fly, and they'll never say die
          <br />
          And there's no goin' back, if I get trapped I'll never heal
          <br />
          'Cause my monsters are real
          <br />
          <br />
          [Bridge]
          <br />
          Leave your weapon on the table
          <br />
          Wrapped in burlap, barely able
          <br />
          Don't get angry, don't discourage
          <br />
          Take a shot of liquid courage
          <br />
          Leave a light on if you're able
          <br />
          'Cause we both know you're unstable
          <br />
          Call a doctor, say a prayer
          <br />
          Choose a god you think is fair
          <br />
          <br />
          [Chorus]
          <br />
          'Cause my monsters are real, and they're trained how to kill
          <br />
          And there's no comin' back and they just laugh at how I feel
          <br />
          And these monsters can fly, and they'll never say die
          <br />
          And there's no goin' back, if I get trapped I'll never heal
          <br />
          Yeah, my monsters are real
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Shinedown - MONSTERS.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Shinedown - MONSTERS.mp3" download>Download</a>
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