<?php 
    include 'models/database.php' ;

    $database = new Database() ;

    
    
    if(!empty($_POST["delete"])){
        $id = $_POST['delete'] ;
        $password = sha1($_POST['password']) ;
        $scan = $database->verifipasswd($id, $password) ;

        if(!empty($scan)){
            $database->delete($id) ;
        }
        header('Location: http://localhost/exo/index.php?action=ok') ;
    }
?>