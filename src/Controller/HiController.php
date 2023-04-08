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

Si on enlève le Abstract la méthode render n'existerait plus car notre classe n'a pas de méthode render qui a été définis
La méthode render retourne une réponse de type http fundation

*/

class HiController extends AbstractController
{
    /** #[Route] c'est un attribut permet d'associer l'URI à la fonction qui va être exécuter.µ
     * Lorsque je veux éxécuter une fonction à travers une requete HTTP je dois lui associer une route
     * On peut aussi écrire d'une ancienne façon en utilisant les annotations maintenant on utilise les attributs.Le
     * name va être l'identifiant de la route /hi on ne doit pas avoir deux noms identiques pour deux routes
      */
    #[Route('/hi', name: 'app_hi')]

    /* dans cette fonction il retourne notre vue twig qu'il a créer dans le
    terminal grâce à la console la fonction retourne une Réponse car Symfony c'est un framework Request/Response
    car si je reçois une réponse qui est /hi je voudrais répondre avec cette fonction là qui elle va me retourner à la fin une
    réponse 
    
    */

    public function index(): Response
    {

        /*Un framework est basée sur des conventions et parmis ces conventions c'est que la méthode render elle va chercher 
        la vue à partir du dossier template parce qu'il sait que les templates les vues qu'on va générer il va les stocker
        ici par convention du coup on dit directement hi car elle elle va pointer directement sur ce dossier là,
        
        le deuxieme paramètre de la méthode render est un objet*/

        return $this->render('hi/index.html.twig',[
            'prenom'=>'Elisa',
            'nom'=>'ROBERT AOUCHER'
        ]);
        // return $this->render('hi/index.html.twig', [
        //     'controller_name' => 'HiController',
        // ]);

        // return new Response(
        //     content:"
        //     <head>
        //         <title>Ma premiere page</title>
        //     </head>
        //     <body>
        //         <h1>Ma premiere page</h1>
        //     </body>
        //     "
        // );
    }
}
