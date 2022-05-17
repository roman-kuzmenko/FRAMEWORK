<?php

namespace app\controllers;

class Main extends App {
    
    //public $layout = 'main';


    public function indexAction() {
        //$this->layout = false;
        //$this->layout = 'main';
        //$this->view = 'test';
        $name = 'Андрей';
        $hi = 'Helo';
        $colors = [
            'white'=>'белый',
            'black'=>'чёрный',

        ];
        $title = 'PAGE TITLE';
        $this->set(compact('name', 'hi', 'colors', 'title'));
     
    }

}