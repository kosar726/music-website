<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Angels & Demons - JXDN</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/jxdn - Angels & demons.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
            <br />
            [Verse 1]
            <br />
            Two face, two face, yeah
            <br />
            Black, white, left, right, yeah
            <br />
            Up, down, all night, yeah
            <br />
            Can't escape it ever
            <br />
            Don't forget my name
            <br />
            I don't feel the same
            <br />
            On a trip, no train
            <br />
            <br />
            [Pre-Chorus]
            <br />
            And all these angels and demons
            <br />
            Keep shoutin' and screamin'
            <br />
            I'm fallin' from Eden
            <br />
            <br />
            [Chorus]
            <br />
            So fuck me like a rockstar, dancing on a cop car
            <br />
            Nothin' in the world can stop me now
            <br />
            Fucked up like a rockstar, riding in a cop car
            <br />
            No one in the world can help me out
            <br />
            <br />
            [Verse 2]
            <br />
            Everybody said that I'm falling, uh
            <br />
            Took another line, I'm calling, uh
            <br />
            I'm so sick of the nonsense, uh
            <br />
            I'ma dive into the mosh pit, uh
            <br />
            I don't really think I'm the problem
            <br />
            I don't really think it's a problem
            <br />
            Me plus me is a problem
            <br />
            One gunshot could solve 'em
            <br />
            Tell my friends I'm sorry though
            <br />
            T-T-T-Tell my sins to go
            <br />
            <br />
            [Pre-Chorus]
            <br />
            And all these angels and demons
            <br />
            Keep shoutin' and screamin'
            <br />
            I'm fallin' from Eden
            <br />
            <br />
            [Chorus]
            <br />
            So fuck me like a rockstar, dancing on a cop car
            <br />
            Nothin' in the world can stop me now
            <br />
            Fucked up like a rockstar, riding in a cop car
            <br />
            No one in the world can help me out
            <br />
            <br />
            [Pre-Chorus]
            <br />
            (Rockstar, rockstar)
            <br />
            And all these angels and demons
            <br />
            Keep shoutin' and screamin'
            <br />
            I'm falling from Eden
            <br />
            <br />
            [Chorus]
            <br />
            So fuck me like a rockstar, dancing on a cop car
            <br />
            Nothing in the world can stop me now
            <br />
            Fucked up like a rockstar, riding in a cop car
            <br />
            No one in the world can help me out
            <br />
            So fuck me like a rockstar, dancing on a cop car
            <br />
            Nothing in the world can stop me now
            <br />
            Fucked up like a rockstar, riding in a cop car
            <br />
            No one in the world can help me out
            <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/jxdn - Angels & Demons.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/jxdn - Angels & Demons.mp3" download>Download </a>
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