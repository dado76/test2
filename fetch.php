<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$steam=$steamid;
$query .= 'SELECT * FROM vehicle ';







$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{


	$sub_array[] = $row["class"];
	$sub_array[] = $row["nickname"];



	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>