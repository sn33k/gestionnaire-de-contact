<!-- nouveau contact -->
<div style="text-align:left;">
REF_CT<br />
De la forme AAAAMM-X<br />
AAAA année de création<br />
MM mois de création<br />
X nombre correspondant à Xième contact créé<br />
</div>
<br />

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/set/set_DB.php');
//require($_SERVER['DOCUMENT_ROOT'].'/fonctions/fonctions_pacom.php');


if (isset($_POST['enregistrer_nouveau_contact'])){
//echo "demande d'enregistrement bouton valider<br />";
//objet contact, car,industries, indus,


$CT_QUAL = $_POST['CT_QUAL'];
$CT_NOM = $_POST['CT_NOM'];
$CT_PRE = $_POST['CT_PRE'];
$CT_ADR = $_POST['CT_ADR'];
$CT_VILLE = $_POST['CT_VILLE'];
$ID_PAYS = $_POST['ID_PAYS'];
$CT_TELDOM = $_POST['CT_TELDOM'];
$CT_TELBUR = $_POST['CT_TELBUR'];
$CT_TELLD = $_POST['CT_TELLD'];
$CT_TELFAX = $_POST['CT_TELFAX'];


$query_identification='INSERT INTO contacts';
$query_informations='INSERT INTO contacts';
$query_salary_classifications='INSERT INTO ';
$query_career='INSERT INTO ';
$query_contact_recorders='INSERT INTO ';
$query_='INSERT INTO ';

connection_DB( 'jsipacom' );
mysql_query( "INSERT INTO contacts(REF_CT, CT_QUAL , CT_NOM, CT_PRE, CT_ADR,CT_VILLE) VALUES (".$REF_CT.", ".$CT_QUAL.", ".$CT_NOM.", ".$CT_PRE.", ".$CT_ADR.", ".$CT_VILLE.")" ) ;
echo "contact enregistré<br />";
}

?>
<div style="width: 990px; margin:auto;">
<form name="test_tableau" method="post" action="index.php?page_name=nouveau contact">
<!-- <form action="/includes/nouveau_contact.php" method="post"> -->

<div id="bloc_edition" style="overflow: visible;">


<!-- 3 gros blocs alignement horizontal -->
<div id="gros_1"
  style="width: 990px; margin: 0; border: none;">

<div id="identification" style="width: 340px; float: left; border: none;">
<fieldset style="text-align: right;">
<legend><strong>identification</strong></legend>
<label>quality :<input name="CT_QUAL"></label><br />
<label>first N. :<input name="CT_NOM"></label><br />
<label>name :<input name="CT_PRE"></label><br />
<label>adrress :<input name="CT_ADR"></label><br />
<label>area :</label><input name="area"><!-- ?????????? --><br />
<label>zip code :</label><input name="CT_CP"><br />
<label>town :</label><input name="CT_VILLE"><br />
<label>country :<input name="ID_PAYS"<!-- ou PAYS_LIB --></label><br /></fieldset>
</div>

<div id="informations" style="width: 340px; float: left; clear: right; border: none;">
<fieldset style="text-align: right;">
<legend><strong>informations</strong></legend>
home tel. :<input name="CT_TELDOM"><br />
work tel. :<input name="CT_TELBUR"><br />
w. dl. tel. :<input name="CT_TELLD"><br />
fax :<input name="CT_TELFAX"><br />
birthday :<input name="CT_NE"><br />
age :<input name="age"><br />
nat :<input name="LST_NAT"<!--  ou ID_PAYS --><br />
refer :<input name="REF_CT"><br /></fieldset>
</div>

<div id="salary_classifications" style="width: 300px; float: left; clear: right; border: none;">
<div id="salary" style="margin-bottom:0px; padding:0px;">
<fieldset style="margin-bottom:0px; padding:0px; text-align: right;">
<legend><strong>salary</strong></legend>
remu :<input name="CT_REMU" style="width: 80px;"> k year :<input name="k_year" style="width: 80px;"><br />
fixe :<input name="CT_FIX" style="width: 80px;"> k curr :<input name="k_curr" style="width: 80px;"><br />
</fieldset>
</div>
<div id="classifications" style="margin-top:4px; padding:0px;">
<fieldset style="margin-top:0px; text-align: right;">
<legend><strong>classifications</strong></legend>
function :<input name="classifications_function_1" style="width: 70px;"><input name="classifications_function_2" style="width: 70px;"><input name="classifications_function_3" style="width: 70px;"><br />
industry :<input name="classifications_industry_1" style="width: 70px;"><input name="classifications_industry_2" style="width: 70px;"><input name="classifications_industry_3" style="width: 70px;"><br />
educat :<input name="classifications_educat_1" style="width: 70px;"><input name="classifications_educat_2" style="width: 70px;"><input name="classifications_educat_3" style="width: 70px;"><br />
internat :<input name="classifications_internat_1" style="width: 60px;"><input name="classifications_internat_2" style="width: 60px;"><input name="classifications_internat_3" style="width: 60px;"><br />
language :<input name="classifications_language_1" style="width: 60px;"><input name="classifications_language_2" style="width: 60px;"><input name="classifications_language_3" style="width: 60px;"><br />
</fieldset>
</div>
</div>

</div>


<!-- 2 gros blocs alignement horizontal -->
<div id="gros_2 " 
  style="width: 990px; clear: both; border: solid; border: none;">

