<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Only Children - Jason Isbell (feat. The 400 Unit)</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Jason Isbell - only children.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          Walking around at night
          <br />
          Fighting my appetite
          <br />
          Every kid in cutoffs could be you
          <br />
          Remember when we used?to?meet?
          <br />
          At the bottom?of Mobile Street
          <br />
          And do what the?broken people do
          <br />
          <br />
          [Chorus 1]
          <br />
          Are you still taking notes?
          <br />
          The Holy Ghost could get inside you
          <br />
          You'd do whatever you put your mind to
          <br />
          Will you read me what you wrote?
          <br />
          When we were locked outside the building
          <br />
          Over encouraged, only children
          <br />
          <br />
          [Verse 2]
          <br />
          Cold coffee on the fire escape
          <br />
          We bet it all on a demo tape
          <br />
          When we still had something left to steal
          <br />
          Remember when we took too much?
          <br />
          To get a little of the human touch
          <br />
          Hand to mouth and reel to reel
          <br />
          <br />
          [Chorus 2]
          <br />
          Are you still taking notes?
          <br />
          Hydrocodone in your backpack
          <br />
          Maybe these words will hold the beast back
          <br />
          Will you read me what you wrote?
          <br />
          The one I said you stole from Dylan
          <br />
          Over encouraged, only children
          <br />
          <br />
          [Bridge]
          <br />
          "Heaven's wasted on the dead"
          <br />
          That's what your mama said
          <br />
          And the hearse was idling in the parking lot
          <br />
          She said you thought the world of me
          <br />
          And you were glad to see
          <br />
          They finally let me be an astronaut
          <br />
          <br />
          [Chorus 3]
          <br />
          Are you still taking notes?
          <br />
          Will you have anyone to talk to?
          <br />
          Castle walls that you could walk through
          <br />
          And do the dead believe in ghosts?
          <br />
          Or are you lost in some old building
          <br />
          With over encouraged only children?
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Jason Isbell (feat. The 400 Unit) - Only Children.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Jason Isbell (feat. The 400 Unit) - Only Children.mp3" download>Download</a>
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