<?

//Remoto

$host="localhost";
$user="grupoatt";
$pass="f7h6w7x9";
$db="grupoatt";

/*
//Remoto_teste
/*$host="localhost";
$user="anac";
$pass="m3l3ka";
$db="anac_grupoatta";
//Local
$host="localhost";
$user="root";
$pass="";
$db="grupo_atta";
*/

$conn = mysql_connect($host,$user,$pass);

	$st = mysql_select_db($db, $conn);
	if (!$st) {
	   echo mysql_error();
	}

?>
