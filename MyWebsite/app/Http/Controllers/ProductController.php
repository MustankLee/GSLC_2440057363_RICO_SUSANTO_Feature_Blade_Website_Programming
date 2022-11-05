<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = DB::table('product')->get();
        return view('manage_page', compact('products'));
    }

    public function display_insert_form() {
        return view('insert_form');
    }

    public function insert_logic(Request $data) {
        $data->validate([
            "product_name" => "required",
            "product_price" => "required",
            "product_desc" => "required",
            "product_url" => "required"
        ]);

        DB::table('product')->insert([
            "product_name" => $data->product_name,
            "product_price" => $data->product_price,
            "product_desc" => $data->product_desc,
            "product_img_url" => $data->product_url
        ]);

        return redirect()->route('display_manage_view');
    }

    public function delete_logic(Request $data){
        DB::table('product')->where('product_id', '=', $data->product_id)->delete();
        return redirect()->route('display_manage_view');
    }
}
