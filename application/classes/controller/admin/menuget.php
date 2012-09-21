<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Menuget extends Controller {
    public function action_index(){
         $auth = Auth::instance();
                if($auth->logged_in() != 0){
            $json = "";
            $en = array();
            $menus = ORM::factory('menu')->find_all();
            foreach ($menus as $value) {
                 $en = $value->as_array($menus);
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
            $menus = ORM::factory('menu',$s[0]['id']);
            $menus->name = $s[0]['name'];
            $menus->title = $s[0]['title'];
            $menus->link = $s[0]['link'];
            $menus->parentId = $s[0]['parentId'];
            $menus->position = $s[0]['position'];
            $menus->save();
                    }else{ $this->request->redirect('adminpage/login'); }
    }
    
    public function action_delete(){
            $auth = Auth::instance();
             if($auth->logged_in() != 0){
            $json = $_GET['models'];
            $s = json_decode($json,TRUE);
            $menus = ORM::factory('menu',$s[0]['id']);
            $menus->delete();
                    }else{ $this->request->redirect('adminpage/login'); }
    }
} // End Welcome
?>