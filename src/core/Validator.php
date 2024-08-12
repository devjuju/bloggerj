<?php

namespace App\Core;

class Validator
{
    // Ici, notre if teste :
    // que notre variable $value ne fasse pas plus de 5 caractères avec la fonction strlen()
    // qui calcule la taille d’une chaine de caractères ;
    public function isBiggerThan($value, $lenght)
    {   
      if (strlen($value) > $lenght) {
            return  $value;
        }
        return true;
    }


    // Ici, notre if teste :
    // que notre variable $value ne fasse pas moins de 5 caractères avec la fonction strlen()
    // qui calcule la taille d’une chaine de caractères ;
    public function isSmallThan($value, $lenght)
    {

        if (strlen($value) < $lenght) {
            return  true;
        }
        return false;
    }



    // Ici, notre if teste :
    // que notre variable $value ait bien la forme attendue avec le fonction preg_match()
    // à laquelle on passe une regex;
    public function isRespectedPattern($value)
    {
         if(!preg_match("/^[A-Za-z '-]+$/", $value)){
            return  true;
        }
        return false;
       
    }
    

    

  

    
}