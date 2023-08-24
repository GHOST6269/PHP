<?php
    include 'models/database.php' ;

    $database = new Database() ;
    $scan = $database->selectemail($_POST['s_email']);

    if(!empty($scan)){
        header('Location: http://'.$url.'/exo/index.php') ;
    }else{
        if(!empty($_POST['s_email']) && !empty($_POST['s_name']) && !empty($_POST['s_fname']) && !empty($_POST['s_pwd'])){
            $s_email = $_POST['s_email'] ;
            $s_name = $_POST['s_name'] ;
            $s_fname = $_POST['s_fname'] ;
            $s_password = sha1($_POST['s_pwd'] );
            $database->insert($s_email, $s_name, $s_fname, $s_password) ;
            header('Location: http://'.$url.'/exo/index.php?action=ok') ;
        }else{
            header('Location: http://'.$url.'/exo/index.php') ;
        }
    }   
?>