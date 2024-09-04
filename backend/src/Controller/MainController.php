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
           "id" =>2,
            "hotelId"=>3,
            "name"=>'Pardal',
            "roomType"=>'suite',
            "description"=>'These room offers us an amazing thinh that we vcan extrapollate mentally',
            "price"=>150,
            "availability"=>'Available',
        ];

        return $this->render('main/homepage.html.twig', ['numberOfRooms' => $roomCount, 'room'=>$room]);
   
    }
}
