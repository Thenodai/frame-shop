<?php
declare(strict_types=1);

namespace App\Entity;

class Filter
{
    /**
     * @var string[]
     */
    private $data;

    /**
     * @var int
     */
    private $offset;

    /**
     * @return string[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param string[] $data
     *
     * @return Filter
     */
    public function setData(array $data): Filter
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @param string $key
     *
     * @return string
     */
    public function getDataByKey(string $key): string
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }

        return '';
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return Filter
     */
    public function setOffset(int $offset): Filter
    {
        $this->offset = $offset;

        return $this;
    }
}
