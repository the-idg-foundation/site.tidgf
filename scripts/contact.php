<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['contactname']) && !empty($_POST['contactemail']) && !empty($_POST['contactmessage'])) {
	$to = 'kirilenko.danila@gmail.com'; // Your e-mail address here.
	$body = "\nName: {$_POST['contactname']}\nEmail: {$_POST['contactemail']}\n\n\n{$_POST['contactmessage']}\n\n";
	mail($to, "kirilenko.danila@gmail.com", $body, "From: {$_POST['contactemail']}"); // E-Mail subject here.
    }
}
?>