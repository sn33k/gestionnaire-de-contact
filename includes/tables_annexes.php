<?php
unset ($_SESSION['table_annexe']) ;
?>

<ul>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=CURRENCIES">CURRENCIES</a></li>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=EDUCATION">EDUCATION</a></li>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=FONCTIONS">FONCTIONS</a></li>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=GROUPS">GROUPS</a></li>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=INDUSTRIES">INDUSTRIES</a></li>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=COUNTRIES">COUNTRIES</a></li>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=AREAS">AREAS</a></li>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=COMPANIES">COMPANIES</a></li>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=AREAS">AREAS</a></li>
<li><a href="index.php?page_name=admin tables annexes&table_annexe=GROUP'S ELEMENTS">GROUP'S ELEMENTS</a></li>

</ul>
<div id="menu_tables_annexes" style="width:400px; height: 300px; background-color: #FFFFFF; position:absolute; top:50%; left:50%; margin-left: -200px; margin-top: -150px; border-style: solid; border-width: 4px; border-color: red; vertical-align: middle;">

<form action="/admin_tables_annexes.php" method="post" style="z-index:1; width:300px; height: 300px; padding:auto;">

    <input type="submit" name="table_annexe" value="CURRENCIES" style="width:200px; height:25px;" /><br />

    <input type="submit" name="table_annexe" value="EDUCATION" style="width:200px; height:25px;" /><br />

    <input type="submit" name="table_annexe" value="FONCTIONS" style="width:200px; height:25px;" /><br />

    <input type="submit" name="table_annexe" value="GROUPS" style="width:200px; height:25px;" /><br />

    <input type="submit" name="table_annexe" value="INDUSTRIES" style="width:200px; height:25px;" /><br />

    <input type="submit" name="table_annexe" value="COUNTRIES" style="width:200px; height:25px;" /><br />

    <input type="submit" name="table_annexe" value="AREAS" style="width:200px; height:25px;" /><br />

    <input type="submit" name="table_annexe" value="COMPANIES" style="width:200px; height:25px;" /><br />

    <input type="submit" name="table_annexe" value="GROUP'S ELEMENTS" style="width:200px; height:25px;" /><br />


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

<!-- listing tables annexes
CURRENCIES
EDUCATION
FONCTIONS
GROUPS
INDUSTRIES
COUNTRIES
AREAS
COMPANIES
GROUP'S ELEMENTS
-->
