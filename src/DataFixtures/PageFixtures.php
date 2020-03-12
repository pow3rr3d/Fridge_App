<?php

namespace App\DataFixtures;

use App\Entity\Page;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PageFixtures extends Fixture
{
        public function load(ObjectManager $manager)
    {
        $page = new Page();
        $page->setName('Home');
        $page->setPath('');
        $page->setIsActive(true);
        
        $manager->persist($page);
        $manager->flush();
    }
}