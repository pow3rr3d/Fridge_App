<?php

namespace App\DataFixtures;

use App\Entity\Content;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class ContentFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
       $memo = new Content();
       $memo->setName("Une actu comme une autre");
       $memo->setContent("<p><em><strong><span style=\"font-size:16px\">Hello <span style=\"color:#e74c3c\">World</span>, </span></strong></em><br />
<br />
<em>Ceci est une superbe actu. </em></p>");
       $memo->setIsActive(true);
       $memo->setCreatedAt(new \DateTime('now'));

        $manager->persist($memo);
        $manager->flush();
    }
}
