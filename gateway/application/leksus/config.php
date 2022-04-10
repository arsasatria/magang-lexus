
<?php
//Databse Configuration
$db_host = "localhost:3306";
$db_user = "arsa_leksus";
$db_pass = "leksusgeming-ygy";
$db_name = "lexus";

$dbs = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if( !$dbs ){
    die("Connection Error: " . mysqli_connect_error());
}

//Watermark Setting
$out["watermark"] = "Thank you for using Arsa Group ID - Gateway System API";
?>
