<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin {
    public $template = "layout/admin";
    public function after() {
            $this->template->title = "Pages list";
            $this->template->scripts = array(
                'styles/scripts/jquery/jquery-1.8.0.min.js',
                'styles/scripts/kendoui/kendo.all.min.js');
            $this->template->styles = array(
                'styles/css/kendo.common.min.css',
                'styles/css/kendo.default.min.css',
                'styles/css/default.css');
            parent::after();
    }

    public function action_index(){
        $auth = Auth::instance();
                if($auth->logged_in() != 0){
                 $this->template->content = View::factory('admin/page');
                    }else{
                 $this->request->redirect('adminpage/login');  
                    }
        }
    public function action_datapagejson(){
        $auth = Auth::instance();
                if($auth->logged_in() != 0){
                 $p = '{
                                "id":1,
                                "title": "index page",
                                "url": "index",
                                "meta": "index"} ';
                 $this->request->headers('Content-Type', 'application/json');
                 $this->template->content = json_encode($p);
                    }else{
                 $this->request->redirect('adminpage/login');  
                    }
    }

} // End Welcome
