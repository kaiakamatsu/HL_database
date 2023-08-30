<?php 
	include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<body>
	<title>Filtered Students </title>
    <style>
      /* Define a custom class with the desired background color */
      .custom-btn {
        background-color: #28257e;
        color: #fff; /* Optional: Set text color for better contrast */
      }
      .bold-with-padding {
        font-weight: bold;
        padding-top: 10px;
      }
      .custom-heading {
        color: #28257e;
      }
        /* Style the table borders */
      .custom-table {
        border: 3px solid #28257e;
      }
      
      /* Style the table header borders */
      .custom-table th {
        border: 3px solid #28257e;
      }
    
      /* Style the table cell borders */
      .custom-table td {
        border: 3px solid #28257e;
      }
    </style>

<div class="container mt-5">
    <?php
        # retrieve the major and year values
    	$major = $_GET['major'];
        $year = $_GET['year'];
        
        # explode these comma-separated strings into arrays
        $selectedMajors = explode(', ', $major); 
        $selectedYears = explode(', ', $year); 
        
 

        if (!empty($selectedMajors) || !empty($selectedYears)) {
            // Construct SQL query based on selected majors and years
            $sql = "SELECT * FROM student_info WHERE ";
            $conditions = [];

            if (!empty($selectedMajors)) {
                # if majors are selected, it constructs a comma-separated list of the selected majors using implode() and surrounds each major with single quotes.
                $filteredMajors = "'" . implode("', '", $selectedMajors) . "'";
                $conditions[] = "(major IN ($filteredMajors) OR minor IN ($filteredMajors))";
            }

            if (!empty($selectedYears)) {
                $filteredYears = "'" . implode("', '", $selectedYears) . "'";
                $conditions[] = "(year IN ($filteredYears))";
            }

            
            $sql .= implode(' AND ', $conditions);
            

            # executes filter query and stores result
            $filterResult = mysqli_query($conn, $sql);

            if ($filterResult) {
                $filterResultCheck = mysqli_num_rows($filterResult);

                if ($filterResultCheck > 0) {
                    echo '<h2 class = "custom-heading">Filtered Results</h2>';
                    echo 'Here are the list of students who match your preferred majors and years. For more students, check out the Database of Talented Students. <br>';
  

                    echo '<table class="table custom-table">';
                    echo '<tr><th>Name</th><th>Email</th><th>Major</th><th>Minor</th><th>Education</th><th>Year</th><th>Work Experience</th><th>Interest</th></tr>';

                    # spit out data as long as there are more results
                    while ($row = mysqli_fetch_assoc($filterResult)){
                        echo '<tr>';
                        echo '<td>', $row['name'], '</td>';
                        echo '<td>', $row['email'], '</td>';
                        echo '<td>', $row['major'], '</td>';
                        echo '<td>', $row['minor'], '</td>';
                        echo '<td>', $row['education'], '</td>';
                        echo '<td>', $row['year'], '</td>';
                        echo '<td>', $row['workexp'], '</td>';
                        echo '<td>', $row['interest'], '</td>';
                        echo '</tr>';
                    }

                    echo '</table>';
                } else {
                    echo "No filtered results found.";
                }
            } else {
                echo "Filter query failed: " . mysqli_error($conn);
            }

        }
    
    ?>
    
</div>

</body>
</html>
