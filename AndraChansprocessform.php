<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    
    $to = "05adicel@skola.boras.se";
    $subject = "Meddelande från $name";
    $body = "Namn: $name\nEmail: $email\n\nMeddelande:\n$message";
    $headers = "From: $email";

    
    if (mail($to, $subject, $body, $headers)) {
        echo "Ditt meddelande har skickats.";
    } else {
        echo "Ett fel uppstod. Vänligen försök igen senare.";
    }
} else {
    
    header("Location: form.php");
    exit;
}
?>