<?php
include("../include/header-alternative.php");
?>
<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Dance Monkey - Tones and I</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/tones and I - dance monkey.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3">
          <br />
          [Verse 1]
          <br />
          They say, "Oh my God, I see the way you shine
          <br />
          Take your hands, my dear, and place them both in mine"
          <br />
          You know you stopped me dead while I was passing by
          <br />
          And now I beg to see you dance just one more time
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Ooh, I see you, see you, see you every time
          <br />
          And oh my, I, I like your style
          <br />
          You, you make me, make me, make me wanna cry
          <br />
          And now I beg to see you dance just one more time
          <br />
          <br />
          [Chorus]
          <br />
          So they say
          <br />
          "Dance for me, dance for me, dance for me, oh-oh-oh
          <br />
          I've never seen anybody do the things you do before"
          <br />
          They say
          <br />
          "Move for me, move for me, move for me, ayy-ayy-ayy
          <br />
          And when you’re done, I'll make you do it all again"
          <br />
          <br />
          [Verse 2]
          <br />
          I said, "Oh my God, I see you walking by
          <br />
          Take my hands, my dear, and look me in my eyes"
          <br />
          Just like a monkey, I've been dancin’ my whole life
          <br />
          But you just beg to see me dance just one more time
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Ooh, I see you, see you, see you every time
          <br />
          And oh my, I, I like your style
          <br />
          You, you make me, make me, make me wanna cry
          <br />
          And now I beg to see you dance just one more time
          <br />
          <br />
          [Chorus]
          <br />
          So they say
          <br />
          "Dance for me, dance for me, dance for me, oh-oh-oh
          <br />
          I've never seen anybody do the things you do before"
          <br />
          They say
          <br />
          "Move for me, move for me, move for me, ayy-ayy-ayy
          <br />
          And when you're done, I'll make you do it all again"
          <br />
          They say
          <br />
          "Dance for me, dance for me, dance for me, oh-oh-oh, oh-oh, oh-oh
          <br />
          I've never seen anybody do the things you do before"
          <br />
          They say
          <br />
          "Move for me, move for me, move for me, ayy-ayy-ayy
          <br />
          And when you're done, I'll make you do it all again"
          <br />
          <br />
          [Bridge]
          <br />
          Ooh, ooh, ooh, ooh, ooh
          <br />
          Oh-oh, oh-oh, oh
          <br />
          Ooh, ooh, ooh, ooh, ooh-ooh
          <br />
          Ooh, ah-ah, ah-ah
          <br />
          <br />
          [Chorus]
          <br />
          They say
          <br />
          "Dance for me, dance for me, dance for me, oh-oh-oh
          <br />
          I've never seen anybody do the things you do before"
          <br />
          They say
          <br />
          "Move for me, move for me, move for me, ayy-ayy-ayy
          <br />
          And when you’re done, I’ll make you do it all again"
          <br />
          They say
          <br />
          "Dance for me, dance for me, dance for me, oh-oh-oh, oh-oh, oh-oh
          <br />
          I've never seen anybody do the things you do before"
          <br />
          They say
          <br />
          "Move for me, move for me, move for me, ayy-ayy-ayy
          <br />
          And when you’re done, I'll make you do it all again
          <br />
          All again"
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Tones and I - Dance Monkey.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Tones and I - Dance Monkey.mp3" download>Download</a>
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

 
//      $(document).ready(function() {
//    	$(".sidebar-link").click(function() {
// 		$(".sidebarlink").addClass('current');
// 	});
// });
  </script>
</body>

</html>