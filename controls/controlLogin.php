<?php

    include 'models/database.php' ;

    $email = $_POST['email'] ;
    $pwd = sha1($_POST['pwd'] );
    $dtb = new Database() ;
    $user = $dtb->select($email, $pwd) ;

    if(!empty($user)){
        header('Location: http://'.$url.'/exo/index.php?action=ok') ;    
    }else{
        header('Location: http://'.$url.'/exo/index.php') ;
    }

?>