<?php 
    include "includes/header.php";
?>

<h3>Galeria zdjęć</h3>
<section class="gallery__container">
             <?php 
                $images_result = $mysqli->query("SELECT * FROM images ORDER BY image_id");
                    while ($image = mysqli_fetch_array($images_result)) {
                        echo '<div class="gallery_photo">
                            <img src="'.$image['image_path'].'" alt="'.$image['image_alt'].'" width="500" height="500">
                            <p class="gallery_paragraph">'.$image['image_description'].'</p>
                        </div>';
                    }
            ?> 
</section>
<?php 
    include "includes/footer.php";
?>