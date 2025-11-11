<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Hiển thị Bảng điều khiển.
     */
    public function index()
    {
        $user = Auth::user();

        $stats = [
            'activeKeys' => $user->licenses()->where('status', 'active')->count(),
            'pendingOrders' => $user->orders()->where('status', 'pending')->count(),
            'completedOrders' => $user->orders()->where('status', 'completed')->count(),
        ];

        // Trả về view 'dashboard' và truyền dữ liệu 'stats'
        return view('dashboard', ['stats' => $stats]);
    }
}