<x-app-layout>
    <x-slot name="header">
        {{ __('Quản Lý Đơn Hàng (Admin)') }}
    </x-slot>

    <div id="view-admin">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 border-b">
                <h3 class="text-xl font-bold text-gray-800">Các Đơn Hàng Chờ Duyệt</h3>
            </div>
            
            <div class="divide-y divide-gray-200" id="admin-orders-list">
                
                @if ($orders->isNotEmpty())
                    @foreach ($orders as $order)
                        <div class="p-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                            <div>
                                <p class="text-sm font-semibold text-gray-800">{{ $order->packageName }}</p>
                                <p class="text-sm text-gray-500">User: {{ $order->user->email }}</p>
                                <p class="text-sm text-gray-500">Mã: <strong class="text-yellow-600">{{ $order->paymentCode }}</strong> | Giá: {{ $order->price }}</p>
                                <p class="text-xs text-gray-400">Ngày đặt: {{ $order->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                            
                            <div class="mt-2 md:mt-0 flex space-x-2">
                                <button 
                                    class="admin-approve-btn bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-md text-sm font-medium"
                                    data-order-id="{{ $order->id }}">
                                    Duyệt
                                </button>
                                <button 
                                    class="admin-reject-btn bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm font-medium"
                                    data-order-id="{{ $order->id }}">
                                    Hủy
                                </button>
                            </div>
                        </div>
                    @endforeach
                @else
                     <div class="p-6 text-center text-gray-500">Không có đơn hàng nào chờ duyệt.</div>
                @endif

            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.getElementById('admin-orders-list').addEventListener('click', async (e) => {
            const approveBtn = e.target.closest('.admin-approve-btn');
            const rejectBtn = e.target.closest('.admin-reject-btn');
            const container = e.target.closest('.p-4');

            if (approveBtn) {
                const orderId = approveBtn.dataset.orderId;
                
                // SỬA ĐỔI: Hiển thị ô nhập liệu (prompt)
                const licenseKey = prompt("Vui lòng nhập License Key để cấp cho đơn hàng này:");

                // Nếu admin không nhập gì hoặc bấm "Cancel"
                if (!licenseKey || licenseKey.trim() === "") {
                    if (licenseKey !== null) { // Chỉ thông báo nếu họ nhập rỗng, không phải bấm "Cancel"
                        alert('Bạn phải nhập một license key.');
                    }
                    return; // Dừng lại
                }

                // (Tùy chọn) Thêm một bước xác nhận lại key
                if (!confirm(`Bạn có chắc muốn DUYỆT đơn hàng này với key:\n${licenseKey}\n\n(Key này sẽ được cấp cho user)`)) {
                    return;
                }
                
                // Vô hiệu hóa các nút
                approveBtn.disabled = true;
                approveBtn.textContent = 'Đang...';
                if (container.querySelector('.admin-reject-btn')) {
                    container.querySelector('.admin-reject-btn').disabled = true;
                }

                try {
                    const response = await fetch(`/admin/orders/${orderId}/approve`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        // SỬA ĐỔI: Gửi key đã nhập trong body
                        body: JSON.stringify({
                            licenseKey: licenseKey.trim()
                        })
                    });
                    const result = await response.json();
                    if (!response.ok) throw new Error(result.message || 'Lỗi không xác định');
                    
                    showMessage(result.message || 'Duyệt thành công!');
                    container.remove(); 

                } catch (error) {
                    showMessage(error.message, 'error');
                    approveBtn.disabled = false;
                    approveBtn.textContent = 'Duyệt';
                    if (container.querySelector('.admin-reject-btn')) {
                        container.querySelector('.admin-reject-btn').disabled = false;
                    }
                }
            } 
            
            // Logic nút Hủy (giữ nguyên)
            else if (rejectBtn) {
                const orderId = rejectBtn.dataset.orderId;
                
                if (!confirm('Bạn có chắc muốn HỦY đơn hàng này? Đơn hàng sẽ bị xóa vĩnh viễn.')) return;

                rejectBtn.disabled = true;
                rejectBtn.textContent = 'Đang...';
                if (container.querySelector('.admin-approve-btn')) {
                    container.querySelector('.admin-approve-btn').disabled = true;
                }

                try {
                    const response = await fetch(`/admin/orders/${orderId}/reject`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    });
                    const result = await response.json();
                    if (!response.ok) throw new Error(result.message || 'Lỗi không xác định');
                    
                    showMessage(result.message || 'Hủy đơn hàng thành công!');
                    container.remove(); 

                } catch (error) {
                    showMessage(error.message, 'error');
                    rejectBtn.disabled = false;
                    rejectBtn.textContent = 'Hủy';
                    if (container.querySelector('.admin-approve-btn')) {
                        container.querySelector('.admin-approve-btn').disabled = false;
                    }
                }
            }
        });
    </script>
    @endpush

</x-app-layout>