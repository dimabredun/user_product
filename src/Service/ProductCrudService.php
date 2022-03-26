<?php

namespace App\Service;

use App\Entity\Product;
use App\Repository\ProductRepository;

class ProductCrudService
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function read(int $id): ?Product
    {
        return $this->productRepository->find($id);
    }
}