<?php
		//Including dbconfig file.
		include 'connect1.php';
 
		$link=Connection();

		$korisniciID=$_GET['id'];
		 
					
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


				//$query=("INSERT INTO `narudzbastavke` (`artikalID`,`cijenaVP`,`kolicina`,`primjenjeniRabat`) VALUES (`".$artikalID."`,`".$cijenaVP."`,`".$kolicina."`,`".$primjenjeniRabat."`)");
			
				$result13 = mysql_query("INSERT INTO `sub_zz`(`subID`, `korisniciID`, `korisniciVer`, `brojPredmeta`, `status`, `brojAkta`, `datum`, `periodOd`, `periodDo`, 
						  `iznosDoprZap`, `iznosDoprZdr`, `iznosUkupno`, `datumNaloga`, 
						  `brojZahtjeva`, `brojNaloga`, `iznosNaloga`, `svrha`, `dostavljenIzvjestaj`, `unosPodataka`) 

				VALUES ('$_POST[subID]', '$_POST[korisniciID]', '$_POST[korisniciVer]','$_POST[brojPredmeta]','$_POST[status]','$_POST[brojAkta]','$_POST[datum]','$_POST[periodOd]', '$_POST[periodDo]',
						'$_POST[iznosDoprZap]','$_POST[iznosDoprZdr]','$_POST[iznosUkupno]','$_POST[datumNaloga]',
						'$_POST[brojZahtjeva]','$_POST[brojNaloga]', '$_POST[iznosNaloga]','$_POST[svrha]','$_POST[dostavljenIzvjestaj]','$_POST[unosPodataka]')");
			

				echo "Snimili ste podatke";
					
				mysql_query($result13,$link);
					
				mysql_close($link);
			
			
			header('location:http://192.168.104.120/tk/ver1/pregledSubvencijaZdravstvo.php');
		?>