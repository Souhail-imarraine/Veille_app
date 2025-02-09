<?php 

class BaseController
{
    public function render($view, $data = []){
        extract($data);
        if($view == 'admin'){
            include __DIR__ . '/../views/admin/' . $view . '.php';
        }else{
            include __DIR__ . '/../views/' . $view . '.php';
        }
    }
   

}