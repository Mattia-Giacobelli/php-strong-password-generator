<?php 


    function passwordGen( int $length = 8) : string {
        global $_SESSION;

        $characters = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!@#$%&";
        $password ='';

        for ($i=0; $i < $length ; $i++) { 
            $password .= $characters[random_int(0, strlen($characters) -1 )];
        }

        $_SESSION['password'] = $password;

        return $password;

        }

?>