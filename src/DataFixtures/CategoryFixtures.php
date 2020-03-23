<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Content;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class CategoryFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName("Category 1");

        $category2 = new Category();
        $category2->setName("Category 2");

        $category3 = new Category();
        $category3->setName("Category 3");

        $manager->persist($category);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->flush();
    }
}
