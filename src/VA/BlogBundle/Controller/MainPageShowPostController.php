<?php


namespace VA\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainPageShowPostController extends Controller
{
    /**
     * @Route("/post{id}", name = "VA_blog_post", methods = {"GET"})
     */
    public function indexPostAction($id)
    {

        return $this->render('Home/indexPost.html.twig', [
            'id'=>$id
        ]);
    }
}