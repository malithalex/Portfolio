<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $projectDetails = $_POST["project_details"];
    
    $to = "malith.alex@gmail.com"; // Change this to your email address
    $subject = "New Form Submission: $subject";
    $message = "Name: $name\n Email: $email\n Project Details:\n $projectDetails";
    
    // Send the email
    mail($to, $subject, $message);

        if ($sent) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
