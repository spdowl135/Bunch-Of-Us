<?php
include 'functions2.php';
?>
<?php 
session_destroy();

setcookie('yoozerx',"",time()-720000);

header ("Location: http://www.bunchofus.com");
?>