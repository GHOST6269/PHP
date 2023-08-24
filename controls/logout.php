<?php
    session_reset();
    session_destroy();

    header('Location: http://'.$url.'/exo/index.php?action=login') ;

?>