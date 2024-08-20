<?php 
    
    if(isset($_POST["submit"])){
        if(isset($_POST["remember"])){
            setrawcookie("background-color", $_POST["background_color"], time() + (60 * 60 * 24));
            setrawcookie("font-size", $_POST["font_size"], time() + (60 * 60 * 24));
        }else{
            setrawcookie("background-color", $_POST["background_color"]);
            setrawcookie("font-size", $_POST["font_size"]);
        }
    }

    if(isset($_POST["hapus_cookie"])){
        setrawcookie("background-color", $_POST["background_color"], time() - (60 * 60 * 24));
        setrawcookie("font-size", $_POST["font_size"], time() - (60 * 60 * 24));
    }

    header("location: latihan2.php");
    exit;


?>