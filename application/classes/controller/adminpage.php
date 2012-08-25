<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminpage extends Controller_Admin {

        public function action_index(){
            $this->template->title = "Страница администратора";
            $this->template->styles = array('styles/css/default.css');
            $this->template->content = View::factory('admin/index');
        }

} // End Welcome
