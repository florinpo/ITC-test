<?php
/**
 * User: florinpo
 * Date: 20/05/2017
 * Time: 12:35
 */

namespace App\Repository;

interface ProductRepositoryInterface
{
    public function findAll();
    public function findOneById($id);
}
