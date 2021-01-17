<?php


namespace App\services;

use App\models\Product;
use App\models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductsService
{

    public static function createProduct($data)
    {
        Product::create($data);
        return response()->json([
            'message' => 'Successfully created product!'
        ], 201);
    }


    public static function getProduct($product)
    {
        return response()->json($product);
    }

    public static function updateProduct($data, Product $product)
    {
        $product->fill($data)->update();
        return response()->json($product);
    }

    public static function deleteProduct($product)
    {
        $product->delete();
        return response()->json([
            'message' => 'Successfully deleted'
        ]);
    }

    public static function listProducts(Request $request)
    {
        $productList = new Product();
        $query = $request->query;
        if ($query) {
            if ($request->type = Product::SEARCH_BY_NAME) {
                $productList->searchByName($query);

            } else if ($request->type = Product::SEARCH_BY_SKU) {
                $productList->searchBySKU($query);
            }
        }
        return response()->json(Product::paginate(10));
    }


}
