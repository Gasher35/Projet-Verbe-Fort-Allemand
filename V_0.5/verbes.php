<?php
$pageTitle = "Correction des Verbes";
include('Inc/header.php');

?>

<!-- Ici tous les corrections des Verbes -->
<?php 

/* Verbe Backen */
if ($_POST["backen_i"] == "Backen"){$backen_i = "Backen";$Color["backen_i"]="green";} else {$backen_i = $_POST["backen_i"]; $Color["backen_i"]="red"; }
if ($_POST["backen_0"] == "backt"){$backen_0 = "backt"; $Color["backen_0"]="green";} else {$backen_0 = $_POST["backen_0"]; $Color["backen_0"]="red"; }
if ($_POST["backen_1"] == "backte"){$backen_1 = "backte"; $Color["backen_1"]="green";} else {$backen_1 = $_POST["backen_1"]; $Color["backen_1"]="red"; }
if ($_POST["backen_2"] == "hat gebacken"){$backen_2 = "hat gebacken"; $Color["backen_2"]="green";} else {$backen_2 = $_POST["backen_2"]; $Color["backen_2"]="red";   }			

/* Verbe Befehlen */
if ($_POST["befehlen_i"] == "Befehlen"){$befehlen_i = "Befehlen";$Color["befehlen_i"]="green";} else {$befehlen_i = $_POST["befehlen_i"]; $Color["befehlen_i"]="red"; }
if ($_POST["befehlen_0"] == "befiehlt"){$befehlen_0 = "befiehlt"; $Color["befehlen_0"]="green";} else {$befehlen_0 = $_POST["befehlen_0"]; $Color["befehlen_0"]="red"; }
if ($_POST["befehlen_1"] == "befahl"){$befehlen_1 = "befahl"; $Color["befehlen_1"]="green";} else {$befehlen_1 = $_POST["befehlen_1"]; $Color["befehlen_1"]="red"; }
if ($_POST["befehlen_2"] == "hat befohlen"){$befehlen_2 = "hat befohlen"; $Color["befehlen_2"]="green";} else {$befehlen_2 = $_POST["befehlen_2"]; $Color["befehlen_2"]="red";   }	

/* Verbe Beginnen */
if ($_POST["beginnen_i"] == "Beginnen"){$beginnen_i = "Beginnen";$Color["beginnen_i"]="green";} else {$beginnen_i = $_POST["beginnen_i"]; $Color["beginnen_i"]="red"; }
if ($_POST["beginnen_0"] == "beginnt"){$beginnen_0 = "beginnt"; $Color["beginnen_0"]="green";} else {$beginnen_0 = $_POST["beginnen_0"]; $Color["beginnen_0"]="red"; }
if ($_POST["beginnen_1"] == "begann"){$beginnen_1 = "begann"; $Color["beginnen_1"]="green";} else {$beginnen_1 = $_POST["beginnen_1"]; $Color["beginnen_1"]="red"; }
if ($_POST["beginnen_2"] == "hat begonnen"){$beginnen_2 = "hat begonnen"; $Color["beginnen_2"]="green";} else {$beginnen_2 = $_POST["beginnen_2"]; $Color["beginnen_2"]="red";   }

/* Verbe Bieten */
if ($_POST["bieten_i"] == "Bieten"){$bieten_i = "Bieten";$Color["bieten_i"]="green";} else {$bieten_i = $_POST["bieten_i"]; $Color["bieten_i"]="red"; }
if ($_POST["bieten_0"] == "bietet"){$bieten_0 = "bietet"; $Color["bieten_0"]="green";} else {$bieten_0 = $_POST["bieten_0"]; $Color["bieten_0"]="red";}
if ($_POST["bieten_1"] == "bot"){$bieten_1 = "bot"; $Color["bieten_1"]="green";} else {$bieten_1 = $_POST["bieten_1"]; $Color["bieten_1"]="red";}
if ($_POST["bieten_2"] == "hat geboten"){$bieten_2 = "hat geboten"; $Color["bieten_2"]="green";} else {$bieten_2 = $_POST["bieten_2"]; $Color["bieten_2"]="red";}

/* Verbe Binden */
if ($_POST["binden_i"] == "Binden"){$binden_i = "Binden";$Color["binden_i"]="green";} else {$binden_i = $_POST["binden_i"]; $Color["binden_i"]="red"; }
if ($_POST["binden_0"] == "bindet"){$binden_0 = "bindet"; $Color["binden_0"]="green";} else {$binden_0 = $_POST["binden_0"]; $Color["binden_0"]="red";}
if ($_POST["binden_1"] == "band"){$binden_1 = "band"; $Color["binden_1"]="green";} else {$binden_1 = $_POST["binden_1"]; $Color["binden_1"]="red";}
if ($_POST["binden_2"] == "hat gebunden"){$binden_2 = "hat gebunden"; $Color["binden_2"]="green";} else {$binden_2 = $_POST["binden_2"]; $Color["binden_2"]="red";}

/* Verbe Bitten */
if ($_POST["bitten_i"] == "Bitten"){$bitten_i = "Binden";$Color["bitten_i"]="green";} else {$bitten_i = $_POST["bitten_i"]; $Color["bitten_i"]="red"; }
if ($_POST["bitten_0"] == "bittet"){$bitten_0 = "bittet"; $Color["bitten_0"]="green";} else {$bitten_0 = $_POST["bitten_0"]; $Color["bitten_0"]="red";}
if ($_POST["bitten_1"] == "bat"){$bitten_1 = "bat"; $Color["bitten_1"]="green";} else {$bitten_1 = $_POST["bitten_1"]; $Color["bitten_1"]="red";}
if ($_POST["bitten_2"] == "hat gebeten"){$bitten_2 = "hat gebeten"; $Color["bitten_2"]="green";} else {$bitten_2 = $_POST["bitten_2"]; $Color["bitten_2"]="red";}

