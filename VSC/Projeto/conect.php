<?php 
require __DIR__. '/vendor/autoload.php';
use Kreait\Firebase\Factory;
$factory = (new Factory()) ->  withDatabaseUri('https://aula-408dc-default-rtdb.firebaseio.com/');
$database = $factory -> createDatabase();

?>