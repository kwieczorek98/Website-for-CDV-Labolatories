<?php 
    include "includes/header.php";
?>
    <section class="offer">
        <div class="offer__title">
            <h1>Cennik</h1>
        </div>
        <div class="offer__text">
            <p>Wybierz interesującą Ciebie opcje oraz uwzględnij ją w wiadomości</p>
        </div>
        <div class="offer__options">
            <?php 
                $offer_result = $mysqli->query("SELECT * FROM offer ORDER BY offer_id");
                    while ($offer = mysqli_fetch_array($offer_result)) {
                        echo '<div class="offer__option">
                            <p>'.$offer['offer_type'].'</p>
                            <h1>'.$offer['offer_price'].'</h1>
                            <ul>
                                <li><span>Realizacja</span><span>'.$offer['offer_realization'].'</span></li>
                                <li><span>Dowolny DAW</span><span>'.$offer['offer_daw'].'</span></li>
                                <li><span>Wtyczki 3rd party</span><span>'.$offer['offer_vst'].'</span></li>
                            </ul>
                        </div>';
                }
            ?>
        </div>
    </section>
<?php 
    include "includes/footer.php";
?>