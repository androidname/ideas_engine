<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pageget extends Controller {
    public function action_index(){
         $auth = Auth::instance();
                if($auth->logged_in() != 0){
            $json = "";
            $en = array();
            $pages = ORM::factory('page')->find_all();
            foreach ($pages as $value) {
                 $en = $value->as_array();
                 $json .=json_encode($en).','; } 
                 $json ="[".substr($json, 0, strlen($json)-1)."]";
                 $this->request->headers['Content-Type'] = "application/json";
                 $this->response->body($json);
                    }else{ $this->request->redirect('adminpage/login'); }
        }
    public function action_update(){
            $auth = Auth::instance();
             if($auth->logged_in() != 0){
                 $json = $_GET['models'];
            $s = json_decode($json,TRUE);
            $pages = ORM::factory('page',$s[0]['id']);
            $pages->title = $s[0]['title'];
            $pages->url = $s[0]['url'];
            $pages->content = $s[0]['content'];
            $pages->meta = $s[0]['meta'];
            $pages->save();
                    }else{ $this->request->redirect('adminpage/login'); }
    }
    
    public function action_delete(){
            $auth = Auth::instance();
             if($auth->logged_in() != 0){
            $json = $_GET['models'];
            $s = json_decode($json,TRUE);
            $pages = ORM::factory('page',$s[0]['id']);
            if($pages->loaded()){
            $pages->delete();
            }
                    }else{ $this->request->redirect('adminpage/login'); }
    }
    
    public function action_link(){
         $auth = Auth::instance();
                if($auth->logged_in() != 0){
            $json = "";
            $en = array();
            $pages = ORM::factory('page')->find_all();
            foreach ($pages as $value) {
                 $en = $value->as_array();
                 $json .=json_encode($en).','; } 
                 $json ="[".substr($json, 0, strlen($json)-1)."]";
                 $this->request->headers['Content-Type'] = "application/json";
                 $this->response->body($json);
                    }else{ $this->request->redirect('adminpage/login'); }
        }
} // End Welcome
?>