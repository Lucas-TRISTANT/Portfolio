<form method="post" action="contact.php">


<textarea name="message"></textarea>


<input type="submit">


</form>

<?php


if($_POST["message"]) {


mail("lucas.tristant@hotmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>