<div id="career" style="width: 490px; float: left; border: none;">
<!-- table de 5 lignes -->
<fieldset>
<legend><strong>career</strong></legend>
<table style="background-color: #D3DDFF; border: solid;  border-width: 2px; border-color: black; border-collapse: collapse">
<thead>
<tr>
<th style="border: solid;  border-width: 2px; border-color: black; text-align: center; width: 80px;">from</th>
<th style="border: solid;  border-width: 2px; border-color: black; text-align: center; width: 80px;">to</th>
<th style="border: solid;  border-width: 2px; border-color: black; text-align: center; width: 300px;">job / compagnie</th>
</tr>
</thead>
<tr><!-- ligne 1 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="from_1" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="to_1" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="jobcompagnie_1"  style="width: 300px;"></td>
</tr>
<tr><!-- ligne 2 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="from_2" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="to_2" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black; width: 300px;"><input name="jobcompagnie_2" style="width: 300px;"></td>
</tr>
<tr><!-- ligne 3 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="from_3" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="to_3" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black; width: 300px;"><input name="jobcompagnie_3" style="width: 300px;"></td>
</tr>
<tr><!-- ligne 4 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="from_4" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="to_4" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="jobcompagnie_4" style="width: 300px;"></td>
</tr>
<tr><!-- ligne 5 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="from_5" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center; width: 80px;"><input name="to_5" style="width: 80px;"></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="jobcompagnie_5" style="width: 300px;"></td>
</tr>
</table></fieldset>
</div>

<div id="contact_recorders" style="width: 490px; float: left; clear: right; border: none;">
<!-- table de 5 lignes -->
<fieldset>
<legend><strong>contact recorders</strong></legend>
<table style="border: solid;  border-width: 2px; border-color: black; border-collapse: collapse">
<thead>
<tr>
<th style="border: solid;  border-width: 2px; border-color: black; text-align: center;">date</th>
<th style="border: solid;  border-width: 2px; border-color: black; text-align: center;">type</th>
<th style="border: solid;  border-width: 2px; border-color: black; text-align: center;">result/client/project</th>
</tr>
</thead>
<tr><!-- ligne 1 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center;"><input name="date_1" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="type_1" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="result_1" value=""></td>
</tr>
<tr><!-- ligne 2 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center;"><input name="date_2" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="type_2" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="result_2" value=""></td>
</tr>
<tr><!-- ligne 3 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center;"><input name="date_3" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="type_3" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="result_3" value=""></td>
</tr>
<tr><!-- ligne 4 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center;"><input name="date_4" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="type_4" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="result_4" value=""></td>
</tr>
<tr><!-- ligne 5 -->
<td style="border: solid;  border-width: 1px; border-color: black; text-align: center;"><input name="date_5" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="type_5" value=""></td>
<td style="border: solid;  border-width: 1px; border-color: black;"><input name="result_5" value=""></td>
</tr>
</table></fieldset>
</div>

</div>


<!-- 3 petits blocs alignement horizontal -->
<div id="petit" 
  style="width: 990px; clear: both; border: none;">

<div id="JSI_NOTES" style="width: 420px; height:105px; float: left; border: solid; border: none;">
<fieldset style="height:105px; padding-bottom:2px;">
<legend style="margin-bottom:0"><strong>JSI NOTES</strong></legend>
<input type="text-area" style="width: 380px; height:90px; margin-bottom:0" name="jsi_notes" value="$jsi_notes"><br />
<br /></fieldset>
</div>
<div id="sans_nom" style="width: 220px; float: left; clear: right; border: none;">
<fieldset style="text-align: right; margin-top: 10px;">
by<input name="jsi_notes_by"><br />
for :<input name="jsi_notes_for"><br />
exam :<input name="jsi_notes_exam"><br /></fieldset>
</div>
<div id="logo_JSI" style="width: 350px; margin-top: 10px; margin-right: 0; padding: 0px; float: left; clear: right; border: none;">
<img alt="img. logo John Stork International" src="/medias/logo_JSI_petit.JPG" style="margin: 0;">
<input type="image" name="enregistrer_nouveau_contact" value="enregistrer_nouveau_contact" src="/medias/enregistrer_tous.png" style="">
<input type="image" name="bouton_menu" value="imprimer" src="/medias/imprimer.png" style="">

</div>

</div>

</div>
</form>
</div>


<!-- barre de menu -->
<div id="barre_menu"
  style="width: 990px; clear: both; margin: auto; border: solid;  border-width: 2px; border-color: red; background-color: grey; text-align:center;">
<form action="/index.php" method="post">
<input type="image" name="bouton_menu" value="menu_principal" src="/medias/preview.png" alt="img. retour au menu principal" title="retour au menu principal" style="witdth:48px; height:48px; margin-left:5px; margin-right:330px;">
</form>
<div style="display:inline; width:200px; height:48px; padding:0; margin:auto; z-index:1;">
<form action="/includes/nouveau_contact.php" method="post">
<input type="image" name="bouton_menu" value="enregistrer_nouveau_contact" src="/medias/enregistrer_tous.png" style="">
<input type="image" name="bouton_menu" value="imprimer" src="/medias/imprimer.png" style="">
</form>
</div>
<form action="/index.php" method="post">
<input type="image" name="quitter" value="Quitter" src="/medias/quitter.png" style="background:none; witdth:48px; height:48px; margin-left:330px; margin-right:5px; padding:0; border:none;">
</form>
</div>
