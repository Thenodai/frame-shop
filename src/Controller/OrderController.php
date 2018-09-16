<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\OrderRepository;
use App\Service\FilterManager;
use App\Service\OrderManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends BaseController
{
    private $orderRepository;
    private $orderManager;
    private $filterManager;

    public function __construct()
    {
        $this->orderRepository = new OrderRepository();
        $this->orderManager = new OrderManager();
        $this->filterManager = new FilterManager();
    }

    public function index(Request $request, string $page): Response
    {
        $filter = $this->filterManager->createFilter($request->query, $page);

        if ($this->filterManager->isFilterApplied($request->query)) {
            $orders = $this->orderRepository->findByFilter($filter);
        } else {
            $orders = $this->orderRepository->findAll($filter);
        }

        if (count($orders) < FilterManager::DEFAULT_RECORDS_PER_PAGE) {
            $totalPages = 1;
        } else {
            $totalPages = $this->filterManager->countPagesNeeded(
                $this->orderRepository->findCount()
            );
        }

        return $this->render('order.html.twig', [
                'orders' => $orders,
                'currentPage' => $page,
                'totalPages' => $totalPages
            ]);
    }

    public function create(Request $request): Response
    {
        if ($request->isMethod('post')) {
            if ($this->orderManager->isRequestValid($request)) {
                $databaseUpdated = $this->orderRepository->save(
                    $this->orderManager->createOrder($request)
                );
                if ($databaseUpdated === true) {
                    return $this->redirect('/order', Response::HTTP_CREATED);
                }
            }
        }

        return new RedirectResponse('/product');
    }
}
