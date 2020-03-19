<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PokemonController extends AbstractController
{
    public function index()
    {
        return $this->render('pokemon/index.html.twig', []);
    }
}
