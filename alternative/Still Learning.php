<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Still Learning - Halsey</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/halsey - still learning.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Intro]
          <br />
          Oh, oh
          <br />
          Yeah
          <br />
          [Verse 1]
          <br />
          I should be living the dream
          <br />
          But I'm livin' with a security team
          <br />
          And that ain't gonna change, no
          <br />
          I got a paranoia in me
          <br />
          And you wouldn't believe
          <br />
          Everything that I seen, no
          <br />
          Comin' apart at the seams
          <br />
          And no one around me knows
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Who I am, what I'm on
          <br />
          Who I've hurt and where they've gone
          <br />
          I know that I've done some wrong
          <br />
          But I'm tryna make it right
          <br />
          To the one I love, bring me 'round
          <br />
          Get me out right now (Oh-oh)
          <br />
          And know that I love you
          <br />
          <br />
          [Chorus]
          <br />
          But I'm still learning to love myself
          <br />
          (To love my–, to love my–, to love my–)
          <br />
          I'm still learning to love myself
          <br />
          (To love my–, to love my–, to love my–) Yeah, yeah
          <br />
          <br />
          [Verse 2]
          <br />
          I should be living the dream
          <br />
          But I go home and I got no self-esteem (Nope)
          <br />
          You think I'm swimmin' in green
          <br />
          But it's passed around my family tree
          <br />
          No man wants to really commit
          <br />
          Intimidated 'cause I get paid and shit
          <br />
          In the crowd, you're readin' my lips
          <br />
          But no one around me knows
          
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Who I am, what I'm on
          <br />
          Who I've hurt and where they've gone
          <br />
          I know that I've done some wrong
          <br />
          But I'm tryna make it right
          <br />
          The same mistakes on and on
          <br />
          To all my friends, I'm sorry for
          <br />
          And know that I love you
          <br />
          <br />
          [Chorus]
          <br />
          But I'm still learning (I'm still learning) to love myself
          <br />
          (To love my–, to love my–, to love my–) Yeah, yeah
          <br />
          I'm still learning (I'm still learning) to love myself (To love myself)
          <br />
          (To love my–, to love my–, to love my–) Yeah, yeah (Oh, oh)
          <br />
          Oh, I try and I try to remember sometimes
          <br />
          If I breathe, it's alright, but some things don't change
          <br />
          I'm still learning (I'm still learning) to love myself (To love myself)
          <br />
          (To love my–, to love my–, to love myself) Yeah, yeah
          <br />
          <br />
          [Bridge]
          <br />
          Who I am, what I'm on
          <br />
          Who I've hurt and where they've gone
          <br />
          I know that I've done some wrong
          <br />
          But I'm tryna make it right
          <br />
          To the one I love, bring me 'round
          <br />
          Get me out right now (And the ones I love)
          <br />
          And the ones I love
          <br />
          <br />
          [Chorus]
          <br />
          I'm still learning to love myself
          <br />
          (To love my–, to love my–, to love my–) Yeah, yeah
          <br />
          I'm still learning (I'm still learning) to love myself (To love myself)
          <br />
          (To love my–, to love my–, to love my–, ooh)
          <br />
          And I try and I try to remember sometimes
          <br />
          If I breathe, it's alright, but some things don't change
          <br />
          I'm still learning (I'm still learning) to love myself (I'm still learning)
          <br />
          To love myself, tryna love myself
          <br />
          [Outro]
          <br />
          I'm still learning to love myself
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Halsey - Still Learning.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Halsey - Still Learning.mp3" download>download</a>
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