<?php

namespace App\Modules\Catalog\Application\Queries;

use App\Modules\Catalog\Domain\Enums\ProductStatus;
use App\Modules\Catalog\Infrastructure\Persistence\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
final class ListPublishedProducts
{
    public function handle(): LengthAwarePaginator
    {
        return Product::query()
            ->where('status', ProductStatus::Published->value)
            ->OrderByDesc('id')
            ->paginate(10);
    }

}