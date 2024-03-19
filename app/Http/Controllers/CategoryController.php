<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }

    public function food_beverage()
    {
        $listfoodbeverage = 
        [
            ['name' => 'Pempek Palembang', 'description' => 'Ikan Tengiri olahan yang dijadikan berbagai macam bentuk'],
            ['name' => 'Nasi Goreng Ikan Asin', 'description' => 'Nasi goreng khas POS dengan taburan ikan asin asli dari nelayan']
        ];

        return view('category.products')
        ->with('judul', 'Daftar Food Beverages')
        ->with('products', $listfoodbeverage);
    }

    public function beauty_health()
    {
        $listbeautyhealth = 
        [
            ['name' => 'Sun Screen SPF 30', 'description' => 'Gel pelindung kulit dari matahari.'],
            ['name' => 'Moisturizer', 'description' => 'Pelembab kulit digunakan untuk pengguna yang memiliki kulit sensitif.']
        ];

        return view('category.products')
        ->with('judul', 'Daftar Beauty Health')
        ->with('products', $listbeautyhealth);
    }

    public function home_care()
    {
        $listhomecare = 
        [
            ['name' => 'Sapu', 'description' => 'Sebuah alat untuk membersihkan lantai dari debu.'],
            ['name' => 'Lap Microfiber', 'description' => 'Lap serbaguna yang terbuat dari serat microfiber.']
        ];

        return view('category.products')
        ->with('judul', 'Daftar Home Care')
        ->with('products', $listhomecare);
    }

    public function baby_kid()
    {
        $listbabykid = 
        [
            ['name' => 'Bedak Bayi', 'description' => 'bedak untuk pelembab kulit pencegah bayi terhadap ruam.'],
            ['name' => 'Diapers', 'description' => 'Diapers untuk bayi .']
        ];

        return view('category.products')
        ->with('judul', 'Daftar Baby Kid')
        ->with('products', $listbabykid);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
