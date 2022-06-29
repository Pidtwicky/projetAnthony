<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//#[Route('/compte')]
class AccountController extends AbstractController
{
    #[Route('/compte', name: 'account')]
    public function index(): Response
    {
        return $this->render('account/index.html.twig');
    }

    #[Route('/compte/modifier-mon-mot-de-passe', name: 'account_password')]
    public function ModifyPassword(): Response
    {
        return $this->render('account/password.html.twig');
    }
}
