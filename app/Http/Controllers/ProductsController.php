<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProductCreationRequest;
use App\models\Product;
use App\services\ProductsService;
use Auth;
use Illuminate\Http\Request;


class ProductsController extends Controller
{

    public function create(ProductCreationRequest $request)
    {
        return ProductsService::createProduct($request->all());
    }

    public function read(Product $product)
    {
        return ProductsService::getProduct($product);
    }

    public function update(Request $request, Product $product)
    {
        return ProductsService::updateProduct($product);
    }

    public function delete(Product $product)
    {
        return ProductsService::deleteProduct($product);
    }

    public function list(Request $request)
    {
        return ProductsService::listProducts($request);
    }


}
