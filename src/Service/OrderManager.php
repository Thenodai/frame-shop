<?php
declare(strict_types=1);

namespace App\Service;

use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;

class OrderManager
{
    public function isRequestValid(Request $request): bool
    {
        if (
            $request->get('name') !== ''
            && $request->get('address') !== ''
        ) {
            return true;
        }

        return false;
    }

    public function createOrder(Request $request): Order
    {
        return (new Order())
            ->setName($request->get('name'))
            ->setAddress($request->get('address'))
            ->setDeliveryType($this->setDeliveryType($request->get('deliveryType')))
            ->setUrgent($request->get('urgent'));
    }

    private function setDeliveryType(string $deliveryType): string
    {
        if ($deliveryType === Order::DELIVERY_TYPE_DPD) {
            return $deliveryType;
        }

        return Order::DELIVERY_TYPE_LP;
    }
}
