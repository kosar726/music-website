<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Don't Stop Me Now - Queen</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Queen - We Are The Champion.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Verse 1]
          <br />
          I've paid my dues
          <br />
          Time after time
          <br />
          I've done my sentence
          <br />
          But committed no crime
          <br />
          And bad mistakes
          <br />
          I've made a few
          <br />
          I've had my share of sand kicked in my face
          <br />
          But I've come through
          <br />
          (And I need to go on and on, and on, and on)
          <br />
          <br />
          [Chorus]
          <br />
          We are the champions, my friends
          <br />
          And we'll keep on fighting till the end
          <br />
          We are the champions
          <br />
          We are the champions
          <br />
          No time for losers
          <br />
          'Cause we are the champions
          <br />
          Of the world
          <br />
          <br />
          [Verse 2]
          <br />
          I've taken my bows
          <br />
          And my curtain calls
          <br />
          You brought me fame and fortune and everything that goes with it
          <br />
          I thank you all
          <br />
          But it's been no bed of roses
          <br />
          No pleasure cruise
          <br />
          I consider it a challenge before the whole human race
          <br />
          And I ain't gonna lose
          <br />
          (And I need just go on and on, and on, and on)
          <br />
          <br />
          [Chorus]
          <br />
          We are the champions, my friends
          <br />
          And we'll keep on fighting till the end
          <br />
          We are the champions
          <br />
          We are the champions
          <br />
          No time for losers
          <br />
          'Cause we are the champions
          <br />
          Of the world
          <br />
          <br />
          [Outro]
          <br />
          We are the champions, my friends
          <br />
          And we'll keep on fighting till the end, oh
          <br />
          We are the champions
          <br />
          We are the champions
          <br />
          No time for losers
          <br />
          'Cause we are the champions...
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Queen - Don't Stop Me Now.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Queen - Don't Stop Me Now.mp3" download>Download</a>
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