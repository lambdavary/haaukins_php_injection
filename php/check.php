<?php
if($_GET["user"] == "admin" && $_GET["password"] == "12345678"){
  header("Location: ./login.php");
}else{
  header("Location: ./index.php");
}
?>
