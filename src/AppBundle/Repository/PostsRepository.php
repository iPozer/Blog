<?php
/**
 * Created by PhpStorm.
 * User: valeria
 * Date: 4/16/18
 * Time: 6:11 PM
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;


class PostsRepository extends EntityRepository
{
//    /**
//     * @return mixed Posts[]
//     */
//    public function findAllOrderedByCreatedDate()
//    {
//        return $this->createQueryBuilder('posts')
//            ->andWhere('posts.created_date = :created_date')
//            ->setParameter('created_date', '28-06-2017')
//            ->orderBy('posts.subject')
//            ->getQuery()
//            ->execute();
//
//    }



}