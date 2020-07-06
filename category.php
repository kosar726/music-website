<?php
$title = "صفحه ی اصلی";
require("./includes/header.php");
?>

<div class="container">
    <div class="row">
        <main class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="bg-white shadow p-5 my-5 rounded">
                <h3 class="h4 text-right border-bottom pb-2">دسته بندی ها</h3>
                    <?php
                    require_once("./includes/db.php");

                    $query = new Query();
                    echo "<div class='row'>";
                    if ($data = $query->get('genre')) {
                        foreach ($data->fetchAll() as $result) {
                            echo "<div class='p-3 border rounded mx-2'>";
                            echo "<a href='?genre=" . $result['genre'] . "'><h3>" . $result['genre'] . "</h3></a>";
                            echo "</div>";
                        }
                    } else {
                        echo "<h3 class='text-center'>ژانزی یافت نشد! لطفا از پایگاه داده ژانزی اضافه کنید</h3>";
                    }
                    echo "</div>";
                    echo "<div class='row'>";
                    if (isset($_GET["genre"])) {
                        require_once("./includes/db.php");
                        $query = new Query();
                        if ($data = $query->like('posts', 'genre', $_GET["genre"])) {
                            foreach ($data->fetchAll() as $result) {
                                echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>";
                                echo "<div class='card' style='width:100%;'>";
                                echo "<img src='" . $result["image"] . "' alt='کاور' height='350px'/>";
                                echo "<div class='card-block text-center'>";
                                echo "<a class='mt-3 d-flex justify-content-center' href='music.php?music=" . $result["name"] . "'><i class='fas fa-music ml-2'></i><h5 class=''>" . $result["name"] . "</h5></a>";
                                echo "<p class='text-center'><i class='fas fa-user ml-2'></i>" . $result["artist"] . "<br/>";
                                echo "<i class='fas fa-file ml-2'></i>" . $result["genre"] . "<br/>";
                                echo "<i class='fas fa-clock ml-2'></i>" . $result['date'];
                                echo "</p>";
                                echo "<a href='music.php?music=" . $result["name"] . "&post_id=" . $result["id"] . "' class='btn btn-primary mb-3'>دانلود</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                    }
                    echo "</div>";
                    ?>
               
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