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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use AppBundle\Entity\Users;
use AppBundle\Entity\Posts;
use AppBundle\Form\UserRegisterFormType;

class HomeController extends Controller
{
    /**
     * @Route("/", name = "VA_blog_homepage")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Posts')->findAll();
        $params = 0;


        return $this->render('home/show.html.twig', [
            'posts'=>$posts,
            'params' => $params
        ]);

    }

    /**
     * @Route("/{id}", name = "VA_blog_post")
     */
    public function showPostAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Posts')->findAll();
//        dump();

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
     * @Route("/new", name = "VA_blog_newUser")
     * @Method("POST")
     */

    public function registerAction(Request $request)
    {

//        $form = $this->createForm(UserRegisterFormType::class);
//
//        $form->handleRequest($request);
//
//        if($form->isSubmitted()) {
//            dump($form->getData());die;
//        }
        $params = $request->request->all();

        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Posts')->findAll();
        return $this->render('home/show.html.twig', [
            'posts'=>$posts,
            'params' => $params
        ]);

//            $users = new Users();
//            $users->setName('Mary');
//            $users->setLogin('MMM45');
//            $users->setGender('F');
//            $users->setBday('08-04-1979');
//            $users->setPassword('fjekrt');
//
//        $posts = new Posts();
//
//                $posts->setTitle('About us');
//                $posts->setAuthor('Lenny Welsh');
//                $posts->setSubject("Lorem ipsum sic transic gloria mundi");
//                $posts->setCreatedDate( new \DateTime("-1 month"));
//                $posts->setCreatedTime('15:44:12');
//                $posts->setUser($users);
//
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($users);
//            $em->persist($posts);
//            $em->flush();




//        return new Response('User registered!');
    }


}