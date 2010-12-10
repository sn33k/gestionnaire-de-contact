<?php
require($_SERVER[DOCUMENT_ROOT]."/set/set_bdd.php");

function connexion_base($user_bdd, $pass_bdd, $base){
    $connexion_serveur = mysql_connect("localhost", $user_bdd, $pass_bdd) OR die('Erreur lors de la connexion au serveur');
    mysql_select_db("jsipacom",$connexion_serveur) OR die('Sélection de la base impossible');
}

class class_table{
    public $lecture_table;
    public $date_operation;
   
    public $nb_fields; // nombre de colonnes
    public $nb_rows; // nombre de lignes
    public $field_names = array();
   
    public $new_entree = array();
   
    function nb_fiels_rows ($lecture_table){
	//$this->lecture_table = $lecture_table;
    $this->nb_fields = mysql_num_fields($lecture_table);
	$this->nb_rows = mysql_num_rows($lecture_table);
    }
	
    function field_names ($lecture_table,$nb_fields){
        for ($i_field = 0 ; $i_field < $nb_fields ; $i_field++){
		    $this->$field_names = array($i_field => mysql_field_name($lecture_table, $i_field)) ;
        }
        
    }
   
    function write (){
    $this->$date_operation = date("d/m/Y");
    }
}
?>
<?php



$donnees_table = new class_table();
$table=dev;
connexion_base($user_bdd, $pass_bdd, $base);
$lecture_table = mysql_query("SELECT * FROM `dev`");
$donnees_table->lecture_table = mysql_query("SELECT * FROM `dev`");

$donnees_table->nb_fiels_rows ($lecture_table);
echo $nb_fields;
$donnees_table->field_names ($lecture_table,$nb_fields);
echo "nombre de colonnes : ".$nb_fields." - nombre de lignes : ".$nb_rows."<br />nom des colonnes : ";
?>


<?php
$exemple=array(
fiel_value => "valeur de la case",
field_id => "id de la case",
field_name => "nom de la case"
)
?>