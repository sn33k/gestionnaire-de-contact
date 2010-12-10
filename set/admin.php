<?php
require($_SERVER[DOCUMENT_ROOT]."/set/set_DB.php");
//connexion_serveur( $serveur, $user_DB, $pass_DB );

// lister les bases de données
function list_db(){
    require($_SERVER[DOCUMENT_ROOT]."/set/set_DB.php");
    $login_serveur_DB = mysql_connect($serveur_DB, $user_DB, $pass_DB) OR die('Erreur lors de la connexion au serveur');//connection au serveur BDD
    $resultat = mysql_list_dbs( $login_serveur_DB );
    $nb = mysql_num_rows( $resultat );
    for ($i = 0; $i < $nb ; $i++)
    echo mysql_db_name($resultat, $i)."<br />";
}

// lister les tables d'une base de données
function list_table($db){
$resultat = mysql_list_tables( $db );
$nb = mysql_num_rows( $resultat );
for ($i = 0; $i < $nb ; $i++)
echo $i.". ".mysql_tablename($resultat, $i)."<br /> ";
}

// afficher la structure d'une table
function structure_table($db,$table){
    $connexion_serveur_bdd = mysql_connect('localhost', 'root', 'root') OR die('Erreur lors de la connexion au serveur');//connection au serveur BDD
    $connexion_bdd = mysql_select_db($db,$connexion_serveur_bdd);
    $req = mysql_query("SELECT * FROM ".$table."");
	//$nb = mysql_num_rows( $req );mysql_num_fields
	$nb = mysql_num_fields( $req );
	for ($i = 0; $i < $nb ; $i++)
    echo mysql_field_name($req, $i).", ";// echo " ".mysql_field_name($req, $i++).".";
	echo "<br /";
	$columns_names = mysql_field_name($req, $i);
	echo $columns_names;
    //while ( $array = mysql_field_name($req,$i)){
    //echo $array;
    //}
}

// nombre et nom des colonnes
function nom_colonne($db,$table){

    $req = mysql_query("SELECT * FROM ".$table."");
	$nb = mysql_num_rows( $req );
	for ($i = 0; $i < $nb ; $i++)
    //$colonne[$i] = mysql_field_name($req, $i);
	echo mysql_field_name($req, $i).", "; echo " ".mysql_field_name($req, $i++)."";
}

function thead($db,$table){
    $req = mysql_query("SELECT * FROM ".$table."");
	$nb = mysql_num_rows( $req );
	for ($i = 0; $i < $nb ; $i++)
	echo "<th>".mysql_field_name($req, $i)."</th>";
	echo "<th>".mysql_field_name($req, $i++)."</th>";
}

// afficher une table
function affiche_table($db,$table){
    if (isset($db) && isset($table)){
    $connexion_serveur_bdd = mysql_connect('localhost', 'root', 'root') OR die('Erreur lors de la connexion au serveur');//connection au serveur BDD
	mysql_select_db($db,$connexion_serveur_bdd);
	$lecture_table = mysql_query("SELECT * FROM `".$table."`");
    $nb_fields = mysql_num_fields( $lecture_table );
	echo "<table style=\"border: solid;  border-width: 2px; border-color: black; border-collapse: collapse\"><thead><tr>";
    //$i= 0;
    // boucles pour les colonnes
    for ($i = 0; $i < $nb_fields ; $i++){echo "<th style=\"border: solid;  border-width: 2px; border-color: black; padding:5px;  text-align: center;\">".mysql_field_name($lecture_table, $i)."</th>";}
    //while ( $field = mysql_fetch_field($lecture_table)){echo "<th style=\"border: solid;  border-width: 2px; border-color: black; text-align: center;\">".field."</th>";}
    echo "</tr></thead>";
	// boucles pour les lignes
    echo "<tbody>";
	while ( $ligne = mysql_fetch_array($lecture_table, MYSQL_ASSOC)){
	    echo "<tr>";
        for ($i = 0; $i < $nb_fields ; $i++){echo "<td style=\"border: solid;  border-width: 2px; border-color: black; padding:5px;  text-align: center;\">".$ligne[mysql_field_name($lecture_table, $i)]."</td>";}
	    echo"</tr>";
	}
	echo "</tbody></table>";
	}
}


if (isset($_POST[list_db])){
echo "Liste des bases de données :<br />";
list_db();
}

if (isset($_POST[list_table])){
    if (isset($_POST[db])){
    $db = $_POST[db];
    echo "Liste des tables dans la base <strong>".$db."</strong><br /><br />";
    list_table($db);
    }
}


    // http://cyberzoide.developpez.com/php4/file/
if (isset($_POST[structure_table])){
    if (isset($_POST[db2]) && isset($_POST[table])){
    $db = $_POST[db2];
	$table = $_POST[table];
    echo "Structure de la table <strong>".$table."</strong>, dans la base <strong>".$db."</strong><br />";
    structure_table($db,$table);
    }
}


if (isset($_POST[contenu_table])){
    $db = $_POST[db];
	$table = $_POST[table];
    affiche_table($db,$table);
}

if (isset($_POST[contenu_site])){
    $d = dir("./");
    echo "Pointeur: ".$d->handle."<br>\n";
    echo "Chemin: ".$d->path."<br>\n";
    while($entry = $d->read()) {
    echo $entry."<br>\n";
    }
    $d->close();
}
?>

<br />
<br />
<form action="/set/admin.php" method="post">
<input type="submit" name="list_db" value="lister les bases de données"><br />
<br />
base : <input name="db" value=""> table : <input name="table" value=""><br />
<input type="submit" name="list_table" value="lister les tables"><input type="submit" name="contenu_table" value="contenu de la table"><br />
<br />
<input type="submit" name="contenu_site" value="afficher le contenu du site"><br />


</form>
<br />
<br />


<!-- barre de menu -->
<div id="barre_menu"
  style="width: 990px; clear: both; margin: auto; border: solid;  border-width: 2px; border-color: red; background-color: grey; text-align:center;">
<form action="/index.php" method="post">
<input type="image" name="bouton_menu" value="menu_principal" src="/medias/preview.png" alt="img. retour au menu principal" title="retour au menu principal" style="witdth:48px; height:48px; margin-left:5px; margin-right:330px;">

<input type="image" name="quitter" value="Quitter" src="/medias/quitter.png" style="background:none; witdth:48px; height:48px; margin-left:330px; margin-right:5px; padding:0; border:none;">
</form>
</div>
// http://cyberzoide.developpez.com/php4/file/
<div id="elfinder">
<?php
include ($_SERVER[DOCUMENT_ROOT]."/sneek/elfinder.php");
?>
</div>