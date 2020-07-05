<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Ordinary Man - Ozzy Osbourne (feat. Elton John)</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Ozzy Osbourne - Ordinary Man.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1: Ozzy Osbourne]
          <br />
          I was unprepared for fame then everybody knew my name
          <br />
          No more lonely nights, it's all?for?you
          <br />
          I have traveled?many miles, I've seen tears and?I've seen smiles
          <br />
          Just remember that it's all for you
          <br />
          <br />
          [Pre-Chorus: Ozzy Osbourne]
          <br />
          Don't forget me as the colours fade
          <br />
          When the lights go down, it's just an empty stage
          <br />
          Okay
          <br />
          <br />
          [Chorus: Ozzy Osbourne]
          <br />
          Yes, I've been a bad guy, been higher than the blue sky
          <br />
          And the truth is I don't wanna die an ordinary man
          <br />
          I've made mama cry, don't know why I'm still alive
          <br />
          Yes, the truth is I don't wanna die an ordinary man
          <br />
          <br />
          [Verse 2: Elton John]
          <br />
          Many times, I lost control, they tried to kill my rock 'n' roll
          <br />
          Just remember I'm still here for you
          <br />
          I don't wanna say goodbye, when I do, you'll be alright
          <br />
          After all, I did it all for you
          <br />
          <br />
          [Pre-Chorus: Ozzy Osbourne]
          <br />
          Don't forget me as the colours fade
          <br />
          When the lights go down, it's just an empty stage
          <br />
          Okay
          <br />
          <br />
          [Chorus: Ozzy Osbourne]
          <br />
          Yes, I've been a bad guy, been higher than the blue sky
          <br />
          And the truth is I don't wanna die an ordinary man
          <br />
          I've made mama cry, don't know why I'm still alive
          <br />
          Yes, the truth is I don't wanna die an ordinary man
          <br />
          <br />
          [Guitar Solo]
          <br />
          <br />
          [Chorus: Ozzy Osbourne]
          <br />
          Yes, I've been a bad guy, been higher than the blue sky
          <br />
          And the truth is I don't wanna die an ordinary man
          <br />
          I've made mama cry, don't know why I'm still alive
          <br />
          Yes, the truth is I don't wanna die an ordinary man
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Ozzy Osbourne (feat. Elton John) - Ordinary Man.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Ozzy Osbourne (feat. Elton John) - Ordinary Man.mp3" download>Download</a>
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