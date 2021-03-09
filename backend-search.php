<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project_inv");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM material WHERE Part_No LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                   
                    echo "<p>" . $row["Material_Name"] . "</p>";
                    echo "<p>" . $row["Stock_Amount"] . "</p>";
                    echo "<a href='UpdateResin.php?id=". $row['id'] ."' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-outline-primary btn-sm '>Receive</button></a>";
                    echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                    echo "<a href='DeleteResin.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                    echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                    echo "<a href='ResinIssueInj.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-warning btn-sm'>Issue to Injection</button></a>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>
