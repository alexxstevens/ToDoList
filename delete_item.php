<?php 

//get ItemNums
$ItemNum = $_POST['ItemNum'];

//delete the item
require_once('database.php');
$query="DELETE FROM toDoList
        WHERE ItemNum = '$ItemNum'";
        $db->exec($query);

//display the to do list
include('index.php');
?>