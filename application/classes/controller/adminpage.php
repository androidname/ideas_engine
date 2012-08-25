<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminpage extends Controller_Admin {
    public function after() {
            $this->template->title = "Страница администратора";
            $this->template->styles = array('styles/css/default.css');
            //$this->template->content = View::factory('admin/index');
            parent::after();
    }

    public function action_index(){
        $auth = Auth::instance();
                if($auth->logged_in() != 0){
                 $this->template->content = View::factory('admin/index');
                    }else{
                 $this->request->redirect('adminpage/login');  
                    }
            
        }
    public function action_login(){
            $auth = Auth::instance();
             if($auth->logged_in() != 0){
                $this->request->redirect('adminpage');
                    }else{ 
                //echo $auth->hash_password("androidname");
            if(isset($_POST['btn'])){
                    $login = $_POST['login'];
                    $passw = $_POST['password'];
            if($auth->login($login, $passw)){
                    $this->request->redirect('adminpage');
                    }else{}
                        }
                }
       $this->template->content = View::factory('admin/login');
    }
    
    public function action_logout()
        {
             $auth = Auth::instance();
             $auth->logout();
             $this->request->redirect('adminpage/login');
             $this->template->content = View::factory('admin/login');
        }

} // End Welcome
