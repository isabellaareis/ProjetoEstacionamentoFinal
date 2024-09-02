<?php

login($_POST['codigo']);




function login($codigo){
    if($codigo == 0000){//codigo é 0000
        header("location: index.html"); 
    }else{
        echo "Código não encontrado.";
    }
}
?>