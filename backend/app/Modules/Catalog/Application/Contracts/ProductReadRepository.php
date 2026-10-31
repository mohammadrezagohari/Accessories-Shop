<?php

namespace App\Modules\Catalog\Application\Contracts;

use Illuminate\Pagination\LengthAwarePaginator;

interface ProductReadRepository
{
    public function paginatePublished(
        int $perPage = 10
    ): LengthAwarePaginator;
}
