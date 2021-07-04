<div>
    <h5 class="text-right border-bottom pb-3">برترین های ماه</h5>
    <?php
                       // Get all songs from db
                        require_once("./includes/db.php");
                        $query = new Query();
                        $data = $query->get("posts");
                        
                        foreach( $data->fetchAll() as $result ){
                            if($result["status"] == 1)
                            echo "<a class='mt-3 d-flex justify-content-center white' href='music.php?music=".$result["name"]."&post_id=".$result["id"]."'><i class='fas fa-music ml-2'></i><h5 class=''>".$result["name"]."</h5></a>";
                        }
                    ?>
</div>