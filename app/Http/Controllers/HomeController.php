<?php

namespace App\Http\Controllers;
;
use Illuminate\Http\Request;
use LoginActivity;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $user->name = '測試帳號';
        $user->save();
        return view('home');
    }
}