/* Verbe Bleiben */
if ($_POST["bleiben_i"] == "Bleiben"){$bleiben_i = "Bleiben";$Color["bleiben_i"]="green";} else {$bleiben_i = $_POST["bleiben_i"]; $Color["bleiben_i"]="red"; }
if ($_POST["bleiben_0"] == "bleibt"){$bleiben_0 = "bleibt"; $Color["bleiben_0"]="green";} else {$bleiben_0 = $_POST["bleiben_0"]; $Color["bleiben_0"]="red";}
if ($_POST["bleiben_1"] == "blieb"){$bleiben_1 = "blieb"; $Color["bleiben_1"]="green";} else {$bleiben_1 = $_POST["bleiben_1"]; $Color["bleiben_1"]="red";}
if ($_POST["bleiben_2"] == "ist geblieben"){$bleiben_2 = "ist geblieben"; $Color["bleiben_2"]="green";} else {$bleiben_2 = $_POST["bleiben_2"]; $Color["bleiben_2"]="red";}

/* Verbe Braten */
if ($_POST["braten_i"] == "Braten"){$braten_i = "Braten";$Color["braten_i"]="green";} else {$braten_i = $_POST["braten_i"]; $Color["braten_i"]="red"; }
if ($_POST["braten_0"] == "bräten"){$braten_0 = "bräten"; $Color["braten_0"]="green";} else {$braten_0 = $_POST["braten_0"]; $Color["braten_0"]="red";}
if ($_POST["braten_1"] == "briet"){$braten_1 = "briet"; $Color["braten_1"]="green";} else {$braten_1 = $_POST["braten_1"]; $Color["braten_1"]="red";}
if ($_POST["braten_2"] == "hat gebraten"){$braten_2 = "hat gebraten"; $Color["braten_2"]="green";} else {$braten_2 = $_POST["braten_2"]; $Color["braten_2"]="red";}

/* Verbe Brechen */
if ($_POST["brechen_i"] == "Brechen"){$brechen_i = "Brechen";$Color["brechen_i"]="green";} else {$brechen_i = $_POST["brechen_i"]; $Color["brechen_i"]="red"; }
if ($_POST["brechen_0"] == "bricht"){$brechen_0 = "bricht"; $Color["brechen_0"]="green";} else {$brechen_0 = $_POST["brechen_0"]; $Color["brechen_0"]="red";}
if ($_POST["brechen_1"] == "brach"){$brechen_1 = "brach"; $Color["brechen_1"]="green";} else {$brechen_1 = $_POST["brechen_1"]; $Color["brechen_1"]="red";}
if ($_POST["brechen_2"] == "hat gebrochen"){$brechen_2 = "hat gebrochen"; $Color["brechen_2"]="green";} else {$brechen_2 = $_POST["brechen_2"]; $Color["brechen_2"]="red";}

/* Verbe Brennen */
if ($_POST["brennen_i"] == "Brennen"){$brennen_i = "Brennen";$Color["brennen_i"]="green";} else {$brennen_i = $_POST["brennen_i"]; $Color["brennen_i"]="red"; }
if ($_POST["brennen_0"] == "brennt"){$brennen_0 = "brennt"; $Color["brennen_0"]="green";} else {$brennen_0 = $_POST["brennen_0"]; $Color["brennen_0"]="red";}
if ($_POST["brennen_1"] == "brannte"){$brennen_1 = "brannte"; $Color["brennen_1"]="green";} else {$brennen_1 = $_POST["brennen_1"]; $Color["brennen_1"]="red";}
if ($_POST["brennen_2"] == "hat gebrannt"){$brennen_2 = "hat gebrannt"; $Color["brennen_2"]="green";} else {$brennen_2 = $_POST["brennen_2"]; $Color["brennen_2"]="red";}

/* Verbe Empfehlen */
if ($_POST["empfehlen_i"] == "Empfehlen"){$empfehlen_i = "Empfehlen";$Color["empfehlen_i"]="green";} else {$empfehlen_i = $_POST["empfehlen_i"]; $Color["empfehlen_i"]="red"; }
if ($_POST["empfehlen_0"] == "empfiehlt"){$empfehlen_0 = "empfiehlt"; $Color["empfehlen_0"]="green";} else {$empfehlen_0 = $_POST["empfehlen_0"]; $Color["empfehlen_0"]="red";}
if ($_POST["empfehlen_1"] == "empfahl"){$empfehlen_1 = "empfahl"; $Color["empfehlen_1"]="green";} else {$empfehlen_1 = $_POST["empfehlen_1"]; $Color["empfehlen_1"]="red";}
if ($_POST["empfehlen_2"] == "hat empfohlen"){$empfehlen_2 = "hat empfohlen"; $Color["empfehlen_2"]="green";} else {$empfehlen_2 = $_POST["empfehlen_2"]; $Color["empfehlen_2"]="red";}

