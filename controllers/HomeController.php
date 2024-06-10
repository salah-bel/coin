<?php

require_once dirname(__DIR__) . '/models/Ad.php';


class HomeController {

    public function index(){ // http://localhost:2002/
        
        $adModel = new Ad();
        $ads = $adModel->findAll();

        $this->render('home', ['ads'=>$ads,'title'=> 'Accueil']);
    }

    public function render($path, $data)
    {
        extract($data); 
        ob_start();
        require_once 'views/pages/'.$path.'.html.php';
        $content = ob_get_clean();
        require_once 'views/base.html.php';
    }

}