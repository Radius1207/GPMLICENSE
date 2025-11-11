<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth"> <!-- SỬA: Thêm class="scroll-smooth" -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GPM License') }} - Dashboard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- SCRIPT DARKMODE: Phải đặt ở đây để tránh FOUC (chớp Nền trắng) -->
        <script>
            // Đọc trạng thái từ localStorage và áp dụng ngay lập tức
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>

        <!-- Vite (Breeze) Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Inter', sans-serif; }
            .sidebar-scroll::-webkit-scrollbar { display: none; }
            .sidebar-scroll { -ms-overflow-style: none; scrollbar-width: none; }
            
            /* CSS cho Nav Link Active */
            .active-nav-link { background-color: #EBF4FF; color: #2563EB; font-weight: 600; }
            .inactive-nav-link { color: #4B5563; }
            .inactive-nav-link:hover { background-color: #F3F4F6; color: #1F2937; }
            /* SỬA LỖI MODAL: Tăng độ ưu tiên để ẩn modal */
            div.modal-backdrop { background-color: rgba(0, 0, 0, 0.75); backdrop-filter: blur(5px); }
            div.modal-transition { transition: opacity 0.3s ease, transform 0.3s ease; }
            div.modal-hidden { opacity: 0; transform: scale(0.95); pointer-events: none; }
            div.modal-visible { opacity: 1; transform: scale(1); pointer-events: auto; }
        </style>
    </head>
    <body class="font-sans antialiased">
        <!-- SỬA DARKMODE: Thêm class dark:bg-gray-900 -->
        <div id="dashboard-app" class="dark:bg-gray-900">
            <!-- SỬA DARKMODE: Thêm class dark:bg-gray-800 -->
            <div class="flex h-screen bg-gray-100 dark:bg-gray-800">
                <!-- Sidebar -->
                <!-- SỬA DARKMODE: Thêm class dark:bg-gray-900 dark:border-gray-700 -->
                <aside class="w-64 bg-white shadow-md hidden md:block sidebar-scroll overflow-y-auto dark:bg-gray-900 dark:border-r dark:border-gray-700">
                    <div class="p-6 sticky top-0 bg-white z-10 border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" /></svg>
                            <!-- SỬA DARKMODE: Thêm class dark:text-white -->
                            <span class="ml-3 text-2xl font-bold text-gray-800 dark:text-white">GPM License</span>
                        </div>
                    </div>
                    <nav class="mt-6 px-4">
                        <!-- SỬA DARKMODE: Thêm class dark:text-gray-400 -->
                        <span class="text-gray-500 text-xs font-semibold uppercase px-3 dark:text-gray-400">Menu</span>
                        <ul class="mt-2 space-y-1">
                            <!-- SỬA DARKMODE: Thêm class dark:hover:bg-gray-700 dark:hover:text-white dark:text-gray-300 -->
                            <!-- SỬA LỖI ROUTE: Dùng route() và request()->routeIs() -->
                            <li><a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active-nav-link' : 'inactive-nav-link dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' }} flex items-center px-3 py-3 rounded-lg"><svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>Bảng Điều Khiển</a></li>
                            <li><a href="{{ route('products') }}" class="nav-link {{ request()->routeIs('products') ? 'active-nav-link' : 'inactive-nav-link dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' }} flex items-center px-3 py-3 rounded-lg"><svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5c0-.621.504-1.125 1.125-1.125h3.375c.621 0 1.125.504 1.125 1.125V21h-5.625Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6 21v-7.5c0-.621.504-1.125 1.125-1.125h3.375c.621 0 1.125.504 1.125 1.125V21H6Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M6.375 12v.001h11.25V12a9 9 0 0 0-11.25 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 12v-1.5c0-.621-.504-1.125-1.125-1.125H9.375c-.621 0-1.125.504-1.125 1.125V12m6.75 0v-1.5c0-.621-.504-1.125-1.125-1.125h-1.5c-.621 0-1.125.504-1.125 1.125V12" /></svg>Sản Phẩm</a></li>
                            <li><a href="{{ route('licenses.index') }}" class="nav-link {{ request()->routeIs('licenses.index') ? 'active-nav-link' : 'inactive-nav-link dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' }} flex items-center px-3 py-3 rounded-lg"><svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" /></svg>License Của Tôi</a></li>
                            <li><a href="{{ route('orders.index') }}" class="nav-link {{ request()->routeIs('orders.index') ? 'active-nav-link' : 'inactive-nav-link dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' }} flex items-center px-3 py-3 rounded-lg"><svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.125 1.125 0 0 1 0 2.25H5.625a1.125 1.125 0 0 1 0-2.25Z" /></svg>Quản Lý Đơn Hàng</a></li>
                        </ul>
                        
                        @if(Auth::user()->is_admin)
                            <!-- SỬA DARKMODE: Thêm class dark:text-gray-400 -->
                            <span class="text-gray-500 text-xs font-semibold uppercase px-3 mt-6 block dark:text-gray-400">Admin</span>
                            <ul class="mt-2 space-y-1">
                                <!-- SỬA DARKMODE: Thêm class dark:hover:bg-gray-700 dark:hover:text-white dark:text-gray-300 -->
                                <li><a href="{{ route('admin.orders.index') }}" class="nav-link {{ request()->routeIs('admin.orders.index') ? 'active-nav-link' : 'inactive-nav-link dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' }} flex items-center px-3 py-3 rounded-lg"><svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>Quản Lý Đơn Hàng</a></li>
                            </ul>
                        @endif
                    </nav>
                </aside>

                <!-- Main Content Area -->
                <div class="flex-1 flex flex-col overflow-hidden">
                    <!-- Header Dashboard -->
                    <!-- SỬA DARKMODE: Thêm class dark:bg-gray-900 dark:border-gray-700 -->
                    <header class="bg-white shadow-sm border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
                        <div class="px-4 sm:px-6 lg:px-8">
                            <div class="flex justify-between items-center h-16">
                                <!-- Mobile Menu Button -->
                                <!-- SỬA DARKMODE: Thêm class dark:text-gray-400 -->
                                <button class="md:hidden p-2 text-gray-600 dark:text-gray-400" id="mobile-sidebar-toggle">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                                </button>
                                <!-- Title -->
                                <div class="hidden md:block">
                                    <!-- SỬA DARKMODE: Thêm class dark:text-white -->
                                    <span class="text-xl font-bold text-gray-800 dark:text-white" id="dashboard-title">{{ $header }}</span>
                                </div>
                                <!-- Profile Dropdown -->
                                <div class="flex items-center">
                                    <!-- SỬA DARKMODE: Thêm class dark:text-gray-300 -->
                                    <span class="text-sm text-gray-600 mr-3 truncate max-w-[200px] dark:text-gray-300" id="user-email-display-dashboard">{{ Auth::user()->email }}</span>
                                    
                                    <!-- NÚT DARKMODE -->
                                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm p-2.5 mr-2">
                                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zM10 18a1 1 0 01-1-1v-1a1 1 0 112 0v1a1 1 0 01-1 1zM4.95 15.05l-.707.707a1 1 0 001.414 1.414l.707-.707a1 1 0 00-1.414-1.414zM1 10a1 1 0 011-1h1a1 1 0 110 2H2a1 1 0 01-1-1zM15.05 4.95l.707-.707a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414zM19 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 4.95l-.707-.707a1 1 0 00-1.414 1.414l.707.707a1 1 0 001.414-1.414z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                                    </button>

                                    <!-- Nút Đăng xuất -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <!-- SỬA DARKMODE: Thêm class dark:text-gray-400 dark:hover:text-white -->
                                        <button type="submit" class="text-gray-500 hover:text-red-600 dark:text-gray-400 dark:hover:text-white" title="Đăng xuất">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" /></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </header>
                    
                    <!-- Main Content -->
                    <!-- SỬA DARKMODE: Thêm class dark:bg-gray-800 -->
                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 dark:bg-gray-800 p-4 sm:p-6 lg:p-8">
                        
                        <!-- Hiển thị thông báo (nếu có) -->
                        @if (session('success'))
                            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Thành công!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Lỗi!</strong>
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif

                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>

        <!-- Modal Thông báo (Toast) -->
        <div id="message-modal" class="fixed bottom-5 right-5 z-[100] transition-all duration-300 ease-out opacity-0 transform scale-95 pointer-events-none">
            <div id="message-content" class="p-4 rounded-lg shadow-lg text-white max-w-sm"></div>
        </div>

        <!-- Modal (Chung) -->
        @stack('modals')

        <!-- Scripts (Chung) -->
        @stack('scripts')
        <script>
            // JS chung cho Toast Message (vì không còn app.js SPA)
            function showMessage(message, type = 'success') {
                const messageModal = document.getElementById('message-modal');
                const messageContent = document.getElementById('message-content');
                if (messageModal && messageContent) {
                    messageContent.textContent = message;
                    messageContent.className = type === 'success' 
                        ? 'p-4 rounded-lg shadow-lg text-white bg-green-600'
                        : 'p-4 rounded-lg shadow-lg text-white bg-red-600';
                    messageModal.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                    setTimeout(() => {
                        messageModal.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                    }, 3000);
                }
            }

            // JS cho Nút DarkMode
            const themeToggleBtn = document.getElementById('theme-toggle');
            const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

            // Hiển thị icon đúng khi tải trang
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                themeToggleLightIcon.classList.remove('hidden');
            } else {
                themeToggleDarkIcon.classList.remove('hidden');
            }

            themeToggleBtn.addEventListener('click', function() {
                // toggle icons
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');

                // if set via local storage previously
                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }
                // if NOT set via local storage previously
                } else {
                    if (document.documentElement.classList.contains('dark')) {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    }
                }
            });
        </script>
    </body>
</html>