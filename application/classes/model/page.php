<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Page extends Model{
    public function get_allpage(){
            $this->db = Database::instance();
            $sql = "SELECT * FROM pages";
            $result = $this->db->query(Database::SELECT, $sql);
            return $result;
        }
}

?>