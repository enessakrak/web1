<?php
	include('conn.php');
	//$korisniciID=$_GET['id'];
	
	
	$query=mysqli_query($conn, "SELECT * FROM sub_zz ");
	//LEFT JOIN korisnicisubvencija ON sub_zz.korisniciID=korisnicisubvencija.korisniciID where korisniciID='$korisniciID' ");
	
	$row=mysqli_fetch_array($query);
?>
 
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Subvencije - admin page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="http://192.168.104.120/tk/subvencije/home.php">Admin page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
       <li class="nav-item">
           <a class="nav-link" href="http://192.168.104.120/tk/subvencije/home.php">Home</a>
        </li>
        
		 <li class="nav-item ">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/unos.php">Unos korisnika</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/pregled.php">Pregled korisnika</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/pregledSubvencijaZdravstvo.php">Pregled subvencija zdravstvo</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="#">Subvencije struje</a>
        </li><li class="nav-item">
          <a class="nav-link" href="">Subvencije vode</a>
        </li>
		</li><li class="nav-item active">
          <a class="nav-link" href="http://192.168.104.120/tk/subvencije/unosZdravstvo.php">Unos subvencije zdravstvo</a>
        </li>
      </ul>
       <form class="form-inline mt-2 mt-md-0">
        <a class="nav-link" href="http://192.168.104.120/tk/subvencije/4-ajax-search.html?">Pretraga</a>
       
      </form>
    </div>
  </nav>
</header>

 <main role="main" class="flex-shrink-0">
  <div class="container" align="center">
   
 <br/>
  <br/>



