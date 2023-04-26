<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use app\Entity\Joueur;

class JoueurFixture extends Fixture
{
    
    private $faker;

    public function __construct(){
        $this->faker = Factory::create();

    }
    
    public function load(ObjectManager $manager): void
    {
            
        for ($i = 0; $i < 22 ; $i++) {
            
            $noms = $this->faker->lastname();
            $prenoms = $this->faker->firstname($gender = 'male');
            $position = $this->faker->randomElement(['avant','avant','arrière','arrière', 'milieu', 'milieu', 'goal']);
            
            $joueur = new Joueur();
            $joueur->setNom($noms);
            $joueur->setPrenom($prenoms);
            $joueur->setPosition($position);

            $manager->persist($joueur);

         }
        
        $manager->flush();
    }
}
