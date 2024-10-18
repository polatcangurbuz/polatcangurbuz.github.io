<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "polatcangurbuz@gmail.com"; // E-posta alıcısı
    $subject = "İletişim Formu Mesajı";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
