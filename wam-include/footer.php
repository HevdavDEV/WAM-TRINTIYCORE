<?php

// File Check
if(!isset($mysql_connect)){ exit(); }

// MySQL kapcsolat bez�r�sa
mysqli_close($mysql_connect);

ob_end_flush();

?>