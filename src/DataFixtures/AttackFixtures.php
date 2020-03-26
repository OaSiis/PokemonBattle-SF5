<?php

namespace App\DataFixtures;

use App\Entity\Attack;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AttackFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $attacks = $this->attacksData();

        foreach($attacks as $item) {
            $attack = new Attack();
            $attack
                ->setName($item['name'])
                ->setPower($item['power'])
                ->setType($item['type'])
                ->setDescription($item['description'])
            ;

            $manager->persist($attack);
            $this->addReference($item['name'], $attack);
        }

        $manager->flush();
    }

    private function attacksData() :array
    {
        return [
            [
                'name' => 'Flammèche',
                'power' => 50,
                'type' => 1,
                'description' => 'Bacon ipsum dolor amet picanha leberkas venison fatback kielbasa corned beef bacon prosciutto pork boudin hamburger salami. Pig tail jerky, cow kielbasa shankle pork belly prosciutto. Shank ham biltong, kevin fatback chislic bresaola. Alcatra capicola drumstick tongue meatball bresaola pork loin prosciutto jerky chicken kielbasa.',
            ],
            [
                'name' => 'Pistolet à O',
                'power' => 50,
                'type' => 2,
                'description' => 'Bacon ipsum dolor amet picanha leberkas venison fatback kielbasa corned beef bacon prosciutto pork boudin hamburger salami. Pig tail jerky, cow kielbasa shankle pork belly prosciutto. Shank ham biltong, kevin fatback chislic bresaola. Alcatra capicola drumstick tongue meatball bresaola pork loin prosciutto jerky chicken kielbasa.',
            ],
            [
                'name' => 'Tranch Herbe',
                'power' => 50,
                'type' => 3,
                'description' => 'Bacon ipsum dolor amet picanha leberkas venison fatback kielbasa corned beef bacon prosciutto pork boudin hamburger salami. Pig tail jerky, cow kielbasa shankle pork belly prosciutto. Shank ham biltong, kevin fatback chislic bresaola. Alcatra capicola drumstick tongue meatball bresaola pork loin prosciutto jerky chicken kielbasa.',
            ],
        ];
    }
}
