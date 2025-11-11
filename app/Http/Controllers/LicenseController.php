<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LicenseController extends Controller
{
    /**
     * Hiển thị trang "License Của Tôi"
     */
    public function index()
    {
        $user = Auth::user();
        $licenses = $user->licenses()->latest()->get();

        return view('my-licenses', ['licenses' => $licenses]);
    }
}