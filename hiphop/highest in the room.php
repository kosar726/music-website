<?php
include("../include/header-hiphop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">HIGHEST IN THE ROOM - Travis Scott</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Travis Scott - HIGHEST IN THE ROOM.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Chorus]
          <br />
          I got room in my fumes (Yeah)
          <br />
          She fill my mind up with ideas
          <br />
          I'm the highest in the room (It’s lit)
          <br />
          Hope I make it outta here (Let's go)
          <br />
          <br />
          [Verse 1]
          <br />
          She saw my eyes, she know I'm gone (Ah)
          <br />
          I see some things that you might fear
          <br />
          I’m doin' a show, I'll be back soon (Soon)
          <br />
          That ain't what she wanna hear (Nah)
          <br />
          Now I got her in my room (Ah)
          <br />
          Legs wrapped around my beard
          <br />
          Got the fastest car, it zoom (Skrrt)
          <br />
          Hope we make it outta here (Ah)
          <br />
          When I'm with you, I feel alive
          <br />
          You say you love me, don't you lie (Yeah)
          <br />
          Won't cross my heart, don't wanna die
          <br />
          Keep the pistol on my side (Yeah)
          <br />
          <br />
          [Chorus]
          <br />
          Case it’s fumes (Smoke)
          <br />
          She fill my mind up with ideas (Straight up)
          <br />
          I’m the highest in the room (It's lit)
          <br />
          Hope I make it outta here (Let’s go, yeah)
          <br />
          <br />
          [Verse 2]
          <br />
          We ain't stressin' 'bout the loot (Yeah)
          <br />
          My block made of queser?a
          <br />
          This not the molly, this the boot
          <br />
          Ain’t no comin' back from here
          <br />
          Live the life of La Familia
          <br />
          It's so much gang that I can't see ya (Yeah)
          <br />
          Turn it up 'til they can't hear (We can't)
          <br />
          Runnin', runnin' 'round for the thrill
          <br />
          Yeah, dawg, dawg, 'round my real (Gang)
          <br />
          Raw, raw, I been pourin' to the real (Drank)
          <br />
          Nah, nah, nah, they not back of the VIP (In the VIP)
          <br />
          Gorgeous, baby, keep me hard as steel
          <br />
          Ah, this my life, I did not choose
          <br />
          Uh, been on this since we was kids
          <br />
          We gon' stay on top and break the rules
          <br />
          Uh, I fill my mind up with ideas
          <br />
          <br />
          [Chorus]
          <br />
          Case it's fumes
          <br />
          She fill my mind up with ideas (Straight up)
          <br />
          I'm the highest in the room (I'm the highest, it's lit)
          <br />
          Hope I make it outta here
          <br />
          <br />
          [Outro]
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Travis Scott - HIGHEST IN THE ROOM.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Travis Scott - HIGHEST IN THE ROOM.mp3" download>Download</a>
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