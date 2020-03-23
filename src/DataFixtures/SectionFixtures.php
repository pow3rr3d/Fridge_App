<?php

namespace App\DataFixtures;

use App\Entity\Page;
use App\Entity\Section;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SectionFixtures extends Fixture
{

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function load(ObjectManager $manager)
    {
        $page = $this->em->getRepository(Page::class)->findOneBy(['name' => "Home"]);

        $sectionTitle = new Section();
        $sectionTitle->setName('Title 1');
        $sectionTitle->setPage($page);
        $sectionTitle->setContent("<h1 style=\"text-align:center\"><strong>BIENVENUE</strong></h1>");
        $sectionTitle->setIsActive(true);
        $sectionTitle->setCreatedAt(new \DateTime('now'));
        $sectionTitle->setOrderNb(1);

        $sectionBody = new Section();
        $sectionBody->setName('Text 1');
        $sectionBody->setPage($page);
        $sectionBody->setContent("<div class=\"col\" style=\"margin-left:100px; margin-right:-200px\">
<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><img alt=\"test\" src=\"https://images.sftcdn.net/images/t_app-cover-l,f_auto/p/befbcde0-9b36-11e6-95b9-00163ed833e7/260663710/the-test-fun-for-friends-screenshot.jpg\" style=\"height:395px; margin:10px 50px 10px 0px; width:688px\" /></strong></span></p>
</div>

<div class=\"col\">
<p><span style=\"font-size:14px\">Fridge_App is a training project based on php. This version,the lasted, is working on Symfony 5.It&#39;s the completion of few months of studies and hard works.It&#39;s possible that you find some bugs in the App. You can contact me by Github. I&#39;ll do the best to path tem as soon as possible.</span></p>

<p><span style=\"font-size:14px\">For the moment, this app is not design. It will be in the future.</span></p>

<p><span style=\"font-size:14px\">In the same idea, some optimizations will come later, you can follow them on <a href=\"https://github.com/pow3rr3d/Fridge_App\" target=\"_blank\">GitHub</a></span></p>
</div>");
        $sectionBody->setIsActive(true);
        $sectionBody->setCreatedAt(new \DateTime('now'));
        $sectionBody->setOrderNb(2);

        $manager->persist($sectionTitle);
        $manager->persist($sectionBody);
        $manager->flush();
    }
}