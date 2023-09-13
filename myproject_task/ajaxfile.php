<?php
$host = "localhost"; /* Host name */
$user = "vbp"; /* Username */
$password = "vbp_bd"; /* Password */
$dbname = "document_details"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
//include 'config.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage =300; //$_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
//echo $_POST['order'][0]['dir']; //exit;
$searchValue = $_POST['search']['value']; // Search value

## Custom Field value
$searchByDept = $_POST['searchByDept'];
$searchByCoachType = $_POST['searchByCoachType'];
$searchByDocType = $_POST['searchByDocType'];
$searchByCategory = $_POST['searchByCategory'];

## Search 
$searchQuery = " ";
if($searchByDept != ''){
    $searchQuery .= " and (department='".$searchByDept."') ";
}
if($searchByCoachType != ''){
    $searchQuery .= " and (coach_type='".$searchByCoachType."') ";
}
if($searchByDocType != ''){
    $searchQuery .= " and (doc_type='".$searchByDocType."') ";
}
if($searchByCategory != ''){
    $searchQuery .= " and (category='".$searchByCategory."') ";
}
if($searchValue != ''){
	$searchQuery .= " and (department like '%".$searchValue."%' or 
        id like '%".$searchValue."%' or 
        date like '%".$searchValue."%' or 
        version like '%".$searchValue."%' or
        doc_type like '%".$searchValue."%' or
        coach_type like '%".$searchValue."%' or 
        category like '%".$searchValue."%' or 
        description like '%".$searchValue."%') ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from doc_table");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from doc_table WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from doc_table WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
//$empQuery = "select * from telephones WHERE 1 ".$searchQuery." order by seniority_no "." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"id"=>$row['id'],
    		"date"=>$row['date'],
    		"version"=>$row['version'],
    		"department"=>$row['department'],
    		"coach_type"=>$row['coach_type'],
    		"doc_type"=>$row['doc_type'],
    		"category"=>$row['category'],
    		"description"=>$row['description']
    	);
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
//"officer_name"=>'<a href="https://icf.gov.in/icfessv2/photo/'.$row['empno'].'.jpg" target="_blank">'.$row['officer_name'].'</a>',//$row['officer_name'],
