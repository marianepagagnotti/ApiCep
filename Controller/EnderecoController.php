<?php

    namespace API_CEP\Controller;

    use API_CEP\Model\{ EnderecoModel, CidadeModel };
    use Exception;

    class EnderecoController extends Controller
    { 
        public static function GetCepByLogradouro() : void
        {
            try{

                $logradouro = $_GET['logradouro'];

                $model = new EnderecoModel();
                $model-> GetCepByLogradouro($logradouro);

                parent::GetResponseAsJson($model->rows);
            }catch(Exception $e){

                //*parent::GetExceptionAsJSON($e);
            }
        }

        public static function GetLogradouroByBairroAndCidade() : void
        {

        }

        public static function GetLogradouroByCep() : void
        {
            
        }

        public static function GetBairroByIdCidade() : void
        {
            
        }

        public static function GetCidadesByUF() : void
        {
            
        }
    };