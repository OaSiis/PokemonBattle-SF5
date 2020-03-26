<?php

namespace App\Controller;

use App\Entity\Attack;
use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $pokemons = $em->getRepository(Pokemon::class)->findAll();

        $attacks = $em->getRepository(Attack::class)->findAll();

        return $this->render('default/index.html.twig', [
            'pokemons' => $pokemons,
            'attacks' => $attacks
        ]);
    }
}