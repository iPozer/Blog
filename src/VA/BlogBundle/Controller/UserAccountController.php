<?php


namespace VA\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserAccountController extends Controller
{
    /**
     * @Route("/username", name = "VA_blog_user", methods = {"GET"})
     */
    public function indexAction()
    {
        return $this->render('UserAccount/UserAccount.html.twig');
    }
}