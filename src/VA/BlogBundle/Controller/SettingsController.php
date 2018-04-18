<?php


namespace VA\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SettingsController extends Controller
{
    /**
     * @Route("/settings", name = "VA_blog_settings")
     */
    public function indexAction()
    {
        return $this->render('Settings/settings.html.twig');
    }
}