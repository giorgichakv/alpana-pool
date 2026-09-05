<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = DB::table('visitors')->orderBy('id', 'desc')->paginate(20);
        return view('visitors.index', compact('visitors'));
    }
}


