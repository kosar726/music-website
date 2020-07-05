<?php
include("../include/header-pop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Kings & Queens - Ava MAx</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Ava Max - Kings & Queens.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Chorus]
          <br />
          If all of the kings had their queens on the throne
          <br />
          We would pop champagne and?raise?a toast
          <br />
          To all?of the queens who are fighting?alone
          <br />
          Baby, you're not dancing on your own
          <br />
          <br />
          [Verse 1]
          <br />
          Can't live without me, you wanna, but you can't, nah-nah-nah
          <br />
          Think it's funny, but honey, can't run this show on your own
          <br />
          I can feel my body shake, there's only so much I can take
          <br />
          I'll show you how a real queen behaves
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Oh, no damsel in distress, don't need to save me
          <br />
          Once I start breathing fire, you can't tame me
          <br />
          And you might think I'm weak without a sword
          <br />
          But if I had one, it'd be bigger than yours
          <br />
          <br />
          [Chorus]
          <br />
          If all of the kings had their queens on the throne
          <br />
          We would pop champagne and raise a toast
          <br />
          To all of the queens who are fighting alone
          <br />
          Baby, you're not dancing on your own
          <br />
          <br />
          [Verse 2]
          <br />
          Disobey me, then baby, it's off with your head
          <br />
          Gonna change it and make it a world you won't forget
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Oh, no damsel in distress, don't need to save me
          <br />
          Once I start breathing fire, you can't tame me
          <br />
          And you might think I'm weak without a sword
          <br />
          But I'm stronger than I ever was before
          <br />
          <br />
          [Chorus]
          <br />
          If all of the kings had their queens on the throne
          <br />
          We would pop champagne and raise a toast
          <br />
          To all of the queens who are fighting alone
          <br />
          Baby, you're not dancing on your own
          <br />
          <br />
          [Bridge]
          <br />
          In chess, the king can move one space at a time
          <br />
          But queens are free to go wherever they like
          <br />
          You get too close, you'll get a royalty high
          <br />
          So breathe it in to feel alive
          <br />
          <br />
          [Chorus]
          <br />
          If all of the kings had their queens on the throne
          <br />
          We would pop champagne and raise a toast
          <br />
          To all of the queens who are fighting alone
          <br />
          Baby, you're not dancing on your own
          <br />
          <br />
          [Outro]
          <br />
          Oh-oh-oh-oh-oh-oh, oh-oh
          <br />
          Oh-oh-oh-oh-oh-oh, oh-oh
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Ava Max - Kings & Queens.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Ava Max - Kings & Queens.mp3" download>Download</a>
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