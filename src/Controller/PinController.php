<?php

namespace App\Controller;

use App\Entity\Pin;
use App\Repository\PinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(PinRepository $pinRepository): Response
    {
        $pins= $pinRepository->findAll();
        return $this->render('pin/index.html.twig',compact('pins'));
    }

    #[Route('/pins/{id<\d+>}', name: 'app_pin_home')]
    public function show(Pin $pin): Response
    {


        return $this->render('pin/show.html.twig',compact('pin'));
    }
}
