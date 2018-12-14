<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ShareGroupController extends BaseController
{
    /**
     * @Route("/share/group", name="share_group")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ShareGroupController.php',
        ]);
    }
}
