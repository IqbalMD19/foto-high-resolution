<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['Name']);
    $email = htmlspecialchars($_POST['Email']);
    $message = htmlspecialchars($_POST['Message']);

    $to = "webiqbalpolsri@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Terima kasih! Pesan Anda telah terkirim.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Gagal mengirim email. Silakan coba lagi.'); window.location.href='index.html';</script>";
    }
}
?>