<br/>
 <center>
  <form method="post" action="insertUnosZdravstvo.php" >
 
 <table class="table table-bordered table-striped" >   

 
		<tr> 
			<td>Subvencija ID: </td> 
			<td><input style="width:auto;" type="text"  name="subID" size="80" /></td>  
		</tr>  
		<tr> 
			<td>Korisnik ID: </td> 
			<td><input style="width:auto;" type="text"  name="korisniciID" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Korisnik verzija: </td> 
			<td><input style="width:auto;" type="text"  name="korisniciVer" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Broj predmeta: </td> 
			<td><input style="width:auto;" type="text"  name="brojPredmeta" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Status: </td> 
			<td><input style="width:auto;" type="text"  name="status" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Broj akta: </td> 
			<td><input style="width:auto;" type="text"  name="brojAkta" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Datum: </td> 
			<td><input style="width:auto;" type="date"  name="datum" size="80" /></td>  
		</tr>
		<tr> 
			<td>Period od: </td> 
			<td><input style="width:auto;" type="date"  name="periodOd" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Period do: </td> 
			<td><input style="width:auto;" type="date"  name="periodDo" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Iznos doprinosa za zaposlenje: </td> 
			<td><input style="width:auto;" type="text"  name="iznosDoprZap" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Iznos doprinosa za zdravstvo: </td> 
			<td><input style="width:auto;" type="text"  name="iznosDoprZdr" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Iznos ukupno: </td> 
			<td><input style="width:auto;" type="text"  name="iznosUkupno" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Datum naloga: </td> 
			<td><input style="width:auto;" type="date"  name="datumNaloga" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Broj zahtjeva: </td> 
			<td><input style="width:auto;" type="text"  name="brojZahtjeva" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Broj naloga: </td> 
			<td><input style="width:auto;" type="text"  name="brojNaloga" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Iznos naloga: </td> 
			<td><input style="width:auto;" type="text"  name="iznosNaloga" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Svrha: </td> 
			<td><input style="width:auto;" type="text"  name="svrha" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Dostavljen izvještaj: </td> 
			<td><input style="width:auto;" type="text"  name="dostavljenIzvjestaj" size="80" /></td>  
		</tr> 
		<tr> 
			<td>Unos podataka: </td> 
			<td><input style="width:auto;" type="text"  name="unosPodataka" size="80" /></td>  
		</tr> 
		
	 	<?php
		/*
			if(isset($_POST["submit"]))
			{
			 
			 //Including dbconfig file.
				include 'connect1.php';
			 
			 
				$link=Connection();



			$subID=$_POST["subID"];
			$brojPredmeta=$_POST["brojPredmeta"];
			$status=$_POST["status"];
			$brojAkta=$_POST["brojAkta"];
			$datum=$_POST["datum"];
			$periodOd=$_POST["periodOd"];
			$periodDo=$_POST["periodDo"];
			$iznosDoprZap=$_POST["iznosDoprZap"];
			$iznosDoprZdr=$_POST["iznosDoprZdr"];
			$iznosUkupno=$_POST["iznosUkupno"];
			$datumNaloga=$_POST["datumNaloga"];
			$brojZahtjeva=$_POST["brojZahtjeva"];
			$brojNaloga=$_POST["brojNaloga"];
			$iznosNaloga=$_POST["iznosNaloga"];
			$svrha=$_POST["svrha"];
			$dostavljenIzvjestaj=$_POST["dostavljenIzvjestaj"];
			$unosPodataka=$_POST["unosPodataka"];

			//'".mysql_insert_id()."'

				
				
			//$query=	"INSERT INTO `narudzba` ( `partnerID`,`status`,`userID`, `artikalID`,`kolicina`,`cijenaVP`,`primjenjeniRabat`,) 
			//VALUES ( '".$partnerID."', '".$status."', '".$userID."', '".$artikalID."', '".$kolicina."', '".$cijenaVP."', '".$primjenjeniRabat."')"; 

			//$result12 = mysql_query("INSERT INTO `narudzba` (`partnerID`,`status`,`userID`) VALUES ('".$partnerID."', '".$status."', '".$userID."')");
			$result12 = mysql_query("INSERT INTO `sub_zz`(`subID`, `korisniciID`, `korisniciVer`, `brojPredmeta`, `status`, `brojAkta`, `datum`, `periodOd`, `periodDo`, 
						  `iznosDoprZap`, `iznosDoprZdr`, `iznosUkupno`, `datumNaloga`, 
						  `brojZahtjeva`, `brojNaloga`, `iznosNaloga`, `svrha`, `dostavljenIzvjestaj`, `unosPodataka`) 

				VALUES ('$_POST[subID]', '$_POST[korisniciID]', '$_POST[korisniciVer]','$_POST[brojPredmeta]','$_POST[status]','$_POST[brojAkta]','$_POST[datum]','$_POST[periodOd]', '$_POST[periodDo]',
						'$_POST[iznosDoprZap]','$_POST[iznosDoprZdr]','$_POST[iznosUkupno]','$_POST[datumNaloga]',
						'$_POST[brojZahtjeva]','$_POST[brojNaloga]', '$_POST[iznosNaloga]','$_POST[svrha]','$_POST[dostavljenIzvjestaj]','$_POST[unosPodataka]')");

			//$result12 = mysql_query("INSERT INTO `narudzbastavke`(`artikalID`, `kolicina`, `cijenaVP`, `primjenjeniRabat`) SELECT `narudzbaID` FROM `narudzba` WHERE narudzbaID = '".$narudzbaID."'");
			//$result13= mysql_query("INSERT INTO narudzba (`partnerID`,`status`,`userID`)
			//SELECT * from `narudzbastavke` as stavke,   
			//FROM `narudzbastavke` INNER JOIN`narudzbastavke` ON `narudzbastavke`.`narudzbaID`= `narudzba`.`narudzbaID`");


echo "Snimili ste podatke";
	
mysql_query($result12,$link);
	
mysql_close($link);

   	
header("Location: http://192.168.104.120/tk/ver1/pregledSubvencijaZdravstvo.php"); 
 
 



}
*/
 ?> 
		
			 
	<p>
		<td align="center" colspan="3"><input type="submit" class="btn btn-primary" value="Snimi novu subvenciju" /></td> 
    </p>
	

</form>
   </table>
	
	 </center>
	<!-- <p>
		<td align="center" colspan="3"><input type="submit" class="btn btn-primary" value="Snimi novu subvenciju" /></td> 
    </p>
-->
  

  </br>
   <footer class="footer mt-auto py-3">
  <div class="container" align="center">
    <span class="text-muted">Program subvencija @ 2019</span>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>