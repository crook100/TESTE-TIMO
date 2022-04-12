<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    public function index($id)
    {
        $product = Product::with("category")->where("id", $id)->first();
        $price = $product->price;
        $category_fee = 0;

        if($product->category->fee > 0)
        {
            $category_fee = $product->category->fee / 100;
        }

        $price_per_installment = $price * $category_fee;

        return response()->json([
            "price" => $price,
            "price_per_installment" => $price_per_installment
        ]);
    }
}
