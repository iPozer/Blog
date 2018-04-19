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
        $user1->setUserName('Amelie Poullen ');
        $user1->setUserLogin('APF574');
        $user1->setUserBday(new \DateTime());
        $user1->setUserGender('F');
        $user1->setUserPassword('disuioe3w349');
        $user1->setCoverImage('beach.jpg');
        $user1->setAvatarImage('dsyph3r.jpg');
        $user1->setSlug('amelie-poullen');
        $manager->persist($user1);



        $user2 = new User();
        $user2->setUserName('Jack Morrison');
        $user2->setUserLogin('MJaCK');
        $user2->setUserBday(new \DateTime());
        $user2->setUserGender('M');
        $user2->setUserPassword('SK4ekosld');
        $user2->setCoverImage('sea.jpg');
        $user2->setAvatarImage('dscr043t943804.jpg');
        $user2->setSlug('jack-morrison');
        $manager->persist($user2);


        $user3 = new User();
        $user3->setUserName('Annabelle Lee');
        $user3->setUserLogin('StolzesHertz');
        $user3->setUserBday(new \DateTime());
        $user3->setUserGender('F');
        $user3->setUserPassword('sd50s9rek');
        $user3->setCoverImage('pug.jpg');
        $user3->setAvatarImage('dsc9430979849t88ee.jpg');
        $user3->setSlug('annabelle-lee');
        $manager->persist($user3);


        $user4 = new User();
        $user4->setUserName('Stephen Niegels');
        $user4->setUserLogin('Maroon-man3');
        $user4->setUserBday(new \DateTime());
        $user4->setUserGender('M');
        $user4->setUserPassword('e73jklsnsA');
        $user4->setCoverImage('peach.jpg');
        $user4->setAvatarImage('dsc389034ngt4ui.jpg');
        $user4->setSlug('stephen-niegels');
        $manager->persist($user4);


        $user5 = new User();
        $user5->setUserName('Ben Johnson');
        $user5->setUserLogin('BigBat_Ben');
        $user5->setUserBday(new \DateTime());
        $user5->setUserGender('M');
        $user5->setUserPassword('fooli335shAl');
        $user5->setCoverImage('rock.jpg');
        $user5->setAvatarImage('dsc6565603235fddf.jpg');
        $user5->setSlug('ben-johnson');
        $manager->persist($user5);

        $user6 = new User();
        $user6->setUserName('Louis Maple');
        $user6->setUserLogin('Maple_green');
        $user6->setUserBday(new \DateTime());
        $user6->setUserGender('F');
        $user6->setUserPassword('483r9EE43^D');
        $user6->setCoverImage('leaf.jpg');
        $user6->setAvatarImage('dsc53ert4er3g123erf');
        $user6->setSlug('louis-maple');
        $manager->persist($user6);

        $user7 = new User();
        $user7->setUserName('Simon Kramer');
        $user7->setUserLogin('jjenks');
        $user7->setUserBday(new \DateTime());
        $user7->setUserGender('M');
        $user7->setUserPassword('564ds83Moo');
        $user7->setCoverImage('surface.jpg');
        $user7->setAvatarImage('dsc5505w350');
        $user7->setSlug('simon-kramer');
        $manager->persist($user7);

        $user8 = new User();
        $user8->setUserName('Angela Lowell');
        $user8->setUserLogin('angel-Berry');
        $user8->setUserBday(new \DateTime());
        $user8->setUserGender('F');
        $user8->setUserPassword('4pepsi890');
        $user8->setCoverImage('raspberry.jpg');
        $user8->setAvatarImage('dcs50ewre4550eww');
        $user8->setSlug('angela-lowell');
        $manager->persist($user8);



        $manager->flush();
    }
}

