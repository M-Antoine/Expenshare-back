<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

class PersonController extends BaseController
    {
    /**
     * @Route("/person", name="person")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PersonController.php',
        ]);
    }
}
