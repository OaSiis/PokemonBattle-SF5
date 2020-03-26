<?php

namespace App\DataFixtures;

use App\Entity\Pokemon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PokemonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $pokemons = $this->pokemonsData();

        foreach($pokemons as $item) {
            $pokemon = new Pokemon();
            $pokemon
                ->setName($item['name'])
                ->setHp($item['hp'])
                ->setNature($item['nature'])
                ->setType($item['type'])
                ->setDescription($item['description'])
                ->addAttack($item['attack'])
            ;

            $manager->persist($pokemon);
        }

        $manager->flush();
    }

    private function pokemonsData() :array
    {
        return [
            [
                'name' => 'Salamèche',
                'hp' => 50,
                'nature' => 'Timide',
                'type' => 1,
                'description' => 'Bacon ipsum dolor amet picanha leberkas venison fatback kielbasa corned beef bacon prosciutto pork boudin hamburger salami. Pig tail jerky, cow kielbasa shankle pork belly prosciutto. Shank ham biltong, kevin fatback chislic bresaola. Alcatra capicola drumstick tongue meatball bresaola pork loin prosciutto jerky chicken kielbasa.',
                'attack' => $this->getReference('Flammèche'),
            ],
            [
                'name' => 'Carapuce',
                'hp' => 50,
                'nature' => 'Joyeux',
                'type' => 2,
                'description' => 'Bacon ipsum dolor amet picanha leberkas venison fatback kielbasa corned beef bacon prosciutto pork boudin hamburger salami. Pig tail jerky, cow kielbasa shankle pork belly prosciutto. Shank ham biltong, kevin fatback chislic bresaola. Alcatra capicola drumstick tongue meatball bresaola pork loin prosciutto jerky chicken kielbasa.',
                'attack' => $this->getReference('Pistolet à O'),
            ],
            [
                'name' => 'Bulbizarre',
                'hp' => 50,
                'nature' => 'Courageux',
                'type' => 3,
                'description' => 'Bacon ipsum dolor amet picanha leberkas venison fatback kielbasa corned beef bacon prosciutto pork boudin hamburger salami. Pig tail jerky, cow kielbasa shankle pork belly prosciutto. Shank ham biltong, kevin fatback chislic bresaola. Alcatra capicola drumstick tongue meatball bresaola pork loin prosciutto jerky chicken kielbasa.',
                'attack' => $this->getReference('Tranch Herbe'),
            ],
        ];
    }
}