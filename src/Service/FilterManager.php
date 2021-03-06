<?php
declare(strict_types=1);

namespace App\Service;

use App\Entity\Filter;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class FilterManager
{
    const DEFAULT_RECORDS_PER_PAGE = 10;

    public function createFilter(ParameterBag $query, string $page): Filter
    {
        return (new Filter())
            ->setData($query->all())
            ->setOffset($this->countRecordsOffset($page));
    }

    public function countPagesNeeded(string $recordsTotal): float
    {
        return ceil($recordsTotal / self::DEFAULT_RECORDS_PER_PAGE);
    }

    public function countRecordsOffset(string $page): int
    {
        return (int)($page - 1) * self::DEFAULT_RECORDS_PER_PAGE;
    }

    public function isFilterApplied(ParameterBag $query): bool
    {
        foreach ($query->all() as $item) {
            if (!empty($item)) {
                return true;
            }
        }

        return false;
    }

    public function getQueryString(Request $request): string
    {
        $queryString = $request->getQueryString();

        if ($queryString !== null) {
            return $queryString = '?' . $queryString;
        }

        return '';
    }
}
