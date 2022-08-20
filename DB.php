<?php


 $connection = new mysqli('localhost','root','','todo_list'); 
 if(!$connection){
    die('failed to connect' . $connection->connect_error);
 }

?>