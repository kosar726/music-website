<?php
include("../include/header-R&B.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">It's You - Ali Gatie</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Ali Gatie - It's You.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Chorus]
          <br />
          It's you, it's always you
          <br />
          If I'm ever gonna fall in love, I know it's gon' be you
          <br />
          It's you, it's always you
          <br />
          Met a lot of people, but nobody feels like you
          <br />
          So please don't break my heart, don't tear me apart
          <br />
          I know how it starts, trust me, I've been broken before
          <br />
          Don't break me again, I am delicate
          <br />
          Please don't break my heart, trust me, I've been broken before
          <br />
          <br />
          [Verse 1]
          <br />
          I've been broken, yeah, I know how it feels
          <br />
          To be open and then find out your love isn't real
          <br />
          I'm still hurting, yeah, I'm hurting inside
          <br />
          I'm so scared to fall in love, but if it's you, then I'll try
          <br />
          <br />
          [Chorus]
          <br />
          It's you, it's always you
          <br />
          If I'm ever gonna fall in love, I know it's gon' be you
          <br />
          It's you, it's always you
          <br />
          Met a lot of people, but nobody feels like you
          <br />
          So please don't break my heart, don't tear me apart
          <br />
          I know how it starts, trust me, I've been broken before
          <br />
          Don't break me again, I am delicate
          <br />
          Please don't break my heart, trust me, I've been broken before
          <br />
          <br />
          [Verse 2]
          <br />
          I know I'm not the best at choosing lovers (Oh)
          <br />
          We both know my past speaks for itself (For itself)
          <br />
          If you don't think that we're right for each other (Baby, no)
          <br />
          Then please don't let history repeat itself
          <br />
          'Cause I want you, yeah, I want you, yeah
          <br />
          There's nothing else I want
          <br />
          'Cause I want you, yeah, I want you, yeah
          <br />
          And you're the only thing I want
          <br />
          <br />
          [Chorus]
          <br />
          It's you, it's always you
          <br />
          If I'm ever gonna fall in love, I know it's gon' be you
          <br />
          It's you, it's always you
          <br />
          Met a lot of people, but nobody feels like you
          <br />
          So please don't break my heart, don't tear me apart
          <br />
          I know how it starts, trust me, I've been broken before
          <br />
          Don't break me again, I am delicate
          <br />
          Please don't break my heart, trust me, I've been broken before
          <br />
          <br />
          [Outro]
          <br />
          Baby, I want you, baby, I want you
          <br />
          Baby, I want you, baby, I want you
          <br />
          Baby, I want you, baby, I want you
          <br />
          You, you, 'cause I want you
          <br />
          Baby, I want you, baby, I want you
          <br />
          Baby, I want you, baby, I want you
          <br />
          Baby, I want you, baby, I want you
          <br />
          You, you
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Ali Gatie - It's You.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Ali Gatie - It's You.mp3" download>Download</a>
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