<?php
include("../include/header-R&B.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">no one - Alicia Keys</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Alicia Keys - No One.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Verse 1]
          <br />
          I just want you close
          <br />
          Where you can stay forever
          <br />
          You can be sure
          <br />
          That it will only get better
          <br />
          <br />
          [Pre-Chorus]
          <br />
          You and me together
          <br />
          Through the days and nights
          <br />
          I don't worry 'cause
          <br />
          Everything's going to be alright
          <br />
          People keep talking, they can say what they like
          <br />
          But all I know is everything's gonna be alright
          <br />
          <br />
          [Chorus]
          <br />
          No one, no one, no one
          <br />
          Can get in the way of what I'm feelin'
          <br />
          No one, no one, no one
          <br />
          Can get in the way of what I feel for you, you, you
          <br />
          Can get in the way of what I feel for you
          <br />
          <br />
          [Verse 2]
          <br />
          When the rain is pouring down
          <br />
          And my heart is hurting
          <br />
          You will always be around
          <br />
          This I know for certain
          <br />
          <br />
          [Pre-Chorus]
          <br />
          You and me together
          <br />
          Through the days and nights
          <br />
          I don't worry 'cause
          <br />
          <br />
          Everything's going to be alright
          <br />
          People keep talking, they can say what they like
          <br />
          But all I know is everything's gonna be alright
          <br />
          <br />
          [Chorus]
          <br />
          No one, no one, no one
          <br />
          Can get in the way of what I'm feelin'
          <br />
          No one, no one, no one
          <br />
          Can get in the way of what I feel for you, you, you
          <br />
          Can get in the way of what I feel
          <br />
          <br />
          [Bridge]
          <br />
          I know some people search the world
          <br />
          To find something like what we have
          <br />
          I know people will try, try to divide, something so real
          <br />
          So till the end of time, I'm telling you there ain't no one
          <br />
          <br />
          [Chorus]
          <br />
          No one, no one
          <br />
          Can get in the way of what I'm feelin'
          <br />
          No one, no one, no one
          <br />
          Can get in the way of what I feel for you
          <br />
          <br />
          [Outro]
          <br />
          Oh, oh oh oh, oh oh oh, oh oh oh oh oh oh oh oh oh oh
          <br />
          Oh, oh oh oh, oh oh oh, oh oh oh oh oh oh oh oh oh oh
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Alicia Keys - No One.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Alicia Keys - No One.mp3" download>Download</a>
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