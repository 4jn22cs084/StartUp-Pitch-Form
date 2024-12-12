<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $founderName = htmlspecialchars($_POST['founderName']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);
    $country = htmlspecialchars($_POST['country']);
    $StartUpName = htmlspecialchars($_POST['StartUpName']);
    $pitchDesc = htmlspecialchars($_POST['pitchDesc']);

    // Construct the response message
    echo "
        <h2>Submission Successful!</h2>
        <p><strong>Founder Name:</strong> $founderName</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Contact:</strong> $contact</p>
        <p><strong>Country:</strong> $country</p>
        <p><strong>Startup Name:</strong> $StartUpName</p>
        <p><strong>Pitch Description:</strong> $pitchDesc</p>
    ";
} else {
    echo "<p>Invalid request. Please submit the form correctly.</p>";
}
?>
