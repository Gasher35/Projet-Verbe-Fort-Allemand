
<!-- Ici tous les corrections des Verbes -->
<?php 

/* Verbe Backen */
if ($_POST["backen_i"] == "Backen"){$backen_i = "Backen";} else {$backen_i = $_POST["backen_i"]; $Color["backen_i"]="red"; }
if ($_POST["backen_0"] == "backt"){$backen_0 = "backt"; $Color["backen_0"]="green";} else {$backen_0 = $_POST["backen_0"]; $Color["backen_0"]="red"; }
if ($_POST["backen_1"] == "backte"){$backen_1 = "backte"; $Color["backen_1"]="green";} else {$backen_1 = $_POST["backen_1"]; $Color["backen_1"]="red"; }
if ($_POST["backen_2"] == "hat gebacken"){$backen_2 = "hat gebacken"; $Color["backen_2"]="green";} else {$backen_2 = $_POST["backen_2"]; $Color["backen_2"]="red";   }			

/* Verbe Befehlen */
if ($_POST["befehlen_i"] == "Befehlen"){$befehlen_i = "Befehlen";} else {$befehlen_i = $_POST["befehlen_i"]; $Color["befehlen_i"]="red"; }
if ($_POST["befehlen_0"] == "befiehlt"){$befehlen_0 = "befiehlt"; $Color["befehlen_0"]="green";} else {$befehlen_0 = $_POST["befehlen_0"]; $Color["befehlen_0"]="red"; }
if ($_POST["befehlen_1"] == "befahl"){$befehlen_1 = "befahl"; $Color["befehlen_1"]="green";} else {$befehlen_1 = $_POST["befehlen_1"]; $Color["befehlen_1"]="red"; }
if ($_POST["befehlen_2"] == "hat befohlen"){$befehlen_2 = "hat befohlen"; $Color["befehlen_2"]="green";} else {$befehlen_2 = $_POST["befehlen_2"]; $Color["befehlen_2"]="red";   }	

/* Verbe Beginnen */
if ($_POST["beginnen_i"] == "Beginnen"){$beginnen_i = "Beginnen";} else {$beginnen_i = $_POST["beginnen_i"]; $Color["beginnen_i"]="red"; }
if ($_POST["beginnen_0"] == "beginnt"){$beginnen_0 = "beginnt"; $Color["beginnen_0"]="green";} else {$beginnen_0 = $_POST["beginnen_0"]; $Color["beginnen_0"]="red"; }
if ($_POST["beginnen_1"] == "begann"){$beginnen_1 = "begann"; $Color["beginnen_1"]="green";} else {$beginnen_1 = $_POST["beginnen_1"]; $Color["beginnen_1"]="red"; }
if ($_POST["beginnen_2"] == "hat begonnen"){$beginnen_2 = "hat begonnen"; $Color["beginnen_2"]="green";} else {$beginnen_2 = $_POST["beginnen_2"]; $Color["beginnen_2"]="red";   }

/* Verbe Bieten */
if ($_POST["bieten_i"] == "Bieten"){$bieten_i = "Bieten";} else {$bieten_i = $_POST["bieten_i"]; $Color["bieten_i"]="red"; }
if ($_POST["bieten_0"] == "bietet"){$bieten_0 = "bietet"; $Color["bieten_0"]="green";} else {$bieten_0 = $_POST["bieten_0"]; $Color["bieten_0"]="red";}
if ($_POST["bieten_1"] == "bot"){$bieten_1 = "bot"; $Color["bieten_1"]="green";} else {$bieten_1 = $_POST["bieten_1"]; $Color["bieten_1"]="red";}
if ($_POST["bieten_2"] == "hat geboten"){$bieten_2 = "hat geboten"; $Color["bieten_2"]="green";} else {$bieten_2 = $_POST["bieten_2"]; $Color["bieten_2"]="red";}

/* Verbe Binden */
if ($_POST["binden_i"] == "Binden"){$binden_i = "Binden";} else {$binden_i = $_POST["binden_i"]; $Color["binden_i"]="red"; }
if ($_POST["binden_0"] == "bindet"){$binden_0 = "bindet"; $Color["binden_0"]="green";} else {$binden_0 = $_POST["binden_0"]; $Color["binden_0"]="red";}
if ($_POST["binden_1"] == "band"){$binden_1 = "band"; $Color["binden_1"]="green";} else {$binden_1 = $_POST["binden_1"]; $Color["binden_1"]="red";}
if ($_POST["binden_2"] == "hat gebunden"){$binden_2 = "hat gebunden"; $Color["binden_2"]="green";} else {$binden_2 = $_POST["binden_2"]; $Color["binden_2"]="red";}

