<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-06
 * Time: 11:12
 */

namespace App\Http\Repositories;


use App\Models\Product;

class ProductRepository
{
    function getAll()
    {
        return Product::orderBy('id','DESC')->paginate(3);
    }

}
