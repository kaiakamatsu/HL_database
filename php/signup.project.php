
<?php
# establishes database connection
include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    #$_POST global variable which takes data we passed on the form into document
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $length = mysqli_real_escape_string($conn, $_POST['length']);
    $students = mysqli_real_escape_string($conn, $_POST['students']);
    $majorArray = $_POST['major'];
    $major = implode(', ', $majorArray);
    $major = mysqli_real_escape_string($conn, $major);
    $education = mysqli_real_escape_string($conn, $_POST['education']);
    $yearArray = $_POST['year'];
    $year = implode(', ', $yearArray);
    $year = mysqli_real_escape_string($conn, $year);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $skills = mysqli_real_escape_string($conn, $_POST['skills']);
    
    
    # need to add more code to help protect database from SQL injection
    # insert data into database
    $sql = "INSERT INTO project_info (name, email, title, description, length, students, major, education, year, time, skills) 
            VALUES ('$name', '$email', '$title', '$description', '$length', '$students', '$major', '$education', '$year', '$time', '$skills')";

    # send query to database n run into the database
    $result = mysqli_query($conn, $sql);

    echo("Connection Successful POST $result");

    #takes us to the front page after the code above runs
    header("Location: /filtered_students.php");
    exit();
} else {
    echo("Connection Successful after post");
    
    header("Location: /prof_form.html");
    exit();
}

?>

