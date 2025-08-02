<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function product($id){
        $json = Storage::disk('public')->get('basics.json');
        $basics = json_decode($json, true);
        $productList = array();
        foreach ($basics[0]['products'] as $item){
            if($item['product-category'] == $id){
                array_push($productList, $item);
            }
        }
        $productCategory = array();
        foreach ($basics[0]['product-categories'] as $item){
            if($item['id'] == $id){
                array_push($productCategory, $item);
            }
        }
        $productCategory = $productCategory[0];
        return view('product', compact('productList', 'productCategory'));
    }
    public function contact(){
        return view('contact');
    }
    public function qualityassurance(){
        return view('qualityassurance');
    }
    public function certification(){
        return view('certification');
    }
    public function research(){
        return view('researchanddevelopment');
    }
}
