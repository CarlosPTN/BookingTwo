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
        $roomCount = 457;
        $room = [
            'name'=> 'USS XXXXXXX',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under construction',
        ];

        return $this->render('main/homepage.html.twig', ['numberOfRooms' => $roomCount, 'room'=>$room]);
   
    }
}
