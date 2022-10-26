<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SchoolController extends AbstractController
{
    #[Route('/school', name: 'app_school')]
    public function index(): Response
    {
        return $this->render('school/index.html.twig');
    }

    #[Route('/school/course', name: 'app_school_course')]
    public function course(): Response
    {
        return $this->render('school/course.html.twig');
    }
}
