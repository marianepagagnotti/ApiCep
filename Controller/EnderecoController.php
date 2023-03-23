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
                $model-> getCepByLogradouro($logradouro);

                parent::GetResponseAsJson($model->rows);
            
            }catch(Exception $e){

                parent::GetExceptionAsJSON($e);
            }
        }

        public static function GetLogradouroByBairroAndCidade() : void
        {
            try
            {
                $bairro = parent::GetStringFromUrl(
                    isset($_GET['bairro']) ? $_GET['bairro'] : null, 'bairro');

                $id_cidade = parent::GetIntFromUrl(
                    isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null, 'cep');

                $model = new EnderecoModel();

                $model -> getLogradouroByBairroAndCidade($bairro, $id_cidade);

                parent::GetResponseAsJson($model->rows);
            
            }catch (Exception $e)
            {
                parent::GetExceptionAsJson($e);
            }
        }

        public static function GetLogradouroByCep() : void
        {
          try
          {
            $cep = parent::GetIntFromUrl(isset($_GET['cep']) ? $_GET['cep'] : null);

            $model = new EnderecoModel();

            parent::GetResponseAsJson($model->getLogradouroByCep($cep));
          
          }catch (Exception $e)
          {
            parent::GetExceptionAsJson($e);
          }  
        }

        public static function GetBairroByIdCidade() : void
        {
           try
           {
                $id_cidade = parent::GetIntFromUrl(
                    isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null);

                $model = new EnderecoModel();
                $model->getBairrosByIdCidade($id_cidade);

                parent::GetResponseAsJson($model->rows);
           
            }catch (Exception $e)
           {
            parent::GetExceptionAsJson($e);
           } 
        }

        public static function GetCidadesByUF() : void
        {
            try
            {
                $uf = $_GET['uf'];

                $model = new CidadeModel();
                $model->getCidadesByUF($uf);

                parent::GetResponseAsJson($model->rows);
            
            }catch (Exception $e)
            {
             parent::GetExceptionAsJson($e);
            } 
        }
    };