 <html>

<body>
 
 <?php
		
$con = mysql_connect("localhost","root","root");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db("subvencije", $con);

	

$sql="INSERT INTO korisnicisubvencija (korisniciID, tipID, naziv, JIB, sifraDjelatnosti, sjediste, mjesto, kontaktOsoba, kontaktTelefon, direktor, 
			direktorTelefon, vlasnik, vlasnikPol, vlasnikTelefon, datumUpisaSud, brojRjesenja, datumRjesenja, brojRadnikaBrcko, brojRadnikaVanBrcko, ukupnoRadnika, 
			maxRadnika, datumPrestankaOlaksica, status, brojRjesenjaPrestanka, brojIzmjeneRjesenja, datumIzmjeneRjesenja, napomena)

	  VALUES ('$_POST[korisniciID]', '$_POST[tipID]', '$_POST[naziv]','$_POST[JIB]','$_POST[sifraDjelatnosti]','$_POST[sjediste]','$_POST[mjesto]','$_POST[kontaktOsoba]',
			'$_POST[kontaktTelefon]','$_POST[direktor]','$_POST[direktorTelefon]','$_POST[vlasnik]','$_POST[vlasnikPol]','$_POST[vlasnikTelefon]','$_POST[datumUpisaSud]',
			'$_POST[brojRjesenja]','$_POST[datumRjesenja]','$_POST[brojRadnikaBrcko]','$_POST[brojRadnikaVanBrcko]','$_POST[ukupnoRadnika]','$_POST[maxRadnika]',$_POST[datumPrestankaOlaksica]',
			'$_POST[status]','$_POST[brojRjesenjaPrestanka]','$_POST[brojIzmjeneRjesenja]','$_POST[datumIzmjeneRjesenja]','$_POST[napomena]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "Snimljeni podaci";
header("Location: http://192.168.104.120/tk/subvencije/pregled.php"); 
 

mysql_close($con)

?>

</body>

</html>

