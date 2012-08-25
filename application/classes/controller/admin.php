<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template {

        public $template = "layout/admin";
        
        public function before() {
            
            parent::before();
            $this->template->title = "i-engine admin";
            $this->template->styles = array();
            $this->template->scripts = array();
            $this->template->description = "idea engine admin page";
            $this->template->content = "";
            $this->template->footer = "Copyright S-Ideas";
        }

} // End Welcome
