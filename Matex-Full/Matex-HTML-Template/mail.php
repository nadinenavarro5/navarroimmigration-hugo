<?php
    $to = "spn1@spondonit.com"; // replace this mail with yours
    $from = $_SERVER['PHP_SELF']." ".$_POST["email"];
    $email = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $headers = "From: $from";
    $website = $_POST["website"];
    $message = $_POST["message"];

    $body = "User Message \n";
    $body .= " \n\n\t Name: ".$fname." ".$lname;
    $body .= " \n\n\t Email: ".$email;
    $body .= " \n\n\t Website: ".$website;
    $body .= " \n\n\t Message: ".$message;

    if(mail($to, $subject, $body, $headers)){
        echo '<label class="success">Sent your <b>e-mail.</b></label>';
    }else{
        echo '<label class="error">Something went wrong! please try again.</label>';
    }