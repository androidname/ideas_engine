<?php
    class Model_Errors extends Model{
        public static function handle(Exception $e){
                $response = new Response;
                $view = new View('errors/404');
                echo $response->body($view)->send_headers()->body();
        }
    }
?>
