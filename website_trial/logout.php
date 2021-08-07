<?php 

session_destroy();

header('Location: index.php?page=login');

?>

<?=header_login(logout)?>