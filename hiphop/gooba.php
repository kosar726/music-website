<?php
include("../include/header-hiphop.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">GOOBA - 6ix9ine</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/6ix9ine - GOOBA.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Chorus]
          <br />
          I tell a nigga don't dick ride, don't blick ride
          <br />
          Leave it to the double thick?thighs,?twin sisters
          <br />
          Drop it?down and wobble, wobble up, mami?booted up
          <br />
          She get down and gobble, gobble up 'cause my?money?up
          <br />
          Slide,slide in the?Bentley truck-a, the?Wraith truck-a
          <br />
          Your bestie is a dick sucker, I big dub her
          <br />
          As-salama-lama alaykum, you big hater
          <br />
          You nothin' but a hater, hater, clout chaser
          <br />
          <br />
          [Verse 1]
          <br />
          Now we catch him at the chicken spot, up a couple chops
          <br />
          Pop that nigga with a hundred shots, ra-ta-ta-ta-ta
          <br />
          DayDay made that nigga Diddy Bop, cha-cha-cha-cha-cha
          <br />
          He thought we was gon' knuckle up, bitch, I don't box
          <br />
          And these niggas always talkin' shit, yadda-yadda-ya
          <br />
          When you see me, what you talkin' 'bout, fuck you talkin' 'bout?
          <br />
          Niggas always wanna chase clout, bitch, I am clout
          <br />
          Tell 'em get up out my face now 'fore I grrt
          <br />
          Are you dumb, stupid, or dumb, huh?
          <br />
          Play me like a dummy, like bitch, are you dumb?
          <br />
          Are you dumb, stupid, or dumb, huh?
          <br />
          Yeah, you got some money, but you still fuckin' ugly
          <br />
          Stupid, listen
          <br />
          When I talk, you better listen
          <br />
          We can make him dance, bachata
          <br />
          Slide over, do the cha-cha
          <br />
          Grrt, bah-bah
          <br />
          Make a nigga go adios
          <br />
          Dmelo, mami
          <br />
          Fresca, you nasty
          <br />
          Flame up, light it
          <br />
          They see me and get excited
          <br />
          Two step, spin around, so fly, pilot
          <br />
          They sick, been hot way before Coronavirus
          <br />
          Nigga, who did that? Nigga, who did what?
          <br />
          Nigga, that's my shit, don't bite it
          <br />
          <br />
          [Chorus]
          <br />
          I tell a nigga don't dick ride, don't blick ride
          <br />
          Leave it to the double thick thighs, twin sisters
          <br />
          Drop it down and wobble, wobble up, mami booted up
          <br />
          She get down and gobble, gobble up 'cause my money up
          <br />
          Slide, slide in the Bentley truck-a, the Wraith truck-a
          <br />
          Your bestie is a dick sucker, I big dub her
          <br />
          As-salama-lama alaykum, you big hater
          <br />
          You nothin' but a hater, hater, clout chaser
          <br />
          <br />
          [Verse 2]
          <br />
          You're mad I'm back, big mad
          <br />
          He's mad, she's mad, big sad
          <br />
          Haha, don't care, stay mad
          <br />
          Ah-hah, ah-hah, ah-hah
          <br />
          Haha, bitch, I'm laughin' 'cause you big mad
          <br />
          See it in your face, cry baby, bitch, you big sad
          <br />
          Niggas tweetin' bout me, got me trendin', bitch, you big sad
          <br />
          Tell me how I ratted, came home to a big bag
          <br />
          <br />
          [Outro]
          <br />
          (Jah, ayy, you know that boy)
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/6ix9ine - GOOBA.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/6ix9ine - GOOBA.mp3" download>Download</a>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include("../include/footer.php")
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