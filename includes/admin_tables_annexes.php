<?php
//require($_SERVER[DOCUMENT_ROOT]."/set/set_bdd.php") ;
//require ($_SERVER['DOCUMENT_ROOT']."/functions_MySQL.php") ;
$base = "jsipacom" ;
$lecture_table_all;
$nb_fields;
$nb_rows;
$field_name;
?>

<div id="contenu">
<form name="admin_tables_annexes" method="post" action="/index.php">
<?php
if (isset ( $_GET['table_annexe']) & !empty ( $_GET['table_annexe'])){
    $table_annexe = $_GET['table_annexe'] ;
    if($_GET['table_annexe'] == CURRENCIES){   // remplacer CURRENCIES par dev pour la concordance
        $table_annexe = dev;
    }
    if($_GET['table_annexe'] == INDUSTRIES){   // remplacer INDUSTRIES par indus pour la concordance
        $table_annexe = indus;
    }
    if($_GET['table_annexe'] == GROUPS){   // remplacer GROUPS par grp pour la concordance
        $table_annexe = grp;
    }
	
    //  vider la variable GET après l'avoir sauvegarder dans la session
    $_SESSION['table_annexe'] = $table_annexe ;
}

echo '$_SESSION[\'table_annexe\'] = '.$_SESSION['table_annexe'].'<br />';
$table = $_SESSION['table_annexe'] ;

if(!empty($_SESSION['table_annexe'])){

    connection_DB( $base ) ;
    $lecture_all = mysql_query( 'SELECT * FROM '.$table.'' ) ;
    $lecture_nom = mysql_query( 'SELECT `nom` FROM '.$table.'' ) ;
    $i= 0;
    // récupérer les infos concernant la table
    $nb_fields = mysql_num_fields( $lecture_all ) ;  // récupére le nombre de colonnes
    $nb_rows = mysql_num_rows( $lecture_all ) ;  // récupére le nombre de lignes
    for ( $i = 0 ; $i < $nb_fields ; $i++ ){ $field_name [$i]= mysql_field_name( $lecture_all, $i ) ;}  // récupére le nom des colonnes
    echo '<pre>nom des colonnes<br />'.print_r ($field_name,true).'</pre><br /><br />';

    // si on reçoit la demande de suppession
    if (isset($_POST['supr'])){
        echo $_POST['id_rows_supr'];
        $id = $_POST['id_rows_supr'];
        connection_DB( $base ) ;
        mysql_query("DELETE FROM ".$table." WHERE id = ".$id."");
        //mysql_close( $connexion_serveur ) ;
        //header('Location: /admin_tables_annexes.php');
    }

    // si on reçoit la demande d'ajout d'un contact
    if (isset($_POST['submit_tableau'])){

        // pour préparer la requete finale, faire des bouts de requétes en variable
        foreach ($field_name as $variable){ $variables_query_brut .= $variable.", ";}
        $variables_query = substr($variables_query_brut, 0, -2);

        foreach ($field_name as  $index){ $values_query_brut .= "'".$_POST[$index]."', ";}
        $values_query = substr($values_query_brut, 0, -2);

        $query = "INSERT INTO `".$table."` (".$variables_query.") VALUES (".$values_query.")";

        // écriture dans la table
        connection_DB( $base );
        mysql_query( "".$query."" );
    

        header('Location: /header.php');
        //unset($_POST);
        //$_POST=array();
    }

	// afficher la logo JSI
    echo '<div id=\logo_JSI\>
         <img alt=\logo John Stork International" src="/medias/logo_JSI.jpg" />
         </div>';
		 
    // afficher la table
    echo
	'<div id ="tableau">
	<table style="border: solid; border-width: 2px; border-color: black; border-collapse: collapse">
	<thead>
	<tr class="titre">';
    // boucles pour les colonnes
    for ( $i = 0 ; $i < $nb_fields ; $i++ ){
        echo '<th>'.$field_name[$i].'</th>' ;
    }
    echo
	'<th style="width:20px;"></th>';
    echo
	'</tr>
	</thead>' ;
    echo
	'<tbody>' ;
    // boucles pour les lignes
    while ( $row = mysql_fetch_array( $lecture_all, MYSQL_ASSOC ) ){
        echo '<tr>' ;
            for ( $i = 0 ; $i < $nb_fields ; $i++ ){
            echo '<td style="border: solid 2px black; padding:5px; text-align: center;">'.$row[$field_name[$i]].'</td>' ;
            }
        // case avec boutons modifier et supprimer
        echo '<td class="edition" style="border: solid 2px black; padding:5px; text-align: center;"><form name="test_tableau" method="post" action="/index.php?page_name=admin tables annexes&table_annexe=CURRENCIES"><input name="id_rows_supr" type="hidden" value="'.$row["id"].'" /><button name="modif"><img src="/images/edit.png" alt="edit" /></button> <button name="supr"><img src="/images/supr.png" alt="supprimer" /></button></form></td>';
        echo '</tr>' ;
    }

    // ligne suplémentaire pour rajouter une entrée

    echo '<tr class="edition">';
    for ( $i = 0 ; $i < $nb_fields ; $i++ ){
        $var_default = 'nouvelle entréee';
        echo '<td style="border: solid 3px black; padding:0px; text-align: center;"><input id="'.$field_name[$i].'" type="text" name="'.$field_name[$i].'" style="margin:0px; border:none;" /></td>' ;
    }
    echo '<td style="border: solid 2px black; padding:5px; text-align: center;"><input type="submit" name="submit_tableau" value="ajouter" /> </td>' ;
    echo '</tr>' ;
    echo '</tbody></table></div>' ;


//mysql_close( $server_connection_DB ) ;
	
}

?>
</form>
</div>

<!-- barre de menu -->
<div id="barre_menu"
  style="width: 990px; clear: both; margin: auto; border: solid;  border-width: 2px; border-color: red; background-color: grey; text-align:center;">
<form action="/index.php" method="post">
<input type="image" name="bouton_menu" value="menu_principal" src="/medias/preview.png" alt="img. retour au menu principal" title="retour au menu principal" style="witdth:48px; height:48px; margin-left:5px; margin-right:330px;">
<input type="image" name="quitter" value="Quitter" src="/medias/quitter.png" style="background:none; witdth:48px; height:48px; margin-left:330px; margin-right:5px; padding:0; border:none;">
</form>
</div>



<div style="width:90%; margin:auto; padding:5px; border:solid 2px red; text-align: left;">

<p style="width:90%; margin:auto; padding:10px; border:solid 2px red; text-align: left;">
Ajouter la date de dernière modification.<br />
Ajouter un bouton supprimer à coté de chaque ligne de la table.<br />
Insérer dans la table la possibliter d'ajouter une entrée et .<br />
</p>

<p>
<ul>
<li>On dit que "Commande" est une <b>classe</b>.<br />
</li><li>$client = new Commande("PHPDebutant");<br />
On dit alors que $client est un <b>objet</b> de type "Commande". On dit également que $client est une <b>instance</b> de la classe "Commande".

</li><li>"variable membre" et "<b>variable d'instance</b>" sont synonymes.
</li><li>"fonction membre" et "<b>méthode</b>" sont synonymes.
</li></ul>
<p>
</div>