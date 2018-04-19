<?php


namespace VA\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainPageController extends Controller
{
    /**
     * @Route("/", name = "VA_blog_mainpage", methods = {"GET"})
     */
    public function indexAction()
    {
        return $this->render('Home/index.html.twig');
    }


}