<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public $products = [
        [
            "id" => 1,
            "name" => "Bakso Aci",
            "description" => "Bakso Aci adalah bakso yang dibuat dari tepung. Diolah dengan sepenuh hati untuk mencapai keutuhan sejati dalam jiwa ini",
            "status" => "S",
            "price" => 100000
        ],
        [
            "id" => 2,
            "name" => "Bakso Bali",
            "description" => "Bakso Bali merupakan bakso yang berasal dari Bali. Sejak dahulu selalu menjadi kebanggaan rakyat Bali ketika mengadakan pesta",
            "status" => "SR",
            "price" => 200000
        ],
        [
            "id" => 3,
            "name" => "Bakso Cecep",
            "description" => "Bakso Cecep adalah bakso terkenal dari Bandung yang dibuat oleh orang Sunda bernama Cecep. Beliau sangat senang membuat bakso sedari muda",
            "status" => "SSR",
            "price" => 300000
        ],
        [
            "id" => 4,
            "name" => "Bakso Dodi",
            "description" => "Bakso Dodi adalah bakso terenak yang pernah dimakan oleh keluarganya. Dodi ketika membuat bakso pasti sepenuh hati dan penuh rasa syukur",
            "status" => "S",
            "price" => 400000
        ],
    ];

    public function index(){
        
        return view('home', ["products" => $this->products]);
    }

    public function single($id){
        $product = [];
        foreach($this->products as $p){
            if($p["id"] == $id){
                $product = $p;
            }
        }
        return view('single', ["product" => $product]);
    }
}
