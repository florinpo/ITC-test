<?php
/**
 * User: florinpo
 * Date: 20/05/2017
 * Time: 12:22
 */

namespace App\Controller;

use App\Repository\ProductRepositoryWeb as ProductRepositoryWeb;
use Exception as Exception;

class ProductController
{
    public function handleRequest()
    {
        $op = isset($_GET['op']) ?  $_GET['op'] : null;
        $id = !empty($_GET['id']) ?  $_GET['id'] : null;

        try {
            if (!$op || $op == 'list') {
                $this->actionList();
            } elseif ($op == 'detail' && $id) {
                $this->actionView($id);
            } else {
                $this->showError("Page not found", "Page for operation ".$op." was not found!");
            }
        } catch ( Exception $e ) {
            $this->showError("Application error", $e->getMessage());
        }
    }

    public function actionList()
    {
        $repository = new ProductRepositoryWeb();
        $result = $repository->findAll();

        if (isset($result['result'])) {
            $products = $result['result'];
        } else {
            throw new Exception($result['error']);
        }

        include 'src/App/Views/list.php';
    }

    public function actionView($id)
    {
        $repository = new ProductRepositoryWeb();
        $result = $repository->findOneById($id);

        if (isset($result['result'])) {
            $product = $result['result'];
        } else {
            throw new Exception($result['error']);
        }

        include 'src/App/Views/detail.php';
    }

    public function showError($title, $message) {
        include 'src/App/Views/error.php';
    }
}
