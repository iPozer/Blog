<?php
/**
 * Created by PhpStorm.
 * User: valeria
 * Date: 4/8/18
 * Time: 1:33 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AboutController extends Controller
{
    /**
     * @Route("/about", name = "VA_blog_about")
     */
    public function showAction()
    {

        return $this->render('about/about.html.twig');
    }

}