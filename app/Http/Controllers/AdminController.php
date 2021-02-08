<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
//        $contacts = DB::table('contacts')
//            ->select([
//                'first_name',
//                'last_name',
//                'email',
//                'message',
//            ])
//            ->get();
        $contacts = DB::table('contacts')
            ->get();

        return view('admin/index', ['contacts' => $contacts]);
    }

}
