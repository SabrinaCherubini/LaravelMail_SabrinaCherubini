<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Create_prod()
    {
        return view('product.create'); // . = / nella cartella product
    }

    public function store(Request $request)
    { //metodo 1 save meno sicuro
    // dd($request->all());
    // $product= new Product(); // modello/classe creata 
    // diamo i valori compilati dal form grazie alla  request x creare il prodotto : request=product
    // $product->name=$request->name;
    // $product->description=$request->description; 
    // $product->price=$request->price;
    // dd($product); 
    
    // $product->save();
    // return redirect(route('Create_products'));
    
    
    //metodo 2 per salvare protected prende dalla fillable
     $product=Product::create([
    'name'=> $request->name,
    'description'=>$request->description,
    'price'=>$request->price,

    
     ]);
  
return redirect(route('ViewsProducts'));
}


public function viewProducts(){
    $products=Product::all(); // ci crea una collection di tutti i dati nel database appartanente alla classe product
    // dd($products);
    return view('viewproduct',compact('products'));
}







    
}






