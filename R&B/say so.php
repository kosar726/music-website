<?php
include("../include/header-R&B.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">say so - Doja Cat</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Doja Cat - Say So.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Chorus]
          <br />
          Day to night to morning, keep with me in the moment
          <br />
          I'd let you had I?known?it, why don't?you say so?
          <br />
          Didn't even notice, no?punches left to roll with
          <br />
          You got to keep me focused; you want it? Say so
          <br />
          Day to night to morning, keep with me in the moment
          <br />
          I'd let you had I known it, why don't you say so?
          <br />
          Didn't even notice, no punches left to roll with
          <br />
          You got to keep me focused; you want it? Say so
          <br />
          <br />
          [Verse 1]
          <br />
          It's been a long time since you fell in love
          <br />
          You ain't coming out your shell, you ain't really been yourself
          <br />
          Tell me, what must I do? (Do tell, my love)
          <br />
          'Cause luckily I'm good at reading
          <br />
          I wouldn't bug him, but he won't stop cheesin'
          <br />
          And we can dance all day around it
          <br />
          If you frontin', I'll be bouncing
          <br />
          If you want it, scream it, shout it, babe
          <br />
          Before I leave you dry
          <br />
          <br />
          [Chorus]
          <br />
          Day to night to morning, keep with me in the moment
          <br />
          I'd let you had I known it, why don't you say so?
          <br />
          Didn't even notice, no punches left to roll with
          <br />
          You got to keep me focused; you want it? Say so
          <br />
          Day to night to morning, keep with me in the moment
          <br />
          I'd let you had I known it, why don't you say so?
          <br />
          Didn't even notice, no punches left to roll with
          <br />
          You got to keep me focused; you want it? Say so (Yeah)
          <br />
          <br />
          [Verse 2]
          <br />
          Let me check my chest, my breath right quick (Ha)
          <br />
          He ain't ever seen it in a dress like this (Ah)
          <br />
          He ain't ever even been impressed like this
          <br />
          Prolly why I got him quiet on the set like zip
          <br />
          Like it, love it, need it, bad
          <br />
          Take it, own it, steal it, fast
          <br />
          Boy, stop playing, grab my ass
          <br />
          Why you actin' like you shy? (Hot)
          <br />
          Shut it, save it, keep it pushin'
          <br />
          Why you beating 'round the bush?
          <br />
          Knowin' you want all this woman
          <br />
          Never knock it 'til you try (Yah, yah)
          <br />
          All of them bitches hating I have you with me
          <br />
          All of my niggas sayin' you mad committed
          <br />
          Realer than anybody you had, and pretty
          <br />
          All of the body-ody, the ass and titties
          <br />
          <br />
          [Chorus]
          <br />
          Day to night to morning, keep with me in the moment
          <br />
          I'd let you had I known it, why don't you say so?
          <br />
          Didn't even notice, no punches left to roll with
          <br />
          You got to keep me focused; you want it? Say so
          <br />
          Day to night to morning, keep with me in the moment
          <br />
          I'd let you had I known it, why don't you say so?
          <br />
          Didn't even notice, no punches left to roll with
          <br />
          You got to keep me focused; you want it? Say so
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Doja Cat - Say So.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Doja Cat - Say So.mp3" download>Download</a>
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