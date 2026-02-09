<?php 


    function passwordGen( int $length = 8, string $repeat = 'off',string $capitalStatus = 'off',string $numberStatus = 'off',string $symbolStatus = 'off') : string {
        global $_SESSION;

        $characters = "qwertyuiopasdfghjklzxcvbnm";
        $capitalStatus == 'on' ? $capitals = 'QWERTYUIOPASDFGHJKLZXCVBNM' : $capitals = '';
        $numberStatus == 'on' ? $numbers = '1234567890' : $numbers = '';
        $symbolStatus == 'on' ? $symbols = '!@#$%&' : $symbols = '';
        $password ='';


        if ( $repeat == 'on') {
            
            $characters .= $capitals . $numbers . $symbols;

            do {
                
                $password .= $characters[random_int(0, strlen($characters) -1 )];
    
            } while (strlen($password) < $length );

        } else if ($repeat =='off') {

            if ($repeat === 'off' && $length > strlen($characters)) {
                echo 'Errore: lunghezza troppo grande senza ripetizioni';
                return 'error';
            }

            $characters .= $capitals . $numbers . $symbols;

            do {
                $character = $characters[random_int(0, strlen($characters) -1 )];

                if (!str_contains($password, $character)){

                    $password .= $character;

                }
    
            } while (strlen($password) < $length );

        }
        

        $_SESSION['password'] = $password;

        return $password;

        }

?>