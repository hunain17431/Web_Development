<?php 

    function video_checker($age, $gender, $visitor){
        $checker = True;
        $message = "";

        
        if($age < 18){
            $message .= "not old enough <br>";
        }else {
            $checker = False;
        }
        
        if ($gender){
            $message .= "ladies night <br>";
        }else {
            $checker = False;
        }

        if($visitor){
            $message .= "discount <br>";
        }else {
            $checker = False;
        }

        
        if($checker){
            echo "Warning";
        }else if ($message == ""){
            echo "Welcome";
        }else{
            echo $message;
        }

    }

    video_checker(19,False,False);
?>