<?php 
    namespace API_CEP\Controller; 
    abstract class Controller 
    {
        public static function GetResponseAsJson($data)
        {
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=utf-8");
            header("Cache-Control: no-cache, must-revalidate");
            header("Expires: Mon, 26 Jun 1997 05:00:00 GMT");
            header("Pragma: public");
            exit(json_encode($data));
        }
    }