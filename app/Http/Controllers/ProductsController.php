<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreationRequest;
use App\models\Product;
use App\services\ProductsService;
use Auth;
use Illuminate\Http\Request;


class ProductsController extends Controller
{

    public function create(ProductCreationRequest $request)
    {
        return ProductsService::createProduct($request->only(['SKU', 'nombre', 'cantidad', 'precio', 'descripcion', 'imagen']));
    }

    public function read(Product $product)
    {
        return ProductsService::getProduct($product);
    }

    public function update(ProductCreationRequest $request, Product $product)
    {
        return ProductsService::updateProduct($request->only(['SKU', 'nombre', 'cantidad', 'precio', 'descripcion', 'imagen']), $product);
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
