<table id ="log_connexion" style="border-collapse: collapse; margin:auto;">
<thead style="background: url(/medias/gradhead.png);">
<tr>
<th style="width:300px; border-bottom: solid 2px white; padding:3px; text-align: center;">utilisateur</th>
<th style="width:500px; border-bottom: solid 2px white; padding:3px; text-align: center;">date et heure de connexion</th>
</tr>
</thead>
<?php
	$base = "jsipacom";
    connection_DB( $base );

	
if($lecture_table = mysql_query('SELECT login, DATE_FORMAT(dateconnexion, \'%d/%m/%Y - %Hh%i\') AS dateconnexion FROM logconnexion()');){
    while ( $array = mysql_fetch_array($lecture_table,true);){
?>
<tbody>
<tr>
<td style="background: url(/medias/gradback.png); border-bottom: solid 1px white; padding:3px; text-align: center; color:#66699;"><?php echo $array['login'];?></td>
<td style="background: url(/medias/gradback.png); border-bottom: solid 1px white; padding:3px; text-align: center; color:#66699;"><?php echo $array['dateconnexion'];?></td>
</tr>
</tbody>
    <?php
    }
    ?>
</table>

<div style="position: absolute; bottom:0px; width:99%; margin:auto;"><!-- boutons de navigation -->

<div style="float: left; margin-left: 7px; border: none;">
<a href="/index"><img alt="img. retour au menu principal" title="retour au menu principal" style="border: none;" src="/medias/preview.png"></a>
</div>



<div style="float: right; width:48px; height:48px; padding:0; margin-right: 0px; border: none;">
<a href="/index.php?quitter"><img alt="img. déconnexion" title="se déconnecter" style="border: none;" src="/medias/quitter.png"></a>
</div>

</div>
<?php
}
?>