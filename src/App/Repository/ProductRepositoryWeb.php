<?php
/**
 * User: florinpo
 * Date: 20/05/2017
 * Time: 12:43
 */

namespace App\Repository;

use App\Util\ProductService as ProductService;

class ProductRepositoryWeb implements ProductRepositoryInterface
{
    public function findAll()
    {
        $service = new ProductService();
        $service->createClient();
        return $service->getList();
    }

    public function findOneById($id)
    {
        $service = new ProductService();
        $service->createClient();
        return $service->getItem($id);
    }
}
