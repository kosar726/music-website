<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Under The Graveyard - Ozzy Osbourne</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Ozzy Osbourne - Under The Graveyard.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Verse 1]
          <br />
          Today, I woke up and I hate myself
          <br />
          Death doesn't answer when I cry for help
          <br />
          No high could save me?from the depths of Hell
          <br />
          I'll drown?my mind until I'm someone else
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Don't take care of me, be scared of me
          <br />
          My misery owns me
          <br />
          I don't wanna be my enemy
          <br />
          My misery owns me now
          <br />
          <br />
          [Chorus]
          <br />
          Under the graveyard
          <br />
          We're all rotting bones
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
          Everything you are
          <br />
          Can't take it when you go
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
          I ain't livin' this lie no more
          <br />
          Ain't livin' this lie no more
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
          It's cold in the graveyard
          <br />
          We all die alone
          <br />
          <br />
          [Verse 2]
          <br />
          Cover my eyes so I can't see clear
          <br />
          One sip away from everything I fear
          <br />
          Ashes to ashes, watch me disappear
          <br />
          Closer to home because the end is near
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Don't take care of me, be scared of me
          <br />
          My misery owns me
          <br />
          I don't wanna be my enemy
          <br />
          My misery owns me now
          <br />
          <br />
          [Chorus]
          <br />
          Under the graveyard
          <br />
          We're all rotting bones
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
          Everything you are
          <br />
          Can't take it when you go
          <br />
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
          I ain't livin' this lie no more
          <br />
          Ain't livin' this lie no more
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
          It's cold in the graveyard
          <br />
          We all die alone
          <br />
          <br />
          [Bridge]
          <br />
          (I'm waiting for you)
          <br />
          (You, you, you, you)
          <br />
          <br />
          [Chorus]
          <br />
          Under the graveyard
          <br />
          We're all rotting bones
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
          Everything you are
          <br />
          Can't take it when you go
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
          I ain't livin' this lie no more
          <br />
          Ain't livin' this lie no more
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
          It's cold in the graveyard
          <br />
          We all die alone
          <br />
          Oh-oh-oh, oh-oh-oh
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Ozzy Osbourne - Under the Graveyard.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Ozzy Osbourne - Under the Graveyard.mp3" download>Download</a>
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