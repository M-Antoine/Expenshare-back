<?php

namespace App\Controller;


use App\Entity\Expense;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/expense")
 */


class ExpenseController extends BaseController
{
    /**
     * @Route("/", name="expense_list", methods="GET")
     */
    public function index(Request $request): Response
    {
        $books = $this->getDoctrine()->getRepository(Expense::class)
            ->createQueryBuilder('e')
            ->select('e', 'c', 'p')
            ->join('e.category', 'c')
            ->join('e.person', 'p')
            ->getQuery()
            ->getArrayResult();

        if ($request->isXmlHttpRequest()) {
            return $this->json($books);
        } else {

        }
    }

}
