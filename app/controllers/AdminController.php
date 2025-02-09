<?php
require_once __DIR__.'/../core/BaseController.php';
class AdminController extends BaseController{

    public function adminView(){
        $this->render('admin');
    }

    public function calendarView(){
        $this->render('admin/calendar');
    }

    public function usersView(){
        $this->render('admin/users');
    }
    public function subjectsView(){
        $this->render('admin/subjects');
    }



}