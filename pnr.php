<?php
if(isset($_GET))
{
$PNR=$_GET['pnr_no'];
if($PNR<>"" )
{	
	$url = "http://api.railwayapi.com/pnr_status/pnr/".$PNR."/apikey/djf1h2gq";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL,$url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($curl);
	curl_close($curl);
	$temp=json_decode($result,true);
 
$error=$temp['error'];
$train_num=$temp['train_num'];
$train_name=$temp['train_name'];
$pnr=$temp['pnr'];
$doj=$temp['doj'];
$class=$temp['class'];
$total_passengers=$temp['total_passengers'];
$chart_prepared=$temp['chart_prepared'];

 echo "<strong> Train Number:</strong>".$train_num."<br/>";
 echo "<strong> Train Name:</strong>".$train_name."<br/>";
 echo "<strong> PNR:</strong>".$pnr."<br/>";
 echo "<strong> DOJ:</strong>".$doj."<br/>";
 echo "<strong> Class:</strong>".$class."<br/>";
 echo "<strong> No_Passengers:</strong>".$total_passengers."<br/>";
 echo "<strong> Chart_Prepared:</strong>".$chart_prepared."<br/>";
}
}
?>