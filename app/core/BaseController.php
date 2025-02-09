<?php 

class BaseController{
    public function render($view, $data = []){
        extract($data);
        include __DIR__ . '/../views/' . $view . '.php';
    }
    // render user files
    public function renderUser($view, $data = []){
        extract($data);
        include __DIR__ . '/../views/user/' . $view . '.php';
    }
    // render user files
    public function renderAdmin($view, $data = []){
        extract($data);
        include __DIR__ . '/../views/admin/' . $view . '.php';
    }

}