/* Verbe Bitten */
if ($_POST["bitten_i"] == "Bitten"){$bitten_i = "Binden";} else {$bitten_i = $_POST["bitten_i"]; $Color["bitten_i"]="red"; }
if ($_POST["bitten_0"] == "bittet"){$bitten_0 = "bittet"; $Color["bitten_0"]="green";} else {$bitten_0 = $_POST["bitten_0"]; $Color["bitten_0"]="red";}
if ($_POST["bitten_1"] == "bat"){$bitten_1 = "bat"; $Color["bitten_1"]="green";} else {$bitten_1 = $_POST["bitten_1"]; $Color["bitten_1"]="red";}
if ($_POST["bitten_2"] == "hat gebeten"){$bitten_2 = "hat gebeten"; $Color["bitten_2"]="green";} else {$bitten_2 = $_POST["bitten_2"]; $Color["bitten_2"]="red";}







?>
<?php
$pageTitle = "Correction des Verbes";
include('Inc/header.php');

?>
	

		<table>

			<thead>
				<tr><!-- Titre des Colones -->
					<th>Indicatif</th>
					<th>Présent</th>
					<th>Prétérit</th>
					<th>Passé composé</th>
					<th>Traduction</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td id="<?php echo $Color["backen_i"]; ?>"><?php echo $backen_i; ?></td>
					<td id="<?php echo $Color["backen_0"]; ?>"><?php echo $backen_0; ?></td>
					<td id="<?php echo $Color["backen_1"]; ?>"><?php echo $backen_1; ?></td>
					<td id="<?php echo $Color["backen_2"]; ?>"><?php echo $backen_2; ?></td>
					<td class="translate">Faire cuire</td>
				</tr>

				<tr>
					<td id="<?php echo $Color["befehlen_i"]; ?>"><?php echo $befehlen_i; ?></td>
					<td id="<?php echo $Color["befehlen_0"]; ?>"><?php echo $befehlen_0; ?></td>
					<td id="<?php echo $Color["befehlen_1"]; ?>"><?php echo $befehlen_1; ?></td>
					<td id="<?php echo $Color["befehlen_2"]; ?>"><?php echo $befehlen_2; ?></td>
					<td class="translate">Ordonner</td>
				</tr>

				<tr>
					<td id="<?php echo $Color["beginnen_i"]; ?>"><?php echo $beginnen_i; ?></td>
					<td id="<?php echo $Color["beginnen_0"]; ?>"><?php echo $beginnen_0; ?></td>
					<td id="<?php echo $Color["beginnen_1"]; ?>"><?php echo $beginnen_1; ?></td>
					<td id="<?php echo $Color["beginnen_2"]; ?>"><?php echo $beginnen_2; ?></td>
					<td class="translate">Commencer</td>
				</tr>

				<tr>
					<td id="<?php echo $Color["bieten_i"]; ?>"><?php echo $bieten_i; ?></td>
					<td id="<?php echo $Color["bieten_0"]; ?>"><?php echo $bieten_0; ?></td>
					<td id="<?php echo $Color["bieten_1"]; ?>"><?php echo $bieten_1; ?></td>
					<td id="<?php echo $Color["bieten_2"]; ?>"><?php echo $bieten_2; ?></td>
					<td class="translate">Offrir</td>
				</tr>

				<tr>
					<td id="<?php echo $Color["binden_i"]; ?>"><?php echo $binden_i; ?></td>
					<td id="<?php echo $Color["binden_0"]; ?>"><?php echo $binden_0; ?></td>
					<td id="<?php echo $Color["binden_1"]; ?>"><?php echo $binden_1; ?></td>
					<td id="<?php echo $Color["binden_2"]; ?>"><?php echo $binden_2; ?></td>
					<td class="translate">Lier</td>
				</tr>

				<tr>
					<td id="<?php echo $Color["bitten_i"]; ?>"><?php echo $bitten_i; ?></td>
					<td id="<?php echo $Color["bitten_0"]; ?>"><?php echo $bitten_0; ?></td>
					<td id="<?php echo $Color["bitten_1"]; ?>"><?php echo $bitten_1; ?></td>
					<td id="<?php echo $Color["bitten_2"]; ?>"><?php echo $bitten_2; ?></td>
					<td class="translate">Demander</td>
				</tr>
				</tbody>

				<tfoot>
				<tr>
					<form>
					<td colspan="5" class="last-td"><a href="verbesCorrection.php" class="bot-button">Voir la Correction</a></td>
					</form>
				</tr>

				</tfoot>
			</div>
		</table>
		
	</body>
</html>