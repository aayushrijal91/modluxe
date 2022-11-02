<?php
include __DIR__ . '/env.php';

$site = "Modluxe Bathrooms";
$phone_number = "1300 011 139";
$admin_email = 'admin@modluxe.com.au, info@modluxe.com.au';
$bcc_email = "ray@modluxe.com.au, kalbassit@aiims.com.au, jayoub@aiims.com.au";
$instagram = "https://www.instagram.com/modluxebathrooms/";
$no_reply_email = 'info@modluxe.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
