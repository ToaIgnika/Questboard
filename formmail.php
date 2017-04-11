<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "eugene.my88@gmail.com";
    $email_subject = "Deck suggestion";


    $user_name = $_POST['username']; // required
    $first_name = $_POST['firstname']; // required
    $last_name = $_POST['lastname']; // required
    $email_from = $_POST['emailAddress']; // required
        $comments = $_POST['comments']; // required

    $email_message = "Deck detailes.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Username: ".clean_string($pos_name)."\n";
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Deck: ".clean_string($telephone)."\n";
    $email_message .= "Description: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->


<?php
$dest = "sent.html";
}
?>
<script>
window.location = "<?=$dest?>";
</script>
