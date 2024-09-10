<?php

namespace App\Model;

enum RoomStatusEnum: string
{
    case WAITING = 'waiting';
    case IN_PROGRESS = 'occupied';
    case COMPLETED = 'available';
}
