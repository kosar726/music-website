<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white">Before You Go - Lewis Capaldi</h1>
        <img class="img-fluid d-block mx-auto py-5" style="height: 600px;" src="./image/Lewis Capaldi - before you go.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          I fell by the wayside like everyone else
          <br />
          I hate you, I hate you, I hate you but I was just kidding myself
          <br />
          Our every moment, I start to replace
          <br />
          'Cause now that they're gone, all I hear are the words that I needed to say
          <br />
          <br />
          [Pre-Chorus]
          <br />
          When you hurt under the surface
          <br />
          Like troubled water running cold
          <br />
          Well, time can heal but this won't
          <br />
          <br />
          [Chorus]
          <br />
          So, before you go
          <br />
          Was there something I could've said
          <br />
          To make your heart beat better?
          <br />
          If only I'd have known you had a storm to weather
          <br />
          So, before you go
          <br />
          Was there something I could've said
          <br />
          To make it all stop hurting?
          <br />
          It kills me how your mind can make you feel so worthless
          <br />
          So, before you go
          <br />
          <br />
          [Verse 2]
          <br />
          Was never the right time, whenever you called
          <br />
          Went little by little by little until there was nothing at all
          <br />
          Our every moment, I start to replay
          <br />
          But all I can think about is seeing that look on your face
          <br />
          <br />
          [Pre-Chorus]
          <br />
          When you hurt under the surface
          <br />
          Like troubled water running cold
          <br />
          Well, time can heal but this won't
          <br />
          <br />
          [Chorus]
          <br />
          So, before you go
          <br />
          Was there something I could've said
          <br />
          To make your heart beat better?
          <br />
          If only I'd have known you had a storm to weather
          <br />
          So, before you go
          <br />
          Was there something I could've said
          <br />
          To make it all stop hurting?
          <br />
          It kills me how your mind can make you feel so worthless
          <br />
          So, before you go
          <br />
          <br />
          [Bridge]
          <br />
          Would we be better off by now
          <br />
          If I'd have let my walls come down?
          <br />
          Maybe, I guess we'll never know
          <br />
          You know, you know
          <br />
          <br />
          [Chorus]
          <br />
          Before you go
          <br />
          Was there something I could've said
          <br />
          To make your heart beat better?
          <br />
          If only I'd have known you had a storm to weather
          <br />
          So, before you go
          <br />
          Was there something I could've said
          <br />
          To make it all stop hurting?
          <br />
          It kills me how your mind can make you feel so worthless
          <br />
          So, before you go
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Lewis Capaldi - Before You Go.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Lewis Capaldi - Before You Go.mp3" download>Download</a>
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