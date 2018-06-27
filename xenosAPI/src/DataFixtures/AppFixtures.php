<?php
// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Planet;
use App\Entity\Zone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadPlanets($manager);
    }

    private function loadPlanets(ObjectManager $manager)
    {
        foreach ($this->getPlanetData() as [$name, $description, $img, $colorStart, $colorEnd, $video]) {
            $planet = new Planet();
            $planet->setName($name);
            $planet->setDescription($description);
            $planet->setImg($img);
            $planet->setColorStart($colorStart);
            $planet->setColorEnd($colorEnd);
            $planet->setVideo($video);

            foreach ($this->getZoneData() as [$planetName, $Zonename, $description, $price, $temperature, $gravity, $distance, $radius]) {
                $zone = new Zone();

                if ($planetName === $name) {
                    $zone->setPlanet($planet);
                    $manager->persist($zone);
                }


            }




            $manager->persist($planet);

        }
        $manager->flush();
    }

    private function getPlanetData(): array
    {
        return [
            // $PlanetData = [$name, $description, $img, $colorStart, $colorEnd, $video];
            ['Mars', 'description de Mars', null, 'tomato', 'orange', 'https://youtu.be/CvFH_6DNRCY'],
            ['Venus', 'description de Venus', null, 'green', 'aqua', null],
            ['Uranus', 'description de Uranus', null, 'blue', 'cyan', null],
            ['Lune', 'description de Lune', null, 'grey', 'white', null],
        ];
    }

    private function getZoneData(): array
    {
        return [
            // $ZoneData = [$planetName, $Zonename, $description, $price, $temperature, $gravity, $distance, $radius];
            ['Mars', 'zone 1']
        ];
    }



}
