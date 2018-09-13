<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Order;
use App\Repository\OrderRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends BaseController
{
    private $orderRepository;

    public function __construct()
    {
        $this->orderRepository = new OrderRepository();
    }

    public function index(): Response
    {
        $orders = $this->orderRepository->findAll();

        return $this->render('order.html.twig', ['orders' => $orders]);
    }

    public function create(Request $request): Response
    {
        $order = new Order();

        //!post redirectToRoute();
        if ($request->isMethod('post')) {
            $order->setAddress($request->get('address'));
        }

        $orders = $this->orderRepository->findAll();
        return $this->render('order.html.twig', ['orders' => $orders]);
    }
}
