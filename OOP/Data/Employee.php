<?php

class Employee{

    const COMPANY_NAME = "AlonePainPeanut";

    var ?string $nama;
    var ?string $asal;

    function __construct(?string $nama, ?string $asal)
    {
        $this->nama = $nama;
        $this->asal = $asal;
    }
    
    function __destruct()
    {
        echo "Goodbye, thanks to use our service!" . PHP_EOL;
    }

    function profile():void{
        echo "Hello, this is " . self::COMPANY_NAME . " company." . PHP_EOL;
    }

    
}






