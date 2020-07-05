<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Broken Machine - Nothing But Thieves</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/nothing but thieves - broken machine.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          I'm just a broken machine
          <br />
          I can't do anything
          <br />
          My wheels have started to jam
          <br />
          My wheels jam, my
          <br />
          I'm just a broken machine
          <br />
          With all the layers of dust
          <br />
          Some things have started to fail
          <br />
          Some things have
          <br />
          Some
          <br />
          <br />
          [Verse 2]
          <br />
          I'm just a broken machine
          <br />
          Though the record may spin
          <br />
          All my lights have gone dim
          <br />
          They've gone dim
          <br />
          They've
          <br />
          I'm just a broken machine
          <br />
          Not who I used to be
          <br />
          I'm spinning out of control
          <br />
          Now it's time to go
          <br />
          <br />
          
          [Chorus]
          <br />
          Take a little spark
          <br />
          From a battery
          <br />
          Electricity
          <br />
          And put me back together
          <br />
          Back together, yeah
          <br />
          Take a human heart
          <br />
          Add some vanity
          <br />
          Authenticity
          <br />
          And put them all together
          <br />
          Do whatever
          <br />
          To your broken machine
          <br />
          <br />
          [Verse 3]
          <br />
          Hey I'm a broken machine
          <br />
          I can do anything
          <br />
          I've got nothing to hide
          <br />
          Now I start to dream
          <br />
          I'm a mechanical thing
          <br />
          With a layer of shit
          <br />
          And nothing bothers me now
          <br />
          My wheels are my wheels
          <br />
          <br />
          [Chorus]
          <br />
          Take a little spark
          <br />
          From a battery
          <br />
          Electricity
          <br />
          And put me back together
          <br />
          Back together
          <br />
          Yeah
          <br />
          Take a human heart
          <br />
          Add some vanity
          <br />
          Authenticity
          <br />
          And put them all together
          <br />
          Do whatever
          <br />
          To your broken machine
          <br />
          <br />
          [Bridge]
          <br />
          My head goes forward and my heart goes back
          <br />
          My head goes forward and my heart goes back
          <br />
          My head goes forward and my heart goes back
          <br />
          My head goes, my heart goes
          <br />
          My head goes forward and my heart goes back
          <br />
          My head goes forward and my heart goes back
          <br />
          My head goes forward and my heart goes back
          <br />
          My head goes, my heart goes
          <br />
          <br />
          [Outro]
          <br />
          Hey, I'm a broken machine
          <br />
          I can do anything
          <br />
          I've got nothing to hide
          <br />
          Now I start to dream
          <br />
          I'm a mechanical thing
          <br />
          I can do anything
          <br />
          Nothing bothers me now
          <br />
          Now I start to dream
          <br />
          La la la la la la la, la la la la la la
          <br />
          La la la la la la, la la la, la
          <br />
          La la la la la la la, la la la la la la
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Nothing but Thieves - Broken Machine.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Nothing but Thieves - Broken Machine.mp3" download>download</a>
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