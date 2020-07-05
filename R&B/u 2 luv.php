<?php
include("../include/header-R&B.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">U 2 Luv - Ne-Yo (feat. Jeremih)</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Ne-Yo (feat. Jeremih) - U 2 Luv.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Intro: Jeremih]
          <br />
          I don't want nobody else
          <br />
          I don't want nobody else
          <br />
          <br />
          [Verse 1: Ne-Yo]
          <br />
          Give you all of my attention, mmm
          <br />
          It's straight shots, no champagne sippin' tonight (It's that kind of?night)
          <br />
          Add Netflix to this massage, better yet turn that shit?off?(Yeah)
          <br />
          'Cause?I love to?hear you cussin'?at me
          <br />
          Like, "Ooh, shit, baby, too deep"
          <br />
          You never felt this feeling when I touch you, ooh
          <br />
          I never loved nobody like I love you, ayy
          <br />
          <br />
          [Chorus: Jeremih]
          <br />
          That's why I only want you to love (You to love)
          <br />
          I don't want nobody else (I don't want nobody else, yeah, yeah)
          <br />
          I only want you to love (You to love, oh)
          <br />
          I don't want nobody else (I don't want nobody else, yeah-yeah)
          <br />
          <br />
          [Verse 2: Jeremih]
          <br />
          They say love is all we missing (Woo)
          <br />
          Let's play "Oui" while we French kiss it all night (Oh, yeah, yeah-yeah)
          <br />
          Let's lay down while we watch stars
          <br />
          Let's dance until last call
          <br />
          Wake up, you text you're thinking about me (Oh-woah)
          <br />
          Yeah, I never felt that feeling when I'm touching (Feeling when I'm touching, oh, no)
          <br />
          I never loved nobody like I love you (Nobody like I love you)
          <br />
          <br />
          [Chorus: Jeremih]
          <br />
          That's why I only want you to love (You to love)
          <br />
          I don't want nobody else (I don't want nobody else, yeah, yeah)
          <br />
          I only want you to love (You to love, oh, oh)
          <br />
          I don't want nobody else (I don't want nobody else, yeah, yeah)
          <br />
          <br />
          [Verse 3: Ne-Yo & Jeremih]
          <br />
          Oh, uh
          <br />
          Kissing on you in public (Ayy)
          <br />
          They could tell it's mine, don't touch it
          <br />
          If you ever leave me, I'd be upset
          <br />
          Talking sick to my stomach, I don't play about my woman, nah
          <br />
          Wishin' we could get high and make love stoned
          <br />
          In the sheets to a love song
          <br />
          Your heartbeat be the beat I put words on, oh-oh
          <br />
          (Ooh) Yeah
          <br />
          We should be team us (Team us)
          <br />
          Girl, I want you all the time
          <br />
          Ooh, you ease my mind
          <br />
          <br />
          [Chorus: Jeremih & Ne-Yo]
          <br />
          That's why I only want you to love (Oh, yeah-yeah)
          <br />
          I don't want nobody else (Nobody, nobody, yeah, yeah, woo)
          <br />
          I only want you to love (You know I do want you, babe)
          <br />
          I don't want nobody else (Nobody, ooh-ooh, yeah, yeah, hey)
          <br />
          <br />
          [Outro: Jeremih & Ne-Yo]
          <br />
          I don't want nobody else (I don't want nobody)
          <br />
          I don't want nobody else (Mm)
          <br />
          Talking sick to my stomach, I don't play about my woman, no
          <br />
          'Body else (Nah, nah, nah, nah-nah-nah-nah, don't)
          <br />
          I don't want nobody else (No, nobody)
          <br />
          I only want you to love (I don't want nobody)
          <br />
          (I don't want nobody else) I don't want nobody else
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Ne-Yo (feat. Jeremih) - U 2 Luv.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Ne-Yo (feat. Jeremih) - U 2 Luv.mp3" download>Download</a>
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