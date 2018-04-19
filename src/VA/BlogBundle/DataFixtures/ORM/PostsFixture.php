<?php


namespace VA\BlogBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VA\BlogBundle\Entity\User;
use VA\BlogBundle\Entity\Posts;


class PostsFixture extends Fixture implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $posts1 = new Posts();
        $posts1->setTitle('Good job!');
        $posts1->setUser($manager->merge($this->getReference('user-1')));
        $posts1->setPost('A veeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeery short post');
        $posts1->setImage('beach.jpg');
        $posts1->setTags('nice, employment, philosophy, interpretations, own view, work, job');
        $posts1->setCreatedAt(new \DateTime());
        $posts1->setUpdatedAt($posts1->getCreatedAt());
        $posts1->setSlug('good-job');

        $manager->persist($posts1);

        $manager->flush();
    }
}