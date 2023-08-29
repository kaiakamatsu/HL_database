<?php 
	include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>

	<title>Filtering Projects</title>
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
        
        /* Style for the search bar container */
        #search {
            margin-top: 10px;
            display: block;
            font-size: 14px;
            font-family: Verdana;
        }
        
        /* Style for the search input */
        #search {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        
        /* Style for the search input on focus */
        #search:focus {
            border-color: #66afe9;
            outline: 0;
            box-shadow: 0 0 5px rgba(102, 175, 233, 0.5);
        }


	</style>
    
</head>
<body>

<div class="filter-section">
    <form method="post" action="">
        <h2>Filtering Project Database</h2>
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


        <p>Education</p>
        <div class="checkbox-group">
            <label><input type="checkbox" name="education[]" value="undergraduate">undergraduate</label>
            <label><input type="checkbox" name="education[]" value="graduate"> graduate</label>
        </div>
        
        
        <p>Time Commitment (hours/week)</p>
        <div class="checkbox-group">
            <label><input type="checkbox" name="time[]" value="5">5</label>
            <label><input type="checkbox" name="time[]" value="10">10</label>
            <label><input type="checkbox" name="time[]" value="15">15</label>
            <label><input type="checkbox" name="time[]" value="20">20</label>
            <label><input type="checkbox" name="time[]" value="25">25</label>
            <label><input type="checkbox" name="time[]" value="30">30</label>
            <label><input type="checkbox" name="time[]" value="35">35</label>
            <label><input type="checkbox" name="time[]" value="40">40</label>
        </div>

        <br>
        <div class="checkbox-group">
            <label for="search"></label>
            <input type="text" id="search" name="search" placeholder="Enter keywords...">
        </div>

        <br>
        <input type="submit" name="apply_filter" value="Apply Filter">
    </form>
</div>

<div class="results-section">
    <?php
        # showing database data on a website using php
        $sql = "SELECT * FROM project_info;";

        # send query to database n run into the database
        $result = mysqli_query($conn, $sql);

        # check for query failure error
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $resultCheck = mysqli_num_rows($result);


        # if there are results from the query
        if($resultCheck > 0){
            echo '<h2>Current Database</h2>';
            echo '<table>';
            echo '<tr><th>Name</th><th>Email</th><th>Title</th><th>Description</th><th>Length</th><th>Students</th><th>Major</th><th>Education</th><th>Time</th><th>Skills</th></tr>';

            # spit out data as long as there are more results
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo '<td>', $row['name'], '</td>';
                echo '<td>', $row['email'], '</td>';
                echo '<td>', $row['title'], '</td>';
                echo '<td>', $row['description'], '</td>';
                echo '<td>', $row['length'], '</td>';
                echo '<td>', $row['students'], '</td>';
                echo '<td>', $row['major'], '</td>';
                echo '<td>', $row['education'], '</td>';
                echo '<td>', $row['time'], '</td>';
                echo '<td>', $row['skills'], '</td>';

                echo '</tr>';
            }

            echo '</table>';
        

        } else {
            echo "No results found.";
        }

        
        # if the apply filter box was clicked
        if (isset($_POST['apply_filter'])) {
            # retrieves the selected majors
            $selectedMajors = $_POST['major'];
            $selectedEducation = $_POST['education'];
            $selectedTime = $_POST['time'];
            $filterSearch = $_POST['search'];
            

            if (!empty($selectedMajors) || !empty($selectedEducation) || !empty($selectedTime) || !empty($filterSearch)) {
                // Construct SQL query based on selected majors and years
                $sql = "SELECT * FROM project_info WHERE ";
                $conditions = [];

                if (!empty($selectedMajors)) {
                    # if majors are selected, it constructs a comma-separated list of the selected majors using implode() and surrounds each major with single quotes.
                    $filteredMajors = "'" . implode("', '", $selectedMajors) . "'";
                    $conditions[] = "(major IN ($filteredMajors))";
                }
                

                if (!empty($selectedEducation)) {
                    $filteredEducation = "'" . implode("', '", $selectedEducation) . "'";
                    $conditions[] = "(education IN ($filteredEducation) OR education LIKE '%both%')";
                }
                
                if (!empty($selectedTime)) {
                    $filteredTime = "'" . implode("', '", $selectedTime) . "'";
                    $conditions[] = "(time IN ($filteredTime))";
                }

                if (!empty($filterSearch)) {
                    # Split up each word in an array
                    # Loop through array and add each individual word into conditions
                    $splitSearch = preg_split('/[\s,]+/', $filterSearch);
                    $filterConditions[sizeof($splitSearch)];
                    print_r($splitSearch);
                    for ($x = 0; $x < sizeof($splitSearch); $x++) {
                        $filteredSearch = $splitSearch[$x];
                        $filterConditions[$x] = "(email LIKE '%$filteredSearch%' OR name LIKE '%$filteredSearch%' OR workexp LIKE '%$filteredSearch%' OR interest LIKE '%$filteredSearch%')";
                    }
                    $filteredConditions .= implode(' OR ', $filterConditions);
                    print_r($filteredConditions);
                    $conditions[] = "($filteredConditions)";
                }

                
                $sql .= implode(' AND ', $conditions);
                

                # executes filter query and stores result
                $filterResult = mysqli_query($conn, $sql);

                if ($filterResult) {
                    $filterResultCheck = mysqli_num_rows($filterResult);

                    if ($filterResultCheck > 0) {
                        echo '<h2>Filtered Results</h2>';
                        echo '<table>';
                        echo '<tr><th>Name</th><th>Email</th><th>Title</th><th>Description</th><th>Length</th><th>Students</th><th>Major</th><th>Education</th><th>Time</th><th>Skills</th></tr>';

                        # spit out data as long as there are more results
                        while ($row = mysqli_fetch_assoc($filterResult)){
                            echo '<tr>';
                            echo '<td>', $row['name'], '</td>';
                            echo '<td>', $row['email'], '</td>';
                            echo '<td>', $row['title'], '</td>';
                            echo '<td>', $row['description'], '</td>';
                            echo '<td>', $row['length'], '</td>';
                            echo '<td>', $row['students'], '</td>';
                            echo '<td>', $row['major'], '</td>';
                            echo '<td>', $row['education'], '</td>';
                            echo '<td>', $row['time'], '</td>';
                            echo '<td>', $row['skills'], '</td>';
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
