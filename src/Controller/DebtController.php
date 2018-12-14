<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

class DebtController extends BaseController
{
    /**
     * @Route("/debt", name="debt")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DebtController.php',
        ]);
    }
}
