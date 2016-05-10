<?php

/**
 * Created by PhpStorm.
 * User: alexandrevagnair
 * Date: 10/05/2016
 * Time: 10:14
 */
namespace Controller;

use Model\PageRepository;

class PageController
{
    private $repository;

    public function __construct(\PDO $pdo)
    {
        $this->repository = new PageRepository($pdo);
    }

    public function ajoutAction()
    {
        
    }
    public function supprimerAction()
    {

    }

    public function detailsAction()
    {

    }
    public function listeAction()
    {

    }
    public function displayAction()
    {
        // Action affichage de la page en Front Office
    }


}