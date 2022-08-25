<?php

namespace Drupal\riddler_module\Controller;
// controllerbase out of nowhere??
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\StringTranslation\StringTranslationTrait;

// use Drupal\Core\StringTranslation\StringTranslationTrait;

class RiddlerController extends ControllerBase {

    public function riddle(){
        // $random = rand(int 0, int 5);

        // return array('#markup'=> $this->t("Welcome"));
        return ['#markup' => $this->t('Haloo')];
    }
}


// This works too
// class RiddlerController {

//     use StringTranslationTrait;

//     public function riddle(){
//         // $random = rand(int 0, int 5);

//         // return array('#markup'=> $this->t("Welcome"));
//         return ['#markup' => $this->t('Haloo')];
//     }
// }