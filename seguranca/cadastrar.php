<?php

    $email = $_POST['email'];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        "secret"   => "6LcvcGkUAAAAAFV0dr9MYDzBfPyH36U9wIyU_jYj",
        "response" => $_POST['g-recaptcha-response'],
        "remoteip" => $_SERVER['REMOTE_ADDR']
    )));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $recaptcha = json_decode(curl_exec($ch), true);

    curl_close($ch);

    if ($recaptcha["success"] === true) {
        echo "OK: ".$_POST["email"];
    } else {
        header("Location: exemplo-04.php");
    }

?>