<?php
	session_start();
	//connection
	$conn = new mysqli('localhost', 'root', '', 'project_inv');
 
	$sql = "SELECT * FROM material";
	$query = $conn->query($sql);
 
	if($query->num_rows > 0){
		$delimiter = ',';
		//create a download filename
		$filename = 'Material_Stock.csv';
 
		$f = fopen('php://memory', 'w');
 
		$headers = array('Material_Name', 'Part_No', 'Stock_Amount');
    	fputcsv($f, $headers, $delimiter);
 
    	while($row = $query->fetch_array()){
	        $lines = array( $row['Material_Name'], $row['Part_No'], $row['Stock_Amount']);
	        fputcsv($f, $lines, $delimiter);
	    }
 
	    fseek($f, 0);
	    header('Content-Type: text/csv');
	    header('Content-Disposition: attachment; filename="' . $filename . '";');
	    fpassthru($f);
	    exit;
	}
	else{
		$_SESSION['message'] = 'Cannot export. Data empty';
		header('location:index.php');
	}
?>
