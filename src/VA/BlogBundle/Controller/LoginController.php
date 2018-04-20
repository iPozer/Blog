<?php


namespace VA\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VA\BlogBundle\Entity\User;
use VA\BlogBundle\Form\UserType;


class LoginController extends Controller
{
    /**
     * @Route("/auth", methods = {"POST"})
     */

    public function authAction()
    {
        
    }
}
