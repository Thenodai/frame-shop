<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends BaseController
{
    private $repository;

    public function __construct()
    {
        //todo wtf
        $this->repository = new ProductRepository();
    }

    public function index(Request $request): Response
    {
        $products = $this->repository->findProduct();
        return $this->render('product.html.twig', ['products' => $products]);
    }
}
