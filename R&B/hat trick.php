<?php
include("../include/header-R&B.php");
?>

<div class="container-fluid">
<div class="row Music">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center font-weight-bold text-white pt-3">Hat Trick - Lexie Liu</h1>
        <img class="img-fluid d-block mx-auto py-2" style="height: 600px;" src="./image/Lexie Liu - Hat Trick.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-center text-white pb-3"> 
          <br />
          [Verse 1]
          <br />
          他从不将姿态放低
          <br />
          目中无人却彬彬有礼
          <br />
          深邃的眼像座迷宫
          <br />
          漩涡流向了无底洞
          <br />
          别再怀疑
          <br />
          他在玩一个戏法
          <br />
          眼花缭乱的谜
          <br />
          Dazzling mystery
          <br />
          飘不散地伴着任由风儿吹
          <br />
          <br />
          [Chorus]
          <br />
          I just want to be, want to be loved
          <br />
          Guess we're bound to be, bound to be lost
          <br />
          I could wait another night
          <br />
          Just to take another bite on you
          <br />
          最后你不在
          <br />
          You are not there at the end
          <br />
          那我睡了别再来了吧
          <br />
          So I'm going to sleep, don't come ever
          <br />
          I just want to be, want to be loved
          <br />
          Guess we're bound to be, bound to be lost
          <br />
          I could wait another night
          <br />
          Just to take another bite on you
          <br />
          最后你不在
          <br />
          You are not there at the end
          <br />
          那我睡了别再来了吧
          <br />
          So I'm going to sleep, don't come ever
          <br />
          <br />
          [Verse 2]
          <br />
          Then wear the gold hat
          <br />
          Like it would move me
          <br />
          If you can bounce high
          <br />
          Bounce for me in one, two, three
          <br />
          夏日玫瑰盛开花瓣飞
          <br />
          Summer roses in full bloom
          <br />
          我不会再等待
          <br />
          I won't wait any longer
          <br />
          For a day, day, day
          <br />
          The girl really worth having won't wait for anybody
          <br />
          The girl really worth having won't wait for anybody
          <br />
          <br />
          [Chorus]
          <br />
          I just want to be, want to be loved
          <br />
          Guess we're bound to be, bound to be lost
          <br />
          I could wait another night
          <br />
          Just to take another bite on you
          <br />
          最后你不在
          <br />
          You are not there at the end
          <br />
          那我睡了别再来了吧
          <br />
          So I'm going to sleep, don't come ever
          <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <audio controls>
          <source src="./audio/Lexie Liu - Hat Trick.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center py-3">
        <a class="btn sidebar-link current" style="width: 270px;" href="./audio/Lexie Liu - Hat Trick.mp3" download>Download</a>
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