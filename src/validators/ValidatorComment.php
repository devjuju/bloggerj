<?php

namespace App\Validators;

require_once('src/core/validator.php');
use App\Core\Validator;

class ValidatorComment extends Validator
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function checkData()
    {
        $resultAuthor = $this->checkAuthor($this->data->getAuthor());

        $resultComment = $this->checkComment($this->data->getComment());

        if ($resultAuthor && $resultComment === true) {
            return true;
        } else {
            $errors = [
                'author' => $resultAuthor,
                'comment' => $resultComment,
            ];
            return $errors;

        }

    }

   

    public function checkAuthor($author)
    {
        if(empty($author)) {
            return "Le nom est requis";
        } elseif ($this->isSmallThan($author, 5)) {
            return "c'est plus petit que 5 caractères";
        }elseif ($this->isRespectedPattern($author)){
            return "Le nom doit contenir seulement des caractères";
        }else {
            return true;
        }
    }

    public function checkComment($comment)
    {
        if(empty($comment)) {
            return "Le commentaire est requis";
        } elseif ($this->isSmallThan($comment, 15)) {
            return "15 caractères minimum";
        }else {
            return true;
        }
    }

}