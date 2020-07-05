<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">living in a ghost town - The Rolling Stones</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/The Rolling Stones - living in a ghost town.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Intro]
          <br />
          Woah, woah
          <br />
          [Verse 1]
          <br />
          I'm a ghost
          <br />
          Livin' in a ghost town
          <br />
          I'm a ghost
          <br />
          Livin' in a ghost town
          <br />
          You can?look?for me
          <br />
          But I can't be found
          <br />
          You can search for?me
          <br />
          I had to go underground
          <br />
          Life was so beautiful
          <br />
          Then we all?got?locked?down
          <br />
          Feel like a?ghost
          <br />
          Living in a?ghost town, yeah
          <br />
          <br />
          [Chorus 1]
          <br />
          Once this place was hummin'
          <br />
          And the air was full of drummin'
          <br />
          The sound of cymbals crashin'
          <br />
          Glasses were all smashin'
          <br />
          Trumpets were all screamin'
          <br />
          Saxophones were blarin'
          <br />
          Nobody was carin' if it's day or night
          <br />
          <br />
          [Break]
          <br />
          Woah, woah
          <br />
          <br />
          [Verse 2]
          <br />
          I'm a ghost
          <br />
          Livin' in a ghost town
          <br />
          I'm goin' nowhere
          <br />
          Shut up all alone
          <br />
          So much time to lose
          <br />
          Just starin' at my phone
          <br />
          Every night I am dreamin' that you'll come and creep in my bed
          <br />
          Please let this be over, not stuck in a world without end, my friend
          <br />
          <br />
          [Break/Harmonica solo]
          <br />
          Woah, woah
          <br />
          Woah, woah
          <br />
          <br />
          [Chorus 2]
          <br />
          Preachers were all preachin'
          <br />
          Charities beseechin'
          <br />
          Politicians dealin'
          <br />
          Thieves were happy stealin'
          <br />
          Widows were all weepin'
          <br />
          (There's) no beds for us to sleep in
          <br />
          Always had the feelin'
          <br />
          It will all come tumblin' down
          <br />
          <br />
          [Bridge]
          <br />
          I'm a ghost
          <br />
          Livin' in a ghost town
          <br />
          You can look for me
          <br />
          But I can't be found
          <br />
          <br />
          [Outro]
          <br />
          Woah
          <br />
          We're all livin' in a ghost town (Woah)
          <br />
          Oh, livin' in a ghost town (Woah)
          <br />
          We were so beautiful (Woah)
          <br />
          I was your man about town (Woah)
          <br />
          Livin' in this ghost town (Woah)
          <br />
          Ain't havin' any fun (Woah)
          <br />
          If I wanna party (Woah)
          <br />
          It's a party of one (Woah)
          <br />
          Woah
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/The Rolling Stones - Living In A Ghost Town.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/The Rolling Stones - Living In A Ghost Town.mp3" download>Download</a>
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