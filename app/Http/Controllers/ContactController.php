<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(ContactFormRequest $request)
    {
        $params = $request -> all();
        $params['msg'] = $request->get('message'); //car message de base est réservé
        $params['subject'] = 'Nouveau message'; //car message de base est réservé

        DB::table('contacts')->insert([
            'first_name'=>$params['first_name'],
            'last_name'=>$params['last_name'],
            'email'=>$params['email'],
            'message'=>$params['msg'],
        ]);

//        Mail::send('emails.contact', $params, function ($m) use ($params){
//            $m->from($params['email'], $params['first_name'] . ' ' . $params['last_name']);
//            $m->to('baba@bokertovagency.com', 'Baba de BokerTov')->subject('Nouveau message');
//        });

        Mail::to(Config::get('contact.email'), Config::get('contact.name'))->send(new Contact($params));

        return redirect('contact')->with('status', 'Your message has been send !');
;
    }
}
