<?php

include('conn.php');

$uname = $_POST['uname'];
$umessage = $_POST['umessage'];

$errorEmpty = false;

if (empty($uname)) {
	echo "<span class='form-error'>Please enter name and type some message!</span>";
	$errorEmpty = true;
}
else if (empty($umessage)) {
	echo "<span class='form-error'>Please type some message!</span>";
	$errorEmpty = true;
}
else{
	$sql = "INSERT INTO chats(name ,message) VALUES('$uname','$umessage')";
$result = $con->query($sql);
}

?>

<script>
	$("#user_name,#message").removeClass("input-error");

	var errorEmpty = false;
	if(errorEmpty == true){
		$("#user_name, #message").addClass("input-error");
	}
	if(errorEmpty == false){
		$("#user_name, #message").val("");
	}
</script>

