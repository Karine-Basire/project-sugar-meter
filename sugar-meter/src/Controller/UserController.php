<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        $user = (new User())
            ->setEmail('mail@mail.com');
        $user->setPassword($passwordHasver->hashPassword($user, 'aaaaa'));
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
