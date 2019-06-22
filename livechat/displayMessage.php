<?php
include('conn.php');
$sql = "SELECT * FROM chats";
$result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    ?>
    <p>
    <span style="color: red"><?php echo $row['name'].": ";?></span>
    <span style="color: blue"><?php echo $row['message'];?></span>
    <span style="float:right"><?php echo date('h:i A', strtotime($row['time']));?></span>
    </p><?php
}
?>