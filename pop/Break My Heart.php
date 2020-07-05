<?php
include("../include/header-pop.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Break My Heart - Dua Lipa </h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Dua Lipa - Break My Heart.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          I've always been the one to say the first goodbye
          <br />
          Had to love and lose a?hundred?million times
          <br />
          Had to?get it wrong to know just?what I like
          <br />
          Now I'm falling
          <br />
          You say my name like I have never heard before
          <br />
          I'm indecisive, but, this time, I know for sure
          <br />
          I hope I'm not the only one that feels it all
          <br />
          Are you falling?
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Centre of attention
          <br />
          You know you can get whatever you want from me
          <br />
          Whenever you want it, baby
          <br />
          It's you in my reflection
          <br />
          I'm afraid of all the things it could do to me
          <br />
          If I would've known it, baby
          <br />
          <br />
          [Chorus]
          <br />
          I would've stayed at home
          <br />
          'Cause I was doing better alone
          <br />
          But when you said, "Hello"
          <br />
          I knew that was the end of it all
          <br />
          I should've stayed at home
          <br />
          'Cause now there ain't no letting you go
          <br />
          Am I falling in love with the one that could break my heart?
          <br />
          Oh no, I was doing better alone
          <br />
          But when you said, "Hello"
          <br />
          I knew that was the end of it all
          <br />
          I should've stayed at home
          <br />
          'Cause now there ain't no letting you go
          <br />
          Am I falling in love with the one that could break my heart?
          <br />
          <br />
          [Verse 2]
          <br />
          I wonder, when you go, if I stay on your mind
          <br />
          Two can play that game, but you win me every time
          <br />
          Everyone before you was a waste of time
          <br />
          Yeah, you got me
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Centre of attention
          <br />
          You know you can get whatever you want from me
          <br />
          Whenever you want it, baby
          <br />
          It's you in my reflection
          <br />
          I'm afraid of all the things it could do to me
          <br />
          If I would've known it, baby
          <br />
          <br />
          [Chorus]
          <br />
          I would've stayed at home
          <br />
          'Cause I was doing better alone
          <br />
          But when you said, "Hello"
          <br />
          I knew that was the end of it all
          <br />
          I should've stayed at home (I would've stayed at home 'cause I–)
          <br />
          'Cause now there ain't no letting you go
          <br />
          Am I falling in love with the one that could break my heart?
          <br />
          Oh no, I was doing better alone
          <br />
          But when you said, "Hello"
          <br />
          I knew that was the end of it all
          <br />
          I should've stayed at home
          <br />
          'Cause now there ain't no letting you go
          <br />
          Am I falling in love with the one that could break my heart?
          <br />
          <br />
          [Bridge]
          <br />
          Ooh, break my heart
          <br />
          Ooh, break my heart
          <br />
          Ooh
          <br />
          Am I falling in love with the one that could break my heart?
          <br />
          <br />
          [Chorus]
          <br />
          I would've stayed at home
          <br />
          'Cause I was doing better alone
          <br />
          But when you said, "Hello"
          <br />
          I knew that was the end of it all
          <br />
          I should've stayed at home (I would've stayed at home 'cause I–)
          <br />
          'Cause now there ain't no letting you go
          <br />
          Am I falling in love with the one that could break my heart?
          <br />
          Oh no (Oh no), I was doing better alone
          <br />
          But when you said, "Hello"
          <br />
          I knew that was the end of it all
          <br />
          I should've stayed at home
          <br />
          'Cause now there ain't no letting you go
          <br />
          Am I falling in love with the one that could break my heart?
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Dua Lipa - Break My Heart.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Dua Lipa - Break My Heart.mp3" download>Download</a>
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