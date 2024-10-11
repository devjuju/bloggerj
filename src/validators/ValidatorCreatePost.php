<?php

namespace App\Validators;

use App\Core\Validator;

class ValidatorCreatePost extends Validator
{
    public $data;


    public function __construct($data)
    {
        $this->data = $data;
    }

    public function checkData()
    {
        $resultTitle = $this->checkTitle($this->data->getTitle());
        $resultCategory = $this->checkCategory($this->data->getCategory());
        $resultExcerpt = $this->checkExcerpt($this->data->getExcerpt());
        $resultContent = $this->checkContent($this->data->getContent());




        if ($resultTitle && $resultCategory && $resultExcerpt && $resultContent === true) {
            return true;
        } else {
            $errors = [
                'title' => $resultTitle,
                'category' => $resultCategory,
                'excerpt' => $resultExcerpt,
                'content' => $resultContent,

            ];
            return $errors;
        }
    }

    public function checkTitle($title)
    {
        if (empty($title)) {
            return "Entrer un titre";
        } elseif ($this->isSmallThan($title, 5)) {
            return "5 caractères minimum";
        } else {
            return true;
        }
    }

    public function checkCategory($category)
    {
        if (empty($category)) {
            return "Veillez choisir une catégorie";
        } elseif ($this->isSmallThan($category, 5)) {
            return "5 caractères minimum";
        } else {
            return true;
        }
    }

    public function checkExcerpt($excerpt)
    {
        if (empty($excerpt)) {
            return "Entrer un extrait";
        } elseif ($this->isSmallThan($excerpt, 10)) {
            return "10 caractères minimum";
        } else {
            return true;
        }
    }

    public function checkContent($content)
    {
        if (empty($content)) {
            return "Entrer une description";
        } elseif ($this->isSmallThan($content, 15)) {
            return "15 caractères minimum";
        } else {
            return true;
        }
    }

    public function checkThumbnailImage($thumbnail_image)
    {
        if (empty($thumbnail_image)) {
            return "Veillez choisir une image";
        } else {
            return true;
        }
    }

    public function checkFeaturedImage($featured_image)
    {
        if (empty($featured_image)) {
            return "Veillez choisir une image";
        } else {
            return true;
        }
    }
}