<?php


namespace VA\BlogBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VA\BlogBundle\Entity\User;


class UserFixture extends Fixture implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setUserName('Amelie');
        $user1->setUserLogin('AmeliePoullen574');
        $user1->setUserBday(new \DateTime());
        $user1->setUserPassword('disuioe3w349');
        $user1->setCoverImage('beach.jpg');
        $user1->setAvatarImage('dsyph3r.jpg');
        $user1->setSlug('amelie_poulllen');

        $manager->persist($user1);

        $manager->flush();
    }
}