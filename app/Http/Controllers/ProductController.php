<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Hiển thị trang Landing Page (nếu chưa đăng nhập)
     */
    public function showLandingPage()
    {
        // Nếu đã đăng nhập, chuyển đến dashboard
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }
        
        // Nếu chưa, hiển thị view 'welcome'
        // (Chúng ta sẽ sửa 'welcome.blade.php' thành Landing Page)
        return view('welcome');
    }

    /**
     * Hiển thị trang Sản Phẩm (Bảng giá)
     */
    public function index()
    {
        // Trả về view 'products'
        return view('products');
    }
}