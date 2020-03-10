<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setName('Powerred');
        $user->setSurname('adn');
        $user->setEmail('powerred@gmail.com');
        $user->setPassword($this->encoder->encodePassword($user, '123456'));
        $user->setUsername('Powerred');
        $user->setRoles('ROLE_ADMIN');

        $user2 = new User();
        $user2->setName('demo');
        $user2->setSurname('demo');
        $user2->setEmail('demo@email.fr');
        $user2->setPassword($this->encoder->encodePassword($user, 'demo'));
        $user2->setUsername('demo');
        $user2->setRoles('ROLE_USER');

        $user3 = new User();
        $user3->setName('Greg');
        $user3->setSurname('the brain fucker');
        $user3->setEmail('greg@brainfucker.fr');
        $user3->setPassword($this->encoder->encodePassword($user, '123456789'));
        $user3->setUsername('gregator');
        $user3->setRoles('ROLE_USER');

        $manager->persist($user);
        $manager->persist($user2);
        $manager->persist($user3);
        $manager->flush();
    }
}
