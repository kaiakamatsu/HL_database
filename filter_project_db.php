<?php 
	include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<body>

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

<div class="container mt-3">
    <form method="post" action="">
        <h2 class = "custom-heading">Filtering Project Database</h2>
        <p class = "bold-with-padding">Major</p>
        
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Biology"> Biology</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Chemistry"> Chemistry</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check"> 
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Computer Science"> CS</label>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Bioengineering"> Bioeng</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Bioinformatics"> Bioinformatics</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Data Science"> Data Science</label>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Cognitive Science"> Cog Sci</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Computer Engineering"> Computer Eng</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Business/Economics"> Business/Econ</label>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Electrical Engineering"> Electrical Eng</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Physics"> Physics</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Mechanical Engineering"> Mechanical Eng</label>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Aerospace Engineering"> Aerospace Eng</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="NanoEngineering"> NanoEng</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Structural Engineering"> Structural Eng</label>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Global/Public Health"> Public Health</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Mathematics"> Mathematics</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Probability&Statistics"> Prob&Stats</label>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Psychology"> Psychology</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Sociology"> Sociology</label>
                </div>
            </div>   
            <div class="col-md-3">
                <div class="form-check">
                        <label><input class="form-check-input" type="checkbox" name="major[]" value="Political Science"> Poli Sci</label>
                </div>
            </div>   
        </div>


        <p class = "bold-with-padding">Education</p>
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="education[]" value="undergraduate">undergraduate</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="education[]" value="graduate"> graduate</label>
                </div>
            </div>
        </div>
        
        
        <p class = "bold-with-padding">Time Commitment (hours/week)</p>
        <div class="row">
            <div class="col-md-1">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="time[]" value="5">5</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="time[]" value="10">10</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="time[]" value="15">15</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="time[]" value="20">20</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="time[]" value="25">25</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="time[]" value="30">30</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="time[]" value="35">35</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-check">
                    <label><input class="form-check-input" type="checkbox" name="time[]" value="40">40</label>
                </div>
            </div>
        </div>

        <br>
        <div class = "bold-with-padding">
            <label for="search"></label>
            <input type="text" id="search" name="search" placeholder="Enter keywords...">
        </div>

        <br>
        <input class="btn custom-btn mt-2" type="submit" name="apply_filter" value="Apply Filter">
    </form>
</div>

<div class="container mt-5">
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
            echo '<h2 class = "custom-heading">Current Database</h2>';
            echo '<table class="table custom-table">';
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
                    for ($x = 0; $x < sizeof($splitSearch); $x++) {
                        $filteredSearch = $splitSearch[$x];
                        $filterConditions[$x] = "(email LIKE '%$filteredSearch%' OR name LIKE '%$filteredSearch%' OR workexp LIKE '%$filteredSearch%' OR interest LIKE '%$filteredSearch%')";
                    }
                    $filteredConditions .= implode(' OR ', $filterConditions);
                    $conditions[] = "($filteredConditions)";
                }

                
                $sql .= implode(' AND ', $conditions);
                
                # executes filter query and stores result
                $filterResult = mysqli_query($conn, $sql);

                if ($filterResult) {
                    $filterResultCheck = mysqli_num_rows($filterResult);

                    if ($filterResultCheck > 0) {
                        echo '<h2 class = "custom-heading">Filtered Results</h2>';
                        echo '<table class="table custom-table">';
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
