<?php
    /* error variables */

$errorName = '';
$errorEmail = '';
$errorTitle = '';
$errorDescription = '';

/* post variables */

$name = '';
$email = '';
$title = '';
$description = '';

/* send variable */

$emailSent = false;

/* send e-mail function body */

if(isset($_POST['send']))
    {
        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['e-mail']);
        $title = strip_tags($_POST['title']);
        $description = strip_tags($_POST['description']);

            if( ! $name )
                {
                    $errorName = "To pole jest wymagane !";
                }
            if( ! $email )
                {
                    $errorEmail = "To pole jest wymagane !";
                } elseif( $email && ! filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        $errorEmail = "E-mail jest nie prawidłowy !";
                    }
            if( ! $title )
                {
                    $errorTitle = "To pole jest wymagane !";
                }
            if( ! $description )
                {
                    $errorDescription = "To pole jest wymagane !";
                }

                if( ! $errorEmail && ! $errorTitle && ! $errorDescription){
                    $statement = $mysqli->prepare("INSERT messages (customer_name, customer_mail, customer_title, customer_description) VALUES (?,?,?,?)");
                    $statement->bind_param("ssss", $name, $email, $title, $description);
                    $statement->execute();
                    $statement->close();

                    $emailSent = true;
                    header("Location: contact.php?success");
                }
    }
?>