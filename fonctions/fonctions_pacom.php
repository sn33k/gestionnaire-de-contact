<!-- les fonctions PACOM -->

<?php


//
// décide de la page à inclure dans l'index
function choix_page($page){

    // si une page est demandée en la spécifiant avec $page
    if (isset($page)){
	$base = "jsipacom";
    connexion_base( $serveur, $user_DB, $pass_DB, $base );

        $lecture_table = mysql_query("SELECT `adresse` FROM `includes` WHERE `page` = '".$page."'");
	    $array = mysql_fetch_array($lecture_table );
        $page_demandee = $array[adresse];
        include($_SERVER[DOCUMENT_ROOT].$page_demandee);
}


    // sinon afficher la page d'accueil
    else include($_SERVER[DOCUMENT_ROOT]."/accueil.php");
}


//
//pour enregistrer un contact dans la base de données
function rec_contact(){
    
}
?>