<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use App\Controller\RoomController;
use App\Repository\RoomRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\RoomStatusEnum;
use App\Model\Room;

// everytime we have a php atribute, we need the corresponding use statement for it in the same file
// every page in symfony is a route controller
class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage( RoomRepository $repository): Response
    {
        $roomCount = 457;
        $rooms = $repository -> findAll();
        $featuredRoom = $rooms[0];
        return $this->render('main/homepage.html.twig', ['numberOfRooms' => $roomCount, 'rooms'=>$rooms,'featuredRoom' => $featuredRoom ]);
   
    }
}
