<?php
//get item info
$title = $_POST['Title'];
$description = $_POST['Description'];

//validate inputs
if (empty($title) || empty($description)) {
  $error = "Invalid.  Please check all fields and try again.";
  include('error.php');
} else {
  //send to database
  require_once('database.php');
  $query = "INSERT INTO todoitems
    (Title, Description)
    VALUES
    ('$title', '$description')";
  $db->exec($query);
}
?>