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
        $slug = 'teletubbies';
        if(isset($_GET['p'])) {
            $slug = $_GET['p'];
        }
//        $slug = $_GET['p'] ??  $_POST['p'] ?? 'teletubbies';
        $page = $this->repository->getSlug($slug);
        var_dump($page);
        include "view/page-display.php";

        // Action affichage de la page en Front Office
    }


}