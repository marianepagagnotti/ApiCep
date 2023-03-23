<?php

use API_CEP\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/endereco/by-cep':
        EnderecoController::GetLogradouroByCep();
    break;

    case '/cep/by-endereco':
        EnderecoController::GetCepByLogradouro();
    break;

    case '/logradouro/by-bairro':
        EnderecoController::GetLogradouroByBairroAndCidade();
    break;

    case '/bairro/by-cidade':
        EnderecoController::GetLogradouroByCep();
    break;

    case '/cidade/by-uf':
        EnderecoController::GetCidadesByUF();
    break;

    default:
        http_response_code(403);
        //echo $url;
    break;
}