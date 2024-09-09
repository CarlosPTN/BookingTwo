<?php

namespace App\Model;

class Room
{
    public function __construct(
        private int $id,
        private int $hotelId,
        private string $name,
        private string $roomType,
        private string $description,
        private int $price,
        private RoomStatusEnum $availability,
    )  {   
    }

    public function getId(): int 
    {
        return $this->id;
    }
    public function getHotelId(): int 
    {
        return $this->hotelId;
    }
    public function getName(): string 
    {
        return $this->name;
    }
    public function getRoomType(): string 
    {
        return $this->roomType;
    }
    public function getDescription(): string 
    {
        return $this->description;
    }
    public function getPrice(): int 
    {
        return $this->price;
    }
    public function getAvailability(): RoomStatusEnum 
    {
        return $this->availability;
    }
    public function getStatusString():string
    {
        return $this->availability->value;
    }
    public function getStatusImageFilename():string
    {
        return match ($this-> availability) {
            RoomStatusEnum::WAITING => 'images/status-waiting.png',
            RoomStatusEnum::IN_PROGRESS => 'images/status-in-progress.png',
            RoomStatusEnum::COMPLETED => 'images/status-complete.png',
        };
    }
}
