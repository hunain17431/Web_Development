<?php 
    $list = ["Marci","Hunain","David"];

    function myimplode ($separator , $lista) {
        $result = "";
        foreach ($lista as $word){
            $result .= $word . $separator; 
        }
        return $result;
    }

    $answer = myimplode("|", $list);
    print($answer);


    function myexplode ($cadena) {
        $word = "";
        $list = [];
        for($i = 0; $i < strlen($cadena); $i++){
            $character = $cadena[$i];

            if($character !== ","){
                $word .= $character;
            }else {
                $list[] = $word;
                $word = "";
            }
        }
        return $list;
    }

    echo "<br><br>";    
    $ar = myexplode("hello,my,name,is,hunain,");
    print_r($ar)
?>