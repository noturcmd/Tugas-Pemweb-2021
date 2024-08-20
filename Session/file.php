<?php
    header("Content-Disposition: attachmend; filename=\"tes.jpg\"");
    readfile(__DIR__ . "/img/foto.jpeg");
    exit();
?>