<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// everytime we have a php atribute, we need the corresponding use statement for it in the same file
// every page in symfony is a route controller
class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 457;
        $myShip = [
            'name'=> 'USS XXXXXXX',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under construction',
        ];

        return $this->render('main/homepage.html.twig', ['numberOfStarships' => $starshipCount, 'myShip'=>$myShip]);
   
    }
}
