<?php

class Person{
    const AUTHOR = "Ridwan";
    var int $idAuthor = 1;

    function getAuthor(){
        return $this->idAuthor . " " . self::AUTHOR . PHP_EOL;
    }
}

?>