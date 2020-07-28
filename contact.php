<?php 
    include "includes/header.php";

    /* send  email function */

    include "includes/send_email.php"

?>
<section class="contact">
    <div class="contact_left">
        <?php if (isset($_GET['success'])) { ?>
            <span class="succes_message">Wiadomość wysłana</span>
        <?php } else {?>
        <h1>Formularz kontaktowy</h1>
        <?php }?>
        <form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
            <input type="text" placeholder="Imię" id="name" name="name" value="<?php echo $name; ?>"/>
            <?php  if( ($errorName != null)) {?>
               <span class="error_message">
                    <?= $errorName?>
               </span>
            <?php } ?>
            <input type="text" placeholder="Adres e-mail" id="e-mail" name="e-mail" value="<?php echo $email; ?>"/>
            <?php  if( ($errorEmail != null)) {?>
               <span class="error_message">
                    <?= $errorEmail?>
               </span>
            <?php } ?>
            <input type="text" placeholder="Temat" id="title" name="title" value="<?php  echo $title; ?>" />
            <?php  if( ($errorTitle != null)) {?>
               <span class="error_message">
                    <?= $errorTitle?>
               </span>
            <?php } ?>
            <textarea placeholder="Treść wiadomości ..." id="description" name="description"><?php echo $description; ?></textarea>
            <?php  if( ($errorDescription != null)) {?>
               <span class="error_message">
                    <?= $errorDescription?>
               </span>
            <?php } ?>
            <button type="submit" id="send" name="send">Wyślij</button>
        </form>
    </div>
    <div class="contact_right">
        <img src="images/contact.png" />
    </div>
</section>
<?php 
    include "includes/footer.php";
?>