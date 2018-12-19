<?php

namespace SoftUniBundle\Controller;

use SoftUniBundle\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{

    /**
     *@Route("admin/all", name="admin_all")
     *
     */
    public function findAllBooksAction($name)
    {
        $books = $this->getDoctrine()->getRepository(Book::class)->findAll();

        return $this->render('admin/all',
        ['books' => $books]);
    }
}
