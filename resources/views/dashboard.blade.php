<x-app-layout>
    <x-slot name="header">
        {{ __('Bảng Điều Khiển') }}
    </x-slot>

    <div id="view-dashboard">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                <div>
                    <span class="text-sm font-medium text-gray-500">License Đang Hoạt Động</span>
                    <p class="text-3xl font-bold text-gray-800" id="stat-active-keys">{{ $stats['activeKeys'] }}</p>
                </div>
                <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" /></svg>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                <div>
                    <span class="text-sm font-medium text-gray-500">Đơn Hàng Chờ Xác Nhận</span>
                    <p class="text-3xl font-bold text-gray-800" id="stat-pending-orders">{{ $stats['pendingOrders'] }}</p>
                </div>
                <div class="w-12 h-12 flex items-center justify-center bg-yellow-100 text-yellow-600 rounded-full">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                <div>
                    <span class="text-sm font-medium text-gray-500">Đơn Hàng Đã Hoàn Thành</span>
                    <p class="text-3xl font-bold text-gray-800" id="stat-completed-orders">{{ $stats['completedOrders'] }}</p>
                </div>
                <div class="w-12 h-12 flex items-center justify-center bg-green-100 text-green-600 rounded-full">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                <div>
                    <span class="text-sm font-medium text-gray-500">Hỗ Trợ / Giải Đáp</span>
                    <div class="mt-2 flex space-x-2">
                        <a href="https://t.me/Radius127" target="_blank" rel="noopener noreferrer" 
                           class="inline-flex items-center px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded-md shadow-sm">
                            Telegram
                        </a>
                        <a href="https://zalo.me/0976394430" target="_blank" rel="noopener noreferrer" 
                           class="inline-flex items-center px-3 py-1 bg-sky-500 hover:bg-sky-600 text-white text-sm font-medium rounded-md shadow-sm">
                            Zalo
                        </a>
                    </div>
                </div>
                <div class="w-12 h-12 flex items-center justify-center bg-gray-100 text-gray-600 rounded-full">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.857-.46-5.29-2.902-5.75-5.75l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>
                </div>
            </div>
            </div>
    </div>
</x-app-layout>