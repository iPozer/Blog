<?php
/**
 * Created by PhpStorm.
 * User: valeria
 * Date: 4/6/18
 * Time: 8:04 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends Controller
{
    /**
     * @Route("/", name = "VA_blog_homepage")
     */
    public function showAction()
    {

        return $this->render('home/show.html.twig');

    }

    public function loginAction()
    {
        //здесь должно быть соединение с моделью бд, проверка сессии и вход
    }

    public function registerAction()
    {
        //здесь будет запрос на добавление пользователя, проверка куки и сессии и т.д.
    }


}