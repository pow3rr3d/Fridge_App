<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker =  Factory::create('fr_FR');
        for($i = 0; $i <100; $i++)
        {
            $product = new Product();
            $product
                ->setName($faker->words(1, true))
                ->setDescription($faker->words(5, true))
                ->setImage($faker->words(1,true));
            $manager->persist($product);
        }
        $manager->flush();
    }
}
