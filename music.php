<?php
$title = "Eminem | Musics to be murderd by";
require("./includes/header.php");
?>

<div class="container">
    <div class="row">
        <main class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="bg-white shadow p-5 my-5 rounded">
                <?php
                if (isset($_GET["post_id"])) {
                    require_once("./includes/db.php");
                    $query = new Query();
                    $data = $query->where("posts", "id", $_GET["post_id"]);
                    foreach ($data->fetchAll() as $result) {
                        echo "<h1 class='text-center'>" . $result['name'] . "</h1>";
                        echo "<img class='d-block mx-auto' src='" . $result['image'] . "' />";
                        if (!empty($result['lyric'])) {
                            echo "<h3 class='text-center mt-5'>متن آهنگ</h3>";
                            echo "<p class='p-2 text-center'>" . $result['lyric'] . "</p>";
                        }
                        echo "<a class='btn btn-primary text-light btn-large w-100' href='" . $result['link'] . "'>لینک دانلود</a>";
                    }
                }
                ?>
            </div>
            <?php
            $name = $email = $comment = "";
            $nameErr = $emailErr = $commentErr = "";
            
            require_once("./functions.php");
            require_once("./includes/db.php");

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST["name"])) {
                    $name = test_input($_POST["name"]);
                }else{
                    $nameErr = "وارد کردن نام الزامی است";
                }
                if(!empty($_POST["email"])){
                    $email = test_input($_POST["email"]);
                }else{
                    $emailErr = "وارد کردن آدرس ایمیل الزامی است";
                }
                if(!empty($_POST["comment"])){
                    $comment = test_input($_POST["comment"]);
                }else{
                    $commentErr = "وارد کردن نظری الزامی است!";
                }
                if(!empty($name) && !empty($email) && !empty($comment)){
                    $q = new Query();
                    $arr = array(
                        "name"=>$name,
                        "body"=>$comment,
                        "email"=>$email,
                        "post_id"=>$_GET["post_id"]
                    );
                    $q->insert("comments", $arr);
                }
            }
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form action="#" method="post" class="text-right">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="name">نام و نام خانوادگی</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                        <small class="text-danger"><?php echo $nameErr; ?></small>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="email">آدرس ایمیل</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                        <small class="text-danger"><?php echo $emailErr; ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comment">دیدگاه</label>
                                <textarea name="comment" id="comment" cols="30" rows="10" class="form-control"></textarea>
                                <small class="text-danger"><?php echo $commentErr; ?></small>
                            </div>
                            <button type="submit" class="btn btn-secondary text-light">ارسال دیدگاه</ذ>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <?php
                            require_once("./includes/db.php");
                            $sc = new Query();
                            $data = $sc->where("comments", "post_id", $_GET["post_id"]);
                            foreach($data->fetchAll() as $result){
                                echo "<div class='comment'>";
                                    echo "<h4>";
                                    echo "نام: ".$result['name']."";
                                    echo "</h4>";
                                    echo "<h5>";
                                    echo "ایمیل: ".$result['email']."";
                                    echo "</h5>";
                                    echo "<p>";
                                    echo "دیدگاه: ".$result["body"]."";
                                    echo "</p>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <aside class="col-xs-12 col sm-12 col-md-3 col-lg-3">
            <div class="bg-white shadow p-3 my-5 rounded">
                <?php require("./includes/sidebar.php"); ?>
            </div>
        </aside>
    </div>
</div>



<?php require("./includes/footer.php"); ?>