<?php
declare(strict_types=1);

namespace App\Model;

class Order
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $urgency;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress(string $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * @param string $urgency
     * @return $this
     */
    public function setUrgency(string $urgency)
    {
        $this->urgency = $urgency;

        return $this;
    }
}
