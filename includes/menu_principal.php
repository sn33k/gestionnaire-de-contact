<!-- menu principal quand connecté -->
<div id="menu_principal" style="width:400px; height: 300px; background-color: #FFFFFF; position:absolute; top:50%; left:50%; margin-left: -200px; margin-top: -150px; border-style: solid; border-width: 4px; border-color: red; vertical-align: middle;">

<form action="/index.php" method="get" style="width:300px; height: 300px; position:relative; top:50%; left:50%;  margin-left: -150px; margin-top: -80px; padding:auto;">
<ul>
<li><a href="index.php?page_name=recherche">recherche</a></li>
<?php
    if (isset($_SESSION['login'])){
        if ($_SESSION['login'] == "drmicro" OR $_SESSION['login']=="empress"){
	    echo
		'
		<li><a href="index.php?page_name=nouveau contact">nouveau contact</a></li>
		<li><a href="index.php?page_name=tables annexes">tables annexes</a></li>
		';
		}
	}
?>
<li><a href="index.php?page_name=admin">admin</a></li>
<li><a href="index.php?page_name=journal">journal</a></li>
<li><a href="index.php?page_name=infos logiciel">infos logiciel</a></li>
<li><a href="index.php?quitter=true">quitter</a></li>
<li><input type="submit" name="quitter" value="Quitter" style="width:200px; height:25px; margin: 0 0 10px 0;" /></li>
</ul>

<input type="submit" name="page" value="Recherche" style="width:200px; height:25px; margin: 0 0 10px 0;" /><br />

<?php
    if (isset($_SESSION['login'])){
        if ($_SESSION['login'] == "drmicro" OR $_SESSION['login']=="empress"){
	    echo '<input type="submit" name="page" value="Nouveau contact" style="width:200px; height:25px; margin: 0 0 10px 0;" /><br />';
		}
	}
?>

<input type="submit" name="page" value="Journal" style="width:200px; height:25px; margin: 0 0 10px 0;" /><br />

<input type="submit" name="page" value="Infos logiciel" style="width:200px; height:25px; margin: 0 0 10px 0;" /><br />

<!-- bouton d'admin -->

<?php
    if (isset($_SESSION['login'])){
	    if ($_SESSION['login'] == "drmicro"){
	    echo '<input type="submit" name="page" value="admin" style="width:200px; height:25px; margin: 0 0 10px 0;" /><br />';
	    }
        if ($_SESSION['login'] == "drmicro" OR $_SESSION['login']=="empress"){
	    echo '<input type="submit" name="page" value="tables annexes" style="width:200px; height:25px; margin: 0 0 10px 0;" /><br />';
		}
	}
?>

<input type="submit" name="quitter" value="Quitter" style="width:200px; height:25px; margin: 0 0 10px 0;" /><br />


</form>



</div>