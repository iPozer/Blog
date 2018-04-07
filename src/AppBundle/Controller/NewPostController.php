<?php
/**
 * Created by PhpStorm.
 * User: valeria
 * Date: 4/8/18
 * Time: 2:25 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class NewPostController extends Controller
{
    /**
     * @Route("/{username}/new")
     */

    public function showAction($username)
    {
        return $this->render('new/new_post.html.twig', [
            'username' => $username
        ]);
    }

}