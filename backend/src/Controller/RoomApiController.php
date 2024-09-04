<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Room;
use App\Repository\RoomRepository;
use Psr\Log\LoggerInterface;


#[Route('/api')] //since this is outsice of any method we are saying that
class RoomApiController extends AbstractController
{
    #[Route('/rooms')]
    public function getCollection( RoomRepository $repository): Response
    {
        // dd($repository);
        $rooms = $repository -> findAll();
        // return new Response(json_encode($rooms)); 
        return $this->json($rooms);
        
    }

    #[Route('/rooms/{id<\d+>}')] //the order of the arguments in a controller doesnt matter
    public function get(int $id, RoomRepository $repository): Response
    {
        $room = $repository->find($id);

        if(!$room) {
            throw $this->createNotFoundException('Room not found');
        }

        return $this->json($room);
    }
}
