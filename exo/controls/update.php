<?php
    
    include 'models/database.php' ;

    $database = new Database() ;

    if(!empty($_POST['uemail'] && !empty($_POST['uname']) && !empty($_POST["update"]) && !empty($_POST['ufname'])) && !empty($_POST['upwd'])){

        $s_email = $_POST['uemail'] ;
        $s_name = $_POST['uname'] ;
        $s_fname = $_POST['ufname'] ;
        $s_password = sha1($_POST['upwd'] );
        $password = sha1($_POST['cpwd']) ;
        $id = (int)$_POST["update"] ;
        $scan = $database->verifipasswd($id , $password) ;

        if(!empty($scan)){
            $database->update($id, $s_email, $s_name, $s_fname, $s_password) ;
            echo 'ok' ;
        }
        header('Location: http://localhost/exo/index.php?action=ok') ;
    }
?>