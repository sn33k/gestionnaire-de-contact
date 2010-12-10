<?php

function get_page($page){
    
    if (isset($page)){

		$base = 'jsipacom';
        connection_DB( $base );
        $lecture_table = mysql_query('SELECT * FROM `includes` WHERE `page` = \''.$page.'\'');
        $array = mysql_fetch_array($lecture_table );
        $page_demandee = $array['adresse'];
	}
}
//"SELECT page, adresse FROM users WHERE `login` = '".$page."'";
//'SELECT page, adresse FROM includes WHERE page = '.$page.''
?>