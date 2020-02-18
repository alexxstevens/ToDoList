<?php
require_once('database.php');

//get items
$query = "SELECT * FROM toDoList
          ORDER BY ItemNum";
$toDoLists = $db->query($query);



?>


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
     <h1>Things To Do</h1>
    </div> 

    <!-- task list -->
    <div id="toDoItems">
     <table>
            <tr>
                <th>Item Number</th>
                <th>Title</th>
                <th>Description</th>
                <th></th>
            </tr>
            <?php foreach ($ItemNums as $ItemNum) : ?>
            <tr>
                <td><?php echo $toDoLists['ItemNum'];?></td>
                <td><?php echo $toDoLists['Title'];?></td>
                <td><?php echo $toDoLists['Description'];?></td>
                <td><form action="delete_item.php" method="post" id="delete_item_form">
                    <input type="hidden" name="ItemNum" value="<?php echo $toDoLists['ItemNum']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form></td>
            </tr>
            <?php endforeach; ?>
    </table>
    </div>
    <br>


    <a href="add_item_form.php">Click here to add a new item to the list.</a>
    



    <section>
        <?php foreach ($customers as $customer) : ?>
            <p><span class="bold">CustID:</span> <?php echo $customer['customerID']; ?></p>
            <p><span class="bold">Email:</span> <?php echo $customer['emailAddress']; ?></p>
            <p><span class="bold">FirstName:</span> <?php echo $customer['firstName']; ?></p>
            <p><span class="bold">LastName:</span> <?php echo $customer['lastName']; ?></p>
            <p><span class="bold">Address:</span> <?php echo $customer['line1']; ?></p>
            <p><span class="bold">City:</span> <?php echo $customer['city']; ?></p>
            <p><span class="bold">State:</span> <?php echo $customer['state']; ?></p>
            <p><span class="bold">ZipCode:</span> <?php echo $customer['zipCode']; ?></p>
            <p><span class="bold">Phone:</span> <?php echo $customer['phone']; ?></p>
            <br>
        <?php endforeach; ?>
    
</body>
</html>