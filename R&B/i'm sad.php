<?php
include("../include/header-R&B.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">I'm sad - eli.</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/eli. - I'm sad.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          Temporary people
          <br />
          Temporary feelings
          <br />
          Everything's so pointless
          <br />
          Say a bunch of stuff
          <br />
          <br />
          Make me fall in love
          <br />
          Then we'll give it up
          <br />
          <br />
          There's no reason to live
          <br />
          There's no reason to live
          <br />
          <br />
          I'm sad
          <br />
          I'm so sad
          <br />
          I'm sad
          <br />
          I'm so sad
          <br />
          Hey girl, you're a cutie
          <br />
          Wait, no that's a watermelon /:
          <br />
          It's been so long since I had any affection from a woman
          <br />
          I'm so lonely
          <br />
          <br />
          I don't have a reason to live
          <br />
          I'm searching for a reason to live
          <br />
          <br />
          I've been holed up way too long yeah
          <br />
          I've been trying to forget her
          <br />
          How can she just go so easy
          <br />
          Now i'm giving up completely
          <br />
          <br />
          I've been trying way too hard yeah
          <br />
          I've been needing to move on and
          <br />
          How can she just come so briefly?
          <br />
          Always falling hard, so deeply
          <br />
          <br />
          You can go
          <br />
          You can go
          <br />
          You can go
          <br />
          You can go
          <br />
          "you wanna know what's sad?
          <br />
          You can give everything you have to a person
          <br />
          And you can be perfect for that person
          <br />
          You can be everything they've ever wanted and you can do everything perfectly and it still wouldn't be enough
          <br />
          Because nothing's ever enough and everyone sucks"
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/eli. - I'm sad.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/eli. - I'm sad.mp3" download>Download</a>
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