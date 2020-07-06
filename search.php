<?php
$title = "جستجو";
require("./includes/header.php");
?>

<div class="container">
    <div class="row">
        <main class="col-xs-12 col sm-12 col-md-9 col-lg-9">
            <div class="bg-white shadow p-5 my-5 rounded">
                <div class="row">
                <?php 
                    if(!empty($_GET["search"])){
                        require_once("./includes/db.php");
                        $query = new Query();
                        if($data = $query->like("posts", "name", $_GET["search"])){
                            foreach($data->fetchAll() as $result){
                                echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>";
                                echo "<div class='card' style='width:100%;'>";
                                    echo "<img src='".$result["image"]."' alt='کاور' height='350px'/>";
                                    echo "<div class='card-block text-center'>";
                                        echo "<a class='mt-3 d-flex justify-content-center' href='music.php?music=".$result["name"]."'><i class='fas fa-music ml-2'></i><h5 class=''>".$result["name"]."</h5></a>";
                                        echo "<p class='text-center'><i class='fas fa-user ml-2'></i>".$result["artist"]."<br/>";
                                        echo "<i class='fas fa-file ml-2'></i>".$result["genre"]."<br/>";
                                        echo "<i class='fas fa-clock ml-2'></i>".$result['date'];
                                        echo "</p>";
                                        echo "<a href='music.php?music=".$result["name"]."&post_id=".$result["id"]."' class='btn btn-primary mb-3'>دانلود</a>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            }
                        }else{
                            echo "<h3 class='text-center'>کلیدواژه مورد نظر شما یافت نشد....</h3>";
                        }
                    }else{
                        echo "<h3 class='text-center'>چیزی جستجو نکردید...</h3>";
                    }
                ?>
                </div>
            </div>
        </main>
        <aside class="col-xs-12 col sm-12 col-md-3 col-lg-3">
            <div class="bg-white shadow p-3 my-5 rounded">
                <?php include("./includes/sidebar.php"); ?>
            </div>
        </aside>
    </div>
</div>

<?php require("./includes/footer.php"); ?>