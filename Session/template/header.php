<?php 

    function headerHTML($home, $dir = "", $direktori){
        $ruangan = [
            "ruang1" => "Ruang 1",
            "ruang2" => "Ruang 2",
            "ruang3" => "Ruang 3"
        ];
        $template = "<header>
        <h2>BIOSKOP PTIK</h2>
        <nav>
            <ul>";
        $template .= $direktori == "latihan1" ? "<li><a href=\"$home\" class=\"active\">Home</a></li>" : "<li><a href=\"$home\">Home</a></li>";
        foreach ($ruangan as $key => $value) {
            if($key == $direktori){
                $template .= "<li><a href=\"{$dir}$key.php\" class=\"active\">$value</a></li>";
            }else{
                $template .= "<li><a href=\"{$dir}$key.php\">$value</a></li>";
            }
        }

        $template .= "</ul>
            </nav>
        </header>";

        return $template;

    }

    function cekDirektori($direktori, $namaFile){
        $dir = explode("\\", $direktori);
        $dirTerakhir = end($dir);
        if($dirTerakhir == "Session"){
            return headerHTML("latihan1.php", "ruang-bioskop/", $namaFile);
        }else if($dirTerakhir == "ruang-bioskop"){
            return headerHTML("../latihan1.php", "", $namaFile);
        }
    }

    


?>