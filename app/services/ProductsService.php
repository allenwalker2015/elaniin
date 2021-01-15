<?php


namespace App\services;

use App\models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductsService
{


    public static function createProduct($data)
    {
        User::store($data);
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }


    public static function getProduct($product)
    {
        return response()->json($product);
    }

    public static function updateUsers($data, Product $product)
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

    public static function listProducts()
    {
        return response()->json(Product::all());
    }


}
