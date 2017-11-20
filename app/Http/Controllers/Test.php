<?php
/**
 * Created by PhpStorm.
 * User: r.ron
 * Date: 11/18/2017
 * Time: 10:02 AM
 */

namespace App\Http\Controllers;


use App\ProductOrder;
use App\Order;

class Test extends Controller
{
    public function addproduct()
    {
        $order2 = new Order();
        $order2->order_date = "2017-12-22";
        $order2->save();

        $product = new ProductOrder();
        $product->description = "HelloProduct2";
        $product->order_id = $order2->id;
        $product->save();
        echo $order2->productitems;
    }
}