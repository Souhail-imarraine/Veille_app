<?php
require_once __DIR__.'/../core/BaseController.php';
class AdminController extends BaseController{

    public function adminView(){
        $this->render('admin');
    }

}