/* Verbe Erschrecken */
if ($_POST["erschrecken_i"] == "Erschrecken"){$erschrecken_i = "Erschrecken";$Color["erschrecken_i"]="green";} else {$erschrecken_i = $_POST["erschrecken_i"]; $Color["erschrecken_i"]="red"; }
if ($_POST["erschrecken_0"] == "erschrickt"){$erschrecken_0 = "erschrickt"; $Color["erschrecken_0"]="green";} else {$erschrecken_0 = $_POST["erschrecken_0"]; $Color["erschrecken_0"]="red";}
if ($_POST["erschrecken_1"] == "erschrak"){$erschrecken_1 = "erschrak"; $Color["erschrecken_1"]="green";} else {$erschrecken_1 = $_POST["erschrecken_1"]; $Color["erschrecken_1"]="red";}
if ($_POST["erschrecken_2"] == "ist erschrocken"){$erschrecken_2 = "ist erschrocken"; $Color["erschrecken_2"]="green";} else {$erschrecken_2 = $_POST["erschrecken_2"]; $Color["erschrecken_2"]="red";}

/* Verbe Essen */
if ($_POST["essen_i"] == "Essen"){$essen_i = "Essen";$Color["essen_i"]="green";} else {$essen_i = $_POST["essen_i"]; $Color["essen_i"]="red"; }
if ($_POST["essen_0"] == "isst"){$essen_0 = "isst"; $Color["essen_0"]="green";} else {$essen_0 = $_POST["essen_0"]; $Color["essen_0"]="red";}
if ($_POST["essen_1"] == "ass"){$essen_1 = "ass"; $Color["essen_1"]="green";} else {$essen_1 = $_POST["essen_1"]; $Color["essen_1"]="red";}
if ($_POST["essen_2"] == "hat gegessen"){$essen_2 = "hat gegessen"; $Color["essen_2"]="green";} else {$essen_2 = $_POST["essen_2"]; $Color["essen_2"]="red";}

/* Verbe Fahren */
if ($_POST["fahren_i"] == "Fahren"){$fahren_i = "Fahren";$Color["fahren_i"]="green";} else {$fahren_i = $_POST["fahren_i"]; $Color["fahren_i"]="red"; }
if ($_POST["fahren_0"] == "fährt"){$fahren_0 = "fährt"; $Color["fahren_0"]="green";} else {$fahren_0 = $_POST["fahren_0"]; $Color["fahren_0"]="red";}
if ($_POST["fahren_1"] == "fuhr"){$fahren_1 = "fuhr"; $Color["fahren_1"]="green";} else {$fahren_1 = $_POST["fahren_1"]; $Color["fahren_1"]="red";}
if ($_POST["fahren_2"] == "ist/hat gefahren"){$fahren_2 = "ist/hat gefahren"; $Color["fahren_2"]="green";} else {$fahren_2 = $_POST["fahren_2"]; $Color["fahren_2"]="red";}

/* Verbe Fallen */
if ($_POST["fallen_i"] == "Fallen"){$fallen_i = "Fallen";$Color["fallen_i"]="green";} else {$fallen_i = $_POST["fallen_i"]; $Color["fallen_i"]="red"; }
if ($_POST["fallen_0"] == "fällt"){$fallen_0 = "fällt"; $Color["fallen_0"]="green";} else {$fallen_0 = $_POST["fallen_0"]; $Color["fallen_0"]="red";}
if ($_POST["fallen_1"] == "fiel"){$fallen_1 = "fiel"; $Color["fallen_1"]="green";} else {$fallen_1 = $_POST["fallen_1"]; $Color["fallen_1"]="red";}
if ($_POST["fallen_2"] == "ist gefahlen"){$fallen_2 = "ist gefahlen"; $Color["fallen_2"]="green";} else {$fallen_2 = $_POST["fallen_2"]; $Color["fallen_2"]="red";}

/* Verbe Fangen */
if ($_POST["fangen_i"] == "Fangen"){$fangen_i = "Fangen";$Color["fangen_i"]="green";} else {$fangen_i = $_POST["fangen_i"]; $Color["fangen_i"]="red"; }
if ($_POST["fangen_0"] == "fängt"){$fangen_0 = "fängt"; $Color["fangen_0"]="green";} else {$fangen_0 = $_POST["fangen_0"]; $Color["fangen_0"]="red";}
if ($_POST["fangen_1"] == "fing"){$fangen_1 = "fing"; $Color["fangen_1"]="green";} else {$fangen_1 = $_POST["fangen_1"]; $Color["fangen_1"]="red";}
if ($_POST["fangen_2"] == "hat gefangen"){$fangen_2 = "hat gefangen"; $Color["fangen_2"]="green";} else {$fangen_2 = $_POST["fangen_2"]; $Color["fangen_2"]="red";}

/* Verbe Finden */
if ($_POST["finden_i"] == "Finden"){$finden_i = "Finden";$Color["finden_i"]="green";} else {$finden_i = $_POST["finden_i"]; $Color["finden_i"]="red"; }
if ($_POST["finden_0"] == "findet"){$finden_0 = "findet"; $Color["finden_0"]="green";} else {$finden_0 = $_POST["finden_0"]; $Color["finden_0"]="red";}
if ($_POST["finden_1"] == "fand"){$finden_1 = "fand"; $Color["finden_1"]="green";} else {$finden_1 = $_POST["finden_1"]; $Color["finden_1"]="red";}
if ($_POST["finden_2"] == "hat gefunden"){$finden_2 = "hat gefunden"; $Color["finden_2"]="green";} else {$finden_2 = $_POST["finden_2"]; $Color["finden_2"]="red";}

