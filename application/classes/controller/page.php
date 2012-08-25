<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Default {

        public function action_index(){
            $this->template->content = View::factory('page/index');
        }

} // End Welcome
