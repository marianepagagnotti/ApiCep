<?php
    include 'config.php';
    include 'autoload.php';
    include 'rotas.php';

    $cidades = ['Jaú', 'Bariri', 'Itapuí', 'Dois Corregos'];

    //var_dump($cidades);

    include 'Controller/Controller.php';

    //API_CEP\Controller\Controller::GetResponseAsJson($cidades);