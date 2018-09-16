<?php
declare(strict_types=1);

namespace App\Fixtures;

use App\Entity\Order;
use App\Repository\OrderRepository;
use Faker\Factory;

class FixturesGenerator
{
    public function createOrdersFixtures()
    {
        $orderRepository = new OrderRepository();
        $faker = Factory::create();

        for ($i = 0; $i < 60; $i++) {
            $order = (new Order())
                ->setName($faker->name)
                ->setAddress($faker->address)
                ->setDeliveryType($faker->randomElement(['DPD', 'LP (Lithuanian Post)']))
                ->setUrgent($faker->boolean());

            $status = $orderRepository->save($order);

            if ($status === false) {
                die();
            }
        }
    }
}
