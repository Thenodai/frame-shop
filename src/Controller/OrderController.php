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
    /**
     * @var OrderRepository
     */
    private $orderRepository;

    /**
     * @var OrderManager
     */
    private $orderManager;

    /**
     * @var FilterManager
     */
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
            $totalPages = $this->filterManager->countPagesNeeded(
                $this->orderRepository->findTotalPagesByFilter($filter)
            );
        } else {
            $orders = $this->orderRepository->findAll($filter);
            $totalPages = $this->filterManager->countPagesNeeded(
                $this->orderRepository->findTotalPages()
            );
        }
        $queryString = $this->filterManager->getQueryString($request);

        return $this->render('order.html.twig', [
            'orders' => $orders,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'queryString' => $queryString
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
