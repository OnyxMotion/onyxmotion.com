<?php

    $to = "me@damidina.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "New Inquiry";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"message"} = "message";

    $body = ""; foreach($fields as $a => $b){   $body .= sprintf("%0s: %s\n\r\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
