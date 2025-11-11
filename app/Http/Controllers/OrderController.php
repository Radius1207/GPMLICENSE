<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Http\RedirectResponse; // THÊM DÒNG NÀY

class OrderController extends Controller
{
    /**
     * Hiển thị trang "Đơn Hàng Của Tôi"
     */
    public function index()
    {
        $user = Auth::user();
        $orders = $user->orders()->latest()->get();

        return view('orders', ['orders' => $orders]);
    }

    /**
     * SỬA ĐỔI: Xử lý submit form từ trang Products
     * Hàm này sẽ chuyển hướng (redirect) sau khi tạo đơn.
     */
    public function store(Request $request): RedirectResponse // SỬA: Thêm kiểu trả về
    {
        $validatedData = $request->validate([
            'packageName' => 'required|string|max:255',
            'price' => 'required|string|max:100',
            'paymentCode' => 'required|string|max:20|unique:orders',
        ]);

        $order = Auth::user()->orders()->create([
            'packageName' => $validatedData['packageName'],
            'price' => $validatedData['price'],
            'paymentCode' => $validatedData['paymentCode'],
            'status' => 'pending',
        ]);

        // SỬA ĐỔI: Chuyển hướng về trang "Đơn Hàng Của Tôi" (orders.index)
        // thay vì trả về JSON.
        return redirect()->route('orders.index')->with('success', 'Bạn đã đặt hàng thành công, vui lòng chờ duyệt.');
    }

    /**
     * (Dùng cho Fetch) Kiểm tra trạng thái đơn hàng.
     * Hàm này vẫn trả về JSON cho JavaScript của modal
     */
    public function status(Request $request, Order $order)
    {
        if (Auth::id() !== $order->user_id) {
            return response()->json(['message' => 'Không được phép'], 403);
        }

        return response()->json(['status' => $order->status]);
    }
}