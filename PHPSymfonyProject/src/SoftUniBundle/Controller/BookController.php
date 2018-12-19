<?php

namespace SoftUniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends Controller
{
    /**
     * @Route("book/create", name="book_create")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction($name)
    {
        return $this->render('book/create.html.twig');
    }
}
