<html>
<head>
<title>ShotDev.Com Tutorial</title>
</head>
<body>
<?
	$objConnect = mysql_connect("localhost","root","root") or die(mysql_error());
	$objDB = mysql_select_db("mydatabase");
	$strSQL = "UPDATE customer SET ";
	$strSQL .="CustomerID = '".$_POST["txtCustomerID"]."' ";
	$strSQL .=",Name = '".$_POST["txtName"]."' ";
	$strSQL .=",Email = '".$_POST["txtEmail"]."' ";
	$strSQL .=",CountryCode = '".$_POST["txtCountryCode"]."' ";
	$strSQL .=",Budget = '".$_POST["txtBudget"]."' ";
	$strSQL .=",Used = '".$_POST["txtUsed"]."' ";
	$strSQL .="WHERE CustomerID = '".$_GET["CusID"]."' ";
	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{
		echo "Save completed.";
	}
	else
	{
		echo "Error Save [".$strSQL."]";
	}
	mysql_close($objConnect);
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->