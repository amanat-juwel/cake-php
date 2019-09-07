<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;


class CustomController extends AppController
{

    public function initialize(){

        parent::initialize();

        $this->viewBuilder()->layout('customLayout');
    }

    public function index()
    {
        //method-1
        $title = "Custom Page Index";
        $this->set('title',$title);

        //method-2
        $data = [
            'language' => 'PHP',
            'framework' => 'Cake PHP'
        ];        

        $this->set(compact("data"));


    }

    public function aboutUs()
    {
        //$this->autoRender = false;

        $title = "About Us";
        $this->set('title',$title);

    }

    public function contactUs($arg1 = '', $arg2 = '')
    {
        $title = "Contact Us";
        $this->set('title',$title);
        
        $data = [
            'param_1' => $arg1,
            'param_2' => $arg2
        ];   

        $this->set(compact("data"));

    }
}
