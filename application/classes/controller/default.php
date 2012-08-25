<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Default extends Controller_Template {

        public $template = "templates/default";
        
        public function before() {
            parent::before();
            $this->template->title = "i-engine";
            $this->template->description = "idea engine";
            $this->template->content = "";
            $this->template->footer = "Copyright S-Ideas";
        }
} // End Welcome
