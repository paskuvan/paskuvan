<?php
if(isset($_POST['email'])) {


$email_to = "hello@paskuvan.us";
$email_subject = "Contact from paskuvan.us";


if(!isset($_POST['name']) ||
!isset($_POST['surname']) ||
!isset($_POST['email']) ||
!isset($_POST['message'])) {

echo "<b>Oops! The form has not been sent. </b><br />";
echo "Please, come back & verified the information. <br />";
die();
}

$email_message = "Details:\n\n";
$email_message .= "Name: " . $_POST['name'] . "\n";
$email_message .= "Lastname: " . $_POST['surname'] . "\n";
$email_message .= "Email: " . $_POST['email'] . "\n";
$email_message .= "Message: " . $_POST['message'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$form_email."\r\n".
'Reply-To: '.$form_email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $message, $headers);

echo "¡Thank you, your message has been sent!!";
}
?>