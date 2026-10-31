<?php

namespace App\Modules\Catalog\Infrastructure\Persistence\Repositories;

use App\Modules\Catalog\Application\Queries\Contracts\ProductReadRepository;
use App\Modules\Catalog\Domain\Enums\ProductStatus;
use App\Modules\Catalog\Infrastructure\Persistence\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;



final class EloquentProductReadRepository implements ProductReadRepository
{
    public function paginatePublished(int $perPage = 10): LengthAwarePaginator
    {
        return Product::query()->where('status', ProductStatus::Published->value)
            ->orderByDesc('id')
            ->paginate($perPage);

    }

}