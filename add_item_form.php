<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>To Do List</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="header">
     <h1>Add a "To Do" Item</h1>
    </div>
    <div id="form">
     <form action="add_item.php" method="POST" id="addItemForm">
      <label>Title:</label>
      <input type="text" name="Title" maxlength="20" required/>
      <br>
      <label>Description:</label>
      <textarea name="Description" cols="10" rows="10" maxlength="50" required placeholder="Type description here"></textarea>
      <label>&nbsp</label>
      <input type="submit" value="Add Item"/>
</form>
<p><a href="index.php">View To Do List</a>
    </div> 
</body>
</html>
