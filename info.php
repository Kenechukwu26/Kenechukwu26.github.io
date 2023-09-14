<?php
require "connect.php";
$dsn = "mysql:host=localhost;dbName=folidatabase";
$pdo = new PDO($dsn, $username, $hostpassword);
?>

<html>
    <table>
        <tr>
            <th>&nbsp;</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        <?php
        $fetch = $pdo->query("SELECT * FROM foliotable");
        if($fetch->rowCount() > 0){
            while($row = $fetch ->fetch(PDO::FETCH_ASSOC)){
        ?>
         <tr>
            <td><?php echo $row['folio_id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['subject'] ?></td>
            <td><?php echo $row['message'] ?></td>
        </tr>

        <?php
            }
        }
        ?>
       
    </table>
</html>