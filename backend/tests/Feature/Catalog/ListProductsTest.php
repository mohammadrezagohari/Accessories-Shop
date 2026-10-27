<?php

namespace Tests\Feature\Catalog;

use App\Modules\Catalog\Domain\Enums\ProductStatus;
use App\Modules\Catalog\Infrastructure\Persistence\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use function PHPUnit\Framework\assertJson;

class ListProductsTest extends TestCase
{
    use RefreshDatabase;    

    public function test_only_published_product_are_visible(): void
    {
        Product::query()->create([
            'name' => 'Published Product',
            'slug' => 'published-product',
            'status' => ProductStatus::Published,
        ]);

        Product::query()->create([
            'name' => 'Draft Product',
            'slug' => 'draft-product',
            'status' => ProductStatus::Draft,
        ]);


        $this->getJson('/api/v1/products')
            ->assertOk()
            ->assertJsonCount(1,'data')
            ->assertJsonPath('data.0.slug','published-product');
    }
}
