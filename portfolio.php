<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["project_details"]);

    // Set the recipient email address
    $to = "malith.alex@gmail.com";

    // Set the email subject
    $email_subject = "New Inquiry: $subject";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers
    $email_headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $email_subject, $email_content, $email_headers)) {
        // Email sent successfully
        echo json_encode(array('status' => 'success', 'message' => 'Email sent successfully.'));
    } else {
        // Failed to send email
        echo json_encode(array('status' => 'error', 'message' => 'Failed to send email.'));
    }
} else {
    // Not a POST request, ignore
    http_response_code(403);
}
?>
