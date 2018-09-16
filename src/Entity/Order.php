<?php
declare(strict_types=1);

namespace App\Entity;

class Order
{
    const DELIVERY_TYPE_LP = 'LP (Lithuanian Post)';
    const DELIVERY_TYPE_DPD = 'DPD';

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var bool
     */
    private $urgent;

    /**
     * @var string
     */
    private $deliveryType;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Order
     */
    public function setId(string $id): Order
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Order
     */
    public function setName(string $name): Order
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Order
     */
    public function setAddress(string $address): Order
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isUrgent()
    {
        return $this->urgent;
    }

    /**
     * @param bool|null $urgent
     * @return Order
     */
    public function setUrgent($urgent): Order
    {
        $this->urgent = $urgent;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryType(): string
    {
        return $this->deliveryType;
    }

    /**
     * @param string $type
     * @return Order
     */
    public function setDeliveryType(string $type): Order
    {
        $this->deliveryType = $type;

        return $this;
    }
}
