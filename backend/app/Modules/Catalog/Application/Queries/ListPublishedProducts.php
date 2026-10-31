<?php

namespace App\Modules\Catalog\Application\Queries;

use App\Modules\Catalog\Application\Queries\Contracts\ProductReadRepository;
use Illuminate\Pagination\LengthAwarePaginator;
final class ListPublishedProducts
{
    public function __construct(private readonly ProductReadRepository $products)
    {
    }

    public function handle(): LengthAwarePaginator
    {
        return $this->products->paginatePublished(10);
    }

}