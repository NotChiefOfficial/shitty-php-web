<?php
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';

    if (trim($email) == '') {
        $error = 'No mail given';
    }

    else if (trim($message) == '') {
        $error = 'No message given';
    }
    else if (strlen($message) < 10) {
        $error = 'Message should be more than 10 symbols';
    }

    if ($error != '') {
        echo $error;
        exit;
    }


    $subject = '=?utf-8?B?'.base64_encode("This is a mail from you web-site!")."?=";
    $headers = 'From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n';

    mail('trash.smawer@gmail.com', $subject, $message, $headers);

    header('Location: /about.php')

?>