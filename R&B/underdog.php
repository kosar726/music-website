<?php
include("../include/header-R&B.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Underdog - Alicia Keys</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Alicia Keys - Underdog.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Intro]
          <br />
          Ooh, ooh, ooh
          <br />
          Ooh, ooh, ooh
          <br />
          <br />
          [Verse 1]
          <br />
          She was walking in the street, looked up and noticed
          <br />
          He was nameless,he was homeless
          <br />
          She asked him his name and told him what hers was
          <br />
          He gave her a story 'bout life
          <br />
          With a glint in his eye and a corner of a smile
          <br />
          One conversation, a simple moment
          <br />
          The things that change us if we notice
          <br />
          When we look up sometimes
          <br />
          <br />
          [Pre-Chorus]
          <br />
          They said I would never make it
          <br />
          But I was built to break the mold
          <br />
          The only dream that I've been chasing is my own
          <br />
          <br />
          [Chorus]
          <br />
          So I sing a song for the hustlers trading at the bus stop
          <br />
          Single mothers waiting on a check to come
          <br />
          Young teachers, student doctors
          <br />
          Sons on the front line knowing they don't get to run
          <br />
          This goes out to the underdog
          <br />
          Keep on keeping at what you love
          <br />
          You'll find that someday soon enough
          <br />
          You will rise up, rise up, yeah
          <br />
          <br />
          [Post-Chorus]
          <br />
          Ooh, ooh, ooh
          <br />
          Ooh, ooh, ooh
          <br />
          <br />
          [Verse 2]
          <br />
          She's riding in a taxi back to the kitchen
          <br />
          Talking to the driver 'bout his wife and his children
          <br />
          On the run from a country where they put you in prison
          <br />
          For being a woman and speaking your mind
          <br />
          She looked in his eyes in the mirror and he smiled
          <br />
          One conversation, a single moment
          <br />
          The things that change us if we notice
          <br />
          When we look up sometimes
          <br />
          <br />
          [Pre-Chorus]
          <br />
          They said I would never make it
          <br />
          But I was built to break the mold
          <br />
          The only dream that I've been chasing is my own
          <br />
          <br />
          [Chorus]
          <br />
          So I sing a song for the hustlers trading at the bus stop
          <br />
          Single mothers waiting on a check to come
          <br />
          Young teachers, student doctors
          <br />
          Sons on the front line knowing they don't get to run
          <br />
          This goes out to the underdog
          <br />
          Keep on keeping at what you love
          <br />
          You'll find that someday soon enough
          <br />
          You will rise up, rise up, yeah
          <br />
          <br />
          [Post-Chorus]
          <br />
          Ooh, ooh, ooh
          <br />
          Ooh, ooh, ooh
          <br />
          <br />
          [Bridge]
          <br />
          Everybody rise up
          <br />
          You gonna rise up, ayy
          <br />
          <br />
          [Chorus]
          <br />
          So I sing a song for the hustlers trading at the bus stop
          <br />
          Single mothers waiting on a check to come (Say you're gonna make it)
          <br />
          Young teachers, student doctors (Yeah)
          <br />
          Sons on the front line knowing they don't get to run
          <br />
          This goes out to the underdog
          <br />
          Keep on keeping at what you love
          <br />
          You'll find that someday soon enough
          <br />
          You will rise up, rise up, yeah
          <br />
          <br />
          [Post-Chorus]
          <br />
          Ooh, ooh, ooh
          <br />
          Ooh, ooh, ooh
          <br />
          Ooh, ooh, ooh
          <br />
          Ooh, ooh, ooh
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Alicia Keys - Underdog.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Alicia Keys - Underdog.mp3" download>Download</a>
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