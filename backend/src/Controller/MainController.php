<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// everytime we have a php atribute, we need the corresponding use statement for it in the same file
// every page in symfony is a route controller
class MainController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('<strong>Hotel</strong>: your home comfort in Leiria!');
    }
}
