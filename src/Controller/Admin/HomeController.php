<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class HomeController extends AbstractController
{
    /**
     * @Security("is_granted('ROLE_ADMIN')")
     */
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('Admin/home/index.html.twig');
    }

    #[Route('/test', name: 'app_test')]
    public function test(): Response
    {
        return $this->render('Admin/home/test.html.twig');
    }
}
