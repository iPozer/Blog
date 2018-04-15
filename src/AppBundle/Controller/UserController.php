<?php
/**
 * Created by PhpStorm.
 * User: valeria
 * Date: 4/7/18
 * Time: 7:31 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Posts;
//use AppBundle\Entity\Users;


class UserController extends Controller
{
    /**
     * @Route("/{username}", name = "VA_blog_userpage")
     */

    public function showAction($username)
    {

        return $this->render('user/showUser.html.twig', [
            'username' => $username
        ]);
    }



//    /**
//     * @Route("/{username}", name = "VA_blog_userpage")
//     */
//    public function addPostsAction()
//    {
//        $posts = new Posts();
//
//        $posts->setTitle('New Title');
//        $posts->setAuthor('John Moe');
//        $posts->setSubject("Lorem ipsum......");
//        $posts->setCreatedDate("2017-06-28");
//        $posts->setCreatedTime('07:54:08');
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($posts);
//        $em->flush();
//
//        return new Response('post added');
//
//
//    }


}