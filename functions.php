<?php 

    function passwordGen( int $length = 8) : string {

                $characters = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!@#$%&";
                $password ='';

                for ($i=0; $i < $length ; $i++) { 
                    $password .= $characters[random_int(0, strlen($characters) -1 )];
                }

                return $password;

            }

?>