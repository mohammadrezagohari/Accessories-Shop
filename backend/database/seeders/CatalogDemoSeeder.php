<?php

namespace Database\Seeders;

use App\Modules\Catalog\Domain\Enums\ProductStatus;
use App\Modules\Catalog\Infrastructure\Persistence\Models\Product;
use Illuminate\Database\Seeder;

class CatalogDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->updateOrCreate(
            ['slug' => 'product-1'],
            [
                'name' => 'هدفون بی‌سیم',
                'description' => 'محصول نمونه فروشگاه',
                'status' => ProductStatus::Published,
            ]
        );
    }
}