/* Verbe Fliegen */
if ($_POST["fliegen_i"] == "Fliegen"){$fliegen_i = "Fliegen";$Color["fliegen_i"]="green";} else {$fliegen_i = $_POST["fliegen_i"]; $Color["fliegen_i"]="red"; }
if ($_POST["fliegen_0"] == "fliegt"){$fliegen_0 = "fliegt"; $Color["fliegen_0"]="green";} else {$fliegen_0 = $_POST["fliegen_0"]; $Color["fliegen_0"]="red";}
if ($_POST["fliegen_1"] == "flog"){$fliegen_1 = "flog"; $Color["fliegen_1"]="green";} else {$fliegen_1 = $_POST["fliegen_1"]; $Color["fliegen_1"]="red";}
if ($_POST["fliegen_2"] == "hat geflogen"){$fliegen_2 = "hat geflogen"; $Color["fliegen_2"]="green";} else {$fliegen_2 = $_POST["fliegen_2"]; $Color["fliegen_2"]="red";}

/* Verbe Fliehen */
if ($_POST["fliehen_i"] == "Fliehen"){$fliehen_i = "Fliehen";$Color["fliehen_i"]="green";} else {$fliehen_i = $_POST["fliehen_i"]; $Color["fliehen_i"]="red"; }
if ($_POST["fliehen_0"] == "flieht"){$fliehen_0 = "flieht"; $Color["fliehen_0"]="green";} else {$fliehen_0 = $_POST["fliehen_0"]; $Color["fliehen_0"]="red";}
if ($_POST["fliehen_1"] == "floh"){$fliehen_1 = "floh"; $Color["fliehen_1"]="green";} else {$fliehen_1 = $_POST["fliehen_1"]; $Color["fliehen_1"]="red";}
if ($_POST["fliehen_2"] == "hat geflohen"){$fliehen_2 = "hat geflohen"; $Color["fliehen_2"]="green";} else {$fliehen_2 = $_POST["fliehen_2"]; $Color["fliehen_2"]="red";}

/* Verbe Frieren */
if ($_POST["frieren_i"] == "Frieren"){$frieren_i = "Frieren";$Color["frieren_i"]="green";} else {$frieren_i = $_POST["frieren_i"]; $Color["frieren_i"]="red"; }
if ($_POST["frieren_0"] == "friert"){$frieren_0 = "friert"; $Color["frieren_0"]="green";} else {$frieren_0 = $_POST["frieren_0"]; $Color["frieren_0"]="red";}
if ($_POST["frieren_1"] == "fror"){$frieren_1 = "fror"; $Color["frieren_1"]="green";} else {$frieren_1 = $_POST["frieren_1"]; $Color["frieren_1"]="red";}
if ($_POST["frieren_2"] == "hat gefroren"){$frieren_2 = "hat gefroren"; $Color["frieren_2"]="green";} else {$frieren_2 = $_POST["frieren_2"]; $Color["frieren_2"]="red";}

/* Verbe Geben */
if ($_POST["geben_i"] == "Geben"){$geben_i = "Geben";$Color["geben_i"]="green";} else {$geben_i = $_POST["geben_i"]; $Color["geben_i"]="red"; }
if ($_POST["geben_0"] == "gibt"){$geben_0 = "gibt"; $Color["geben_0"]="green";} else {$geben_0 = $_POST["geben_0"]; $Color["geben_0"]="red";}
if ($_POST["geben_1"] == "gab"){$geben_1 = "gab"; $Color["geben_1"]="green";} else {$geben_1 = $_POST["geben_1"]; $Color["geben_1"]="red";}
if ($_POST["geben_2"] == "hat gegeben"){$geben_2 = "hat gegeben"; $Color["geben_2"]="green";} else {$geben_2 = $_POST["geben_2"]; $Color["geben_2"]="red";}

/* Verbe Gehen */
if ($_POST["gehen_i"] == "Gehen"){$gehen_i = "Gehen";$Color["gehen_i"]="green";} else {$gehen_i = $_POST["gehen_i"]; $Color["gehen_i"]="red"; }
if ($_POST["gehen_0"] == "geht"){$gehen_0 = "geht"; $Color["gehen_0"]="green";} else {$gehen_0 = $_POST["gehen_0"]; $Color["gehen_0"]="red";}
if ($_POST["gehen_1"] == "ging"){$gehen_1 = "ging"; $Color["gehen_1"]="green";} else {$gehen_1 = $_POST["gehen_1"]; $Color["gehen_1"]="red";}
if ($_POST["gehen_2"] == "ist gegangen"){$gehen_2 = "ist gegangen"; $Color["gehen_2"]="green";} else {$gehen_2 = $_POST["gehen_2"]; $Color["gehen_2"]="red";}

/* Verbe Gelingen */
if ($_POST["gelingen_i"] == "Gelingen"){$gelingen_i = "Gelingen";$Color["gelingen_i"]="green";} else {$gelingen_i = $_POST["gelingen_i"]; $Color["gelingen_i"]="red"; }
if ($_POST["gelingen_0"] == "gelingt"){$gelingen_0 = "gelingt"; $Color["gelingen_0"]="green";} else {$gelingen_0 = $_POST["gelingen_0"]; $Color["gelingen_0"]="red";}
if ($_POST["gelingen_1"] == "gelang"){$gelingen_1 = "gelang"; $Color["gelingen_1"]="green";} else {$gelingen_1 = $_POST["gelingen_1"]; $Color["gelingen_1"]="red";}
if ($_POST["gelingen_2"] == "ist gelungen"){$gelingen_2 = "ist gelungen"; $Color["gelingen_2"]="green";} else {$gelingen_2 = $_POST["gelingen_2"]; $Color["gelingen_2"]="red";}

