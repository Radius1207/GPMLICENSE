<x-guest-layout>
    <!-- Lấy từ Modal Auth trong gpmlicense.html -->
    <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-2xl relative">
        <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Đăng Nhập</h3>
        
        <!-- Hiển thị lỗi (nếu có) -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-input-error :messages="$errors->all()" class="mb-4 p-4 bg-red-100 text-red-700 rounded-md" />


        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email -->
            <div>
                <label for="login-email" class="block text-sm font-medium text-gray-600 mb-2">Email</label>
                <input type="email" id="login-email" name="email" :value="old('email')" required autofocus
                       class="w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Mật khẩu -->
            <div>
                <label for="login-password" class="block text-sm font-medium text-gray-600 mb-2">Mật khẩu</label>
                <input type="password" id="login-password" name="password" required
                       class="w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <!-- Ghi nhớ đăng nhập -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <button type="submit" id="login-submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-md text-base font-medium">Đăng Nhập</button>
        </form>
        <p class="mt-6 text-center text-sm text-gray-500">
            Chưa có tài khoản? 
            <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:underline">Đăng Ký Ngay</a>
        </p>
    </div>
</x-guest-layout>