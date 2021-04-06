<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-06
 * Time: 11:08
 */

namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Models\Product;

class ProductSercice
{

//protected ProductRepository $productRepo;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepo = $productRepository;
    }

    function getAll()
    {
        return $this->productRepo->getAll();
    }

}
