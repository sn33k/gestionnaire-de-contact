<?php
function formulaire_connexion(){

// si il y eu un échec de connection
    if (isset($_SESSION['echec']) AND $_SESSION['echec']== 1){
        echo 'échec de l\'identification<br />';
    }

// affichage du formulaire de connexion       /fonctions/connection.php
    echo
	'<div id="form_login">
    <form action="/index.php" method="post">
    <p>
    <label for="login_pacom">login: </label><input type="text" name="login_pacom" id="login_pacom"/><br />
    <label for="pass_pacom">password: </label><input type="password" name="pass_pacom" id="pass_pacom"/><br />
    <input type="submit" name="connexion" value="connexion"/>
    </p>
    </form>
    </div>';
}

function connection(){
    $base = "jsipacom";
	
    if (isset($_POST['connexion'])){
	
        if (isset($_POST['login_pacom']) AND isset($_POST['pass_pacom'])){
        // connection et lecture de la table membres
            connection_DB( $base );
            $lecture_table = mysql_query("SELECT login, password FROM users WHERE `login` = '".$_POST['login_pacom']."' AND password = '".$_POST['pass_pacom']."' ");// recherche du login et du pass dans la table

            // si le login et le pass ne sont pas présent ou ne correspondent pas
            if (mysql_num_rows($lecture_table)==0){
                // on mémorise l'échec de l'identification avec $_SESSION['echec'] et on affiche le formulaire de connexion
                $_SESSION['echec']= 1;
                //on renvoi vers l'accueil
		        header('Location: /index.php');
            }
	
            // si le login et le pass sont présent et correspondent
            if (mysql_num_rows($lecture_table)==1){
                $_SESSION['connect']=1; // Change la valeur de la variable connect. C'est elle qui nous permettra de savoir si la connexion a réussie
                $_SESSION['login']=$_POST['login_pacom']; // Récupérer le login afin de personnaliser la navigation
                $_SESSION['echec']=0;
		  
                // vider POST
		  
                // enregister la connexion dans le journal
				//$login = $_POST['login_pacom'] ;
				connection_DB( $base );
				mysql_query('INSERT INTO `jsipacom`.`logconnexion` (`id`, `login`, `dateconnexion`) VALUES (NULL, \''.$_POST['login_pacom'].'\', NOW( ))');
				//include($_SERVER[DOCUMENT_ROOT]."/includes/accueil.php");
				unset($_POST['login_pacom']) ;
				unset($_POST['pass_pacom']) ;
				//on renvoi vers l'accueil
				header('Location: /index.php');
			}
			
        }
    
	}
    // on coupe la connexion au serveur BDD
    //mysql_close($connexion_serveur);
}
?>