<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //


    public function index(){
        $products = [
            [
                "id" => 1,
                "name" => "Bakso Aci",
                "status" => "S",
                "price" => 100000
            ],
            [
                "id" => 2,
                "name" => "Bakso Bali",
                "status" => "SR",
                "price" => 200000
            ],
            [
                "id" => 3,
                "name" => "Bakso Cecep",
                "status" => "SSR",
                "price" => 300000
            ],
            [
                "id" => 4,
                "name" => "Bakso Dodi",
                "status" => "S",
                "price" => 400000
            ],
        ];
        return view('home', ["products" => $products]);
    }

    public function single($id){
        $products = [
            [
                "id" => 1,
                "name" => "Bakso Aci",
                "status" => "S",
                "price" => 100000
            ],
            [
                "id" => 2,
                "name" => "Bakso Bali",
                "status" => "SR",
                "price" => 200000
            ],
            [
                "id" => 3,
                "name" => "Bakso Cecep",
                "status" => "SSR",
                "price" => 300000
            ],
            [
                "id" => 4,
                "name" => "Bakso Dodi",
                "status" => "S",
                "price" => 400000
            ],
        ];

        $post = [];
        foreach($products as $p){
            if($p["id"] == $id){
                $post = $p;
            }
        }
        return view('single', ["product" => $post]);
    }
}
