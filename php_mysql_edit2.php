<html>
<head>
<title>ShotDev.Com Tutorial</title>
</head>
<body>
<form action="php_mysql_edit3.php?CusID=<?=$_GET["CusID"];?>" name="frmEdit" method="post">
<?
	$objConnect = mysql_connect("localhost","root","root") or die(mysql_error());
	$objDB = mysql_select_db("mydatabase");
	$strSQL = "SELECT * FROM customer WHERE CustomerID = '".$_GET["CusID"]."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "Not found CustomerID=".$_GET["CusID"];
	}
	else
	{
	?>
	<table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">CustomerID </div></th>
		<th width="160"> <div align="center">Name </div></th>
		<th width="198"> <div align="center">Email </div></th>
		<th width="97"> <div align="center">CountryCode </div></th>
		<th width="70"> <div align="center">Budget </div></th>
		<th width="70"> <div align="center">Used </div></th>
	  </tr>
	  <tr>
		<td><div align="center"><input type="text" name="txtCustomerID" size="5" value="<?=$objResult["CustomerID"];?>"></div></td>
		<td><input type="text" name="txtName" size="20" value="<?=$objResult["Name"];?>"></td>
		<td><input type="text" name="txtEmail" size="20" value="<?=$objResult["Email"];?>"></td>
		<td><div align="center"><input type="text" name="txtCountryCode" size="2" value="<?=$objResult["CountryCode"];?>"></div></td>
		<td align="right"><input type="text" name="txtBudget" size="5" value="<?=$objResult["Budget"];?>"></td>
		<td align="right"><input type="text" name="txtUsed" size="5" value="<?=$objResult["Used"];?>"></td>
	  </tr>
	  </table>
	  <input type="submit" name="submit" value="submit">
	  <?
	  }
	  mysql_close($objConnect);
?>
</form>
</body>
</html>
<!--- This file download from www.shotdev.com -->