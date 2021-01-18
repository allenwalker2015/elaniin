<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public const SEARCH_BY_SKU = 1;
    public const SEARCH_BY_NAME = 2;
    protected $table = "product";

    protected $primaryKey = "id_product";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SKU', 'nombre', 'cantidad', 'precio', 'descripcion', 'imagen'
    ];


    public function scopeSearchByName($query, $text)
    {
        return $query->where('nombre', 'like', "%$text%");
    }

    public function scopeSearchBySKU($query, $text)
    {
        return $query->where('SKU', 'like', "%$text%");
    }


}
