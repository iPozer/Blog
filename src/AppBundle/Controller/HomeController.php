<?php
/**
 * Created by PhpStorm.
 * User: valeria
 * Date: 4/6/18
 * Time: 8:04 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use AppBundle\Entity\Users;
use AppBundle\Entity\Posts;


class HomeController extends Controller
{
    /**
     * @Route("/", name = "VA_blog_homepage")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Posts')->findAll();
//        dump($posts); die;

        return $this->render('home/show.html.twig', [
            'posts'=>$posts
        ]);

    }

    /**
     * @Route("/{id}", name = "VA_blog_post")
     */
    public function showPostAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Posts')->findAll();
//        dump($posts); die;

        return $this->render('home/showPost.html.twig', [
            'id'=>$id,
            'posts'=>$posts
        ]);
    }

    public function loginAction()
    {
        //здесь должно быть соединение с моделью бд, проверка сессии и вход
    }


    /**
     * @Route("/new")
     */

    public function registerAction()
    {



            $users = new Users();
            $users->setName('Mary');
            $users->setLogin('MMM45');
            $users->setGender('F');
            $users->setBday('08-04-1979');
            $users->setPassword('fjekrt');

            $em = $this->getDoctrine()->getManager();
            $em->persist($users);
            $em->flush();




        return new Response('User registered!');
    }


}