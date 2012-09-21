<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Menus extends Controller_Admin {
    public $template = "layout/admin";
    public function after() {
            $this->template->title = "Menus list";
            $this->template->scripts = array(
                'styles/scripts/jquery/jquery-1.8.0.min.js',
                'styles/scripts/kendoui/kendo.all.min.js');
            $this->template->styles = array(
                'styles/css/kendo.common.min.css',
                'styles/css/kendo.metro.min.css',
                'styles/css/default.css');
            parent::after();
    }

    public function action_index(){
        $auth = Auth::instance();
                if($auth->logged_in() != 0){
                 $this->template->content = View::factory('admin/menu');
                    }else{
                 $this->request->redirect('adminpage/login');  
                    }
        }

} // End Welcome
?>