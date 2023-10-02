<?php 
	include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
        
        <script defer src="js/DataTable.js"></script> 
        <script defer src="js/readMore.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
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
    </head>
    <body>
        <div class="container mt-3">
            <form method="post" action="">
                <h2 class = "custom-heading">Filtering Student Database</h2>
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
                <p class = "bold-with-padding">Year</p>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-check">
                            <label><input class="form-check-input" type="checkbox" name="year[]" value="1"> 1</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <label><input class="form-check-input" type="checkbox" name="year[]" value="2"> 2</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <label><input class="form-check-input" type="checkbox" name="year[]" value="3"> 3</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <label><input class="form-check-input" type="checkbox" name="year[]" value="4"> 4</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <label><input class="form-check-input" type="checkbox" name="year[]" value="5"> 5</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <label><input class="form-check-input" type="checkbox" name="year[]" value="6"> 6</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class = "bold-with-padding">
                    <label for="search">Search Bar:  </label>
                    <input type="text" id="search" name="search" placeholder="Enter keywords...">
                </div>
                <br>
                <input class="btn custom-btn mt-2" type="submit" name="apply_filter" id="apply_filter" value="Apply Filter">
            </form>
        </div>

        <div class="container-fluid my-5">
            <?php
                # showing database data on a website using php
                $sql = "SELECT * FROM student_info;";
        
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
                    echo '<table id="example" class="table table-bordered table-hover" style="width:100%">';
                    echo '
                    <thead class="table-group-divider">
                    <tr>
                    <th class="col-sm-1">Name</th>
                    <th class="col-sm-1">Email</th>
                    <th class="col-sm-1">Major</th>
                    <th class="col-sm-1">Minor</th>
                    <th class="col-sm-1">Education</th>
                    <th class="col-sm-1">Year</th>
                    <th class="col-sm-3">Work Experience</th>
                    <th class="col-sm-3">Interest</th>
                    </tr>
                    </thead>';
                    # spit out data as long as there are more results
                    echo '<tbody">';
                    while ($row = mysqli_fetch_assoc($result)){
                        echo '<tr class="description-row">';
                        echo '<td>', $row['name'], '</td>';
                        echo '<td>', $row['email'], '</td>';
                        echo '<td>', $row['major'], '</td>';
                        echo '<td>', $row['minor'], '</td>';
                        echo '<td>', $row['education'], '</td>';
                        echo '<td>', $row['year'], '</td>';
                        echo '<td class="description ellipsis"><p class="description ellipsis">', $row['workexp'], '</p></td>';
                        echo '<td class="description ellipsis"><p class="description ellipsis">', $row['interest'], '</p></td>';
                        echo '</tr>';
                    }
        
                    echo '</tbody>';
                    echo '</table>';
                
        
                } else {
                    echo "No results found.";
                }
        
                
                # if the apply filter box was clicked
                if (isset($_POST['apply_filter'])) {
                    # retrieves the selected majors
                    $selectedMajors = $_POST['major'];
                    $selectedYears = $_POST['year'];
                    $filterSearch = $_POST['search'];
                    
        
                    if (!empty($selectedMajors) || !empty($selectedYears) || !empty($filterSearch)) {
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
        
                        if (!empty($filterSearch)) {
                            # Split up each word in an array
                            # Loop through array and add each individual word into conditions
                            $splitSearch = preg_split('/[\s,]+/', $filterSearch);
                            $filterConditions[sizeof($splitSearch)];
                            #print_r($splitSearch);
                            for ($x = 0; $x < sizeof($splitSearch); $x++) {
                                $filteredSearch = $splitSearch[$x];
                                $filterConditions[$x] = "(name LIKE '%$filteredSearch%' OR email LIKE '%$filteredSearch%' OR workexp LIKE '%$filteredSearch%' OR interest LIKE '%$filteredSearch%')";
                            }
                            $filteredConditions .= implode(' OR ', $filterConditions);
                            #print_r($filteredConditions);
                            $conditions[] = "($filteredConditions)";
                        }
        
                        
                        $sql .= implode(' AND ', $conditions);
                        
                        echo " ";
                        
                        # executes filter query and stores result
                        $filterResult = mysqli_query($conn, $sql);
        
                        if ($filterResult) {
                            $filterResultCheck = mysqli_num_rows($filterResult);
        
                            if ($filterResultCheck > 0) {
                                echo '<h2 class = "custom-heading">Filtered Database</h2>';
                                echo '<table id="example2" class="table table-bordered table-hover" style="width:100%">';
                                echo '
                                <thead class="table-group-divider">
                                <tr>
                                <th class="col-sm-1">Name</th>
                                <th class="col-sm-1">Email</th>
                                <th class="col-sm-1">Major</th>
                                <th class="col-sm-1">Minor</th>
                                <th class="col-sm-1">Education</th>
                                <th class="col-sm-1">Year</th>
                                <th class="col-3">Work Experience</th>
                                <th class="col-3">Interest</th>
                                </tr>
                                </thead>';
                                # spit out data as long as there are more results
                                echo '<tbody">';
                                while ($row = mysqli_fetch_assoc($filterResult)){
                                    echo '<tr class="description-row">';
                                    echo '<td>', $row['name'], '</td>';
                                    echo '<td>', $row['email'], '</td>';
                                    echo '<td>', $row['major'], '</td>';
                                    echo '<td>', $row['minor'], '</td>';
                                    echo '<td>', $row['education'], '</td>';
                                    echo '<td>', $row['year'], '</td>';
                                    echo '<td class="description ellipsis"><p class="description ellipsis">', $row['workexp'], '</p></td>';
                                    echo '<td class="description ellipsis"><p class="description ellipsis">', $row['interest'], '</p></td>';
                                    echo '</tr>';
                                }
        
                                echo '</tbody>';
                                echo '</table>';
                            } else {
                                echo "<b>No filtered results found.</b>";
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
