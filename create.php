<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Assembly</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
 </head>
<body>
	<!-- Navbar -->
	<?php include_once("header.php"); ?>
	<br/><br/>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width:100%;height:100%;">
					<h1>Assembly</h1>
					<div class="row">
						
						<div class="col-sm-18">
							<div class="card">
						      <div class="card-body">
						        
						        <p class="card-text">Here you can add new FG Part </p>
						        
                                <a href="AssyFG.php" class="btn btn-dark">Add FG</a>
                                <a href="createNG221A.php" class="btn btn-dark">Add NG 221A</a>
                                <a href="createNG221A.php" class="btn btn-dark">Add Set Up 221A</a>

						      </div>
						    </div>
						</div>
                        
					</div>
				</div>
			</div>

            <div class = "container">
            <br/><br/>   
            <?php
                    // Include config file
                    require_once "db.php";
                    

                    $sql = "SELECT * FROM insulissueinj";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Insulator</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='InsulIssueInj.php?id=". $row['id'] ."' title='Issue to process' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm '>Issue to process</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='DeleteInsulProcess.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Turn to Stock</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Attempt select query execution
                   $sql = "SELECT * FROM shopissueassy";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>Shop Supply</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>Material_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Material_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='InsulIssueInj.php?id=". $row['id'] ."' title='Issue to process' data-toggle='tooltip'><button type='button' class='btn btn-primary btn-sm '>Issue to process</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='DeleteInsulProcess.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>";
                                        echo "<a href='#UpdateResin.php?id=". $row['id'] ."' title='' data-toggle='tooltip'><button type='button' class='btn  '></button></a>";
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Turn to Stock</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    
                    $sql = "SELECT * FROM assyfg";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<a href='#UpdateResin.php?id=' title='Add more' data-toggle='tooltip'><button type='button' class='btn btn-danger'>FG Part</button></a>";
                            echo "<table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr >";
                                        echo "<th>#</th>";
                                        echo "<th>FG_Name</th>";
                                        echo "<th>Part_No</th>";
                                        echo "<th>Stock_Amount</th>";
                                        echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    
                                        
                                    echo "<tr>";
                                        echo "<td><font size='3pt'>" . $row['id'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['FG_Name'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Part_No'] . "</td>";
                                        echo "<td><font size='3pt'>" . $row['Stock_Amount'] . "</td>";
                                        echo "<td>";
                                        
                                        echo "<a href='InsulTurnStock.php?id=". $row['id'] ."' title='Delete this category' data-toggle='tooltip'><button type='button' class='btn btn-success btn-sm'>Issue to Painting</button></a>";
                                        echo "</td>";
                                        
                                    echo "</tr>";
                                
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    
                    
                    // Close connection
                    mysqli_close($link);
                    ?>
                    <?php
$con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname=$row['id'];
       $month[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sales[] = $row['NG_Percent'];
      
        }
 
 
 }

 ?>
 <?php
 $con  = mysqli_connect("localhost","root","","project_inv");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
    $sql ="SELECT * FROM ngrecord";
    $result = mysqli_query($con,$sql);
    $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 

       $productname1=$row['id'];
       $month1[]  = date_format(date_create( $row['Year_Month_Date']),"M d, Y")  ;
       $sale[] = $row['SetUP_Rec'];
        }
 
 
 }
 
 
?>
                    <br>
                    <div style="width:50%;hieght:20%;text-align:center">
                    <h2 class="page-header" >NG Percent of 221A </h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname; ?> </div>
                    <canvas  id="chartjs_line"></canvas> 
                    </div>    
                    </div>

                    <br>
                    <div style="width:50%;hieght:20%;text-align:center">
                    <h2 class="page-header" >Set up Percent of 221A </h2>
                    <h4 class="page-header" >Budget = 2.00% </h4>
                    <div><?php echo $productname1; ?> </div>
                    <canvas  id="chartjs_line1"></canvas> 
                    </div>    
                    </div>
		</div>
	</div>
	
	

	
	


</body>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
      var ctx = document.getElementById("chartjs_line").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                var ctx = document.getElementById("chartjs_line1").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sale); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>
