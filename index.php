<?php

    include 'view/template/header.php' ;
    
    session_start();
    $url = $_SERVER['HTTP_HOST'] ;
    if(!empty($_SESSION['check'])){

        if($_SESSION['check'] == 'verified'){

            if(!empty($_GET['action'])){

                if($_GET['action'] == 'delete'){
                    include 'controls/delete.php' ;
                }

                if($_GET['action'] == 'update'){
                    include 'controls/update.php' ;
                }

                if($_GET['action'] == 'subject'){
                    include 'view/subject.php' ;
                }

                if($_GET['action'] == 'student'){
                    include 'view/student.php' ;
                }

                if($_GET['action'] == 'ok'){
                    include 'view/student.php' ;
                }

                if($_GET['action'] == 'logout'){
                    include 'controls/logout.php' ;
                }

        }else{
            include 'view/student.php' ;
        }
    }

}

    else{
        if(!empty($_GET['action'])){

            if($_GET['action'] == 'login'){
                include 'controls/controlLogin.php' ;
            }
            
            else if($_GET['action'] == 'signup'){
                include 'controls/controlSignup.php' ;
            }
            
            else if($_GET['action'] == 'ok'){
                include 'view/student.php' ;
                $_SESSION['check'] = 'verified' ; 
            }
        }
        
        else{
            include 'view/login.php' ;
        }
    }

    include 'view/template/footer.php' ;

?>
