<?php
$title = "صفحه ی اصلی";
require("./includes/header.php");
?>

<div class="container">
    <div class="row">
        <main class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="bg-white shadow p-5 my-5 rounded">
                <h3 class="h4 text-right border-bottom pb-2">دسته بندی ها</h3>
                <div class="row">
                    <?php ?>
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