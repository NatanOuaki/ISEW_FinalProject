<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : '';
$lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : '';
$gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';
$password = isset($_POST["password"]) ? $_POST["password"] : '';
$tel = isset($_POST["tel"]) ? $_POST["tel"] : '';
$url = isset($_POST["url"]) ? $_POST["url"] : '';
$range = isset($_POST["range"]) ? $_POST["range"] : '';
$number = isset($_POST["number"]) ? $_POST["number"] : '';
$color = isset($_POST["color"]) ? $_POST["color"] : '';
$date = isset($_POST["date"]) ? $_POST["date"] : '';
$time = isset($_POST["time"]) ? $_POST["time"] : '';
$datetime = isset($_POST["datetime"]) ? $_POST["datetime"] : '';
$textarea = isset($_POST["textarea"]) ? $_POST["textarea"] : '';
$file = isset($_FILES["file"]["name"]) ? $_FILES["file"]["name"] : '';
$select = isset($_POST["select"]) ? $_POST["select"] : '';
$datalist = isset($_POST["browser"]) ? $_POST["browser"] : '';
$checkbox_group = [
    'netanya' => isset($_POST["netanya"]) ? $_POST["netanya"] : '',
    'raanana' => isset($_POST["raanana"]) ? $_POST["raanana"] : '',
    'TelAviv' => isset($_POST["TelAviv"]) ? $_POST["TelAviv"] : ''
];

$message = "First Name: " . $firstName . "\n" ."Last Name: " . $lastName . "\n" . "Gender: " . $gender . "\n" .
"Email: " . $email . "\n" . "Password: " . $password . "\n" . "Telephone: " . $tel . "\n" . "URL: " . $url . "\n" .
"Range: " . $range . "\n" . "Number: " . $number . "\n" . "Color: " . $color . "\n" . "Date: " . $date . "\n" .
"Time: " . $time . "\n" . "Datetime: " . $datetime . "\n" . "Textarea: " . $textarea . "\n" . "File: " . $file . "\n" .
"Select: " . $select . "\n" . "Datalist: " . $datalist . "\n" . "Checkbox Group: " . implode(", ", $checkbox_group);

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "ssl0.ovh.net";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = "nodev@nodev.tech";
$mail->Password = "NO31102000";

$mail->setFrom($email, $firstName . " " . $lastName);
$mail->addAddress("nodev@nodev.tech", "Natan");
$mail->Subject = $firstName . " " . $lastName . " send a new feedback";
$mail->Body = $message;

try {
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("Location: review.php");
?>
