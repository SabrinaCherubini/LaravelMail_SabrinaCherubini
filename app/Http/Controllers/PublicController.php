<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $products = [
        ['id' => 1, 'name' => 'ingresso basic', 'price' => 50, 'permanenza' => '1 notte', 'compresi' => 'un massaggio'],
        ['id' => 2, 'name' => 'ingresso x2', 'price' => 100, 'permanenza' => '2 notti', 'compresi' => 'sauna & massaggiox2'],
        ['id' => 3, 'name' => 'ingresso star', 'price' => 200, 'permanenza' => '3notti', 'compresi' => 'ingresso piscina+massaggi']
    ];
    public function home()
    {
        return view('homepage');
    }

    public function ShowProducts()
    {
        return view('products', ['products' => $this->products]);
    }

    public function ShowDetails()
    {
        
                return view('Details');
            }
    
    


    public function ShowContacts()
    {
        return view('Contacts');
    }
}
