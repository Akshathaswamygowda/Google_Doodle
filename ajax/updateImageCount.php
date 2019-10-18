<?php
include("../config.php");

if(isset($_POST["imageUrl"])){
	$query = $con->prepare("UPDATE images SET click = click + 1 WHERE imageUrl=:imageUrl");
	$query->bindParam(":imageUrl", $_POST["imageUrl"]);
	$query->execute();

}
else
{
	echo "No image Url passed to page";
}

?>