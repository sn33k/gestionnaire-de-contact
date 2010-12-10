<?php
//require_once($_SERVER['DOCUMENT_ROOT']."/set/set_DB.php");

//$server_DB = 'localhost';
//$user_DB = 'JSI';
//$pass_DB = 'JSI411';

function connection_DB( $base ){
    include($_SERVER['DOCUMENT_ROOT']."/set/set_DB.php");
    $server_connection_DB = mysql_connect( $server_DB, $user_DB, $pass_DB ) OR die ( 'Erreur lors de la connexion au serveur' ) ;
    mysql_select_db( $base, $server_connection_DB ) OR die ( 'Sélection de la base impossible' ) ;
}


function infos_table( $lecture_table ){  // , $affichage
// récupérer les infos concernant la table
    $nb_fields = mysql_num_fields( $lecture_table ) ;  // nombre de colonnes
    $nb_rows = mysql_num_rows( $lecture_table ) ;  // nombre de lignes
    for ( $i = 0 ; $i < $nb_fields ; $i++ ){ $field_name ["$i"]= mysql_field_name( $lecture_table, $i ) ;}
    echo "<input name=\"nb_rows\" id=\"nb_rows\" type=\"hidden\" value=\"".$nb_row."\">"; // input caché pour javascript

    // affichage des infos
    //if ($affichage == true;){

    echo '<pre>nom des colonnes<br />'.print_r ($field_name,true).'</pre>';
    echo '<br /><br />';
    //}
}

?>
