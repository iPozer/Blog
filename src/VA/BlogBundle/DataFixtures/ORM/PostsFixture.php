<?php


namespace VA\BlogBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VA\BlogBundle\Entity\User;
use VA\BlogBundle\Entity\Posts;



class PostsFixture extends Fixture implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $post = new Posts();
        $post->setTitle('A day with Symfony3');
        $post->setUser($manager->merge($this->getReference('user-1')));
        $post->setPost('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $post->setImage('beach.jpg');
        $post->setTags('symfony3, php, paradise, symblog');
        $post->setCreatedAt(new \DateTime());
        $post->setUpdatedAt($post->getCreatedAt());
        $post->setSlug('lorem-ipsum-1');
        $manager->persist($post);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}