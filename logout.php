<?php


    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);




 echo ("<script>
                window.alert('Você será redirecionado!')
                window.location.href='index.php';
                </script>");
?>
