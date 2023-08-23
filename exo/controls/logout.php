<?php
    session_reset();
    session_destroy();

    header('Location: http://localhost/exo/index.php?action=login') ;

?>