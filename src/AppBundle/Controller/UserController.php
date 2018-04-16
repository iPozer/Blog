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






}