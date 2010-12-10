<div style="text-align:center;">
<?php
// si on arrive sur cette page et qu'un user est déjà connecté, afficher le menu principal
if (isset($_SESSION['connect']) AND $_SESSION['connect']== 1){
    echo '<div id=\logo_JSI\>
         <img alt=\logo John Stork International" src="/medias/logo_JSI.jpg" />
         </div>';
    include($_SERVER['DOCUMENT_ROOT']."/includes/menu_principal.php");
}

//sinon afficher la page d'acceuil avec le formulaire de connection
else{

    echo '<div id=\logo_JSI\>
         <img alt=\logo John Stork International" src="/medias/logo_JSI.jpg" />
         </div>';
    formulaire_connexion();
    echo '<a href="http://drmicro34.free.fr/drmicro/"><div id="DR_Micro_34" style="position: absolute; bottom: 0px; left: 0px; border-style: solid; border-left: none; border-bottom: none; border-width: 4px; border-color: black;">
          <span style="font-size: 18pt; font-family: &quot; color: maroon;">Dr Micro 34</span>
          </div></a>';
}
?>
</div>