<?php
$pageTitle = "Verbes Forts Allemand";
include('Inc/header.php');

?>

	<form method="post" action="verbes.php" autocomplete="off">
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
					<td><input type="text" name="backen_i"></td>
					<td><input type="text" name="backen_0"></td>
					<td><input type="text" name="backen_1"></td>
					<td><input type="text" name="backen_2"></td>
					<td class="translate">Faire cuire</td>
				</tr>

				<tr>
					<td><input type="text" name="befehlen_i"></td>
					<td><input type="text" name="befehlen_0"></td>
					<td><input type="text" name="befehlen_1"></td>
					<td><input type="text" name="befehlen_2"></td>
					<td class="translate">Ordonner</td>
				</tr>

				<tr>
					<td><input type="text" name="beginnen_i"></td>
					<td><input type="text" name="beginnen_0"></td>
					<td><input type="text" name="beginnen_1"></td>
					<td><input type="text" name="beginnen_2"></td>
					<td class="translate">Commencer</td>
				</tr>

				<tr>
					<td><input type="text" name="bieten_i"></td>
					<td><input type="text" name="bieten_0"></td>
					<td><input type="text" name="bieten_1"></td>
					<td><input type="text" name="bieten_2"></td>
					<td class="translate">Offrir</td>
				</tr>

				<tr>
					<td><input type="text" name="binden_i"></td>
					<td><input type="text" name="binden_0"></td>
					<td><input type="text" name="binden_1"></td>
					<td><input type="text" name="binden_2"></td>
					<td class="translate">Lier</td>
				</tr>

				<tr>
					<td><input type="text" name="bitten_i"></td>
					<td><input type="text" name="bitten_0"></td>
					<td><input type="text" name="bitten_1"></td>
					<td><input type="text" name="bitten_2"></td>
					<td class="translate">Demander</td>
				</tr>
				</tbody>

				<tfoot>
				<tr>
					<td colspan="5"><input type="submit" value="Vérifier" class="bot-button"></td>
				</tr>

				</tfoot>
			</div>
		</table>
	</form>
 </body>
 </html>
