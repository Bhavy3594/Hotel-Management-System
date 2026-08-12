<?php

    $to = "rockybd1995@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = isset($_REQUEST['number']) ? $_REQUEST['number'] : '';
    $cmessage = $_REQUEST['message'];

    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $emailSubject = "You have a message from Seaplace Hotel.";

    // Get the base URL dynamically
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $baseUrl = $protocol . $_SERVER['HTTP_HOST'];
    
    // Correct logo path following your frontend asset structure
    $logo = $baseUrl . '/frontend/img/logo.png';
    $link = $baseUrl;

    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Contact Form Message</title></head><body>";
    $body .= "<table style='width: 100%;'>";
    $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $body .= "<a href='{$link}'><img src='{$logo}' alt='Seaplace Hotel'></a><br><br>";
    $body .= "</td></tr></thead><tbody><tr>";
    $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
    $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
    $body .= "</tr>";
    $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td>";
    
    if(!empty($number)) {
        $body .= "<td style='border:none;'><strong>Phone:</strong> {$number}</td>";
    } else {
        $body .= "<td style='border:none;'></td>";
    }
    
    $body .= "</tr>";
    $body .= "<tr><td></td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'><strong>Message:</strong><br>{$cmessage}</td></tr>";
    $body .= "</tbody></table>";
    $body .= "</body></html>";

    $send = mail($to, $emailSubject, $body, $headers);

    if($send) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=success");
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=error");
    }
    exit;

?>