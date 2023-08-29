<?php 
	include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Filtered Students</title>
	<style>
		body {
			margin-top: 20px; 
            display: flex;
			justify-content: space-between;
		}
        .filter-section {
			flex: 1;
			margin-right: 10px;
            margin-bottom: 20px;
		}
        .results-section {
			flex: 2;
			margin-right: 10px;
            margin-top: 20px;
		}
		table {
			border-collapse: collapse;
			margin: 10 auto;
			width: 90%;
		}
		th, td {
			border: 1px solid black;
			padding: 8px;
			text-align: left;
            font-size: 14px; 
		}
		th {
			background-color: #f2f2f2;
		}
        input[type="submit"]{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
        }
        .checkbox-label {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

	</style>
    
</head>
<body>

<div class="filter-section">
    <form method="post" action="">
        <h2>Filtered Students</h2>
        <p>Major</p>
        <div class="checkbox-group">
            
            <label><input type="checkbox" name="major[]" value="Biology"> Biology</label>
            <label><input type="checkbox" name="major[]" value="Chemistry"> Chemistry</label>
            <label><input type="checkbox" name="major[]" value="Computer Science"> Computer Science</label>
            <label><input type="checkbox" name="major[]" value="Bioengineering"> Bioengineering</label>
            <label><input type="checkbox" name="major[]" value="Bioinformatics"> Bioinformatics</label>
            <label><input type="checkbox" name="major[]" value="Data Science"> Data Science</label>
            <label><input type="checkbox" name="major[]" value="Cognitive Science"> Cognitive Science</label>
            <label><input type="checkbox" name="major[]" value="Computer Engineering"> Computer Engineering</label>
            <label><input type="checkbox" name="major[]" value="Business/Economics"> Business/Economics</label>
            <label><input type="checkbox" name="major[]" value="Electrical Engineering"> Electrical Engineering</label>
            <label><input type="checkbox" name="major[]" value="Physics"> Physics</label>
            <label><input type="checkbox" name="major[]" value="Mechanical Engineering"> Mechanical Engineering</label>
            <label><input type="checkbox" name="major[]" value="Aerospace Engineering"> Aerospace Engineering</label>
            <label><input type="checkbox" name="major[]" value="NanoEngineering"> NanoEngineering</label>
            <label><input type="checkbox" name="major[]" value="Structural Engineering"> Structural Engineering</label>
            <label><input type="checkbox" name="major[]" value="Global/Public Health"> Global/Public Health</label>
            <label><input type="checkbox" name="major[]" value="Mathematics"> Mathematics</label>
            <label><input type="checkbox" name="major[]" value="Probability&Statistics"> Probability&Statistics</label>
            <label><input type="checkbox" name="major[]" value="Psychology"> Psychology</label>
            <label><input type="checkbox" name="major[]" value="Sociology"> Sociology</label>
            <label><input type="checkbox" name="major[]" value="Political Science"> Political Science</label>
        </div>


        <p>Year</p>
        <div class="checkbox-group">
            <label><input type="checkbox" name="year[]" value="1"> 1</label>
            <label><input type="checkbox" name="year[]" value="2"> 2</label>
            <label><input type="checkbox" name="year[]" value="3"> 3</label>
            <label><input type="checkbox" name="year[]" value="4"> 4</label>
            <label><input type="checkbox" name="year[]" value="5"> 5</label>
            <label><input type="checkbox" name="year[]" value="6"> 6</label>
        </div>

        <br>
        <input type="submit" name="apply_filter" value="Apply Filter">
    </form>
</div>

<div class="results-section">
    <?php
        
        # if the apply filter box was clicked
        if (isset($_POST['apply_filter'])) {
            # retrieves the selected majors
            $selectedMajors = $_POST['major'];
            $selectedYears = $_POST['year'];


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
                
                echo " ";
                
                # executes filter query and stores result
                $filterResult = mysqli_query($conn, $sql);

                if ($filterResult) {
                    $filterResultCheck = mysqli_num_rows($filterResult);

                    if ($filterResultCheck > 0) {
                        echo '<h2>Filtered Results</h2>';
                        echo '<table>';
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
            } else {
                echo "Please select at least one of the checkboxes.";
            }
        }
    
    ?>
    
</div>

</body>
</html>