/* Verbe Gelten */
if ($_POST["gelten_i"] == "Gelten"){$gelten_i = "Gelten";$Color["gelten_i"]="green";} else {$gelten_i = $_POST["gelten_i"]; $Color["gelten_i"]="red"; }
if ($_POST["gelten_0"] == "gilt"){$gelten_0 = "gilt"; $Color["gelten_0"]="green";} else {$gelten_0 = $_POST["gelten_0"]; $Color["gelten_0"]="red";}
if ($_POST["gelten_1"] == "galt"){$gelten_1 = "galt"; $Color["gelten_1"]="green";} else {$gelten_1 = $_POST["gelten_1"]; $Color["gelten_1"]="red";}
if ($_POST["gelten_2"] == "hat gegolten"){$gelten_2 = "hat gegolten"; $Color["gelten_2"]="green";} else {$gelten_2 = $_POST["gelten_2"]; $Color["gelten_2"]="red";}


/********************Attention : Version simplifié du correcteur ! ***********************/

/* Verbe Geniessen */
if ($_POST["geniessen_i"] == "Geniessen"){$Color["geniessen_i"]="green";} else { $Color["geniessen_i"]="red"; }
if ($_POST["geniessen_0"] == "geniesst"){ $Color["geniessen_0"]="green";} else { $Color["geniessen_0"]="red";}
if ($_POST["geniessen_1"] == "genoss"){ $Color["geniessen_1"]="green";} else { $Color["geniessen_1"]="red";}
if ($_POST["geniessen_2"] == "hat genossen"){ $Color["geniessen_2"]="green";} else { $Color["geniessen_2"]="red";}

/* Verbe Geschehen */
if ($_POST["geschehen_i"] == "Geschehen"){$Color["geschehen_i"]="green";} else { $Color["geschehen_i"]="red"; }
if ($_POST["geschehen_0"] == "geschiet"){ $Color["geschehen_0"]="green";} else { $Color["geschehen_0"]="red";}
if ($_POST["geschehen_1"] == "geschah"){ $Color["geschehen_1"]="green";} else { $Color["geschehen_1"]="red";}
if ($_POST["geschehen_2"] == "ist geschehen"){ $Color["geschehen_2"]="green";} else { $Color["geschehen_2"]="red";}

/* Verbe Gewinnen */
if ($_POST["gewinnen_i"] == "Gewinnen"){$Color["gewinnen_i"]="green";} else { $Color["gewinnen_i"]="red"; }
if ($_POST["gewinnen_0"] == "gewinnt"){ $Color["gewinnen_0"]="green";} else { $Color["gewinnen_0"]="red";}
if ($_POST["gewinnen_1"] == "gewann"){ $Color["gewinnen_1"]="green";} else { $Color["gewinnen_1"]="red";}
if ($_POST["gewinnen_2"] == "hat gewonnen"){ $Color["gewinnen_2"]="green";} else { $Color["gewinnen_2"]="red";}

/* Verbe Greifen */
if ($_POST["greifen_i"] == "Greifen"){$Color["greifen_i"]="green";} else { $Color["greifen_i"]="red"; }
if ($_POST["greifen_0"] == "greift"){ $Color["greifen_0"]="green";} else { $Color["greifen_0"]="red";}
if ($_POST["greifen_1"] == "griff"){ $Color["greifen_1"]="green";} else { $Color["greifen_1"]="red";}
if ($_POST["greifen_2"] == "hat gegriffen"){ $Color["greifen_2"]="green";} else { $Color["greifen_2"]="red";}

/* Verbe Halten */
if ($_POST["halten_i"] == "Halten"){$Color["halten_i"]="green";} else { $Color["halten_i"]="red"; }
if ($_POST["halten_0"] == "hält"){ $Color["halten_0"]="green";} else { $Color["halten_0"]="red";}
if ($_POST["halten_1"] == "hielt"){ $Color["halten_1"]="green";} else { $Color["halten_1"]="red";}
if ($_POST["halten_2"] == "hat gehalten"){ $Color["halten_2"]="green";} else { $Color["halten_2"]="red";}

