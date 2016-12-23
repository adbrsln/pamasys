<?php
    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
    echo '<meta http-equiv="refresh" content="0;url=./index.php">';
?>