<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $products = [
        ['id' => 1, 'name' => 'ingresso basic', 'price' => 50, 'permanenza' => '1 notte', 'compresi' => 'un massaggio','url'=> "./media/card1.jpg"],
        ['id' => 2, 'name' => 'ingresso x2', 'price' => 100, 'permanenza' => '2 notti', 'compresi' => 'sauna & massaggiox2', 'url'=>"./media/card2.jpg"],
        ['id' => 3, 'name' => 'ingresso star', 'price' => 200, 'permanenza' => '3notti', 'compresi' => 'ingresso piscina+massaggi', 'url'=>"./media/card3.jpg"]
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

    public function SendMail(Request $request)
    {
        // per visual. input trasferiti sottoforma di ogg. (request)
        // dd($request->all());
        $username = $request->input('username'); // prende dal form
        $usermail = $request->usermail;  //forma contratta lo prende direttamente da request
        $body = $request->Body;

        $finalMail = new ContactMail($username, $usermail, $body);

        Mail::to($usermail)->send($finalMail);
        return redirect(Route('Contacts'))->with( 'message', 'Mail inviata!');
    }
}