/* Verbe Hängen */
if ($_POST["hängen_i"] == "Hängen"){$Color["hängen_i"]="green";} else { $Color["hängen_i"]="red"; }
if ($_POST["hängen_0"] == "hängt"){  $Color["hängen_0"]="green";} else { $Color["hängen_0"]="red";}
if ($_POST["hängen_1"] == "hing"){ $Color["hängen_1"]="green";} else { $Color["hängen_1"]="red";}
if ($_POST["hängen_2"] == "hat gehangen"){ $Color["hängen_2"]="green";} else { $Color["hängen_2"]="red";}
?>

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
					<td id="<?php echo $Color["backen_i"]; ?>"><?php echo $backen_i; ?></td>
					<td id="<?php echo $Color["backen_0"]; ?>"><?php echo $backen_0; ?></td>
					<td id="<?php echo $Color["backen_1"]; ?>"><?php echo $backen_1; ?></td>
					<td id="<?php echo $Color["backen_2"]; ?>"><?php echo $backen_2; ?></td>
					<td class="translate">Faire cuire</td>
				</tr>

				<tr>
					<td>2</td>
					<td id="<?php echo $Color["befehlen_i"]; ?>"><?php echo $befehlen_i; ?></td>
					<td id="<?php echo $Color["befehlen_0"]; ?>"><?php echo $befehlen_0; ?></td>
					<td id="<?php echo $Color["befehlen_1"]; ?>"><?php echo $befehlen_1; ?></td>
					<td id="<?php echo $Color["befehlen_2"]; ?>"><?php echo $befehlen_2; ?></td>
					<td class="translate">Ordonner</td>
				</tr>

				<tr>
					<td>3</td>
					<td id="<?php echo $Color["beginnen_i"]; ?>"><?php echo $beginnen_i; ?></td>
					<td id="<?php echo $Color["beginnen_0"]; ?>"><?php echo $beginnen_0; ?></td>
					<td id="<?php echo $Color["beginnen_1"]; ?>"><?php echo $beginnen_1; ?></td>
					<td id="<?php echo $Color["beginnen_2"]; ?>"><?php echo $beginnen_2; ?></td>
					<td class="translate">Commencer</td>
				</tr>

				<tr>
					<td>4</td>
					<td id="<?php echo $Color["bieten_i"]; ?>"><?php echo $bieten_i; ?></td>
					<td id="<?php echo $Color["bieten_0"]; ?>"><?php echo $bieten_0; ?></td>
					<td id="<?php echo $Color["bieten_1"]; ?>"><?php echo $bieten_1; ?></td>
					<td id="<?php echo $Color["bieten_2"]; ?>"><?php echo $bieten_2; ?></td>
					<td class="translate">Offrir</td>
				</tr>

				<tr>
					<td>5</td>
					<td id="<?php echo $Color["binden_i"]; ?>"><?php echo $binden_i; ?></td>
					<td id="<?php echo $Color["binden_0"]; ?>"><?php echo $binden_0; ?></td>
					<td id="<?php echo $Color["binden_1"]; ?>"><?php echo $binden_1; ?></td>
					<td id="<?php echo $Color["binden_2"]; ?>"><?php echo $binden_2; ?></td>
					<td class="translate">Lier</td>
				</tr>

				<tr>
					<td>6</td>
					<td id="<?php echo $Color["bitten_i"]; ?>"><?php echo $bitten_i; ?></td>
					<td id="<?php echo $Color["bitten_0"]; ?>"><?php echo $bitten_0; ?></td>
					<td id="<?php echo $Color["bitten_1"]; ?>"><?php echo $bitten_1; ?></td>
					<td id="<?php echo $Color["bitten_2"]; ?>"><?php echo $bitten_2; ?></td>
					<td class="translate">Demander</td>
				</tr>

				<tr>
					<td>7</td>
					<td id="<?php echo $Color["bleiben_i"]; ?>"><?php echo $bleiben_i; ?></td>
					<td id="<?php echo $Color["bleiben_0"]; ?>"><?php echo $bleiben_0; ?></td>
					<td id="<?php echo $Color["bleiben_1"]; ?>"><?php echo $bleiben_1; ?></td>
					<td id="<?php echo $Color["bleiben_2"]; ?>"><?php echo $bleiben_2; ?></td>
					<td class="translate">Rester</td>
				</tr>

				<tr>
					<td>8</td>
					<td id="<?php echo $Color["braten_i"]; ?>"><?php echo $braten_i; ?></td>
					<td id="<?php echo $Color["braten_0"]; ?>"><?php echo $braten_0; ?></td>
					<td id="<?php echo $Color["braten_1"]; ?>"><?php echo $braten_1; ?></td>
					<td id="<?php echo $Color["braten_2"]; ?>"><?php echo $braten_2; ?></td>
					<td class="translate">Rôtir</td>
				</tr>

				<tr>
					<td>9</td>
					<td id="<?php echo $Color["brechen_i"]; ?>"><?php echo $brechen_i; ?></td>
					<td id="<?php echo $Color["brechen_0"]; ?>"><?php echo $brechen_0; ?></td>
					<td id="<?php echo $Color["brechen_1"]; ?>"><?php echo $brechen_1; ?></td>
					<td id="<?php echo $Color["brechen_2"]; ?>"><?php echo $brechen_2; ?></td>
					<td class="translate">Briser</td>
				</tr>

				<tr>
					<td>10</td>
					<td id="<?php echo $Color["brennen_i"]; ?>"><?php echo $brennen_i; ?></td>
					<td id="<?php echo $Color["brennen_0"]; ?>"><?php echo $brennen_0; ?></td>
					<td id="<?php echo $Color["brennen_1"]; ?>"><?php echo $brennen_1; ?></td>
					<td id="<?php echo $Color["brennen_2"]; ?>"><?php echo $brennen_2; ?></td>
					<td class="translate">Brûler</td>
				</tr>

				<tr>
					<td>11</td>
					<td id="<?php echo $Color["empfehlen_i"]; ?>"><?php echo $empfehlen_i; ?></td>
					<td id="<?php echo $Color["empfehlen_0"]; ?>"><?php echo $empfehlen_0; ?></td>
					<td id="<?php echo $Color["empfehlen_1"]; ?>"><?php echo $empfehlen_1; ?></td>
					<td id="<?php echo $Color["empfehlen_2"]; ?>"><?php echo $empfehlen_2; ?></td>
					<td class="translate">Recommander</td>
				</tr>
				<tr>
					<td>12</td>
					<td id="<?php echo $Color["erschrecken_i"]; ?>"><?php echo $erschrecken_i; ?></td>
					<td id="<?php echo $Color["erschrecken_0"]; ?>"><?php echo $erschrecken_0; ?></td>
					<td id="<?php echo $Color["erschrecken_1"]; ?>"><?php echo $erschrecken_1; ?></td>
					<td id="<?php echo $Color["erschrecken_2"]; ?>"><?php echo $erschrecken_2; ?></td>
					<td class="translate">Avoir Peur</td>
				</tr>

				<tr>
					<td>13</td>
					<td id="<?php echo $Color["essen_i"]; ?>"><?php echo $essen_i; ?></td>
					<td id="<?php echo $Color["essen_0"]; ?>"><?php echo $essen_0; ?></td>
					<td id="<?php echo $Color["essen_1"]; ?>"><?php echo $essen_1; ?></td>
					<td id="<?php echo $Color["essen_2"]; ?>"><?php echo $essen_2; ?></td>
					<td class="translate">Manger</td>
				</tr>

				<tr>
					<td>14</td>
					<td id="<?php echo $Color["fahren_i"]; ?>"><?php echo $fahren_i; ?></td>
					<td id="<?php echo $Color["fahren_0"]; ?>"><?php echo $fahren_0; ?></td>
					<td id="<?php echo $Color["fahren_1"]; ?>"><?php echo $fahren_1; ?></td>
					<td id="<?php echo $Color["fahren_2"]; ?>"><?php echo $fahren_2; ?></td>
					<td class="translate">Aller/Conduire</td>
				</tr>

				<tr>
					<td>15</td>
					<td id="<?php echo $Color["fallen_i"]; ?>"><?php echo $fallen_i; ?></td>
					<td id="<?php echo $Color["fallen_0"]; ?>"><?php echo $fallen_0; ?></td>
					<td id="<?php echo $Color["fallen_1"]; ?>"><?php echo $fallen_1; ?></td>
					<td id="<?php echo $Color["fallen_2"]; ?>"><?php echo $fallen_2; ?></td>
					<td class="translate">Tomber</td>
				</tr>

				<tr>
					<td>16</td>
					<td id="<?php echo $Color["fangen_i"]; ?>"><?php echo $fangen_i; ?></td>
					<td id="<?php echo $Color["fangen_0"]; ?>"><?php echo $fangen_0; ?></td>
					<td id="<?php echo $Color["fangen_1"]; ?>"><?php echo $fangen_1; ?></td>
					<td id="<?php echo $Color["fangen_2"]; ?>"><?php echo $fangen_2; ?></td>
					<td class="translate">Attraper</td>
				</tr>

				<tr>
					<td>17</td>
					<td id="<?php echo $Color["finden_i"]; ?>"><?php echo $finden_i; ?></td>
					<td id="<?php echo $Color["finden_0"]; ?>"><?php echo $finden_0; ?></td>
					<td id="<?php echo $Color["finden_1"]; ?>"><?php echo $finden_1; ?></td>
					<td id="<?php echo $Color["finden_2"]; ?>"><?php echo $finden_2; ?></td>
					<td class="translate">Trouver</td>
				</tr>

				<tr>
					<td>18</td>
					<td id="<?php echo $Color["fliegen_i"]; ?>"><?php echo $fliegen_i; ?></td>
					<td id="<?php echo $Color["fliegen_0"]; ?>"><?php echo $fliegen_0; ?></td>
					<td id="<?php echo $Color["fliegen_1"]; ?>"><?php echo $fliegen_1; ?></td>
					<td id="<?php echo $Color["fliegen_2"]; ?>"><?php echo $fliegen_2; ?></td>
					<td class="translate">Voler</td>
				</tr>

				<tr>
					<td>19</td>
					<td id="<?php echo $Color["fliehen_i"]; ?>"><?php echo $fliehen_i; ?></td>
					<td id="<?php echo $Color["fliehen_0"]; ?>"><?php echo $fliehen_0; ?></td>
					<td id="<?php echo $Color["fliehen_1"]; ?>"><?php echo $fliehen_1; ?></td>
					<td id="<?php echo $Color["fliehen_2"]; ?>"><?php echo $fliehen_2; ?></td>
					<td class="translate">S'enfuir</td>
				</tr>

				<tr>
					<td>20</td>
					<td id="<?php echo $Color["frieren_i"]; ?>"><?php echo $frieren_i; ?></td>
					<td id="<?php echo $Color["frieren_0"]; ?>"><?php echo $frieren_0; ?></td>
					<td id="<?php echo $Color["frieren_1"]; ?>"><?php echo $frieren_1; ?></td>
					<td id="<?php echo $Color["frieren_2"]; ?>"><?php echo $frieren_2; ?></td>
					<td class="translate">Avoir Froid</td>
				</tr>

				<tr>
					<td>21</td>
					<td id="<?php echo $Color["geben_i"]; ?>"><?php echo $geben_i; ?></td>
					<td id="<?php echo $Color["geben_0"]; ?>"><?php echo $geben_0; ?></td>
					<td id="<?php echo $Color["geben_1"]; ?>"><?php echo $geben_1; ?></td>
					<td id="<?php echo $Color["geben_2"]; ?>"><?php echo $geben_2; ?></td>
					<td class="translate">Donner</td>
				</tr>

				<tr>
					<td>22</td>
					<td id="<?php echo $Color["gehen_i"]; ?>"><?php echo $gehen_i; ?></td>
					<td id="<?php echo $Color["gehen_0"]; ?>"><?php echo $gehen_0; ?></td>
					<td id="<?php echo $Color["gehen_1"]; ?>"><?php echo $gehen_1; ?></td>
					<td id="<?php echo $Color["gehen_2"]; ?>"><?php echo $gehen_2; ?></td>
					<td class="translate">Aller</td>
				</tr>

				<tr>
					<td>23</td>
					<td id="<?php echo $Color["gelingen_i"]; ?>"><?php echo $gelingen_i; ?></td>
					<td id="<?php echo $Color["gelingen_0"]; ?>"><?php echo $gelingen_0; ?></td>
					<td id="<?php echo $Color["gelingen_1"]; ?>"><?php echo $gelingen_1; ?></td>
					<td id="<?php echo $Color["gelingen_2"]; ?>"><?php echo $gelingen_2; ?></td>
					<td class="translate">Réussir</td>
				</tr>

				<tr>
					<td>24</td>
					<td id="<?php echo $Color["gelten_i"]; ?>"><?php echo $gelten_i; ?></td>
					<td id="<?php echo $Color["gelten_0"]; ?>"><?php echo $gelten_0; ?></td>
					<td id="<?php echo $Color["gelten_1"]; ?>"><?php echo $gelten_1; ?></td>
					<td id="<?php echo $Color["gelten_2"]; ?>"><?php echo $gelten_2; ?></td>
					<td class="translate">Valoir</td>
				</tr>

				<tr>
					<td>25</td>
					<td id="<?php echo $Color["geniessen_i"]; ?>"><?php echo $_POST["geniessen_i"]; ?></td>
					<td id="<?php echo $Color["geniessen_0"]; ?>"><?php echo $_POST["geniessen_0"]; ?></td>
					<td id="<?php echo $Color["geniessen_1"]; ?>"><?php echo $_POST["geniessen_1"]; ?></td>
					<td id="<?php echo $Color["geniessen_2"]; ?>"><?php echo $_POST["geniessen_2"]; ?></td>
					<td class="translate">Profiter de</td>
				</tr>

				<tr>
					<td>26</td>
					<td id="<?php echo $Color["geschehen_i"]; ?>"><?php echo $_POST["geschehen_i"]; ?></td>
					<td id="<?php echo $Color["geschehen_0"]; ?>"><?php echo $_POST["geschehen_0"]; ?></td>
					<td id="<?php echo $Color["geschehen_1"]; ?>"><?php echo $_POST["geschehen_1"]; ?></td>
					<td id="<?php echo $Color["geschehen_2"]; ?>"><?php echo $_POST["geschehen_2"]; ?></td>
					<td class="translate">Se passer</td>
				</tr>

				<tr>
					<td>27</td>
					<td id="<?php echo $Color["gewinnen_i"]; ?>"><?php echo $_POST["gewinnen_i"]; ?></td>
					<td id="<?php echo $Color["gewinnen_0"]; ?>"><?php echo $_POST["gewinnen_0"]; ?></td>
					<td id="<?php echo $Color["gewinnen_1"]; ?>"><?php echo $_POST["gewinnen_1"]; ?></td>
					<td id="<?php echo $Color["gewinnen_2"]; ?>"><?php echo $_POST["gewinnen_2"]; ?></td>
					<td class="translate">Gagner</td>
				</tr>

				<tr>
					<td>28</td>
					<td id="<?php echo $Color["greifen_i"]; ?>"><?php echo $_POST["greifen_i"]; ?></td>
					<td id="<?php echo $Color["greifen_0"]; ?>"><?php echo $_POST["greifen_0"]; ?></td>
					<td id="<?php echo $Color["greifen_1"]; ?>"><?php echo $_POST["greifen_1"]; ?></td>
					<td id="<?php echo $Color["greifen_2"]; ?>"><?php echo $_POST["greifen_2"]; ?></td>
					<td class="translate">Saisir</td>
				</tr>

				<tr>
					<td>29</td>
					<td id="<?php echo $Color["halten_i"]; ?>"><?php echo $_POST["halten_i"]; ?></td>
					<td id="<?php echo $Color["halten_0"]; ?>"><?php echo $_POST["halten_0"]; ?></td>
					<td id="<?php echo $Color["halten_1"]; ?>"><?php echo $_POST["halten_1"]; ?></td>
					<td id="<?php echo $Color["halten_2"]; ?>"><?php echo $_POST["halten_2"]; ?></td>
					<td class="translate">Tenir, s'arrêter</td>
				</tr>

				<tr>
					<td>30</td>
					<td id="<?php echo $Color["hängen_i"]; ?>"><?php echo $_POST["hängen_i"]; ?></td>
					<td id="<?php echo $Color["hängen_0"]; ?>"><?php echo $_POST["hängen_0"]; ?></td>
					<td id="<?php echo $Color["hängen_1"]; ?>"><?php echo $_POST["hängen_1"]; ?></td>
					<td id="<?php echo $Color["hängen_2"]; ?>"><?php echo $_POST["hängen_2"]; ?></td>
					<td class="translate">Être accroché</td>
				</tr>


			</tbody>

			<tfoot>
				<tr>
					<td colspan="6" class="last-td"><a href="verbesCorrection.php" class="bot-button">Voir la Correction</a></td>
				</tr>
			</tfoot>
		</table>
		
		
	</body>
</html>