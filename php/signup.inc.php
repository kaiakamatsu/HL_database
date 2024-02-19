<?php
# establishes database connection
include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    #$_POST global variable which takes data we passed on the form into document
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $major = mysqli_real_escape_string($conn, $_POST['major']);
    $minor = mysqli_real_escape_string($conn, $_POST['minor']);
    $education = mysqli_real_escape_string($conn, $_POST['education']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $workexp = mysqli_real_escape_string($conn, $_POST['workexp']);
    $interest = mysqli_real_escape_string($conn, $_POST['interest']);

    echo("Connection Successful POST $name $email $major $minor $education $year $workexp $interest");
    # need to add more code to help protect database from SQL injection
    # insert data into database
    $sql = "INSERT INTO student_info (name, email, major, minor, education, year, workexp, interest) 
            VALUES ('$name', '$email', '$major', '$minor', '$education', '$year', '$workexp', '$interest')";

    # send query to database n run into the database
    $result = mysqli_query($conn, $sql);

    echo("Connection Successful POST $result");

    #takes us to the front page after the code above runs
    header("Location: /student_form.html?signup=success");
    exit();
} else {
    echo("Connection Successful after post");
    
    header("Location: /student_form.html");
    exit();
}

?>

