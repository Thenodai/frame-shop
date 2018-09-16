<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends BaseController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ProductRepository();
    }

    public function index(): Response
    {
        $products = $this->repository->findAll();

        return $this->render('product.html.twig', ['products' => $products]);
    }
}
