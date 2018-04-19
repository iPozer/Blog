<?php


namespace VA\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AboutController extends Controller
{
    /**
     * @Route("/about", name = "VA_blog_about", methods = {"GET"})
     */
    public function indexAction()
    {
        return $this->render('About/about.html.twig');
    }
}