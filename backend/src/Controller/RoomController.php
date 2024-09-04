<?php
namespace App\Controller;

use App\Repository\RoomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoomController extends AbstractController
{
    #[Route('/room/{id<\d+>}', name: 'app_room_show' )]
    public function show(int $id, RoomRepository $repository): Response
    {
        $room = $repository->find($id);
        if(!$room){
            throw $this->createNotFoundException('Room not found');
        }
        return $this->render('room/show.html.twig',[
            "room"=> $room,
        ]);
    }
}
