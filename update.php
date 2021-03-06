<?php

require_once 'actions/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tables WHERE table_id = {$table_id}";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
        table tr th {
            padding-top: 20px;
        }
    </style>
</head>

<body>

<fieldset>
    <legend>Update Table</legend>

    <form action="actions/a_update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Reserved</th>
                <td><input type="text" name="reserved" placeholder="reserved" value="<?php echo $data['table_reserved'] ?>" /></td>
            </tr>     
            <tr>
                <th>Table</th>
                <td><input type="text" name="table" placeholder="table" value="<?php echo $data['table_name'] ?>" /></td>
            </tr>
            <tr>
                <th>Seats</th>
                <td><input type="text" name="seats" placeholder="seats" value="<?php echo $data['table_capacity'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['table_id']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>

</fieldset>

</body>
</html>

<?php
}
?>