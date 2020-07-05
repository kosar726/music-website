<?php
include("../include/header-rock.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Sober - Bad Wolves</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Bad Wolves - Sober.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Verse 1]
          <br />
          For a moment I can wait
          <br />
          It's a fight I guess I'll never know
          <br />
          For a moment?I?can wait
          <br />
          I'm holding?on to hope
          <br />
          And I know you're?stoned, I can see it
          <br />
          The struggle's getting old
          <br />
          For a moment I can wait
          <br />
          <br />
          [Chorus 1]
          <br />
          'Cause you said you're sober
          <br />
          Lying and I can't get closer
          <br />
          Tell me should I let you go?
          <br />
          Tell me should I let you go?
          <br />
          'Cause you said you're sober
          <br />
          Lying and I can't get closer
          <br />
          Tell me should I let you go?
          <br />
          Tell me should I let you go?
          <br />
          <br />
          [Verse 2]
          <br />
          Every moment I'm awake
          <br />
          It's a fight that you could never know
          <br />
          Every moment I'm awake
          <br />
          I'm clinging on to hope
          <br />
          And I feel so low but I'm dealing
          <br />
          The struggle's getting old
          <br />
          Every moment I'm awake
          <br />
          <br />
          [Chorus 2]
          <br />
          But I'm getting sober
          <br />
          Trying but I can't get closer
          <br />
          Baby did you let me go?
          <br />
          Baby did you let me go?
          <br />
          Now I'm getting sober
          <br />
          Trying but I can't get closer
          <br />
          Baby did you let me go?
          <br />
          Baby did you let me go?
          <br />
          (Go)
          <br />
          <br />
          [Bridge]
          <br />
          On and on we pray
          <br />
          Thinking 'bout time and our mistakes
          <br />
          Thinking 'bout time
          <br />
          Thinking 'bout time
          <br />
          'Cause it's about time
          <br />
          (Go)
          <br />
          <br />
          On and on we pray
          <br />
          Thinking 'bout time and our mistakes
          <br />
          Thinking 'bout time
          <br />
          Thinking 'bout time
          <br />
          'Cause it's about time
          <br />
          ('Cause it's about time)
          <br />
          <br />
          [Chorus 3]
          <br />
          So don't say it's over
          <br />
          Waiting here while you get sober
          <br />
          I'm never gonna let you go
          <br />
          I'm never gonna let you go
          <br />
          So don't say it's over
          <br />
          Waiting here while you get sober
          <br />
          I'm never gonna let you go
          <br />
          I'm never gonna let you go
          <br />
          (Go)
          <br />
          <br />
          [Outro]
          <br />
          On and on we pray
          <br />
          Thinking 'bout time and our mistakes
          <br />
          Thinking 'bout time
          <br />
          Thinking 'bout time
          <br />
          'Cause it's about time
          <br />
          ('Cause it's about time)
          <br />
          On and on we pray
          <br />
          Thinking 'bout time and our mistakes
          <br />
          Thinking 'bout time
          <br />
          Thinking 'bout time
          <br />
          It's about time
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Bad Wolves - Sober.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Bad Wolves - Sober.mp3" download>Download</a>
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