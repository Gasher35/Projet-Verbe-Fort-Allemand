<?php
$pageTitle = "Verbes Forts Allemand";
$pageDescription = "Révisez tout vos verbes fort grâce à ce tableau interractif qui vérifie vos verbes et les corrigent !";
include('Inc/header.php');

?>
	<h2>Remplis les cases du <strong>tableau des verbes</strong> que tu veux réviser et <strong>vérifies tes réponses</strong> pour voir si tu connais tes <strong>verbes forts</strong> en <strong>Allemand</strong> sur le bout des doigts !</h2>
	<p>Avant de cliquer sur vérifiez , assurez vous de ne faire le moins de fautes possible, chaque faute apparaîtra en <em id="red">rouge</em> et chaque bonne réponse en <em id="green">vert</em>.</p>
	<p><em id="red">Attention :</em> Pensez bien à mettre une majuscule à vos verbes à l'infinitif ! </p>


	<form method="post" action="verbes.php" autocomplete="off">
		<table>

			<thead>
				<tr><!-- Titre des Colones -->
					<th>N°</th>
					<th>Indicatif</th>
					<th>Présent</th>
					<th>Prétérit</th>
					<th>Parfait</th>
					<th>Traduction</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><input type="text" name="backen_i"></td>
					<td><input type="text" name="backen_0"></td>
					<td><input type="text" name="backen_1"></td>
					<td><input type="text" name="backen_2"></td>
					<td class="translate">Faire cuire</td>
				</tr>

				<tr>
					<td>2</td>
					<td><input type="text" name="befehlen_i"></td>
					<td><input type="text" name="befehlen_0"></td>
					<td><input type="text" name="befehlen_1"></td>
					<td><input type="text" name="befehlen_2"></td>
					<td class="translate">Ordonner</td>
				</tr>

				<tr>
					<td>3</td>
					<td><input type="text" name="beginnen_i"></td>
					<td><input type="text" name="beginnen_0"></td>
					<td><input type="text" name="beginnen_1"></td>
					<td><input type="text" name="beginnen_2"></td>
					<td class="translate">Commencer</td>
				</tr>

				<tr>
					<td>4</td>
					<td><input type="text" name="bieten_i"></td>
					<td><input type="text" name="bieten_0"></td>
					<td><input type="text" name="bieten_1"></td>
					<td><input type="text" name="bieten_2"></td>
					<td class="translate">Offrir</td>
				</tr>

				<tr>
					<td>5</td>
					<td><input type="text" name="binden_i"></td>
					<td><input type="text" name="binden_0"></td>
					<td><input type="text" name="binden_1"></td>
					<td><input type="text" name="binden_2"></td>
					<td class="translate">Lier</td>
				</tr>

				<tr>
					<td>6</td>
					<td><input type="text" name="bitten_i"></td>
					<td><input type="text" name="bitten_0"></td>
					<td><input type="text" name="bitten_1"></td>
					<td><input type="text" name="bitten_2"></td>
					<td class="translate">Demander</td>
				</tr>

				<tr>
					<td>7</td>
					<td><input type="text" name="bleiben_i"></td>
					<td><input type="text" name="bleiben_0"></td>
					<td><input type="text" name="bleiben_1"></td>
					<td><input type="text" name="bleiben_2"></td>
					<td class="translate">Rester</td>
				</tr>

				<tr>
					<td>8</td>
					<td><input type="text" name="braten_i"></td>
					<td><input type="text" name="braten_0"></td>
					<td><input type="text" name="braten_1"></td>
					<td><input type="text" name="braten_2"></td>
					<td class="translate">Rôtir</td>
				</tr>

				<tr>
					<td>9</td>
					<td><input type="text" name="brechen_i"></td>
					<td><input type="text" name="brechen_0"></td>
					<td><input type="text" name="brechen_1"></td>
					<td><input type="text" name="brechen_2"></td>
					<td class="translate">Briser</td>
				</tr>

				<tr>
					<td>10</td>
					<td><input type="text" name="brennen_i"></td>
					<td><input type="text" name="brennen_0"></td>
					<td><input type="text" name="brennen_1"></td>
					<td><input type="text" name="brennen_2"></td>
					<td class="translate">Brûler</td>
				</tr>

				<tr>
					<td>11</td>
					<td><input type="text" name="empfehlen_i"></td>
					<td><input type="text" name="empfehlen_0"></td>
					<td><input type="text" name="empfehlen_1"></td>
					<td><input type="text" name="empfehlen_2"></td>
					<td class="translate">Recommencer</td>
				</tr>

				<tr>
					<td>12</td>
					<td><input type="text" name="erschrecken_i"></td>
					<td><input type="text" name="erschrecken_0"></td>
					<td><input type="text" name="erschrecken_1"></td>
					<td><input type="text" name="erschrecken_2"></td>
					<td class="translate">Avoir Peur</td>
				</tr>

				<tr>
					<td>13</td>
					<td><input type="text" name="essen_i"></td>
					<td><input type="text" name="essen_0"></td>
					<td><input type="text" name="essen_1"></td>
					<td><input type="text" name="essen_2"></td>
					<td class="translate">Manger</td>
				</tr>

				<tr>
					<td>14</td>
					<td><input type="text" name="fahren_i"></td>
					<td><input type="text" name="fahren_0"></td>
					<td><input type="text" name="fahren_1"></td>
					<td><input type="text" name="fahren_2"></td>
					<td class="translate">Aller/Conduire</td>
				</tr>

				<tr>
					<td>15</td>
					<td><input type="text" name="fallen_i"></td>
					<td><input type="text" name="fallen_0"></td>
					<td><input type="text" name="fallen_1"></td>
					<td><input type="text" name="fallen_2"></td>
					<td class="translate">Tomber</td>
				</tr>

				<tr>
					<td>16</td>
					<td><input type="text" name="fangen_i"></td>
					<td><input type="text" name="fangen_0"></td>
					<td><input type="text" name="fangen_1"></td>
					<td><input type="text" name="fangen_2"></td>
					<td class="translate">Attraper</td>
				</tr>

				<tr>
					<td>17</td>
					<td><input type="text" name="finden_i"></td>
					<td><input type="text" name="finden_0"></td>
					<td><input type="text" name="finden_1"></td>
					<td><input type="text" name="finden_2"></td>
					<td class="translate">Trouver</td>
				</tr>

				<tr>
					<td>18</td>
					<td><input type="text" name="fliegen_i"></td>
					<td><input type="text" name="fliegen_0"></td>
					<td><input type="text" name="fliegen_1"></td>
					<td><input type="text" name="fliegen_2"></td>
					<td class="translate">Voler</td>
				</tr>

				<tr>
					<td>19</td>
					<td><input type="text" name="fliehen_i"></td>
					<td><input type="text" name="fliehen_0"></td>
					<td><input type="text" name="fliehen_1"></td>
					<td><input type="text" name="fliehen_2"></td>
					<td class="translate">S'enfuir</td>
				</tr>

				<tr>
					<td>20</td>
					<td><input type="text" name="frieren_i"></td>
					<td><input type="text" name="frieren_0"></td>
					<td><input type="text" name="frieren_1"></td>
					<td><input type="text" name="frieren_2"></td>
					<td class="translate">Avoir Froid</td>
				</tr>

				<tr>
					<td>21</td>
					<td><input type="text" name="geben_i"></td>
					<td><input type="text" name="geben_0"></td>
					<td><input type="text" name="geben_1"></td>
					<td><input type="text" name="geben_2"></td>
					<td class="translate">Donner</td>
				</tr>

				<tr>
					<td>22</td>
					<td><input type="text" name="gehen_i"></td>
					<td><input type="text" name="gehen_0"></td>
					<td><input type="text" name="gehen_1"></td>
					<td><input type="text" name="gehen_2"></td>
					<td class="translate">Aller</td>
				</tr>

				<tr>
					<td>23</td>
					<td><input type="text" name="gelingen_i"></td>
					<td><input type="text" name="gelingen_0"></td>
					<td><input type="text" name="gelingen_1"></td>
					<td><input type="text" name="gelingen_2"></td>
					<td class="translate">Réussir</td>
				</tr>

				<tr>
					<td>24</td>
					<td><input type="text" name="gelten_i"></td>
					<td><input type="text" name="gelten_0"></td>
					<td><input type="text" name="gelten_1"></td>
					<td><input type="text" name="gelten_2"></td>
					<td class="translate">Valoir</td>
				</tr>

				<tr>
					<td>25</td>
					<td><input type="text" name="geniessen_i"></td>
					<td><input type="text" name="geniessen_0"></td>
					<td><input type="text" name="geniessen_1"></td>
					<td><input type="text" name="geniessen_2"></td>
					<td class="translate">Profiter de</td>
				</tr>

				<tr>
					<td>26</td>
					<td><input type="text" name="geschehen_i"></td>
					<td><input type="text" name="geschehen_0"></td>
					<td><input type="text" name="geschehen_1"></td>
					<td><input type="text" name="geschehen_2"></td>
					<td class="translate">Se Passer</td>
				</tr>

				<tr>
					<td>27</td>
					<td><input type="text" name="gewinnen_i"></td>
					<td><input type="text" name="gewinnen_0"></td>
					<td><input type="text" name="gewinnen_1"></td>
					<td><input type="text" name="gewinnen_2"></td>
					<td class="translate">Gagner</td>
				</tr>

				<tr>
					<td>28</td>
					<td><input type="text" name="greifen_i"></td>
					<td><input type="text" name="greifen_0"></td>
					<td><input type="text" name="greifen_1"></td>
					<td><input type="text" name="greifen_2"></td>
					<td class="translate">Saisir</td>
				</tr>

				<tr>
					<td>29</td>
					<td><input type="text" name="halten_i"></td>
					<td><input type="text" name="halten_0"></td>
					<td><input type="text" name="halten_1"></td>
					<td><input type="text" name="halten_2"></td>
					<td class="translate">Tenir, s'arrêter</td>
				</tr>

				<tr>
					<td>30</td>
					<td><input type="text" name="hängen_i"></td>
					<td><input type="text" name="hängen_0"></td>
					<td><input type="text" name="hängen_1"></td>
					<td><input type="text" name="hängen_2"></td>
					<td class="translate">Être accroché</td>
				</tr>

				</tbody>

				<tfoot>
				<tr>
					<td colspan="6"><input type="submit" value="Vérifier" class="bot-button"></td>
				</tr>

				</tfoot>
			</div>
		</table>
	</form>
	<div id="dev_id">
	<p>Développé par : <strong>Botty Clément</strong>, en 2nd au <em>Prytanné National</em></p>
	</div>
<?php //include('Inc/stats.php'); ?>



 </body>
 </html>
