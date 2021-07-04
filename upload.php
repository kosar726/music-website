<?php
$title = "آپلود موزیک";
require("./includes/header2.php");

require_once("functions.php");
require_once("./includes/db.php");

$name = $artist = $author = $img = $music = $genre = $lyrics = "";
$nameErr = $artistErr = $authorErr = $imgErr = $genreErr = $musicErr = $lyricsErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name"])) {
        $name = test_input($_POST["name"]);
    } else {
        $nameErr = "وارد کردن نام آهنگ الزامی است!";
    }
    if (!empty($_POST["artist"])) {
        $artist = test_input($_POST["artist"]);
    } else {
        $artistErr = "وارد کردن نام خواننده الزامی است!";
    }
    if(!empty($_POST["genre"])){
        $genre = test_input($_POST["genre"]);
    }else{
        $genreErr = "وارد کردن یک ژانر الزامی است!";
    }
    if (!empty($_POST["author"])) {
        $author = test_input($_POST["author"]);
    } else {
        $authorErr = "وارد کردن نام و نام خانودگی خودتان الزامی است!";
    }
    if (!empty($_POST["genre"])) {
        $genre = test_input($_POST["genre"]);
    } else {
        $genreErr = "انتخاب کردن یک ژانر برای موسیقی الزامی است!";
    }
    if(!empty($_POST["lyrics"])){
        $lyrics = test_input($_POST["lyrics"]);
    }
    if (isset_file("image")) {
        $target_dir = "uploads/covers/";
        $target_file = $target_dir.basename($_FILES["image"]["name"]);
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        if ($result) {
            $imgErr = "";
        }
        else {
            $imgErr = "خطایی در نوشتن فایل در سرور اتفاق افتاد";
        }
        $image = $target_file;
    } else {
        $imgErr = "انتخاب یک عکس برای کاور الزامی است!";
    }
    if (isset_file("music")) {
        $target_dir = "uploads/musics/".$genre."/";
        $target_file = $target_dir.basename($_FILES["music"]["name"]);
        $result = move_uploaded_file($_FILES['music']['tmp_name'], $target_file);
        if ($result) {
            $musicErr = "";
        }
        else {
            $musicErr = "خطایی در نوشتن فایل در سرور اتفاق افتاد";
        }
        $music = $target_file;
    } else {
        $musicErr = "انتخاب فایل موزیک الزامی است!";
    }
    if(empty($nameErr) && empty($artistErr) && empty($authorErr) && empty($imgErr) && empty($genreErr) && empty($musicErr)){
        $date = new DateTime();
        $arr = array(
            "name"=> $name,
            "artist"=>$artist,
            "genre"=>$genre,
            "lyric"=>$lyrics,
            "link"=>$music,
            "image"=>$image,
            "author"=>$author,
            "date"=> $date->format('Y-m-d H:i:s')
        );
        $query = new Query();

        $query->insert("posts", $arr);
        
        echo "<script>alert('اطلاعات با موفقیت ذخیره شد');</script>";
    }
}

?>

<div class="container">
    <div class="row">
        <main class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="bg-white shadow p-5 my-5 rounded">
                <h3 class="h4 text-right border-bottom pb-2">آپلود موزیک</h3>
                <div class="row">
                    <div class="col-12">
                        <form enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-right">
                            <div class="form-gruop">
                                <label for="name">نام موسیقی</label>
                                <input type="text" name="name" id="name" class="form-control">
                                <small class="text-danger"><?php echo $nameErr; ?></small>
                            </div>
                            <div class="form-group">
                                <label for="artist">خواننده</label>
                                <input type="text" name="artist" id="artist" class="form-control">
                                <small class="text-danger"><?php echo $artistErr; ?></small>
                            </div>
                            <div class="form-group">
                                <label for="genre">سبک موسیقی</label>
                                <select name="genre" id="genre" class="custom-select">
                                    <option value="نامعلوم" selected>نامعلوم</option>
                                    <?php
                                        // foreach genre list
                                        require_once("./includes/db.php");

                                        $option = new Query();
                                        $values = $option->get('genre');

                                        foreach($values->fetchAll() as $result){
                                            echo "<option value='".$result['genre']."'>".$result['genre']."</option>";
                                        }
                                    ?>
                                </select>
                                <small class="text-danger"><?php $genreErr; ?></small>
                            </div>
                            <div class="form-group">
                                <label for="author">نام و نام خانوادگی شما</label>
                                <input type="text" name="author" id="author" class="form-control">
                                <small class="text-danger"><?php echo $authorErr; ?></small>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="image">عکس کاور</label>
                                        <input class="form-control-file" type="file" name="image" id="image" accept=".jpg,.jpeg,.png">
                                        <small class="text-danger"><?php echo $imgErr; ?></small>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="music">فایل آهنگ</label>
                                        <input type="file" name="music" id="music" class="form-control-file" accept=".mp3,.flac">
                                        <small class="text-danger"><?php echo $musicErr; ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lyrics">متن موسیقی</label>
                                <textarea name="lyrics" id="lyrics" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn Music w-100">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <aside class="col-xs-12 col sm-12 col-md-3 col-lg-3">
            <div class="Music shadow p-3 my-5 rounded">
                <?php require("./includes/sidebar.php"); ?>
            </div>
        </aside>
    </div>
</div>

<?php require("./includes/footer.php"); ?>