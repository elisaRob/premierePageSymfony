<?php

/*
Les namespaces permettent de définir un nom de package
 que l'on pourra ensuite charger de manière automatique gràce à un autoloading.

*/

namespace App\Controller;

/*
Utilisation de l'abstract Controller
*/

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/* la class hi controller que l'on a créer étend de la class AbstractController
parce que dans le abstract il y énormement d'outils que 'on va pouvoir réutiliser dans le notre

*/

class HiController extends AbstractController
{
    #[Route('/hi', name: 'app_hi')]

    /* dans cette fonction il retourne notre vue twig qu'il a créer dans le
    terminal grâce à la console*/

    public function index(): Response
    {
        return $this->render('hi/index.html.twig', [
            'controller_name' => 'HiController',
        ]);
    }
}
