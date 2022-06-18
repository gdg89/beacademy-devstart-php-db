<?php
declare (strict_types=1);

namespace App\Controller;// rota do namespace


//classe
class IndexController extends AbstractController
{
    //metodo
    public function indexAction(): void {
        parent::render('index/index');
    }

    public function loginAction():void {
        parent::render('index/login');
    }
}