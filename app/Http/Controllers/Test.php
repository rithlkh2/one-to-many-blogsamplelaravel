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
        /*$order = new Order();
        $order->order_date = "2017-02-02";
        $order->save();*/
        $product = new ProductOrder();
        $product->description = "HelloProduct";
        $product->order_id = 5;
        $product->save();
        echo "saved";
    }
}