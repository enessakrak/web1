 <html>

<body>
 
 <?php
		
$con = mysql_connect("localhost","root","root");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db("subvencije", $con);

	

$sql="INSERT INTO `sub_zz`(`subID`, `korisniciID`, `korisniciVer`, `brojPredmeta`, `status`, `brojAkta`, `datum`, `periodOd`, `periodDo`, 
						  `iznosDoprZap`, `iznosDoprZdr`, `iznosUkupno`, `datumNaloga`, 
						  `brojZahtjeva`, `brojNaloga`, `iznosNaloga`, `svrha`, `dostavljenIzvjestaj`, `unosPodataka`) 

				VALUES ('$_POST[subID]', '$_POST[korisniciID]', '$_POST[korisniciVer]','$_POST[brojPredmeta]','$_POST[status]','$_POST[brojAkta]','$_POST[datum]','$_POST[periodOd]', '$_POST[periodDo]',
						'$_POST[iznosDoprZap]','$_POST[iznosDoprZdr]','$_POST[iznosUkupno]','$_POST[datumNaloga]',
						'$_POST[brojZahtjeva]','$_POST[brojNaloga]', '$_POST[iznosNaloga]','$_POST[svrha]','$_POST[dostavljenIzvjestaj]','$_POST[unosPodataka]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "Snimljeni podaci";
header("Location: http://192.168.104.120/tk/subvencije/pregledSubvencijaZdravstvo.php"); 
 

mysql_close($con)

?>

</body>

</html>

