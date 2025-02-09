<?php
require_once __DIR__.'/../core/BaseController.php';
require_once __DIR__.'/../models/User.php';

class AdminController extends BaseController{
    private $userModel;

    public function __construct(){
        $this->userModel = new User();
    }

    public function adminView(){
        $users = $this->userModel->getStudents();
        $this->renderAdmin('admin', ['users' => $users]);
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

    public function approveUsers() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
            $userId = $_POST['user_id'];
            $this->userModel->approveUser($userId);
            $this->render('/admin');
            exit();
        }
    }

}