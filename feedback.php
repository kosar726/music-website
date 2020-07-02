
<?php require "./include/header.php"; ?>
<?php

$name = $email = $msg = "";
$nameErr = $emailErr = $msgErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name"])) {
        $name = test_input($_POST["name"]);
    } else {
        $nameErr = "!!!Please Enter Your Name";
    }

    if (!empty($_POST["email"])) {
        $email = test_input($_POST["email"]);
    } else {
        $emailErr = "!!!Please Enter Your Email Address";
    }

    if (!empty($_POST["msg"])) {
        $msg = test_input($_POST["msg"]);
    } else {
        $msgErr = "!!!Please Enter Your Comment";
    }

    $post_id = 0;
    include "./include/db.php";
    $sql = "INSERT INTO `comments`(`name`, `body`, `email`, `post_id`) VALUES ('$name','$msg','$email','$post_id')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<div class="container-fluid">
<div class="row Music pt-5 text-center" style="height:630px;">
  <div class="col-xl-10 col-lg-9 col-md-9 mr-auto">
    <div class="row">
      <div class="col-12 pt-5">
      <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <label for="name" class="text-light" > : Your Name</label>
      <br />
      <input type="text" name="name" id="name" tabindex="1" style="text-align:left; width:400px;" placeholder="Name">
      <br />
      <span class="text-warning"><?php echo $nameErr; ?></span>
      <br />
      <div class="clear"></div>
      <label for="email" class="text-light"> :  Your E-mail </label>
      <br />
      <input type="email" name="email" id="email" value="" tabindex="2" placeholder="E-mail" style="text-align:left; width:400px;">
      <br />
      <span class="text-warning"><?php echo $emailErr; ?></span>
      <br />
      <label for="msg" class="text-light"> : Your Comment </label><div class="clear"></div>
      <textarea name="msg" id="msg" tabindex="4" style=" width:400px; height:200px; text-align:left;"></textarea>
      <br />
      <span class="text-warning"><?php echo $msgErr; ?></span>
      <br />
      <br />
      <button class="btn btn-lg bttn" type="submit">Send</button>
      </form>
</div>
    </div>
  </div>
</div>
</div>
<?php require "./include/footer.php"; ?>
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
</script>
</body>
</html>
