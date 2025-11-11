<?php

namespace App\Http\Controllers;

// Dòng "use App\Http\Controllers\Controller;" đã bị xóa ở lần sửa trước,
// điều đó là ĐÚNG, hãy giữ nguyên như vậy.

use Illuminate\Http\Request; // Đảm bảo bạn có dòng này
use Illuminate\View\View;
use App\Models\Order;
use App\Models\License;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Middleware: Đảm bảo chỉ Admin mới có thể truy cập
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check() && Auth::user()->is_admin) {
                return $next($request);
            }
            return redirect()->route('dashboard')->with('error', 'Bạn không có quyền truy cập.');
        });
    }

    /**
     * Hiển thị trang quản lý đơn hàng
     */
    public function index(): View
    {
        $pendingOrders = Order::where('status', 'pending')
                            ->with('user')
                            ->latest()
                            ->get();
        
        return view('admin.orders', [
            'orders' => $pendingOrders
        ]);
    }

    /**
     * SỬA ĐỔI: Xử lý duyệt đơn hàng (Nhận key từ Request)
     */
    // SỬA: Thêm "Request $request" vào tham số
    public function approveOrder(Request $request, Order $order): JsonResponse
    {
        // SỬA: Thêm bước Validate key
        $validated = $request->validate([
            'licenseKey' => 'required|string|min:5|max:255', // Đặt quy tắc bạn muốn, ví dụ: 'unique:licenses,keyString'
        ]);

        // 1. Kiểm tra status (giữ nguyên)
        if ($order->status !== 'pending') {
            return response()->json(['message' => 'Đơn hàng này đã được xử lý.'], 422);
        }

        // 2. Dùng DB Transaction
        try {
            DB::beginTransaction();

            // 2a. Cập nhật Order (giữ nguyên)
            $order->update([
                'status' => 'completed'
            ]);

            // 2b. Tạo License (SỬA ĐỔI)
            // Xóa dòng tự tạo key:
            // $newKey = 'GPM-' . Str::upper(Str::random(5)) . '-' . Str::upper(Str::random(5));
            
            // Lấy key từ request đã validate:
            $newKey = $validated['licenseKey'];

            License::create([
                'user_id' => $order->user_id,
                'packageName' => $order->packageName,
                'keyString' => $newKey, // Sử dụng key do admin nhập
                'status' => 'active',
                'purchaseDate' => now(),
            ]);

            DB::commit();

            return response()->json(['message' => 'Đã duyệt đơn hàng thành công!']);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Lỗi server, không thể duyệt đơn: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Xử lý hủy/xóa đơn hàng (Giữ nguyên)
     */
    public function rejectOrder(Order $order): JsonResponse
    {
        if ($order->status !== 'pending') {
            return response()->json(['message' => 'Đơn hàng này đã được xử lý.'], 422);
        }

        try {
            $order->delete();
            return response()->json(['message' => 'Đã hủy đơn hàng thành công.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Lỗi server, không thể hủy đơn: ' . $e->getMessage()], 500);
        }
    }
}