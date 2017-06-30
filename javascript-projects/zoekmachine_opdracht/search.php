<?php
/* Database connection start */
include 'connection.php';

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'webName', 
	1 => 'ftpAdres',
	2 => 'ftpUsername',
	3 => 'ftpPass', 
	4 => 'dbName',
	5 => 'dbUsername',
	5 => 'dbPass'
);

// getting total number records without any search
$sql = "SELECT webName, ftpAdres, ftpUsername, ftpPass, dbName, dbUsername, dbPass ";
$sql.=" FROM webdata";
$query=mysqli_query($conn, $sql) or die("search.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT webName, ftpAdres, ftpUsername, ftpPass, dbName, dbUsername, dbPass ";
$sql.=" FROM webdata WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( webName LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR ftpAdres LIKE '".$requestData['search']['value']."%' ";

	$sql.=" OR ftpUsername LIKE '".$requestData['search']['value']."%' )";
}

$query=mysqli_query($conn, $sql) or die("search.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("search.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["webName"];
	$nestedData[] = $row["ftpAdres"];
	$nestedData[] = $row["ftpUsername"];
	$nestedData[] = $row["ftpPass"];
	$nestedData[] = $row["dbName"];
	$nestedData[] = $row["dbUsername"];
	$nestedData[] = $row["dbPass"];

	
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
