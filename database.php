<?php
//$url='127.0.0.1:3306';
//$username='root';
//$password='';
//$conn=mysqli_connect($url,$username,$password,"test");
//if(!$conn){
 //die('Could not Connect My Sql:' .mysql_error());
//}
?>
<?php ld nave something like below

//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db       = substr($cleardb_url["path"],1);


$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'    => '',
    'hostname' => 'us-cdbr-east-02.cleardb.com',
    'username' => 'b4ba2e6d48fc10',
    'password' => 'bfad996f',
    'database' => 'heroku_8d5ec9c9a1aeb78',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
?>