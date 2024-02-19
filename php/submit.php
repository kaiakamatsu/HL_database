<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>
    <h2>Form Submission Result</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Name: " . $_POST["name"] . "</p>";
        echo "<p>Email: " . $_POST["email"] . "</p>";
        echo "<p>Major: " . $_POST["major"] . "</p>";
        // Add more fields as needed
    } else {
        echo "<p>No form data submitted.</p>";
    }
    ?>
    
    <p><a href="index.html">Go back to the form</a></p>
</body>
</html>