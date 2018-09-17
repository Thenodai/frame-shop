<?php
require_once '../../vendor/autoload.php';

use App\Entity\Order;
use App\Repository\OrderRepository;
use Faker\Factory;

$orderRepository = new OrderRepository();
$faker = Factory::create();

for ($i = 0; $i < 60; $i++) {
    $order = (new Order())
        ->setName($faker->name)
        ->setAddress($faker->address)
        ->setDeliveryType($faker->randomElement(['DPD', 'LP (Lithuanian Post)']))
        ->setUrgent($faker->boolean());

    $status = $orderRepository->save($order);
    echo $status;
}
