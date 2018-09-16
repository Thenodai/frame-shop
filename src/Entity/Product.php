<?php
declare(strict_types=1);

namespace App\Entity;

class Product
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $width;

    /**
     * @var string
     */
    private $height;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $design;

    /**
     * @var boolean|null
     */
    private $hook;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Product
     */
    public function setTitle(string $title): Product
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Product
     */
    public function setDescription(string $description): Product
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * @param string $width
     * @return Product
     */
    public function setWidth(string $width): Product
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @param string $height
     * @return Product
     */
    public function setHeight(string $height): Product
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return Product
     */
    public function setPrice(string $price): Product
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Product
     */
    public function setColor(string $color): Product
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return string
     */
    public function getDesign(): string
    {
        return $this->design;
    }

    /**
     * @param string $design
     * @return Product
     */
    public function setDesign(string $design): Product
    {
        $this->design = $design;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isHook()
    {
        return $this->hook;
    }

    /**
     * @param bool|null $hook
     * @return Product
     */
    public function setHook(bool $hook)
    {
        $this->hook = $hook;

        return $this;
    }
}
