<?php

namespace App\Controller;

use App\Entity\Attack;
use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        $pokemonRepo = $this->getDoctrine()->getRepository(Pokemon::class);

        return $this->render('default/index.html.twig', [
            'pokemons' => $pokemonRepo->findAll(),
        ]);
    }
}