<?php 
    // Zatvara sesiju - Odjavljuje korisnika i šalje ga na početnu stranicu 
ob_start();
session_start();
session_unset();
session_regenerate_id(true);
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
header('LOCATION: index.php');
?>