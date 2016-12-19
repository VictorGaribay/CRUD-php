<?php
include "config/connect.php";

mysql_query("DELETE FROM usuarios WHERE id_usarios = '".$_GET['id']."'");
echo "<script language=javascript>parent.location.href='list.php';</script>";
?>