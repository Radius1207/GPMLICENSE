<x-app-layout>
    <x-slot name="header">
        {{ __('Quản Lý Đơn Hàng') }}
    </x-slot>

    <div id="view-orders">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 border-b">
                <h3 class="text-xl font-bold text-gray-800">Lịch Sử Đơn Hàng</h3>
            </div>
            
            <div class="divide-y divide-gray-200">
                
                @if ($orders->isNotEmpty())
                    @foreach ($orders as $order)
                        @php
                            $statusClass = $order->status === 'completed' ? 'text-green-700 bg-green-100' : ($order->status === 'pending' ? 'text-yellow-700 bg-yellow-100' : 'text-red-700 bg-red-100');
                        @endphp
                        <div class="p-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                            <div>
                                <p class="text-sm font-semibold text-gray-800">{{ $order->packageName }}</p>
                                <p class="text-sm text-gray-500">Mã: {{ $order->paymentCode }} | Giá: {{ $order->price }}</p>
                            </div>
                            <div class="mt-2 md:mt-0 text-left md:text-right">
                                <span class="text-xs {{ $statusClass }} px-2 py-1 rounded-full capitalize">{{ $order->status }}</span>
                                <span class="text-sm text-gray-500 ml-3">{{ $order->created_at->format('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="p-6 text-center text-gray-500">Bạn chưa có đơn hàng nào.</div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>