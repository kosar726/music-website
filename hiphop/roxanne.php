<?php
include("../include/header-hiphop.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">ROXANNE - Arizona Zervas</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Arizona Zervas - ROXANNE.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Intro]
          <br />
          All for the 'Gram
          <br />
          Bitches love the 'Gram
          <br />
          Oh, wait, shit
          <br />
          Brr, brr (Ayy, yeah, yeah, yeah, ayy)
          <br />
          Brr,?brr,?brr, ayy
          <br />
          Skrrt skrrt
          <br />
          94 don't need no brakes, yeah
          <br />
          <br />
          [Chorus]
          <br />
          Roxanne, Roxanne
          <br />
          All she wanna do is party all night
          <br />
          Goddamn, Roxanne
          <br />
          Never gonna love me, but it's alright
          <br />
          She think I'm an asshole, she think I'm a player
          <br />
          She keep running back, though, only 'cause I pay up
          <br />
          Roxanne, Roxanne
          <br />
          All she wanna do is party all night
          <br />
          <br />
          [Verse 1]
          <br />
          Met her at a party in the hills, yeah
          <br />
          She just wanna do it for the thrill, yeah
          <br />
          Shorty drive a poodle with no top (Top, top)
          <br />
          But if I throw this money, she gon' drop, ayy
          <br />
          She don't wait in lines if it's too long
          <br />
          She don't drive the whip unless the roof off
          <br />
          Only wanna call when the cash out
          <br />
          Only take the pic when her ass out
          <br />
          <br />
          [Pre-Chorus]
          <br />
          She from Malibu, uh, Malibu
          <br />
          If you ain't got a foreign, then she laugh at you, uh
          <br />
          Malibu, uh, Malibu
          <br />
          Spending daddy's money with a attitude
          <br />
          <br />
          [Chorus]
          <br />
          Roxanne (Roxanne), Roxanne (Roxanne)
          <br />
          All she wanna do is party all night
          <br />
          Goddamn (Goddamn), Roxanne (Roxanne)
          <br />
          Never gonna love me, but it's alright
          <br />
          She think I'm an asshole, she think I'm a player
          <br />
          She keep running back, though, only 'cause I pay up
          <br />
          Roxanne (Roxanne), Roxanne (Roxanne)
          <br />
          All she wanna do is party all night
          <br />
          <br />
          [Interlude]
          <br />
          I just wanna have fun
          <br />
          <br />
          [Verse 2]
          <br />
          In LA, yeah, got no brakes, yeah
          <br />
          Living fast, Ricky Bobby, shake and bake, yeah
          <br />
          See the chain? Yeah, issa lake, yeah
          <br />
          Swipe the Chase, ooh, now she wanna date, yeah
          <br />
          Straight to Nobu on the coast, ooh
          <br />
          Shorty only like cocaine and Whole Foods
          <br />
          Yeah, snappin' all up on the 'Gram, ass going crazy (Woo)
          <br />
          Now she wanna fuck me in the foreign, goin' 80
          <br />
          <br />
          [Pre-Chorus]
          <br />
          Up in Malibu, uh, Malibu
          <br />
          If you ain't got a foreign, then she laugh at you, uh
          <br />
          Malibu, uh, Malibu
          <br />
          Spending daddy's money with a attitude
          <br />
          <br />
          [Chorus]
          <br />
          Roxanne (Roxanne), Roxanne (Roxanne)
          <br />
          All she wanna do is party all night (All night, yeah)
          <br />
          Goddamn (Goddamn), Roxanne (Roxanne)
          <br />
          Never gonna love me, but it's alright (Alright, yeah)
          <br />
          She think I'm an asshole, she think I'm a player
          <br />
          She keep running back, though, only 'cause I pay up
          <br />
          Roxanne (Roxanne), Roxanne (Roxanne)
          <br />
          All she wanna do is party all night
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Arizona Zervas - ROXANNE.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Arizona Zervas - ROXANNE.mp3" download>Download</a>
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