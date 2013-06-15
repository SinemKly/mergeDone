<html>
<head>
<title>ShotDev.Com Tutorial</title>
</head>
<body>
<?
$objConnect = mysql_connect("localhost","root","root") or die(mysql_error());
$objDB = mysql_select_db("mydatabase");
$strSQL = "SELECT * FROM customer";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="59"> <div align="center">Budget </div></th>
    <th width="71"> <div align="center">Used </div></th>
    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?=$objResult["CustomerID"];?></div></td>
    <td><?=$objResult["Name"];?></td>
    <td><?=$objResult["Email"];?></td>
    <td><div align="center"><?=$objResult["CountryCode"];?></div></td>
    <td align="right"><?=$objResult["Budget"];?></td>
    <td align="right"><?=$objResult["Used"];?></td>
    <td align="center"><a href="php_mysql_edit2.php?CusID=<?=$objResult["CustomerID"];?>">Edit</a></td>
  </tr>
<?
}
?>
</table>
<?
mysql_close($objConnect);
echo "Hello World!!!!"
echo "Some new features\n";
echo "feature b and c ";"
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->
