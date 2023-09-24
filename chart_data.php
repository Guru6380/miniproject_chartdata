<?php
include_once("db_connect.php");
$sqlQuery = "SELECT player, wicket FROM wickets";
$resultset = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
$wickets = "{";
while( $records = mysqli_fetch_array($resultset) ) {
	$wickets.='"'.$records['player'].'":'.$records['wicket'].',';    
}
$wickets=rtrim($wickets,",");
$wickets.="}";
$data[] = $wickets;
echo json_encode($data);
exit;
?>