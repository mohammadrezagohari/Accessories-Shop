<?php

namespace App\Modules\Catalog\http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Catalog\Application\Queries\ListPublishedProducts;
use App\Modules\Catalog\http\Resources\ProductResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;



class ProductController extends Controller
{
    public function index(ListPublishedProducts $query): AnonymousResourceCollection
    {
        return ProductResource::collection($query->handle());
    }

}