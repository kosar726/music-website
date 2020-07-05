<?php
include("../include/header-pop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Take Yourself Home - Troy Sivan</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Troy Sivan - Take Yourself Home.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Chorus]
          <br />
          I'm tired of the city, scream if you're with me
          <br />
          If I'm gonna die, let's die?somewhere?pretty, ah, ah-ah
          <br />
          Sad?in the summer, city needs a?mother
          <br />
          If I'm gonna waste my time, then it's time to?go
          <br />
          Take?yourself?home
          <br />
          <br />
          [Verse 1]
          <br />
          Talk to me
          <br />
          There's?nothing that can't?be fixed with some honesty
          <br />
          And how it got this dark is just beyond to me
          <br />
          If anyone can hear me, switch the lights, oh, oh
          <br />
          And happiness
          <br />
          Is right there where you lost it when you took the bet
          <br />
          Counting all the losses that you can't collect
          <br />
          Got everything and nothing in my life
          <br />
          <br />
          [Chorus]
          <br />
          I'm tired of the city, scream if you're with me
          <br />
          If I'm gonna die, let's die somewhere pretty, ah, ah-ah
          <br />
          Sad in the summer, city needs a mother
          <br />
          If I'm gonna waste my time, then it's time to go
          <br />
          Take yourself home
          <br />
          Take yourself home
          <br />
          <br />
          [Verse 2]
          <br />
          Who you really tryna be when they see your face?
          <br />
          Is it worth it tryna win in a losing game?
          <br />
          Well, it's all waiting for you
          <br />
          And boy, I know you're eager
          <br />
          But it just might destroy you
          <br />
          Destroy you, yeah
          <br />
          <br />
          [Chorus]
          <br />
          I'm tired of the city, scream if you're with me
          <br />
          If I'm gonna die, let's die somewhere pretty, ah, ah-ah
          <br />
          Sad in the summer, city needs a mother
          <br />
          If I'm gonna waste my time, then it's time to go
          <br />
          Take yourself home
          <br />
          Take yourself home
          <br />
          <br />
          [Bridge]
          <br />
          Yeah, yeah, yeah
          <br />
          Oh, yeah, yeah, yeah
          <br />
          Yeah, yeah, yeah, yeah
          <br />
          Take yourself home
          <br />
          Home, oh
          <br />
          [Instrumental Outro]
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Troye Sivan - Take Yourself Home.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Troye Sivan - Take Yourself Home.mp3" download>Download</a>
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