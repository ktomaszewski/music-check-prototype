<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/", name="app_home")
 */
final class HomeController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('home/home.html.twig');
    }
}
