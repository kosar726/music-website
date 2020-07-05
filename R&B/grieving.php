<?php
include("../include/header-R&B.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Grieving - Kehlani (feat. James Blake) </h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Kehlani (feat. James Blake) - Grieving.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Verse 1: Kehlani]
          <br />
          Askin' for space, I'd give my leg for it
          <br />
          I've reached a point, it's like I?beg?for it
          <br />
          I give my sweat and tears, damn, I?bled for it
          <br />
          No one would bet that you would lose me like that
          <br />
          No one would guess I had the strength to fall back
          <br />
          <br />
          [Pre-Chorus: Kehlani]
          <br />
          Now all I want is peace and quiet
          <br />
          For peace of mind, yeah
          <br />
          Peace and time, yeah, yeah
          <br />
          <br />
          [Chorus: Kehlani]
          <br />
          While I'm grievin' uh, oh
          <br />
          Grievin' us
          <br />
          I'm still grievin' uh, oh
          <br />
          Grievin' us
          <br />
          <br />
          [Post-Chorus: Kehlani]
          <br />
          The option was to stay and ride
          <br />
          Or to let it die
          <br />
          I picked a side, now I'm just grievin' uh, oh
          <br />
          Grievin' us
          <br />
          <br />
          [Verse 2: Kehlani]
          <br />
          You just can't slow it down, drink too much, can't pour it out
          <br />
          It's a merry-go-round from sun-up to sundown
          <br />
          You want me to stay here, mother all your sons now
          <br />
          This shit ain't no fun now, I just think it's funny how
          <br />
          Funny how you made me feel that
          <br />
          Turn around and made me feel bad
          <br />
          Name a bitch patient like that
          <br />
          Name a bitch to cater like that
          <br />
          <br />
          [Pre-Chorus: Kehlani]
          <br />
          Now all I want is peace and quiet
          <br />
          For peace of mind, yeah
          <br />
          Peace and time, yeah, yeah
          <br />
          <br />
          [Chorus: Kehlani]
          <br />
          While I'm grievin' uh, oh
          <br />
          Grievin' us
          <br />
          I'm still grievin' uh, oh
          <br />
          Grievin' us
          <br />
          <br />
          [Bridge: James Blake]
          <br />
          Well, I can understand how you
          <br />
          Would be attracted to me
          <br />
          Me, an ashtray for your habits
          <br />
          You, a moon to my sea
          <br />
          Well, me, the juice to your squeeze
          <br />
          And you a stone I would keep
          <br />
          In the best room of the palace
          <br />
          And pretend it could weep
          <br />
          No one has ever given so many chances as I have (No one has ever)
          <br />
          No one was ever given as many chances as I have
          <br />
          <br />
          [Chorus: Kehlani & James Blake]
          <br />
          Well, I'm grievin' uh, oh
          <br />
          Grievin' us
          <br />
          I'm still grievin' uh, oh
          <br />
          Grievin' us
          <br />
          I'm grievin' uh, oh
          <br />
          (Grievin' us)
          <br />
          I'm still grievin' uh, oh
          <br />
          Grievin' us
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Kehlani (feat. James Blake) - Grieving.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Kehlani (feat. James Blake) - Grieving.mp3" download>Download</a>
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