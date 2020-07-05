<?php
include("../include/header-pop.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Old Me - 5 seconds of summer</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/5 seconds of summer - Old Me.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Intro: Luke]
          <br />
          Shout out to the old me and everything you showed me
          <br />
          Glad you didn't listen when?the?world was trying?to slow me
          <br />
          No one could control?me, left my lovers lonely
          <br />
          Had to fuck it up before I really got to know me
          <br />
          <br />
          [Verse 1: Luke]
          <br />
          Never a night alone, anywhere you wanna go
          <br />
          Woke up in the mornin' wearin' someone else's clothes
          <br />
          Pictures in my phone with people I don't know
          <br />
          Woke up in the mornin', how the hell'd I make it home?
          <br />
          <br />
          [Pre-Chorus: Luke]
          <br />
          And they wondered how long I could keep it up
          <br />
          While I wondered if I'd ever, if I'd ever get enough
          <br />
          And I did some shit I never should've done, eh-eh
          <br />
          I would do it over now, I'd do it over
          <br />
          <br />
          [Chorus: Luke]
          <br />
          Shout out to the old me and everything you showed me
          <br />
          Glad you didn't listen when the world was trying to slow me
          <br />
          No one could control me, left my lovers lonely
          <br />
          Had to fuck it up before I really got to know me, eh-eh
          <br />
          All of the mistakes I made, I made, I made, I made
          <br />
          Whatever the price I paid, I paid, I paid, I paid
          <br />
          Shout out to the old me and everything you showed me
          <br />
          Had to fuck it up before I let you get to know me
          <br />
          <br />
          [Verse 2: Luke]
          <br />
          Another round, here we go, going in blow for blow
          <br />
          Look into the mirror, take the punches that I throw
          <br />
          I'm constantly reminded of all the compromises
          <br />
          By the people from my past who have a hard time letting go, yeah
          <br />
          <br />
          [Pre-Chorus: Luke]
          <br />
          And they wondered how long I could keep it up
          <br />
          While I wondered if I'd ever, if I'd ever get enough
          <br />
          And I did some shit I never should've done, eh-eh
          <br />
          I would do it over now, I'd do it over
          <br />
          <br />
          [Chorus: Luke]
          <br />
          Shout out to the old me and everything you showed me
          <br />
          Glad you didn't listen when the world was trying to slow me
          <br />
          No one could control me, left my lovers lonely
          <br />
          Had to fuck it up before I really got to know me, eh-eh
          <br />
          All of the mistakes I made, I made, I made, I made
          <br />
          Whatever the price I paid, I paid, I paid, I paid
          <br />
          Shout out to the old me and everything you showed me
          <br />
          Had to fuck it up before I let you get to know me, eh-eh
          <br />
          <br />
          [Bridge: Luke]
          <br />
          Devil at my door
          <br />
          Got me knockin', knockin', knockin' on the other side
          <br />
          Ashes on the floor
          <br />
          But I'm walkin', walkin', walkin' outta here alive
          <br />
          <br />
          [Chorus: Luke with Calum]
          <br />
          Shout out to the old me and everything you showed me
          <br />
          Glad you didn't listen when the world was trying to slow me (The world was trying to slow me, yeah)
          <br />
          No one could control me, left my lovers lonely (Lonely)
          <br />
          Had to fuck it up before I really got to know me, eh-eh
          <br />
          All of the mistakes I made, I made, I made, I made
          <br />
          Whatever the price I paid, I paid, I paid, I paid (Yeah)
          <br />
          Shout out to the old me and everything you showed me (Yeah, the old me)
          <br />
          Had to fuck it up before I let you get to know me, eh-eh
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/5 Seconds of Summer - Old Me.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/5 Seconds of Summer - Old Me.mp3" download>Download</a>
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