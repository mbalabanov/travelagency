<?php

namespace App\Controller;

use App\Entity\Journey;
use App\Form\JourneyType;
use App\Repository\JourneyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
    * @Route("/", name="welcome", methods={"GET"})
    */
    public function index(JourneyRepository $journeyRepository): Response
    {
        return $this->render('welcome/index.html.twig', [
            'journeys' => $journeyRepository->findAll(),
        ]);
    }
}
