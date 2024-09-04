<?php

namespace App\Repository;
use App\Model\Room;
use Psr\Log\LoggerInterface;

class RoomRepository
{
    public function __construct(private LoggerInterface $logger)
    {

    }

    public function findAll(): array
    {
        $this->logger-> info('Hotel collection retrieved');
        return [
            new Room(
                1,
                1,
                'Rouxinol',
                'suite',
                'These room offers us an amazing thinh that we vcan extrapollate mentally',
                110,
                'Available',
            ),  new Room(
                2,
                3,
                'Pardal',
                'suite',
                'These room offers us an amazing thinh that we vcan extrapollate mentally',
                150,
                'Available',
            ),
            
        ];

    }
    public function find(int $id): ?Room
    {
        foreach($this->findAll() as $room){
            if ($room ->getId()===$id)
            {
               return $room;
            }
        }
        return null;
    }
};

