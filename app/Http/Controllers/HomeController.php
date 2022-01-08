<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;

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
        return view('home');
    }
    public function enkripsi(Request $request)
    {
        $encrypted = Crypt::encryptString($request->input1);
        $decrypted = Crypt::decryptString($encrypted);

        echo "Data awal : " . $request->input1;
        echo "<br/>";
        echo "<br/>";
        echo "Hasil Enkripsi : " . $encrypted;
        echo "<br/>";
        echo "<br/>";
        echo "Hasil Dekripsi : " . $decrypted;
    }
}
