<?php

namespace App\Http\Controllers;
use App\Mail\contactmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Master extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function login(){
        return view('login');
    }

    public function cart(){
        return view('cart');
    }

    public function wishlist(){
        return view('wishlist');
    }

    public function shoplist(){
        return view('shoplist');
    }

    public function comingsoon(){
        return view('comingsoon');
    }

    public function branches(){
        return view('branches');
    }

    public function pharmacies(){
        return view('pharmacies');
    }

    public function online(){
        return view('online');
    }

    public function contact(){
        return view('contact');
    }
    public function mail(Request $request){

//        return $request->name;
        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'message'=>'required'
            ]
        );

        $data= [

            $request->input('name'),
            $request->input('email'),
            $request->input('subject'),
            $request->input('message'),

            ];


       Mail::to('yehiafml20333@gmail.com')->send(new contactmail($data));

       return redirect('/index');


    }

}
