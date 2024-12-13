<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data received from the form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Check if all fields are present
    if (!empty($name) && !empty($email) && !empty($phone)) {
        echo "<h3>Form Submitted Successfully</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone Number:</strong> $phone</p>";
    } else {
        echo "Please fill all the required fields.";
    }
} else {
    echo "Form submission failed.";
}
?>
