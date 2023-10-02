<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    private  $authors = array(
        array('id' => 1, 'picture' => '/images/esprit.png',
            'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ',
            'nb_books' => 100),
        array('id' => 2, 'picture' => '/images/william-shakespeare.jpg',
            'username' => ' William Shakespeare',
            'email' => ' william.shakespeare@gmail.com', 'nb_books' => 200),
        array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg',
            'username' => 'Taha Hussein',
            'email' => 'taha.hussein@gmail.com', 'nb_books' => 300));
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    // #[Route('/show/{i}/{u}', name: 'show')]
    // public function show($u,$i)
    // {
      
    //     return $this->render('author/show.html.twig', [


    //         'u' => $u,
    //         'i'=>$i
    //     ]);
    // }
    #[Route('/list')]
    public function list()
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/esprit.png',
                'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ',
                'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg',
                'username' => ' William Shakespeare',
                'email' => ' william.shakespeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg',
                'username' => 'Taha Hussein',
                'email' => 'taha.hussein@gmail.com', 'nb_books' => 300));
        return $this->render('author/list.html.twig',
            ['auth' => $authors]);
    }
    #[Route('/showAuthor/{i}', name: 'showAuth')]
    public function showAuthor($i)
    {
        return $this->render('author/showAuthor.html.twig',
            ['id' => $i,
            'authers'=>$this->authors
        ]);

    }

}