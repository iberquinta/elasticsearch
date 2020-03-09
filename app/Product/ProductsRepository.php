<?php


namespace App\Product;

use Illuminate\Database\Eloquent\Collection;


interface ProductsRepository
{
    public function search(string $query = ""): Collection;
}
